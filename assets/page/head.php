<?
if (isset($_SESSION['USER'])) {
    $user_id = $_SESSION['USER'];
    $sql = "SELECT * FROM users WHERE `id`='$user_id'";
    $USER = $connect -> query($sql) -> fetch();
}

if (isset($_GET['do'])) {
    if ($_GET['do'] == 'exit') {
        unset($_SESSION['USER']);
        echo '<script>document.location.href="?page=main"</script>';
    }
}

?>