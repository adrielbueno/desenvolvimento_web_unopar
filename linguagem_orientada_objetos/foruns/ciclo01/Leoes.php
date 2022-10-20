<?php

require_once('Felinos.php');

class Leoes extends Felinos
{
  private string $altura          = "1,2 m";
  private string $velocidade      = "80 km/h";
  private string $expectativaVida = "15 – 16 anos";

  public function getDadosLeao(): String {
    $dados = $this->getDadosFelino();

    $dados .= "Altura: " . $this->altura . "<br>";
    $dados .= "Velocidade: " . $this->velocidade . "<br>";
    $dados .= "Expectativa de vida: " . $this->expectativaVida . "<br>";

    return $dados;
  }
}