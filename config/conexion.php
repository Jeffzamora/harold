<?php
    session_start();

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try {
                //TODO: Cadena de Conexion Local
				$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=db_asistencia", "JZ008US00001", "Dayris97.");
				return $conectar;
			} catch (Exception $e) {
				print "¡Error BD!: " . $e->getMessage() . "<br/>";
				die();
			}
        }

        
        public function set_names(){
			return $this->dbh->query("SET NAMES 'utf8'");
        }

        public static function ruta(){
            //Local
			return "http://www.devzamora.com/harold/";

		}

    }

