<?php include "db.php"; ?>
<?php include "function.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
</head>
<body>
<?php
    
if(isset($_GET['id'])) {
$id = mysqli_real_escape_string($connection,$_GET['id']);
mysqli_query($connection,"DELETE FROM user WHERE id='$id'");
}
    
?>
<div class="container">
   <div class="row">
       
        <div class="col-sm-12">
        <form action="login_read.php" method="post">
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
                $query = "SELECT * FROM user";  
                $result = mysqli_query($connection, $query);
                while($row = mysqli_fetch_array ($result)) {
                    ?>
                    <tr>
                        <td><?=$no++; ?> </td>
                        <td><?=$row['username']?></td>
                        <td>
                            <a href="" class="btn btn-sm btn-info">Edit</a>
                            <a onclick="if(confirm('apakah anda ingin mengahpus data ini!!')) { location.href='login_read.php?id=<?php echo $row['id']; ?>' }" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
        </form>
    </div>
       
   </div>
</div>
</body>
</html>
