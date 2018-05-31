<?php
include 'database.php';
include 'dbc.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Guest Book</title>

</head>

<body>
<h1><strong>Please Enter Your Comment here:</strong></h1>
<?php
echo"<form method='POST' action='".setcomments($conn)."'>
<input type='hidden' name='userid' value='Anonymous'>
<textarea name='message'></textarea><br>
<button type='submit; name='commentSubmit'>Comment</button>
</form>";
?>
</body>
</html>