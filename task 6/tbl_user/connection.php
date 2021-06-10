<?php

$host="localhost";
$username="root";
$passwd="";
$dbname="db_internship";

$connection=mysqli_connect($host,$username,$passwd,$dbname);
$q= mysqli_query($connection,
        "insert into tbl_user(user_name,user_gender,user_mobile) values('bansi','female','1234567894')")
        or die("error". mysqli_error($connection));

if($q)
{
    echo "<script>alert('record added');</script>";
}