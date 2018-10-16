<?php
    class Profissionais{

        private $_id;
        private $_curso;
        private $_instituicao;
        private $_usuarioId;

        function __construct(){}
            
        function getId(){
            return $this->_id;
        }
        function setId($id){
	    	$this->_id = $id;
        }

        function getCurso(){
            return $this->_curso;
        }
        function setCurso($curso){
            $this->_curso = $curso;
        }
        
        function getInstituicao(){
            return $this->_instituicao;
        }
        function setInstituicao($instituicao){
            $this->_instituicao = $instituicao;
        }

        function getUsuarioId(){
            return $this->_usuarioId;
        }
        function setUsuarioId($usuario){
            $this->_usuarioId = $usuario;
        }
    }
?>