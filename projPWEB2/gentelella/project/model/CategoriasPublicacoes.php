<?php
    class CategoriasPublicacoes{

        private $_id;
        private $_categoriaId;             
        private $_publicacaoId;

        function __construct(){}
            
        function getId(){
            return $this->_id;
        }
        function setId($id){
	    	$this->_id = $id;
        }
        
        function getCategoriaId(){
            return $this->_nome;
        }
        function setCategoriaId($nome){
            $this->_nome = $nome;
        }

        function getPublicacaoId(){
            return $this->_nome;
        }
        function setPublicacaoId($nome){
            $this->_nome = $nome;
        }
    }
?>