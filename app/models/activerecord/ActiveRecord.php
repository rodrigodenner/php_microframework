<?php

namespace app\models\activerecord;

use ReflectionClass;
use app\interfaces\ActiveRecordInterface;
use app\interfaces\ActiveRecordExecuteInterface;



abstract class ActiveRecord implements ActiveRecordInterface
{
    // Propriedade para armazenar o nome da tabela no banco de dados.
    protected $table = null;
    
    // Propriedade para armazenar os atributos do registro.
    protected $attributes = [];

    public function __construct()
    {
        // Se a propriedade $table não estiver definida, defina-a automaticamente
        // com o nome da classe em letras minúsculas.
      if (!$this->table) {
        $this->table = strtolower((new ReflectionClass($this))->getShortName());
      }
    }

    // Método para obter o nome da tabela.
    public function getTable()
    {
        return $this->table;
    }

    // Método mágico para definir valores de atributos.
    public function __set($attribute, $value)
    {
        // Define o valor do atributo correspondente.
        $this->attributes[$attribute] = $value;
    }

    // Método mágico para obter valores de atributos.
    public function __get($attribute)
    {
        // Retorna o valor do atributo correspondente.
        return $this->attributes[$attribute];
    }

    // Método para executar operações específicas no banco de dados, delegando
    // a execução para um objeto que implemente a interface ActiveRecordExecuteInterface.
    public function execute(ActiveRecordExecuteInterface $activeRecordExecuteInterface)
    {
        return $activeRecordExecuteInterface->execute($this);
    }    
}

