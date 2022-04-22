<?php
class Controller
{
    protected $contenedor;

    public function __CONSTRUCT()
    {
        $this->contenedor = (object) [
            'load' => new LoaderController(),
        ];
    }
}
