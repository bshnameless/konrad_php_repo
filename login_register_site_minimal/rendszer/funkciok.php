<?PHP
if(!defined('SECURED')){
    exit("Nincs accessed!");
}

/**
 * Tábla ellenőr / létrehozó
 */
$tQuery = '
    CREATE TABLE users(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    login VARCHAR(255)NOT NULL,
    password VARCHAR(255) NOT NULL
    );
';
$tableQuery = $dbc->query($tQuery);



/*
    Login ellenőr
*/

if(isset($_POST["loginBtn"]) && isset($_POST["fh"]) && isset($_POST["pw"])){
    $fh = $dbc->real_escape_string($_POST["fh"]);
    $pw = $dbc->real_escape_string($_POST["pw"]);

    /**
     * Bejelentkezési adatok ellenőrzése az adatbázisban
     */
    if(!$loginQuery = $dbc->query("SELECT * FROM users WHERE login='{$fh}'")){
        die("Hiba a lekérdezés során: ".$dbc->error."");
    }
        // A találati eredmények ellenőrzése
        if($loginQuery->num_rows == 1){ // Ha van találat
            $loginAdat = $loginQuery->fetch_array();
            if($pw == $loginAdat["password"]){
                $_SESSION["belepve".$page["secretkey"]] = true;
                header("Location: index.php?page=kezdolap");
            }
        }

}
