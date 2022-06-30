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
    <form action="../controller/Product.php" method="POST">
        <section class="mx-4 mt-4 columns-3">
            <article>
                <label for="barCode" class="cursor-pointer">Código de barra</label>
                <input type="number" name="barCode" id="barCode" class="border border-blue-400" required>
            </article>
            <article>
                <label for="nome" class="cursor-pointer">Nome do produto:</label>
                <input type="text" id="nome" name="nome" class="border border-blue-400" required>
            </article>
            <article>
                <label for="Fornecedor">Fornecedor</label>
                <select class="border border-blue-400" required>
                    <option value="1">Fornecedor 1</option>
                    <option value="2">Fornecedor 2</option>
                    <option value="3">Fornecedor 3</option>
                </select>
            </article>
        </section>  
        <section class="mx-4 mt-4 columns-2">
            <article>
                <label for="quntidade" class="cursor-pointer">Quantidade em estoque:</label>
                <input type="number" id="quantidade" name="quantidade" min=1 class="border border-blue-400" required>
            </article>
            <article>
                <label for="custo">Custo de aquisição</label>
                <input type="number" name="custo" id="custo" min=1 max=10000 class="border border-blue-400" required>
            </article>
      
        </section>
        <article class="flex justify-center">
            <button type="submit" class="p-3 m-10 bg-blue-400 rounded">Cadastrar</button>
        </article>
    </form>
</body>

</html>