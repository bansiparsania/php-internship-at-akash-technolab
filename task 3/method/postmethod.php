<html>
<body>
	<h1>Form Demo</h1>
     <form action="process.php" method="post">
     	<table>
     		   <tr>
     		   	  <td>NAME:</td>
     		   	  <td><input type="text" name="txt1" required/></td>
     		   </tr>
                  <tr>
     		   	  <td>AGE:</td>
     		   	  <td><input type="number" name="txt2" min="1" max="100" required/></td>
     		   </tr>
                  <tr>
                      <td>EMAIL:</td>
                      <td><input type="email" name="txt3" required/></td>
                  </tr>
                  <tr>
     		      <td><input type="submit"/></td>
     		      <td><input type="reset"/></td>
     		   </tr>
     	</table>
     </form>      
</body>
</html>