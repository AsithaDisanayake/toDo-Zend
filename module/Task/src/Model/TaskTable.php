<?php
    namespace Task\Model;

    use Zend\TableGateway\TableGatewayInterface;

    class TaskTable{
         
        protected $tableGateway;

        function __construct(TableGatewayInerface $tableGateway){
            $this->tableGateway = $tableGateway;
        }

        public function fetchAll(){
            return $this->tableGateway->select();
        }
    }


?> 