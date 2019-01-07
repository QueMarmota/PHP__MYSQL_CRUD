<?php
   
   session_start();
   //inicializamos la biblioteca mysqli_connect con sus parametros necesatios 
    //y lo guardamos en la var conn
    $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'php_mysql_crud'
    );

// if(isset($conn)){
//     echo 'db is connected';
// }

?>