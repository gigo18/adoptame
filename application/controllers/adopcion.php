<?php

/**
 * Clase Adopcion
 * Adopcion controlador
 */
class adopcion extends Controller
{
    /**
     * La funcion Constructor hereda el constructor de la clase controlador.
     */
    public function __construct()
    {
            parent::__construct();

        // VERY IMPORTANT: All controllers/areas that should only be usable by logged-in users
        // need this line! Otherwise not-logged in users could do actions. If all of your pages should only
        // be usable by logged-in users: Put this line into libs/Controller->__construct
        Auth::handleLogin();
    }

    /**
     * Handles what happens when user moves to URL/index/index, which is the same like URL/index or in this
     * case even URL (without any controller/action) as this is the default controller-action when user gives no input.
     */
    function index()
    {
            $adopcion_model = $this->loadModel('adopcion');
            $this->view->registra = $adopcion_model;
            $this->view->render('adopcion/index');
    }

    /**
     * Este metodo se encarga de registrar a una mascota en la aplicacion.
     * Crea un nuevo registro. Aqui es donde los datos se cargan para ser enviados al modelo.
     */
    public function registrar()
    {
        // optimal MVC structure handles POST data in the controller, not in the model.
        // personally, I like POST-handling in the model much better (skinny controllers, fat models), so the login
        // stuff handles POST in the model. in this note-controller/model, the POST data is intentionally handled
        // in the controller, to show people how to do it "correctly". But I still think this is ugly.
        if (isset($_POST['nombre_mascota']) AND !empty($_POST['nombre_mascota'])) {
            $adopcion_model = $this->loadModel('adopcion');
            $adopcion_model->registrar($_POST['nombre_mascota'],
                                $_POST['edad_mascota'],
                                $_POST['mensaje_mascota'],
                                $_POST['id_animal'],
                                $_POST['id_sexo_animal'],
                                $_POST['id_raza'],
                                $_POST['mascota_vacuna']
                            );
        }
        header('location: ' . URL . 'index/index');
    }

}