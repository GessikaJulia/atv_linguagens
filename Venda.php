<?php
class Venda{
    public $produto;
    public $valorFinal;
    public $numProd = 1;

    public function imprimir(){
        echo "<b>Venda no valor: </b>" . $this-> valorFinal . "<br>";
        for ($i=1; $i<$this->numProd; $i++){
            echo "<br>Produto: " . $this->produto[$i]->nome;
            echo "<br>Valor unidade: ". $this->produto[$i]->valor;
            echo "<br>Quantidade: " .  $this->produto[$i]->quantidade;
            echo "<br>Valor total: " .  $this->produto[$i]->calcular();
            echo "<br>";
        }
    }

    public function calcularV(){
        $this->valorFinal = 0;
        for ($i=1; $i<$this->numProd; $i++){
            $this->valorFinal +=  $this->produto[$i]->calcular();

        }
    }

    public function gerarP(){
        $p1= new Produto();
        $p1->id= 1;
        $p1->nome= "Coca Cola";
        $p1->valor= 10;
        $p1->quantidade=2;
        $this->numProd++;

        $p2= new Produto();
        $p2->id= 2;
        $p2->nome= "lapis";
        $p2->valor= 3;
        $p2->quantidade= 2;
        $this->numProd++;

        $p3= new Produto();
        $p3->id= 3;
        $p3->nome= "Motocicleta";
        $p3->valor= 2000;
        $p3->quantidade= 4;
        $this->numProd++;

        $p4= new Produto();
        $p4->id= 4;
        $p4->nome= "Salgado";
        $p4->valor= 2;
        $p4->quantidade= 5;
        $this->numProd++;

        $this->produto[1] = $p1;
        $this->produto[2] = $p2;
        $this->produto[3] = $p3;
        $this->produto[4] = $p4;

    }
}



?>