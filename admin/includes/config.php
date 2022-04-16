<?php 
    // require 'constant.php';
    // // define('ROOT_URL', 'http://localhost/social p/dist');
    // define('ROOT_URL', 'http://localhost/sammy-porfolio');

    // $conn =new  MYSQLI($servername, $username, $password, $dbname);
    // if($conn){
    //     // echo('connected');
    // }else
    // {
    //     die('Database connection error:' . $conn->connect_error);
    // }


    //Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);



?>