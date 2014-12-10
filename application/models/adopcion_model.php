<?php

/**
 * Modelo Adopción
 * El modelo Adopcion se encarga de enviar los datos a la Base de Datos Corgibd.
 * Este modelo actualmente puede: (Leer/ Registrar).
 */
class adopcionModel
{
    /**
     * Constructor, expects a Database connection
     * @param Database $db The Database object
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    /**
     * Envio de dato para un registro.
     * @param string $nombre_mascota note text that will be created
     * @return bool feedback (was the note created properly ?)
     */
    public function registrar($nombre_mascota, $edad_mascota, $mensaje_mascota, $id_animal, $id_sexo_animal, $id_raza, $mascota_vacuna){
        // clean the input to prevent for example javascript within the notes.
        $nombre_mascota = strip_tags($nombre_mascota);

        $sql = "INSERT INTO registro_mascota (referencia, id_animal, id_raza, id_sexo_animal, user_id, nombre_mascota,  edad_mascota,  mensaje_mascota, mascota_vacuna, estado_peticion) VALUES (:referencia, :id_animal, :id_raza, :id_sexo_animal, :user_id, :nombre_mascota,  :edad_mascota,  :mensaje_mascota, :mascota_vacuna, :estado_peticion)";
        $query = $this->db->prepare($sql);
        $query->execute(array('referencia' => $_SESSION['user_id'], ':nombre_mascota' => $nombre_mascota, ':edad_mascota' => $edad_mascota, ':user_id' => $_SESSION['user_id'], ':mensaje_mascota' => $mensaje_mascota, ':id_animal' => $id_animal, ':id_sexo_animal' => $id_sexo_animal, 'id_raza' => $id_raza, ':mascota_vacuna' => $mascota_vacuna, ':estado_peticion' => $_SESSION['user_id']));

        $count =  $query->rowCount();
        if ($count == 1) {
            return true;
        } else {
            $_SESSION["feedback_negative"][] = FEEDBACK_NOTE_CREATION_FAILED;
        }
        // default return
        return false;
    } 
}
