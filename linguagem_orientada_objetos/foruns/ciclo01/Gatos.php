<?php

require_once('Felinos.php');

class Gatos extends Felinos
{
  private string $altura          = "23 – 25 cm";
  private string $velocidade      = "48 km/h";
  private string $expectativaVida = "12 – 18 anos";

  public function getDadosGato(): String {
    $dados = $this->getDadosFelino();

    $dados .= "Altura: " . $this->altura . "<br>";
    $dados .= "Velocidade: " . $this->velocidade . "<br>";
    $dados .= "Expectativa de vida: " . $this->expectativaVida . "<br>";

    return $dados;
  }
}