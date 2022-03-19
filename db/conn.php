<?php 
    
    $host = '8888';
    $db = 'personel_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';
    
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    try{
        $pdo =new PDO($dsn,$user,$pass);
        echo 'Great Success';
    }catch(PDOException$e){
        throw new PDOException($e->getMessage());
        echo 'not working, try harder';
    
    
    }
    
    
    
    ?>



    // $host = '8888';    //'8888/attendance/';    
    // $db = 'attendance_db';
    // $db_port = 8889; 
    // $user = 'root';
    // $password = '';
    // $charset = 'utf8mb4';
 
    
    
    // //dsn = data source name
    // //driver or type of database
    // $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$db_port";
    // port=$db_port
    // try{
    //     $pdo = new PDO($dsn,$user,$password);
    //     echo " connection worked, great success!";

    // }catch(PDOException $e){
    //     throw new Exception($e->getMessage());
    //     echo '<h3>Not Working</h3>';

    // }
   
  
//    $db_host = '127.0.0.1';
//   $db_user = 'root';
//   $db_password = 'root';
//   $db_db = 'attendance_db';
//   $db_port = 8889;


//   //$mysqli is not compatible with other databases
//   $mysqli = new mysqli(
//     $db_host,
//     $db_user,
//     $db_password,
//     $db_db,
// 	$db_port
//   );

//   if ($mysqli->connect_error) {
//     echo 'Errno: ';
//     echo '<br>';
//     echo 'Error: ';
//     exit();
//   } else{
//       echo '<h1>Server Connected</h1>';
    
//   }

//   $mysqli->close();
//   require_once 'crud.php';
 
?>
