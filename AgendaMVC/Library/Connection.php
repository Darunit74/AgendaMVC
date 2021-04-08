<?php
    class Connection {
        function __construct(){
        $this->db = new PDOManager("root", "root","db_contactos");
        }
    }