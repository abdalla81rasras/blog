<?php

$conn=mysqli_connect('localhost','root','','blogs');

if(!$conn):
    die("Error Connection !!".mysqli_connect_error($conn));
endif;

?>