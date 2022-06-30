<?php
namespace APP\Controller;
require_once "../../vendor/autoload.php";

use APP\Model\Produto;
use APP\Model\Provedor;
use APP\Utils\Redirect;
//"use" para usar a class "validacao.php"
use APP\Model\Validacao;

if(empty($_POST)){
    Redirect::redirect(
        type:"error",
        message:"Requisição inválida!!!"
    );
}

$productNome = $_POST["nome"];
$productPreco = $_POST["preco"];
$productQuantidade = $_POST["quantidade"];
$productCusto = $_POST["custo"];
$productFornecedor = $_POST["fornecedor"];
$barCode = $_POST["barCode"];

$error = array();

if(!Validacao::validarNome($productNome))
{
    array_push($error,"O nome do produto deve conter ao menos 5 caracteres entre letras e números!!");
}

if(!Validacao::validarNumero($productQuantidade))
{
    array_push($error, "A quantidade deve ser superios ou igual à 1 unidade!!");
}

if(!Validacao::validarNumero($productCusto))
{
    array_push($error,"O custo de aquisição dev e ser superior ou igual à R$ 0.00");
}

if(!Validacao::validarBarCode($barCode))
{
    array_push($error,"O código de barra não é válido segundo nossos parâmetros!!");
}

if($error)
{
    Redirect::redirect(message:$error,
    type:"warining"
);
}else{
    $produto = new Produto(
        nome: $productNome,
        barCode: $barCode,
        custoFixo: 0.5,
        custo: $productCusto,
        tributos:0.75,
        quantidade:$productQuantidade,
        fornecedor: new Provedor($cnpj,$nome,$endereco)
    );

    Redirect::redirect(
        message:"produto cadastrado com sucesso!!"
    );
}


//**Comando para mostrar algo na tela "print ou echo"

//**print "<p>Nome do produto:$productNome</p>";
//**print "<p>Preço do produto:$productPreco</p>";
//**print "<p>Quantidade do produto:$productQuantidade</p>"; 
