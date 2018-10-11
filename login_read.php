<?php   
    $connection = mysqli_connect('localhost','root','', 'loginapp');
    if($connection) {     
//        echo "We are connected";
    } else {
//        die ("Database connection failed");
    }
    $query = "SELECT * FROM user";
    $result = mysqli_query($connection, $query);
    if(!$result){
//        die('Query FAILED' . mysqli_error($connection));
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
<div class="container">
   <div class="row">
       
        <div class="col-sm-12">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               <?php
                $no = 1;
                while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?=$no++; ?></td>
                        <td><?=$row['username']?></td>
                        <td>
                            <a href="" class="btn btn-sm btn-info">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>        
    </div>
       
   </div>
</div>
</body>
</html>
