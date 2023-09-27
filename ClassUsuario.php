<?php
    class Usuario{
        //atributos - props
        public string $strNombre; //accesible desde cualquier clase
        public string $strEmail;
        public string $strTipo;
        private string $strClave; //sólo accesible dentro de la misma clase
        protected string $strFechaRegistro; //accesible desde la misma clase y clase heredada
        static string $strEstado = "Activo"; //const, acceder desde cualquier lado sin instanciar 

        //constructor 
        function __construct(string $nombre, string $email, string $tipo){
            $this->strNombre = $nombre;
            $this->strEmail = $email;
            $this->strTipo = $tipo;
            $this->strClave = rand();
            $this->strFechaRegistro = date('Y-m-d H:m:s');
        }

        
        public function getNombre():string {
            return $this->strNombre;
        }
        public function getEmail():string {
            return $this->strEmail;
        }
        public function getTipo():string {
            return $this->strTipo;
        }
        public function getPerfil() {
            echo "Datos del usuario <br>";
            echo "Nombre: ".$this->strNombre."<br>";
            echo "Clave: ".$this->strClave."<br>";
            echo "Fecha registro: ".$this->strFechaRegistro."<br>";
            echo "Estado: ".self::$strEstado."<br>";

        }

        public function setCambiarClave(string $pass) {
            $this->strClave = $pass;
        }
    }
?>