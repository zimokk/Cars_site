<?php
class Car{
    // database connection and table name
    private $conn;
    private $table_name = "cars";

    // object properties
    public $idCars;
    public $mark_id;
    public $model_id;
    public $cost;
    public $year;
    public $fuel_id;
    public $transmission;
    public $body_id;
    public $user_id;
    public $city_id;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read marks
    function readAll(){

        // select all query
        $query = "SELECT * FROM " . $this->table_name . ";";

        // prepare query statement
        $stmt = $this->conn->prepare( $query );

        // execute query
        $stmt->execute();

        return $stmt;
    }
    function readWithFiltr ()
    {
        $helper;      
        if(!$idCars.is_null())
        {
            $helper = "WHERE idCars = " . $idCars ;
        }
        if(!$mark_id.is_null())
        {
            $helper = $helper . "and mark_id = " . $mard_id ;
        }
        if(!$model_id.is_null())
        {
            $helper = $helper . "and model_id = " . $model_id ;
        }
        if(!$cost.is_null())
        {
            $helper = $helper . "and cost = " . $cost ;
        }
        if(!$year.is_null())
        {
            $helper = $helper . "and year = " . $year ;
        }
        if(!$fuel_id.is_null())
        {
            $helper = $helper . "and fuel_id = " . $fuel_id ;
        }
        if(!$transmission.is_null())
        {
            $helper = $helper . "and transmission = " . $transmission ;
        }
        if(!$body_id.is_null())
        {
           $helper = $helper . "and body_id = " . $body_id ;
        }     
        
        $sql = "SELECT * FROM " . $this->table_name .  $helper . ";" ; 
        
        $query = $sql;
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
        return $stmt;
    }
}
?>