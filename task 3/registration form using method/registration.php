<html>
<head>
  <title>Registration Form</title>
</head>
<body>
 <form action="insert.php" method="post">
  <table bgcolor="cley">
   <tr>
    <td>Name :</td>
    <td><input type="text" name="username" required></td>
   </tr>
   <tr>
    <td>Age :</td>
    <td><input type="number" name="age" min="1" max="100" required></td>
   </tr>
   <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="gender" value="m" required>Male
     <input type="radio" name="gender" value="f" required>Female
    </td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" required></td>
   </tr> 
   <tr>
    <td>Phone no :</td>
    <td>
       <input type="phone" name="phone" required>
    </td>
   </tr>
   <tr>
    <td><input type="submit"></td>
   </tr>
  </table>
 </form>
</body>
</html>
