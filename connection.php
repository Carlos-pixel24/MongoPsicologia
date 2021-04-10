<?php
$value =1;

        require_once __DIR__ . '/vendor/autoload.php';
			$postUsername = $_POST['email']; 
			$postPassword = $_POST['pass']; 
            $users = (new MongoDB\Client)->PSICOLOGIA->usuarios; 



            $userQuery = array('email' => $postUsername);
            $cursor = $users->find($userQuery);
            foreach ($cursor as $doc) {
                $username =$doc['email'];
                $userpass =$doc['password'];
            }
            if ($postUsername==$username && $postPassword == $userpass){
                $_SESSION['authentication'] = 1;
                $ingresa =$_SESSION;   
                header("Location: registro.php");
            }else{
                    header("location: Login.php?fallo=true");
                  }

 ?> 