<?PHP
    session_start();    //Munkamenet indítása
    define('SECURED', true);    //Balfaszjóska védelem
    //Jó szórakozást hozzá :)


    include 'rendszer/adatok.php';

    /*
    * Adatbázis csatlakozás létrehozása 
    */
    $dbc = new mysqli($sql["HOST"], $sql["ID"], $sql["PW"], $sql["DB"]);
        if($dbc->connect_errno > 0){
            die('Hiba történt az adatbázishoz való kapcsolódás közben! [' . $dbc->connect_error . ']');
        }
    $dbc->set_charset("utf8");  //UTF8 charset
    include 'rendszer/funkciok.php';
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
    <?PHP
        /**
         * Jogosultság ellenőrzése
         */
        if(isset($_SESSION["belepve".$page["secretkey"]])){    // Ha a felhasználó be van lépve
            if(empty($_GET['page']) ){
                include("./oldalak/kezdolap.php"); 
            }else{
                
                    if(file_exists("./oldalak/".$_GET['page'].".php")){
                        include("./oldalak/".$_GET['page'].".php");
                    }else{
                        print'<meta http-equiv="refresh" content="0;404.php" />';
                    }
            }
        }else{
            include("oldalak/belepes.php");
        }

        $dbc->close();  //DBC lezárása
    ?>
</body>
</html>