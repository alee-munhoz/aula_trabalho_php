<?php
namespace PagamentoSistema;

interface Pagamento {
    public function processarPagamento($valor);
}

class CartaoCredito implements Pagamento {
    public function processarPagamento($valor) {
        return "Pagamento de R$$valor via Cartão de Crédito processado com sucesso.";
    }
}

class Boleto implements Pagamento {
    public function processarPagamento($valor) {
        return "Pagamento de R$$valor via Boleto processado com sucesso.";
    }
}
?>
