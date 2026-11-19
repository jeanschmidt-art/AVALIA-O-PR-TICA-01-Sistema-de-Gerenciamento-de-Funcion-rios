<?php 


       class Funcionários {

        public $Nome;
        public $Salario;
        public $Email;

        public function none(){
            echo "Seu Nome";

        }

        public function salario(){
              echo "Seu Salario";

        }

        public function email(){
            echo "Seu Email";
        }
        function calcularBonus(){
            
           if  ($_POST['salario'] >10000) {
                $bonus = $_POST['salario'] * 0.10;
                echo "O bônus do funcionário é: " . $bonus;
                {
                } {
                    echo "O funcionario não tem direito a bônus.";
                    return;
                }
            }

            if  ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $this->Nome = $_POST['nome'];
                    $this->Salario = $_POST['salario'];
                    $this->Email = $_POST['email'];
                    $this->calcularBonus();

                }
            }

        }