<?php

echo "<table border='1'>";

for($i=0;$i<20;$i++){
	echo "<tr>";
	if ($i%2==0) {
	echo "<td bgcolor='cley'>$i</td>";
    }else{
	echo "<td bgcolor='pink'>$i</td>";
    }
echo "</tr>";
}

?>