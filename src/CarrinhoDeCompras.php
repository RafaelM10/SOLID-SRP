<?php
namespace App;

use App\Item;

class CarrinhoDeCompras
{
  private $itens;

  public function __construct()
  {
    $this->itens = [];
  }

  public function getItens()
  {
    return $this->itens;
  }

  public function setAdicionarItem(Item $item)
  {
    array_push($this->itens, $item);
    return true;
  }

  public function validarCarrinho()
  {
    return count($this->itens) > 0;
  }
}