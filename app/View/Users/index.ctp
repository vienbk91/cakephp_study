<?php 
echo "Hello CakePHP , I'm Vien";

?>

<?php
if($info == NULL){ // Biến $info được sử dụng ở view
 echo "<h2>Dada Empty</h2>";
} else{
	echo "<table><tr>
		<td>id</td>
		<td>Name</td>
		<td>Email</td>
		</tr>";
	foreach($info as $item){
		echo "<tr>";
		echo "<td>".$item['User']['user_id']."</td>";
		echo "<td>".$item['User']['user_first_name']. "  " . $item['User']['user_last_name'] . "</td>";
		echo "<td>".$item['User']['user_email']."</td>";
		echo "</tr>";
	}
	echo "</table>";
}