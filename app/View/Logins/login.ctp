<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
    <head>
        <title>
            <?php
            echo $title . " " .$temp;
            ?>
        </title>
    </head>
    <body>
    <p>
    <?php
    	if (isset($error_msg)) {
    		echo $error_msg;
    	} else {
    		echo "";
    	}
    ?>
    </p>
    <form id="login_form" name="login_form" action="<?php echo $this->Html->url('/'); ?>logins/login" method="post" >
    	<table>
    		<tr>
    			<td>
    				Email   : <input type="text" name="user_email" id="user_email" />
    				Password: <input type="password" name="user_password" id="user_password" />
    			</td>
    			<td>
    				<input type="submit" name="login_submit" id="login_submit" value="ログイン" />
    			</td>
    		</tr>
    	</table>
    </form>
    <br><br>
    </body>
</html>