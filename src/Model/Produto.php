<?php
namespace APP\Model;
class Produto
{
    private int $barCode;
    private string $nome;
    private float $preco;
    private provedor $fornecedor; //"Provedor" sera criada
    private bool $estaAtivo;
    private int $quantidade; 
    
    public function __construct(
        float $custo,
        float $tributos,
        float $custoFixo,
        string $nome,
        int $quantidade,
        provedor $fornecedor,
        int $barCode,
        float $lucro = 0.2,
        bool $estaAtivo = true

    )
    {
         $this ->barCode = $barCode;
         $this ->nome = $nome;
         $this ->quantidade = $quantidade;   
         $this ->provedor = $fornecedor;   
         $this ->estaAtivo = $estaAtivo;   

        self::calcularPrecoVenda(
            tributo: $tributos,
            custo: $custo,
            lucro: $lucro,
            custoFixo: $custoFixo

        );
    

    }

  /**
   * Essa função irácalcular o preço de vnda do produto com base nos custos fixos, tributos e custo de aquisição
   * @param float $custo custo de aquisição
   * @param float $tributo tributos estaduais e 
   * municipais
   * @param float $custoFixo custos operacionais
   * @param float $lucro percentual de margem de lucro
   * @return void
   */

    private function calcularPrecoVenda(float $custo,float $tributo,float $custoFixo,float
    $lucro=0.4):void
    {
        $this->preco =($custo+$tributo+$custoFixo)/(1-$lucro);
    }

/**
 *  Essa função irá calcular a diferença entre o preço de venda e o custo de aquisição
 * @param float $custo de aquisição
 * @return float
 */

    public function calcularMarkup(float $custo):float
    {
        return $this->preco / $custo;
    }

    public function vendaAvista(){

    }

}