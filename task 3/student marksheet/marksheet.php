<?php 
$a=$_POST['txt1'];
$b=$_POST['txt2'];
$c=$_POST['txt3'];
$d=$_POST['txt4'];
$e=$_POST['txt5'];
$f=$_POST['txt6'];
$g=$_POST['txt7'];
$h=$_POST['txt8'];
?>

<html>
<head>
     <title> Marksheet </title>
</head>
<body>
     <h1><b><u><center>Marksheet</center></u></b></h1> 
     <?php
     echo "Name : $a";
     echo "<br>Roll no.: $b";
     echo "<br>School : $c";
     ?>
     <center>
     <table border="1">
     	
     	<tr>
     		<th>S.NO</th>
     		<th>SUBJECTS</th>
     		<th>FULL MARKS</th>
     		<th>PASSING MARKS</th>
     		<th>OBTAINED MARKS</th>
     	</tr>
     	<tr>
     		<td>1</td>
     		<td>English</td>
     		<td>100</td>
     		<td>33</td>
     		<td>
     			<?php
                    echo "$d";
     			?>
     		</td>
     	</tr>
     	<tr>
     		<td>2</td>
     		<td>Gujrati</td>
     		<td>100</td>
     		<td>33</td>
     		<td>
     			<?php
                    echo "$e";
     			?>
     		</td>
     	</tr>
     	<tr>
     		<td>3</td>
     		<td>Science</td>
     		<td>100</td>
     		<td>33</td>
     		<td>
     			<?php
                    echo "$f";
     			?>
     		</td>
     	</tr>
     	<tr>
     		<td>4</td>
     		<td>Maths</td>
     		<td>100</td>
     		<td>33</td>
     		<td>
     			<?php
                    echo "$g";
     			?>
     		</td>
     	</tr>
     	<tr>
     		<td>5</td>
     		<td>Social Science</td>
     		<td>100</td>
     		<td>33</td>
     		<td>
     			<?php
                    echo "$h";
     			?>
     		</td>
     	</tr>
     </table>
   </center>
</body>
</html>

<?php
  $total=$d+$e+$f+$g+$h;
  echo "<br>Total Marks=$total";
  $perc=$total/5;
  echo "<br>Percentage=$perc";
  if ($perc<33) {
  	echo "<br>Result=FAIL";
  	echo '<body style="background-color: red">';
   }else{ 
  	      if (33<=$perc && $perc<=60) {
  	      echo "<br>Result=2nd Class";
  	      echo '<body style="background-color: green">';
          }else if(60<$perc && $perc<=90){
                echo "<br>Result=1st Class";
                echo '<body style="background-color: orange">';
                }elseif (90<$perc && $perc<=100) {
                	echo "<br>Result=Distinction";
                	echo '<body style="background-color: blue">';
                }
       }
?>