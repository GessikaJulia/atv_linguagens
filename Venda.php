<?php
class Venda{
    public $produto;
    public $valor;
    public $numProd;

    public function imprimir(){
        echo "Venda no valor: <br>" . $this-> valor;
        for ($i=0; $i<$this->numProd; $i++){
            echo "Produto: <br>" . $this->produtos[$i]->nome;
            echo "Valor unidade: <br>". $this->produtos[$i]->valor;
            echo "Quantidade: <br>" .  $this->produtos[$i]->quantidade;
            echo "Valor total: <br>" .  $this->produtos[$i]->valorT;
        }
    }

    public function calcularV(){
        $this->valor = 0;
        for ($i=0; $i<$this->numProd; $i++){
            $this->valor $this->produtos[$i]->valorT;

        }
    }

    public function gerarP(){
        new Produto();
        $p[1]->id = 1;
        $p[1]->nome = "Coca Cola";
        $p[1]->valor = 10;
        $p[1]->quantidade = 2;
        $p[1]->calcular();
        $this->numProd++;

        $p2= new Produto();
        $p2->id = 2;
        $p2->nome = "lapis";
        $p2->valor = 3;
        $p2->quantidade = 2;
        $p2->calcular();
        $this->numProd++;

        $p3= new Produto();
        $p3->id= 3;
        $p3->nome= "Motocicleta";
        $p3->valor= 2000;
        $p3->quantidade= 4;
        $p3->calcular();
        $this->numProd++;

        $p4= new Produto();
        $p4->id= 4;
        $p4->nome= "Salgado";
        $p4->valor= 2;
        $p4->quantidade= 5;
        $p4->calcular();
        $this->numProd++;

    }
}
?>