<?php

namespace src\Entity;

class AtendimentoEntity
{
    private int $id_atendimento;

    private string $dia;
    private string $hora;
    private string $especialidade;

    /**
     * @param string $dia
     * @param string $hora
     * @param string $especialidade
     */
    public function __construct(string $dia, string $hora, string $especialidade)
    {
        $this->dia = $dia;
        $this->hora = $hora;
        $this->especialidade = $especialidade;
    }

    public function getIdAtendimento(): int
    {
        return $this->id_atendimento;
    }


    public function getDia(): string
    {
        return $this->dia;
    }

    public function setDia(string $dia): void
    {
        $this->dia = $dia;
    }

    public function getHora(): string
    {
        return $this->hora;
    }

    public function setHora(string $hora): void
    {
        $this->hora = $hora;
    }

    public function getEspecialidade(): string
    {
        return $this->especialidade;
    }

    public function setEspecialidade(string $especialidade): void
    {
        $this->especialidade = $especialidade;
    }


}