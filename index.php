<?php

require __DIR__ . '/vendor/autoload.php';

use App\CarrinhoDeCompras;
use App\Item;
use App\Pedido;
use App\EmailService;

$pedido = new Pedido();
//-------------------------
$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Macbook');
$item1->setValor(10000);

$item2->setDescricao('Iphone 15 Pro Max');
$item2->setValor(8000);
//------------------------------------------
echo '<h4>Pedido</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';
//-------------------------------------------
$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);
//----------------------------------------------
echo '<h4>Pedido com itens</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';
//-----------------------------------------------
echo '<h4>Itens do carrinho</h4>';
echo '<pre>';
print_r($pedido->getCarrinhoCompra()->getItens());
echo '</pre>';
//-----------------------------------------------
echo '<h4>Valor do pedido</h4>';
echo '<pre>';
$total = 0;
foreach ($pedido->getCarrinhoCompra()->getItens() as $key => $item) {
  $total += $item->getValor();
}
echo $total;
//---------------------------------------------------------
echo '<h4>Carrinho está válido ? </h4>';
echo $pedido->getCarrinhoCompra()->validarCarrinho();
//---------------------------------------------------------
echo '<h4>Status do pedido: </h4>';
echo $pedido->getStatus();
//---------------------------------------------------------
echo '<h4>Confirmar pedido!</h4>';
echo $pedido->confirmar();
//---------------------------------------------------------
echo '<h4>Status do pedido após confirmação: </h4>';
echo $pedido->getStatus();
//---------------------------------------------------------
echo '<h4>E-mail: </h4>';
if ($pedido->getStatus() === 'Confirmado') {
  echo EmailService::dispararEmail();
}
;