<?php
use PHPUnit\Framework\TestCase;

require_once './src/Item.php';

class ItemTest extends TestCase
{
  public function testEstadoInicialItem()
  {
    $item = new \App\Item();

    $item->getDescricao() === '';
    $item->getValor() === 0;

    //asserções do PHPUNIT
    //phpunit.de -> aprofundar nos testes;
    $this->assertEquals('', $item->getDescricao());
    $this->assertEquals(0, $item->getValor());
  }

  public function testGeteSetDescricao()
  {
    $descricao = 'Cadeira de plástico';

    $item = new \App\Item();
    $item->setDescricao($descricao);
    $this->assertEquals($descricao, $item->getDescricao());
  }

  public function testItemValido()
  {
    $item = new \App\Item();
    //submeter um item válido para o teste e retornar Ok;
    $item->setValor(55);
    $item->setDescricao('Cadeira de plástico');
    $this->assertEquals(true, $item->itemValido());

    //Submeter um item inválido para o teste e retornar false para (descricao & valor);
    $item->setValor(0);
    $item->setDescricao('');
    $this->assertEquals(false, $item->itemValido());

    //retornar false caso todos os atributos estejam inconsistentes
    $item->setValor(0);
    $item->setDescricao('');
    $this->assertEquals(false, $item->itemValido());
  }

  /**
   * @dataProvider dataValores
   */
  public function testGeteSetValor($valor)
  {
    $item = new \App\Item();
    $item->setValor($valor);
    $this->assertEquals($valor, $item->getValor());
  }
  //método provedor de dados
  public static function dataValores()
  {
    return [
      [100],
      [-2],
      [0]
    ];
  }
}