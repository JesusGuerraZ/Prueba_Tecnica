<?php
// Definimos la clase
class Hora
{

    // Atributos
    private int $hora;
    private int $minutos;
    private int $segundos;

    // Constructor
    public function __construct($hora = 0, $minutos = 0, $segundos = 0)
    {
        $this->hora = $hora;
        $this->minutos = $minutos;
        $this->segundos = $segundos;
    }

    //Getters y Setters
    public function getHora()
    {
        // Devolvemos un atributo
        return $this->hora;
    }

    public function setHora($hora)
    {
        //Le damos un valor a un atributo
        //en este caso agregamos una condicion para verificar que si hora es mayor que 24 
        //se establezca como 0
        if ($hora <= 24) {
            $this->hora = $hora;
        } else {
            $this->hora = 0;
        }
    }

    public function getMinutos()
    {
        // Devolvemos un atributo
        return $this->minutos;
    }

    public function setMinutos($minutos)
    {
        //Le damos un valor a un atributo
        //Se realiza la condicion para verifica el número ingresado
        if ($minutos <= 60) {
            $this->minutos = $minutos;
        } else {
            $this->minutos = 0;
        }
    }

    //Le damos un valor a un atributo
    public function getSegundos()
    {
        // Devolvemos un atributo
        return $this->segundos;
    }

    public function setSegundos($segundos)
    {
        //Le damos un valor a un atributo
        //Se realiza la condicion para verifica el número ingresado
        if ($segundos <= 60) {
            $this->segundos = $segundos;
        } else {
            $this->segundos = 0;
        }
    }

    //Metodos
    public function getHoras()
    {
        $info = "<h1>Primer ejercicio con POO</h1>";
        $info .= "<br/><label>Hora en formato ''horas:minutos:segundos''.</label><br/><input type='text' name='hora_procesada' value='" . $this->getHora() . " : " . $this->getMinutos() . " : " . $this->getSegundos() . "' disabled>";

        return $info;
    }

    public function imprimirHora()
    {
        $info = "<h4>Hora como string</h4>";
        $info .= "<input type='text' name='hora_procesada' value='" . strval($this->getHora()) . " : " . strval($this->getMinutos()) . " : " . strval($this->getSegundos()) . "' disabled>";

        return $info;
    }
}
