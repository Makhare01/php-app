<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo $root; ?>/">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <!-- <a class="nav-link active" aria-current="page" href="http://localhost/php/client?about">About</a> -->
                    <a class="nav-link active" href="<?php echo $root; ?>/about/">About</a>
                </li>
                <li class="nav-item">
                    <!-- <a class="nav-link active" aria-current="page" href="http://localhost/php/client?contacts">Contacts</a> -->
                    <a class="nav-link active" href="<?php echo $root; ?>/contacts/">contacts</a>
                </li>
            </ul>

            <span class="navbar-text">
                <?php
                echo $_SESSION['user']
                ?>
            </span>

            <form action="" method="GET">
                <input type="text" name="logout" value="logout" style="display: none" />
                <button type="submit" style="border: none">logout</button>
            </form>
        </div>
    </div>
</nav>

<?php
$p = explode('/', $_SERVER['REQUEST_URI']);

if (isset($p[3]) and $p[3] !== '') {
    if (file_exists($p[3] . '.php')) {
        include($p[3] . '.php');
    } else {
        echo '<h1>404</h1>';
    }
} else {
    include('main.php');
}
?>