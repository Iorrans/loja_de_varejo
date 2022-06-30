<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Loja de varejo - Novo produto</title>
</head>
<body>
    <form action="../controller/Fornecedor.php" method="POST">
    <section class="mx-4 mt-4 columns-3">
        <article>
            <label for="nome" class="cursor-pointer">Nome</label>
            <input type="text" name="nome" id="nome" class="border border-blue-400" required>
        </article>
        <article>
            <label for="cnpj" class="cursor-pointer">Cnpj</label>
            <input type="text" name="cnpj" min=14 max=14 id="cnpj" class="border border-blue-400" required>
        </article>
        <article>
            <label for="logradouro" class="cursor-pointer">Logradouro</label>
            <input type="text" name="logradouro" id="logradouro" class="border border-blue-400" required>
        </article>
    </section>
    <section class="mx-4 mt-4 columns-3">
    <article >
            <label for="cidade" class="cursor-pointer">Cidade</label>
            <input type="text" name="cidade" id="cidade" class="border border-blue-400" required>
        </article>
        <article>
            <label for="numerodacasa" class="cursor-pointer">Numero da casa</label>
            <input type="number" name="numerodacasa" min=1 id="numerodacasa" class="border border-blue-400" required>
        </article>
        <article>
            <label for="bairro" class="cursor-pointer">Bairro</label>
            <input type="text" name="bairro" id="bairro" class="border border-blue-400" required>
        </article>
    </section>
    <section class="mx-4 mt-4 columns-1">
       <article class="flex justify-center">
            <label for="cep" class="cursor-pointer">Cep</label>
            <input type="text" name="cep" id="cep" class="border border-blue-400" required>
        </article>
        <article class="flex justify-center mt-2">
        <button type="submit" class="p-3 m-10 bg-blue-400 rounded">Cadastrar</button>
        </article>
    </section>
    </form>
    </body>
</html>