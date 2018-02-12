<?php
if (isset($_POST['submit']) || isset($_POST['connect'])) {
    $_SESSION['submit'] = $_POST['submit'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['mail'] = $_POST['mail'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['profilePic'] = $_POST['profilePic'];
}
include 'header.php';
?>
<?php if (isset($_SESSION['connect'])) { ?>
    <div class="card">
        <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
                <li class = "tab"><a class="active" href="#infos">Infos</a></li>
                <li class = "tab"><a href="#recentSearch">Recherche récente</a></li>
                <li class = "tab"><a href="#topic">Derniers topic visités</a></li>
            </ul>
        </div>
        <div id="infos">
            <ul class = "list-group list-group-flush">
                <li class = "list-group-item"><?= strip_tags($_SESSION['login']); ?></li>
                <li class = "list-group-item">Date de naissance: <?= strip_tags($_SESSION['birthdate']); ?></li>
                <li class = "list-group-item">Adresse mail: <?= strip_tags($_SESSION['mail']); ?></li>
            </ul>
        </div>
        <div id="recentSearch">
            <ul class = "list-group list-group-flush">
                <li class = "list-group-item">Recherche 1</li>
                <li class = "list-group-item">Recherche 2</li>
                <li class = "list-group-item">Recherche 3</li>
            </ul>
        </div>
        <div id="topic">
            <ul class = "list-group list-group-flush">
                <li class = "list-group-item">Topic 1</li>
                <li class = "list-group-item">Topic 2</li>
                <li class = "list-group-item">Topic 3</li>
            </ul>
        </div>
    </div>
<?php } else {
    ?><p>Vous n'êtes pas connecté. <a href="register.php">Inscrivez-vous</a> ou <a data-toggle="modal" href="#" data-target="#myModal">connectez-vous</a></p>
<?php }
?>

<?php
include 'footer.php';
?>
