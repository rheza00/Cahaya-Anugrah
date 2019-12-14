<?php

    $con=mysqli_connect('localhost','root','','fppwl2019');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>