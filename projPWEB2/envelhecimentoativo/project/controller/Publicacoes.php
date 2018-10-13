<?php
    
    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\model\Publicacoes.php';
    include_once 'C:\xampp\htdocs\envelhecimentoativo\project\DAO\publicacoesDAO.php';
    
    //require_once ('C:\xampp\htdocs\envelhecimentoativo\project\model\publicacoes.php');
    //require_once ('C:\xampp\htdocs\envelhecimentoativo\project\DAO\publicacoesDAO.php');
    //require_once ('C:\xampp\htdocs\envelhecimentoativo\project\DAO\conexao.php');

    class PublicacoesController{

		function __construct(){    
        }

        public function salvar($publicacao){

            $publicacaoDAO = new publicacoesDAO();
            $ret = $publicacaoDAO->insert($publicacao);

            return $ret;
        }        

        public function editar($publicacao){

            $publicacaoDAO = new publicacoesDAO();
            $ret = $publicacaoDAO->update($publicacao);

            return $ret;
        }    

        public function deletar($cod){
            
            $publicacaoDAO = new publicacoesDAO();
            $publicacaoDAO->delete($cod);
        }

        public function buscarTodos(){
            $retorno = [];

            $publicacaoDAO = new publicacoesDAO();
            $publicacoes = $publicacaoDAO->findAll();
            
            foreach($publicacoes as $registro){

                $publicacao = new publicacoes();
                $publicacao->setId($registro['Id']);
                $publicacao->setAssunto($registro['Assunto']);
                $publicacao->setDescricao($registro['Descricao']);
                $publicacao->setDataEvento($registro['DataEvento']);
                $publicacao->setDataPublicacao($registro['DataPublicacao']);
                //$publicacao->setArquivo($registro['Arquivo']);              

                $retorno[] = $publicacao;
            }
    
            return $retorno;
        }

        public function buscarPorId($cod){

            $publicacaoDAO = new publicacoesDAO();
            $registro = $publicacaoDAO->findById($cod);
            
            $publicacao = new publicacoes();
            $publicacao->setId($registro['Id']);
            $publicacao->setAssunto($registro['Assunto']);
            $publicacao->setDescricao($registro['Descricao']);
            $publicacao->setDataEvento($registro['DataEvento']);
            $publicacao->setDataPublicacao($registro['DataPublicacao']);
            //$publicacao->setArquivo($registro['Arquivo']);      

            return $publicacao;
        }
    }
?>