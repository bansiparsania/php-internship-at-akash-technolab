<html>
<head>
    <title>Student Data</title>
</head>
<body>
      <form action="marksheet.php" method="post">
        <table>
            <h1><b>Student Data</b></h1>
            <tr>
                <td>Name :</td>
                <td><input type="text" name="txt1" required></td>
            </tr>
            <tr>
                <td>Roll no. :</td>
                <td><input type="number" name="txt2" required></td>
            </tr>
            <tr>
                <td>School :</td>
                <td><input type="text" name="txt3" required></td>
            </tr>
            
            <tr>
                <td>English :</td>
                <td><input type="number" name="txt4" min="1" max="100" required></td>
            </tr>
            <tr>
                <td>Gujrati :</td>
                <td><input type="number" name="txt5" min="1" max="100" required></td>
            </tr>
            <tr>
                <td>science :</td>
                <td><input type="number" name="txt6" min="1" max="100" required></td>
            </tr>
            <tr>
                <td>Maths :</td>
                <td><input type="number" name="txt7" min="1" max="100" required></td>
            </tr>
            <tr>
                <td>Social Science :</td>
                <td><input type="number" name="txt8" min="1" max="100" required></td>
            </tr>
            <tr>
                <td><input type="submit"></td>
            </tr>
        </table>
      </form>
</body>
</html>