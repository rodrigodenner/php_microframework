<?php

namespace app\models\activerecord;

use app\models\connection\Connection;
use app\interfaces\ActiveRecordInterface;
use app\interfaces\ActiveRecordExecuteInterface;



class FindBy implements ActiveRecordExecuteInterface
{
    public function __construct(private string $field, private string|int $value, private string $fields = '*') 
    {
      
    }
    
    public function execute(ActiveRecordInterface $activeRecordInterface)
    {
     try {
        $query = $this->createQuery($activeRecordInterface);
        $connection = Connection::connect();
        $prepare = $connection->prepare($query);
        $prepare->execute([
          $this->field => $this->value
        ]);
        return $prepare->fetch();

     } catch (\Throwable $th) {
      formatException($th);
     } 
    }
      
    private function createQuery(ActiveRecordInterface $activeRecordInterface)
    {
      $sql = "select {$this->fields} from {$activeRecordInterface->getTable()} ";
      $sql .= "where {$this->field} = :{$this->field}";
      return $sql;
      
    }
}