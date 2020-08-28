<?PHP
if(!defined('SECURED')){
    exit("Nincs accessed!");
}

//Adatbázis adatok
$sql = array(
    'HOST' => 'localhost',
    'ID' => 'root',
    'PW' => '',
    'DB' => 'test',
);

$page["title"] = "Oldalam neve";
$page["secretkey"] = "nkp5uKLNCXu2tcWERfxd9DgBcjHn9SBG";
