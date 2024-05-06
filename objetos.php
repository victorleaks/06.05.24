<?php
class Empresa {
    public $endereco;
    public $quantidadefuncionarios;

    function __construct($endereco,$quantidadefuncionarios) {
        $this->endereco = $endereco;
        $this->quantidadefuncionarios = $quantidadefuncionarios;
    }

    function get_endereco() {
        return $this->endereco;
    }

    function get_quantidadefuncionarios() {
        return $this->quantidadefuncionarios;
    }
}

$empresa = new Empresa("Rua serra negra", "3");

echo "O endereço da empresa é: " .$empresa->get_endereco();

echo "<br/>";

echo "O total de funcionários é: " .$empresa->get_quantidadefuncionarios();
?>