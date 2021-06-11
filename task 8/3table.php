<?php

$connection= mysqli_connect("localhost","root","","db_internship");

$q= mysqli_query($connection, "select * from tbl_user") or die(mysqli_error($connection));
echo "<table border='1'>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>name</th>";
echo "<th>gender</th>";
echo "<th>mobile</th>";
echo "<th>action</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($q)) {
   
    echo "<tr>";
    echo "<td>{$row['user_id']}</td>";
    echo "<td>{$row['user_name']}</td>";
    echo "<td>{$row['user_gender']}</td>";
    echo "<td>{$row['user_mobile']}</td>";
    echo "<td><a href='edit.php?id={$row['user_id']}'>edit</a> | <a href='delete.php?deleteid={$row['user_id']}'>delete</a></td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='insertrecord.php'>add record</a>";