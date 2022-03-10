<!--
## Snack 5
Prendere un testo abbastanza lungo, contenente diverse frasi. 
Prendere il testo e suddividerlo in tanti paragrafi ogni volta 
in cui si incontrerà un punto. -->

<?php
$testo="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\r\n 
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. \r\n
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r";

$testo_a_capo=nl2br($testo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Testo con a capo automatici=</h1>
<p><?php echo $testo?></p>

<h1>Testo con a capo manuali=</h1>
<p><?php echo $testo_a_capo?></p>
    
</body>
</html>