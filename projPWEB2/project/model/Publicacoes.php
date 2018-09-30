<?php
    class Publicacoes{

        private $_id;
        private $_assunto;      
        private $_descricao;  
        private $_dataPublicacao;
        private $_usuarioId;

        function __construct(){}
            
        function getId(){
            return $this->_id;
        }
        function setId($id){
	    	$this->_id = $id;
        }
        
        function getAssunto(){
            return $this->_assunto;
        }
        function setAssunto($assunto){
            $this->_assunto = $assunto;
        }
    
        function getDescricao(){
            return $this->_descricao;
        }
        function setDescricao($descricao){
            $this->_descricao = $descricao;
        }

        function getDataPublicacao(){
            return $this->_dataPublicacao;
        }
        function setDataPublicacao($dataPublicacao){
            $this->_dataPublicacao = $dataPublicacao;
        }

        function getUsuarioId(){
            return $this->_usuarioId;
        }
        function setUsuarioId($usuario){
            $this->_usuarioId = $usuario;
        }
    }
?>