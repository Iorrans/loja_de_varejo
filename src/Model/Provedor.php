<?php
namespace APP\Model;
class Provedor{
    private int $cnpj;
    private string $nome;
    private endereco $endereco;

    public function __construct(
        int $cnpj,
        string $nome,
        endereco $endereco
    )
    {
        $this ->cnpj = $cnpj;
        $this ->nome = $nome;
        $this ->endereco = $endereco;
    }
}