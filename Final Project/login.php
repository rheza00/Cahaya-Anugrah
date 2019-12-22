<?php require "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>FP PWL 2019</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="card-title bg-primary text-white mt-5">
        <h3 class="text-center py-3">Login FORM PWL </h3>
    </div>

    <?php 
        if(@$_GET['Empty']==true)
        {
            ?>
        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
            <?php
        }
    ?>


    <?php 
        if(@$_GET['Invalid']==true)
        {?>
        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
            <?php
        }
    ?>

    <div class="card-body">
        <form action="process.php" method="post">
            <input type="text" name="nama" placeholder=" User Name" class="form-control mb-3">
            <input type="password" name="password" placeholder=" Password" class="form-control mb-3">
            <button class="btn btn-success mt-3" name="Login">Login</button>
        </form>
    </div> 
</div>
</body>
</html>