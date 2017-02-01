<?php


abstract class Model
{
    private $db;

    function __construct()
    {
        $opt = array(
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
        $this->db = new PDO('mysql:host=localhost;dbname=mvc_project', 'root', '', $opt);
    }

    public function get_data()
    {
        $data = $this->db->query('SELECT * from ' . static::TABLE);
        $data = $data->fetchAll();
        return $data;
    }
}