<?php
    
    //include_once '/envelhecimentoativo/project/model/profissionais.php';
    //include_once '/envelhecimentoativo/project/DAO/profissionaisDAO.php';

    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\model\Profissionais.php';
    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\DAO\profissionaisDAO.php';

    class ProfissionaisController{

		function __construct(){    
        }

        public function salvar($profissional){

            $profissionalDAO = new profissionaisDAO();
            $ret = $profissionalDAO->insert($profissional);

            return $ret;
        }        

        public function editar($profissional){

            $profissionalDAO = new profissionaisDAO();
            $ret = $profissionalDAO->update($profissional);

            return $ret;
        }    

        public function deletar($cod){
            
            $profissionalDAO = new profissionaisDAO();
            $profissionalDAO->delete($cod);
        }

        public function buscarTodos(){
            $retorno = [];

            $profissionalDAO = new profissionaisDAO();
            $profissionais = $profissionalDAO->findAll();
            
            foreach($profissionais as $registro){

                $profissional = new profissionais();
                $profissional->setId($registro['Id']);
                $profissional->setCurso($registro['Curso']);
                $profissional->setInstituicao($registro['Instituicao']);
                $profissional->setUsuarioId($registro['UsuarioId']);

                $retorno[] = $profissional;
            }
    
            return $retorno;
        }

        public function buscarPorUsuarioId($cod){

            $profissionalDAO = new profissionaisDAO();
            $registro = $profissionalDAO->findByUserId($cod);
            //die(var_dump($registro));
            $profissional = new Profissionais();
            $profissional->setId($registro['Id']);
            $profissional->setCurso($registro['Curso']);
            $profissional->setInstituicao($registro['Instituicao']);
            $profissional->setUsuarioId($registro['UsuarioId']);  

            return $profissional;
        }
    }
?>