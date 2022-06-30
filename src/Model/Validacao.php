<?php
//validação dos atributos da class "Product.php"
namespace APP\Model;

class Validacao
{
    public static function validarNome(string $nome)
    {
        return mb_strlen($nome) > 4;
    }

    public static function validarNumero(int|float $valor)
    {
        return $valor > 0;
    }
    public static function validarBarCode(string $barCode): bool
    {
        return mb_strlen($barCode) == 13 && mb_substr($barCode, 0, 3) == "789";
    }


    public static function validarCnpjfornecedor(int $cnpj)
    {
        return mb_strlen($cnpj) == 14;
    }

    public static function validarLograDouro(string $logradouro)
    {
        return mb_strlen($logradouro) >= 3;
    }

    public static function validarnumeroCasa(string $numeroCasa)
    {
        return mb_strlen($numeroCasa) >= 1;
    }

    public static function validarBairro(string $bairro)
    {
        return mb_strlen($bairro) >= 5;
    }

    public static function validarCidade(string $cidade)
    {
        return mb_strlen($cidade) >= 5;
    }

    public static function validarcep(string $cep)
    {
        return mb_strlen($cep) == 9;
    }
}
