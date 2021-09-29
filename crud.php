<?php
     class crud{
         private $db;
         //constructer to initialize private variable to the database object
         function __construct($conn)
         {
             $this ->db=$conn;

         }
         //function to create a new record into the attandee database
         public function insertDetails($Time,$latitude,$longitude,$depth,$mag,$magType,$place){
            try {

               $sql="INSERT INTO places(Time,latitude,longitude,depth,mag,magType,place) 
               VALUES (:Time,:latitude,:longitude,:depth,:mag,:magType,:place)";
                //prepare sql statement for execution
                $stmt=$this->db->prepare($sql);
                //bind all the placeholders to the actual values
                $stmt->bindparam(":Time",$Time);
                $stmt->bindparam(":latitude",$latitude);
                $stmt->bindparam(":longitude",$longitude);
                $stmt->bindparam(":depth",$depth);
                $stmt->bindparam(":mag",$mag);
                $stmt->bindparam(":magType",$magType);
                $stmt->bindparam(":place",$place);
                
                $stmt->execute();
                return TRUE;
            } 
            catch (PDOException $e) {
                echo $e->getMessage();
                return False;
            }
         }
         public function getDetails(){
            try{
                $sql = "SELECT * FROM `places`";
            $result= $this->db->query($sql);
                return  $result;
            }catch(PDOException $e) {
                echo $e->getMessage();
                return False;

          }  
        }
        }
       
    ?>