<?php
if (isset($_POST['submit']) || isset($_POST['connect'])) {
    $_SESSION['submit'] = $_POST['submit'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['mail'] = $_POST['mail'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['file'] = $_POST['file'];
}
include 'header.php';
?>

<?php
include 'footer.php';
if (isset($_POST['deconnect'])) {
    session_unset();
    session_destroy();
} else {
    session_write_close();
}
?>