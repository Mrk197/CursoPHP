<?php
    require_once("Autoload.php");

    class Usuario extends Conexion {
        private $strNombre;
        private $intTelefono;
        private $strEmail;
        private $conexion;

        public function __construct() {
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->connect();
        }

        public function insertUsuario(string $nombre, int $telefono, string $emal) {
            $this->strNombre = $nombre;
            $this->intTelefono = $telefono;
            $this->strEmail = $emal;

            $sql = "INSERT INTO usuario(nombre, telefono, email) VALUES(?,?,?)";
            $insert = $this->conexion->prepare($sql);
            $arrData = array($this->strNombre, $this->intTelefono, $this->strEmail);
            $resInsert = $insert->execute($arrData);
            $idInsert = $this->conexion->lastInsertId();
            return $idInsert;

        }

        public function getUsuarios() :Array {
            $sql = "SELECT * FROM usuario";
            $execute = $this->conexion->query($sql);
            $request = $execute->fetchall(PDO::FETCH_ASSOC); //devuelve resultado en an array
            return $request;
        }

        public function updateUser(int $id, string $nombre, int $telefono, string $emal) {
            $this->strNombre = $nombre;
            $this->intTelefono = $telefono;
            $this->strEmail = $emal;
            $sql = "UPDATE usuario SET nombre=?, telefono=?, email=? WHERE id=$id";
            $update = $this->conexion->prepare($sql);
            $arrData = array($this->strNombre, $this->intTelefono, $this->strEmail);
            $resExecute = $update->execute($arrData);
            return $resExecute;
        }

        public function getUsuario(int $id) :Array {
            $sql = "SELECT * FROM usuario WHERE id=?";
            $arrWhere = array($id);
            $query = $this->conexion->prepare($sql);
            $query->execute($arrWhere);
            $request = $query->fetch(PDO::FETCH_ASSOC); //devuelve resultado en an array
            return $request;
        }

        public function deleteUsuario(int $id) {
            $sql = "DELETE FROM usuario WHERE id=?";
            $arrWhere = array($id);
            $delete = $this->conexion->prepare($sql);
            $del = $delete->execute($arrWhere);
            return $del;
        }

    }