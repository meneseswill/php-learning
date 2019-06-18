<?php

class Connection 
{
    public static function make($config) 
    {
        try{ 
            // return $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
            return new PDO (
                $config['connection'].';dbname='.$config['name'],
                $config['user'], 
                $config['password'],
                $config['options']
            );
        } catch(PDOException $e){
            //die($e.getMessage());
            die('No se pudo establecer la conexión con la base de datos');
        }
    }
}