<h1>Add Post</h1>
<span style="color: red;font-size: xx-large;">
<?php 
if (isset($msg)) {
	if ($msg != '') {
		echo $msg . "<br><br>";
	} else {
		echo "";
	}
} else {
	echo "";
}
?>
</span>

<form action="<?php echo $this->webroot; ?>valids/demo02" method="post" name="demo02_form" id="demo02_form" >
	Title <span style="color: red;">(*)<?php if (isset($error['title'])) { echo $error['title']; } else { echo ""; } ?></span>
	<br>
	<input type="text" name="title" id="title" size="50" value="<?php if (isset($validate['title'])){ echo $validate['title']; } else { echo ""; } ?>" />
	<br><br>
	Info <span style="color: red;">(*)<?php if (isset($error['info'])) { echo $error['info']; } else { echo ""; } ?></span>
	<br>
	<input type="text" name="info" id="info" size="50" value="<?php if (isset($validate['info'])){ echo $validate['info']; } else { echo ""; } ?>" />
	<br><br>
	<input type="submit" name="submit" id="submit" value="Register" />
</form>