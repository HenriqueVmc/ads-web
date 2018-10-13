<?php
    class Usuarios{

        private $_id;
        private $_nome;
        private $_cep;
        private $_email;
        private $_usuario;        
        private $_senha;
        private $_perfilId;

        function __construct(){}       

	    public function getId(){
	    	return $this->_id;
        }
        public function setId($id){
	    	$this->_id = $id;
        }
        
        public function getNome(){
	    	return $this->_nome;
        }
        public function setNome($nome){
	    	$this->_nome = $nome;
        }
        
        public function getCep(){
	    	return $this->_cep;
        }
        public function setCep($cep){
	    	$this->_cep = $cep;
        }
        
        public function getEmail(){
	    	return $this->_email;
        }
        public function setEmail($email){
	    	$this->_email = $email;
        }
        
        public function getUsuario(){
	    	return $this->_usuario;
        }
        public function setUsuario($usuario){
	    	$this->_usuario = $usuario;
        }
        
        public function getSenha(){
	    	return $this->_senha;
        }
        public function setSenha($senha){
	    	$this->_senha = $senha;
        }
        
        public function getPerfilId(){
	    	return $this->_perfilId;
        }
        public function setPerfilId($perfilId){
	    	$this->_perfilId = $perfilId;
        }
    }
    
?>

