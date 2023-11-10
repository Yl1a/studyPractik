<?
try{
    $connect = new PDO('mysql:host=localhost; dbname=car','root','');
}
catch( PDOException $e ){
    echo $e;
}

?>