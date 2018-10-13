<?php
    class Perfis{

        private $_id;
        private $_nome;

        function __construct(){}
            
        function getId(){
            return $this->_id;
        }
        function setId($id){
	    	$this->_id = $id;
        }
        
        function getNome(){
            return $this->_nome;
        }
        function setNome($nome){
            $this->_nome = $nome;
        }
    }
?>