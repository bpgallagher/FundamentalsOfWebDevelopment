
<?php
define('DBCONNECTION', 'mysql:host=localhost;dbname=book');
define('DBUSER', 'YOUR USERNAME HERE');
define('DBPASS', 'YOUR PASSWORD HERE');


spl_autoload_register(function ($class) {
    $file = 'lib/' . $class . '.class.php';
    if (file_exists($file)) 
      include $file;
});

/* cloud9 database setup */
$ip = getenv('IP');
$port = '3306';
$user = getenv('C9_USER');
$connection = "mysql:host=$ip;port=$port;dbname=book";
$pdo = DatabaseHelper::setConnectionInfo(array(DBCONNECTION, $user, ''));

/* localhost mysql setup */
//$pdo = DatabaseHelper::setConnectionInfo(array(DBCONNECTION, DBUSER, DBPASS));

?>
