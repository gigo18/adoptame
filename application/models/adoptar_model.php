<?php

/**
 * Modelo Adoptar
 * El modelo Adoptar se encarga de pedir información a la base de datos.
 * Este modelo actualmente puede (Leer / Obtener datos )
 */
class adoptarModel
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
     * Funcion que toma todos los registros de animales que se encuentren en fase: "Adopcion"
     * would be data that the user has created)
     * @return array an array with several objects (the results)
     */
    public function getAllPets()
    {
        $sql = "SELECT user_id, id_registro, nombre_mascota FROM registro_mascota WHERE id_registro = id_registro";
        $query = $this->db->prepare($sql);
        $query->execute(array(':id_registro' => $_SESSION['user_id']));

        // fetchAll() is the PDO method that gets all result rows
        return $query->fetchAll();
    }

    /**
     * Todas las siguientes funciones obtienen el valor de un registro determinado.
     * @param int $note_id id of the specific note
     * @return object a single object (the result)
     */
    public function getNombre($id_registro)
    {
        $sql = "SELECT  id_registro, nombre_mascota FROM registro_mascota WHERE  id_registro = :id_registro";
        $query = $this->db->prepare($sql);
        $query->execute(array(':id_registro' => $id_registro));

        // fetch() is the PDO method that gets a single result
        return $query->fetch();
    }

    public function getDescrip($id_registro)
    {
        $sql = "SELECT id_registro, mensaje_mascota FROM registro_mascota WHERE id_registro = :id_registro";
        $query = $this->db->prepare($sql);
        $query->execute(array( ':id_registro' => $id_registro));

        // fetch() is the PDO method that gets a single result
        return $query->fetch();
    }

    public function getEdad($id_registro)
    {
        $sql = "SELECT id_registro, edad_mascota FROM registro_mascota WHERE id_registro = :id_registro";
        $query = $this->db->prepare($sql);
        $query->execute(array(':id_registro' => $id_registro));

        // fetch() is the PDO method that gets a single result
        return $query->fetch();
    }

    public function getTamano($id_registro)
    {
        $sql = "SELECT id_registro, 'id_raza.nombre', tamano_raza, 'id_raza.id_animal' FROM registro_mascota, raza_animales WHERE 'id_raza.id_animal' = 'id_raza.id_animal'";
        $query = $this->db->prepare($sql);
        $query->execute(array(':id_registro' => $id_registro));

        // fetch() is the PDO method that gets a single result
        return $query->fetch();
    }

    public function getRaza($id_registro)
    {
        $sql = "SELECT id_registro, 'id_raza.nombre', nombre_raza, 'id_raza.id_animal' FROM registro_mascota, raza_animales WHERE 'id_raza.id_animal' = 'id_raza.id_animal'";
        $query = $this->db->prepare($sql);
        $query->execute(array(':id_registro' => $id_registro));

        // fetch() is the PDO method that gets a single result
        return $query->fetch();
    }

    public function getSexoPet($id_registro)
    {
        $sql = "SELECT id_registro, 'id_sexo_animal.sexo_animal', sexo_animal, 'id_sexo_animal.id_animal' FROM registro_mascota, sexo_animales WHERE 'id_sexo_animal.id_animal' = 'id_sexo_animal.id_animal'";
        $query = $this->db->prepare($sql);
        $query->execute(array(':id_registro' => $id_registro));

        // fetch() is the PDO method that gets a single result
        return $query->fetch();
    }

    public function getReferPet($id_registro)
    {
        $sql = "SELECT id_registro FROM registro_mascota WHERE id_registro = :id_registro";
        $query = $this->db->prepare($sql);
        $query->execute(array(':id_registro' => $id_registro));

        // fetch() is the PDO method that gets a single result
        return $query->fetch();
    }       
}