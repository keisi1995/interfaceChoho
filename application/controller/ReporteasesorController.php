<?php
class ReporteasesorController extends Controller
{

    public $titulo = 'Reporte Asesor';
    public $abrev  = 'reporteasesor';
    public $url    = 'index.php?c=Reporteasesor&a=';

    public function __CONSTRUCT()
    {
        parent::__construct();
    }

    public function View()
    {
        $data = obtenerDatos($this);
        $this->contenedor->load->View('reporte/viewReporteasesor.php', $data);
    }

}
