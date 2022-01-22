
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="newsAll.php"> <?php echo htmlspecialchars($_POST['name']) . "<br/>";?> </a>
<?php
echo htmlspecialchars($_POST['author']) . "<br/>";
echo htmlspecialchars($_POST['date']) . "<br/>";
echo htmlspecialchars($_POST['description']) . "<br/>";
//echo htmlspecialchars($_POST['status']) . "<br/>";
?>
</body>
</html>

