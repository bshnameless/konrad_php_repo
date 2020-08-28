<?PHP 
/*
 *  Belépés kontroll 
 */

 if(isset($_SESSION["belepve".$page["secretkey"]])){ header("Location: index.php"); } //ha bevan lépve ne engedje a login paget
 ?>

    <h1>Picsafüst belépés</h1>
    <form method="POST">
        <input type="text" placeholder="ID" name="fh" />
        <input type="password" placeholder="PW" name="pw" />
        <br />
        <br />
        <input type="submit" name="loginBtn" value="Bejelentkezés" />
    </form>