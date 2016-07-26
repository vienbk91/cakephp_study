<html>
<body>
<?php
	echo $this->Paginator->prev('« Previous ', null, null, array('class' => 'disabled')); //Shows the next and previous links
	echo " | ".$this->Paginator->numbers()." | "; //Shows the page numbers
	echo $this->Paginator->next(' Next »', null, null, array('class' => 'disabled')); //Shows the next and previous links
	echo "&nbsp;&nbsp;&nbsp;";
	echo " Page ".$this->Paginator->counter(); // prints X of Y, where X is current page and Y is number of pages
?> 

<?php
if($data==NULL){
	echo "<h2>Dada Empty</h2>";
} else {
	echo "<table>
		  <tr>
			<td>id</td>
			<td>Title</td>
			<td>Description</td>
		  </tr>";
	foreach($data as $item){
		echo "<tr>";
		echo "<td>".$item['Book']['id']."</td>";
		echo "<td><a href='".$this->webroot."books/view/".$item['Book']['id']."' >".$item['Book']['title']."</a></td>";
		echo "<td>".$item['Book']['description']."</td>";
		echo "</tr>";
	}
	echo "</table>";
}
?>
</body>
</html>