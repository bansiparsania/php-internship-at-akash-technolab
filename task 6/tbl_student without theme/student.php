<?php

$host="localhost";
$username="root";
$passwd="";
$dbname="db_internship";

$connection=mysqli_connect($host,$username,$passwd,$dbname);
$q= mysqli_query($connection,
        "insert into tbl_student(stu_id,stu_name,stu_gender,stu_email,stu_mobile,stu_address,stu_password,stu_dob,stu_area,stu_pincode) values('111111','bansi','female','abcd@gmail.com','9999999999','ranavav,porbandar','123456','13052002','porbandar','360550')")
        or die("error". mysqli_error($connection));

if($q)
{
    echo "<script>alert('record added');</script>";
}
