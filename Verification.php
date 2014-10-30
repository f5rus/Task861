<?php
    $password = crypt('123','asd');     
       
    if (crypt($_POST['password'],'asd') == $password){
        echo "Login: ". $_POST['login']." Password: ".$_POST['password'];
    }
     else {
        echo 'error!';
    }