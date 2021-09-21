<?php

class PDODB{
    private $host;
    private $usuario;
    private $pass;
    private $db;

    private $connection;

    function __construct()
    {
        $this->host = "localhost";
        $this->usuario = "root";
        $this->pass ="";
        $this->db = "bd_withus";

    }

    function connect()
    {
        $opciones = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::MYSQL_ATTR_FOUND_ROWS => true
        );

        $this->connection = new PDO(
            'mysql:host=' . $this->host . ';dbname=' . $this->db,
            $this->usuario,
            $this->pass,
            $opciones
        );
    }

    function getData($sql)

    {
        try {
            $data = array ();
            $result = $this->connection->query($sql);
            if ($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    array_push($data, $row);
                }
            }
            return $data;
        } catch (\Throwable $th) {
            die ("oh noes! There's an error in the query!");
        }
    }

    function login($sql)

    {
        try {
            $data = array ();
            $result = $this->connection->query($sql);
            if ($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    array_push($data, $row);
                }
            }else {
                $data = false; 
            }
            return $data;
        } catch (\Throwable $th) {
            die ("oh noes! There's an error in the query!");
        }
    }

    function executeInstruction($sql)
    {
        try {
            $result = $this->connection->query($sql);
            return $result;
        } catch (Exception $e) {
            die("Oh noes! There's an error in the query!");
        }
    }

    function close()
    {
        $this->connection =null;
    }
}    
