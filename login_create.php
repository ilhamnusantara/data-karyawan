<?php

if (isset($_POST['submit'])) {
$username = $_POST['username'];
$password = $_POST['password'];    
$connection = mysqli_connect('localhost','root','', 'loginapp');
    if($connection) {     
        echo "We are connect";
    } else {
        die ("Database connection faild");
    }

    $query = "INSERT INTO user(username,password)";
    $query .= "VALUES ('$username','$password')";
    
    $result = mysqli_query($connection, $query);
        if(!$result){
        die('Query FAILED' . mysqli_error());
        }
//
//    if($username && $password ){
//    echo $username;
//    echo $password;    
//    } else {
//        echo "this field cannot be blank";
//    }
//    

    

    
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
</head>
<body>
<div class="conatiner">
    
    <div class="col-sm-6">
        <form action="login_create.php" method="post">
            <div class="from-group">
               <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            
            <div class="from-group">
               <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
                
            <input class="btn btn-primary" type="submit" name ="submit" value="submit"></input>
        </form> 
    </div>
    
</div>
    
</body>
</html>