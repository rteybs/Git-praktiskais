<?php
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    
        if(isset($_POST['send'])){

            $errors = [];
    
            
            $username = test_input($_POST['username']);
            $password = test_input($_POST['password']);
            $email = test_input($_POST['email']);
           
            
            
            if(empty($username)){
                $errors['username'] = "Lietotājvārds ir tukšs";
            }
                elseif(strlen($username) < 4){
                $errors['username'] = "Lietotājvārdam jābūt vismaz 4 rakstzīmes garam.";
                
                }
    
            if(empty($password)){
                $errors['password'] = "Parole ir tukša";
            }
                elseif(strlen($password) < 4){
                    $errors['password'] = "  Parolei jābūt vismaz 4 rakstzīmes garai.";
                } 
            
            if(empty($email)){
                    $errors['email'] = "E-pasts ir tukšs";
            }
                elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $errors['email'] = "  Nederīgs E-pasts";
                } 
    
    
                
                if(empty($errors)){
                    echo "Ievada datus datubāzē";
                };
    
                // echo "<pre>";
                // print_r($_POST);
                // echo "<pre>";
    
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background-color:rgb(169, 182, 178);
            display: flex;
            flex-direction: column;
            align-items: center;

        }
        h1{
            color:rgb(49, 53, 85);
        }
        input{
            display: block;
            margin: 10px;
            padding: 10px;
            border-radius: 10px;
            
        }
        button{
            padding: 10px;
            border-radius: 10px;
            background-color:rgb(49, 53, 85);
            color: white;
            font-weight: bold;
        }

    </style>
    <h1>reģistrācijas forma</h1>

    <form method="POST">
    
    <?php if(isset($errors['username'])): ?>
        <div class="error"><?= $errors['username'] ?></div>
    <?php endif; ?>

    <input placeholder="Username" name="username" id="UserNameField" type="text" 
           value="<?php if (isset($username)) echo $username?>">




    <?php if(isset($errors['password'])): ?>
        <div class="error"><?= $errors['password'] ?></div>
    <?php endif; ?>

    <input placeholder="Password" name="password" id="PassWordField" type="password"
           value="<?php if (isset($password)) echo $password?>">




    <?php if(isset($errors['email'])): ?>
        <div class="error"><?= $errors['email'] ?></div>
    <?php endif; ?>

    <input placeholder="Email" name="email" id="EmailField" type="email"
           value="<?php if (isset($email)) echo $email?>">




    <input type="submit" id="SubmitButton" name="send" value="Iesniegt">

</form>

</body>
</html>