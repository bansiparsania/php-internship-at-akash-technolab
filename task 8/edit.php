<?php
$connection= mysqli_connect("localhost","root","","db_internship");
if(!isset($_GET['id'])){
    header("location:3table.php");
}
$editid=$_GET['id'];

$editq= mysqli_query($connection, "select * from tbl_user where user_id='($editid)'")or die(mysqli_error($connection));
$editdata= mysqli_fetch_array($editq);
//print_r($editdata);

if($_POST){
    $txt1=$_POST['txt1'];
    $txt2=$_POST['txt2'];
    $txt3=$_POST['txt3'];
    
    $uq= mysqli_query($connection, "update tbl_user user_name'{$txt1}',user_gender='{$txt2}',user_mobile='{$txt3}'where user_id='{$editid}") or die(mysqli_errno($connection));
}
    if($uq){
        echo "<script>alert{'record updated');window.location='3table.php';</script>";
    }
 
?>
<html>
    <body>
        <form method="post">
            
            name:<input type="text" value="<?php echo $editdata['user_name']; ?> " name="txt1"/>
            <br/>
            gender:<select name="txt2">
                <option>male</option>
                <option>female</option>
            </select>
            <br>
            mobile:<input type="number" value="<?php echo $editdata['user_mobile']; ?>" name="txt3"/>
            
            <input type="submit"/>
        </form>
    </body>
</html>
        
   