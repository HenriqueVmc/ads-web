<?php
    class Categorias{

        private $_id;
        private $_nome;             
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
        
        function getUsuarioId(){
            return $this->_usuario;
        }
        function setUsuarioId($usuario){
            $this->_usuario = $usuario;
        }
    }
?>