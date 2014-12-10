<?php

/**
 * Controlador Información
 * El área de Información
 * Este controlador se encarga de dirigir al usuario a paginas informativas. 	
 */
class informacion extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    function __construct()
    {
        parent::__construct();
    }
    /**
     * Estos metodos controlan los enlaces cuando el usuario pide ver una pagina /informacion/index en la aplicación.
     */
    function index()
    {
        $this->view->render('informacion/index');
    }

    function about()
    {
        $this->view->render('informacion/about');
    }

 function enfermedades()
    {
        $this->view->render('informacion/enfermedades');
    }
 function why()
    {
        $this->view->render('informacion/why');
    }
}