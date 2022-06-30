<?php
namespace APP\Model;
class Venda
{
    private int $registro;
    private Cliente $cliente;
    private Funcionario $funcionario;
    private array $produtos;
    private float $total;

    public function calcularSubtotal():float
    {
       $subtotal =0; 
       foreach($this->produtos as $produto){
            $subtotal += self::calcularTotal($produto);
       }
       return $subtotal;
    }

    private function calcularTotal(produto $produto):float
    {
        return $produto->preco * $produto->quntidade;
    }
}