<?php


$errors = [];

$data = [];

    $mysqli =  new mysqli("localhost","admin","haslo", "baza");/*  */


    $nazwa = $_POST['nazwa'];
    $password = $_POST['password'];

 
        if(mysqli_num_rows($mysqli->query("SELECT login,password  FROM users WHERE login = '".$login."' AND password = '".md5($password)."';")) > 0){
          
            $mysqli->query("update users set  `logowanie` = '".time()."', `ip` ='".$ip."' WHERE login = '".$login."'; ");
            $data['success'] = true;
            $data['message'] = 'Zalogowano!';
        }else{

            $errors['blad'] = 'Nieprawidlowa nazwa uzytkownika lub nieprawidlowe haslo';
            $data['success'] = false;
             $data['errors'] = $errors;
        }
       




        echo json_encode($data);
    
    ?>