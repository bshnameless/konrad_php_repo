<?PHP 
/*
 *  Belépés kontroll 
 */

 if(isset($_SESSION["belepve".$page["secretkey"]])){ header("Location: index.php"); } //ha bevan lépve ne engedje a login paget
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$page["title"];?></title>
</head>
<body>
    <h1>Picsafüst belépés</h1>
    <form method="POST">
        <input type="text" placeholder="ID" name="fh" />
        <input type="password" placeholder="PW" name="pw" />
        <br />
        <br />
        <input type="submit" name="loginBtn" value="Bejelentkezés" />
    </form>
</body>
</html>