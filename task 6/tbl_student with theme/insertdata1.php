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
<head>
	
	<title>Student Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
      <div class="student-data">
          <h1 align="center"><b>Student Data</b></h1>
          <form action="student1.php" method="post" align="left">
              <p>id:<input type="number" name="txt1"/></p>
              <p>name:<input type="text" name="txt2"/></p>
              <p>gender:<select name="txt3">
                 <option>male</option>
                <option>female</option>
              </select></p>
              <p>email:<input type="email" name="txt4"/></p>
              <p>mobile:<input type="number" name="txt5"/></p>
              <p>address:<input type="text" name="txt6"/></p>
              <p>password:<input type="password" name="txt7"/></p>
              <p>dob:<input type="date" name="txt8"/></p>
              <p>area:<input type="text" name="txt9"/></p>
              <p>pincode:<input type="number" name="txt10"/></p>
              <p><button type="submit">SUBMIT</button></p>
      	  </form>
      </div>
</body>
</html>

