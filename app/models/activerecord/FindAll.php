<?php

namespace app\models\activerecord;

use app\models\connection\Connection;
use app\interfaces\ActiveRecordInterface;
use app\interfaces\ActiveRecordExecuteInterface;



class FindAll implements ActiveRecordExecuteInterface
{

  public function __construct(
    private array $where = [],
    private string|int $limit = '',
    private string|int $offset = '',
    private string $fields = '*',
  ){ 
  }

  public function execute(ActiveRecordInterface $activeRecordInterface)
  {
    try {
      $query = $this->createQuery($activeRecordInterface);
      $connection = Connection::connect();
      $prepare = $connection->prepare($query);
      $prepare->execute($this->where);
      
      return $prepare->fetchAll();

    } catch (\Throwable $th) {
      formatException($th);
    } 
  }

  private function createQuery(ActiveRecordInterface $activeRecordInterface)
  {
    if(count($this->where)>1){
      throw new \Exception('No where so pode passar 1 indice');
    }

    $where = array_keys($this->where);
    $sql = "select {$this->fields} from {$activeRecordInterface->getTable()} ";
    $sql.= (!$this->where)?'': "where {$where[0]} = :{$where[0]} ";

    // Adiciona cláusulas LIMIT e OFFSET, se fornecidas
    $sql.= (!$this->limit)?'': "limit {$this->limit}";
    $sql.= ($this->offset != '') ?  " offset {$this->offset}" : "";

    return $sql;
  }
}