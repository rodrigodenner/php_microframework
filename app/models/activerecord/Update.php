<?php

namespace app\models\activerecord;

use app\models\connection\Connection;
use app\interfaces\ActiveRecordInterface;
use app\interfaces\ActiveRecordExecuteInterface;



class Update implements ActiveRecordExecuteInterface
{
    public function __construct(private string $field, private string $value)
    {
      
    }

    public function execute(ActiveRecordInterface $activeRecordInterface)
    {
      try {
        $query = $this->createQuery($activeRecordInterface);
        $connection = Connection::connect();

        $attributes = array_merge($activeRecordInterface->getAttributes(),[
          $this->field => $this->value
        ]); 
        
        $prepare = $connection->prepare($query);
        $prepare->execute($attributes);

        return $prepare->rowCount();

      } catch (\Throwable $th) {
        formatException($th);
      }
      
    }
    
    private function createQuery(ActiveRecordInterface $activeRecordInterface)
    {

      if(array_key_exists('id',$activeRecordInterface->getAttributes())){
        throw new \Exception("O campo id não pode ser passdo para o update");
        
      }
      $sql = "UPDATE {$activeRecordInterface->getTable()} set ";
      
      foreach($activeRecordInterface->getAttributes() as $key => $value){

         $sql.= "{$key} = :{$key},"; 
      }
      $sql = rtrim($sql,',');
      $sql.= " Where {$this->field} = :{$this->field}";
      return $sql;
    }
}