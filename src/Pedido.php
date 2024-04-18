<?php
namespace App;

use App\CarrinhoDeCompras;

class Pedido
{
  private $status;
  private $carrinhoCompra;
  private $valorPedido;

  public function __construct()
  {
    $this->status = 'aberto';
    $this->carrinhoCompra = new CarrinhoDeCompras();
    $this->valorPedido = 0;
  }

  public function getCarrinhoCompra()
  {
    return $this->carrinhoCompra;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatus(string $status)
  {
    $this->status = $status;
  }

  public function confirmar()
  {
    if ($this->carrinhoCompra->validarCarrinho()) {
      $this->setStatus('Confirmado');
      return true;
    }
    return false;
  }

}