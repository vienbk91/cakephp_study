  <html>
    <head>
        <title>
            <?php
            echo $title . " " .$temp;
            ?>
        </title>
    </head>
    <body>
  	<?php
	if($data==NULL){
	    echo "<h2>Dada Empty</h2>";
	} else {
	    echo "<table>
	          <tr>
	            <td>id</td>
	            <td>Name</td>
	            <td>Email</td>
	            <td>Password</td>
	          </tr>";
	    foreach($data as $item){
	        echo "<tr>";
	        echo "<td>" . $item['User']['user_id'] . "</td>";
	        echo "<td>" . $item['User']['user_first_name'] . "  " . $item['User']['user_last_name'] . "</td>";
	        echo "<td>" . $item['User']['user_email'] . "</td>";
	        echo "<td>" . $item['User']['user_password'] . "</td>";
	        echo "</tr>";
	    }
	}
	?>

	<br><br>
	<a href="<?php echo $this->Html->url('/'); ?>logins/login/" >Login</a>
	<br>
    </body>
</html>