<!DOCTYPE html>
<html>
<head>
	<title>Account creation</title>
</head>
<body>
<?php
    echo form_open('User_model/insert_entry');
    echo "E-mail : ".form_input('use_mail');
    echo "Name : ".form_input('use_name');
    echo "Surname : ".form_input('use_surname');
    echo form_submit('submit','Register');
?>

</body>
</html>