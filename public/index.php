<html>
	<head>
		<title>PHP SQLite3</title>
	</head>
	<body>
<?php

$db = new PDO('sqlite:../sqlite3/estimotesManager.db');
$result = $db->query("select * from users");
foreach( $result as $row)
{
	print_r($row);
}

$db->query("update users set password='temp' where username='derekkier'");

phpinfo();
die();
if ($db = new SQLiteDatabase('../sqlite3/test.db')) 
{
	echo 'sqlite exists';
			//$q = @$db->query('SELECT requests FROM tablename WHERE id = 1');
}
	?>
	</body>
</html>
