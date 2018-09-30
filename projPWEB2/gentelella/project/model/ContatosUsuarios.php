<?php
    class ContatosUsuarios{

        private $_id;
        private $_contato;              
        private $_usuarioId;

        function __construct(){}
            
        function getId(){
            return $this->_id;
        }
        function setId($id){
	    	$this->_id = $id;
        }
        
        function getContato(){
            return $this->_contato;
        }
        function setContato($contato){
            $this->_contato = $contato;
        }

        function getUsuarioId(){
            return $this->_usuarioId;
        }
        function setUsuarioId($usuario){
            $this->_usuarioId = $usuario;
        }
    }
?>