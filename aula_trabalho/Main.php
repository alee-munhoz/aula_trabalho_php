<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Produtos e Pagamentos</title>
    <link rel="stylesheet" href="style.css"> <!-- Link para o CSS -->
</head>
<body>
    <div class="container">
        <h1>Gerenciamento de Produtos</h1>

        <?php
        // Código para Exercício 01
        require_once 'Produto.php';

        $eletronico = new Eletronico("Smartphone", 1500.00, 8);
        $alimento = new Alimento("Arroz", 5.00, 4);
        ?>

        <div class="product">
            <h2>Produto: <?php echo $eletronico->getNome(); ?></h2>
            <p>Preço: R$<?php echo $eletronico->getPreco(); ?></p>
            <p>Quantidade: <?php echo $eletronico->getQuantidade(); ?></p>
            <p>Categoria: <?php echo $eletronico->getCategoria(); ?></p>
        </div>

        <div class="product">
            <h2>Produto: <?php echo $alimento->getNome(); ?></h2>
            <p>Preço: R$<?php echo $alimento->getPreco(); ?></p>
            <p>Quantidade: <?php echo $alimento->getQuantidade(); ?></p>
            <p>Categoria: <?php echo $alimento->getCategoria(); ?></p>
        </div>

        <p>Total de produtos criados: <?php echo Produto::getTotalProdutos(); ?></p>

        <h1>Métodos de Pagamento</h1>

        <?php
        // Código para Exercício 02
        require_once 'Pagamento.php';

        use PagamentoSistema\CartaoCredito;
        use PagamentoSistema\Boleto;

        $cartao = new CartaoCredito();
        $boleto = new Boleto();
        ?>

        <div class="payment">
            <h2>Pagamento via Cartão de Crédito</h2>
            <p><?php echo $cartao->processarPagamento(12000.00); ?></p>
        </div>

        <div class="payment">
            <h2>Pagamento via Boleto</h2>
            <p><?php echo $boleto->processarPagamento(20.00); ?></p>
        </div>
    </div>
    
    <footer>
        &copy; <?php echo date("Y"); ?> Gerenciamento de Produtos
    </footer>
</body>
</html>
