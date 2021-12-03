<?php
    //classe funcionario
    class Funcionario {

        //atributos das classes
        public $nome;
        public $cargo;
        public $salario;
        public $iddepart;

        //metodos da classe funcionario
        function setClass ($nome,$cargo,$salario,$iddepart){
            $this->nome = $nome;
            $this->cargo = $cargo;
            $this->salario = $salario;
            $this->depart = $iddepart;
        }

        function vender(){

        }

        function comprar(){

        }

        function exibir(){
            echo "nome do funcionario {$this->nome}<br>";
            echo "trabalha como {$this->cargo}<br>";
            echo "recebe o salario de {$this->salario}<br>";
            echo "no departamento {$this->depart}<br>";
        }
    }