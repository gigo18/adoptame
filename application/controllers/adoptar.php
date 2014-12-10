<?php

/**
 * Clase Adoptar
 * Adoptar Controlador
 */
class adoptar extends Controller
{
    /**
     * La funcion Constructor hereda el constructor de la clase controlador.
     */
    function __construct()
    {
            parent::__construct();
    }

    /**
     * Handles what happens when user moves to URL/index/index, which is the same like URL/index or in this
     * case even URL (without any controller/action) as this is the default controller-action when user gives no input.
     */
    function index()
    {
            $adoptar_model = $this->loadModel('adoptar');
            $this->view->adopta = $adoptar_model->getAllPets();
            $this->view->render('adoptar/index');
    }

    public function mascota($id_registro)
    {
        if (isset($id_registro)) {
            // get the note that you want to edit (to show the current content)
            $adoptar_model = $this->loadModel('adoptar');
            $this->view->nombre= $adoptar_model->getNombre($id_registro);
            $this->view->descripcion= $adoptar_model->getDescrip($id_registro);
            $this->view->edad= $adoptar_model->getEdad($id_registro);
            $this->view->tamano= $adoptar_model->getTamano($id_registro);
            $this->view->raza= $adoptar_model->getRaza($id_registro);
            $this->view->sexo= $adoptar_model->getSexoPet($id_registro);
            $this->view->refer= $adoptar_model->getReferPet($id_registro);
            $this->view->render('adoptar/mascota');
        } else {
            header('location: ' . URL . 'adoptar');
        }
    }

}