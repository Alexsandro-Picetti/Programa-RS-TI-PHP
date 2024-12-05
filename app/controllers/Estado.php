<?php

Class Estado extends controller{
    public function getEstados() {
        $estados = $this->model("Estados");

        $estadosData = $estados->getEstados();
        return $estadosData;
    }
}<?php
class Estado extends Controller {
    public function getEstados() {
        $estados = $this->model("Estados");

        $estadosData = $estados->getEstados();

        return $estadosData;
    }
}