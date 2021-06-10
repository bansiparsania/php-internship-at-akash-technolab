<?php

$connection=mysqli_connect("localhost","root","","db_internship");

if($_POST){
    $id=$_POST['txt1'];
    $name=$_POST['txt2'];
    $gender=$_POST['txt3'];
    $email=$_POST['txt4'];
    $mobile=$_POST['txt5'];
    $address=$_POST['txt6'];
    $password=$_POST['txt7'];
    $dob=$_POST['txt8'];
    $area=$_POST['txt9'];
    $pincode=$_POST['txt10'];
    
    $q= mysqli_query($connection, "insert into tbl_student(stu_id,stu_name,stu_gender,stu_email,stu_mobile,stu_address,stu_password,stu_dob,stu_area,stu_pincode) values('{$id}','{$name}','{$gender}','{$email}','{$mobile}','{$address}','{$password}','{$dob}','{$area}','{$pincode}')")or die(mysqli_error($connection));
    if($q){
        echo "<script>alert('record added');</script>";
    }
}
?>

<html>
    <body>
        <form method="post">
            id:<input type="number" name="txt1"/>
            name:<input type="text" name="txt2"/>
            gender:<select name="txt3">
                <option>male</option>
                <option>female</option>
            </select>
            email:<input type="email" name="txt4"/>
            mobile:<input type="number" name="txt5"/>
            address:<input type="text" name="txt6"/>
            password:<input type="password" name="txt7"/>
            dob:<input type="date" name="txt8"/>
            area:<input type="text" name="txt9"/>
            pincode:<input type="number" name="txt10"/>
            <input type="submit"/>
        </form>
    </body>
</html>
