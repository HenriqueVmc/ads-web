<?php
    class Materiais{

        private $_id;
        private $_nome;
        private $_descricao;
        private $_dataEnvio;
        private $_arquivo;                
        private $_usuarioId;

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

        function getDescricao(){
            return $this->_descricao;
        }
        function setDescricao($descricao){
            $this->_descricao = $descricao;
        }

        function getDataEnvio(){
            return $this->_dataEnvio;
        }
        function setDataEnvio($dataEnvio){
            $this->_dataEnvio = $dataEnvio;
        }

        function getArquivo(){
            return $this->_arquivo;
        }
        function setArquivo($arquivo){
            $this->_arquivo = $arquivo;
        }

        function getUsuarioId(){
            return $this->_usuarioId;
        }
        function setUsuarioId($usuario){
            $this->_usuarioId = $usuario;
        }
    }
?>