<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
    <head>
        <title>
            <?php
            echo $info['title'];
            ?>
        </title>
    </head>
    <body>
    <?php
        echo "Thong tin co ban cua nguoi dung:<br>";
        echo "<ul>";
        echo "<li>	ユーザー名：　" . $info['content']['user_name'] . "</li>";
        echo "<li>　 ユーザー年齢：　" . $info['content']['user_age'] . "</li>";
        echo "<li>　 会社名：　" . $info['content']['user_company'] . "</li>";
        echo "</ul>";
    ?>
    </body>
</html>