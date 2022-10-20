<?php

class Felinos
{
  private string $familia         = "Felídeos";
  private string $alimentacao     = "Carnívoros";
  private int    $quantidadePatas = 4;

  public function getDadosFelino(): String { 
    $dados = "Família: " . $this->familia . "<br>";
    $dados .= "Alimentação: " . $this->alimentacao . "<br>";
    $dados .= "Quantidade de patas: " . $this->quantidadePatas . "<br>";

    return $dados;
  }
}