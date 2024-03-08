<?php
class Aluno {
    public $nome;
    public $curso;
    public $matricula;

    public function __construct($nome, $curso, $matricula) {
        $this->nome = $nome;
        $this->curso = $curso;
        $this->matricula = $matricula;
    }

}
    ?>