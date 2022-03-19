<?php 

  //privated database object
class crud{
    private $db; //private to the function?

//constructor to initialize variable to the database connection
    function __construct($conn){
        $this->db = $conn;
    }

    public function insert($fname,$lname,$spec,$email,$special_id){
        try{
            $sql = "INSERT INTO attendee  VALUES 
            (:fname, :lname,:spec,:email,:special_id)";
            $stmt = $this->db->prepare($sql);
            //Bind place holders to the values of the $sql statement
            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':lname',$lname);
            $stmt->bindparam(':spec',$spec);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':special_id',$special_id);
            //execute statement
            $stmt->execute();
            return true;

  

                //throw will stop operation

        } catch(PDOException $e){
            echo $e->getMessage();
            return false;

        }

    }
}



?>