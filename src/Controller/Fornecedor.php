<?php
namespace APP\Controller;

use APP\Model\Validacao;
use APP\Model\Provedor;
use APP\Utils\Redirect;

require_once "../../vendor/autoload.php";

if(empty($_POST)){
    Redirect::redirect(
        type:"error",
        message:"Requisição inválida!!!"
    );
}

$nome = $_POST["nome"];
$cnpj = $_POST["cnpj"];
$logradouro = $_POST["logradouro"];
$cidade = $_POST["cidade"];
$numeroCasa = $_POST["numerodacasa"];
$bairro = $_POST["bairro"];
$cep = $_POST["cep"];


$error = array();

if(!Validacao::validarNome($nome))
{
    array_push($error,"O nome do fornecedor deve conter ao menos 5 caracteres entre letras e números!!");
}

if(!Validacao::validarCnpjfornecedor($cnpj))
{
    array_push($error,"O cnpj deve conter 14 digitos!!");
}


if(!Validacao::validarLograDouro($logradouro))
{
    array_push($error,"O logradouro deve conter 3 digitos!!");
}

if(!Validacao::validarCidade($cidade))
{
    array_push($error,"A cidade deve conter 5 digitos!!");
}
if(!Validacao::validarnumeroCasa($numeroCasa))
{
    array_push($error,"O número da casa não pode ser negativo ou 0!!");
}
if(!Validacao::validarBairro($bairro))
{
    array_push($error,"O bairro deve conter ao menos 5 digitos!!");
}

if(!Validacao::validarcep($cep))
{
    array_push($error,"O cep deve conter 9 digitos!!");
}

if($error)
{
    Redirect::redirect(message:$error,
    type:"warining"
);
}else{
    $fornecedor = new Provedor(
        nome: $fornecedorNome,
        cnpj: $fornecedorCnpj,
        endereco: $fornecedorEndereco
    );

    Redirect::redirect(
        message:"fornecedor cadastrado com sucesso!!"
    );
}















?>