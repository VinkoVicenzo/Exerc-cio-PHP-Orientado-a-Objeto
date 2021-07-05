<?php
	class Pessoa{
		
		private $nome;
        private $dataNascimento;
		private $cpf;
		private $rg;

        public function __construct($nome, $dataNascimento, $cpf, $rg){
            $this->nome=$nome;
            $this->dataNascimento=$dataNascimento;
            $this->cpf=$cpf;
            $this->rg=$rg;
        } 
		
		public function setDataNascimento($dataNascimento){
			$this->dataNascimento=$dataNascimento;
		}
		
		public function getDataNascimento(){
			return $this->dataNascimento;
		}
		
		public function setNome($nome){
			$this->nome=$nome;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function setCpf($cpf){
			$this->cpf=$cpf;
		}
		
		public function getCpf(){
			return $this->cpf;
		}
		
		public function setRg($rg){
			$this->rg=$rg;
		}
		
		public function getRg(){
			return $this->rg;
		}
		
	}
	
	class Engenheiro extends Pessoa{
		
		private $crea;

		public function setCrea($crea){
			$this->crea=$crea;
		}
		
		public function getCrea(){
			return $this->crea;
		}	
	}

    class Medico extends Pessoa{

        private $crm;

        public function setCrm($crm){
            $this->crm=$crm;
        }

        public function getCrm(){
            return $this->crm;
        }
    }
?>