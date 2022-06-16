<?php include('header.php');?>

<div class="container mt-3">
    <h1>MOVIES</h1>
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="movies.php?fans=umc" class="btn btn-outline-primary">Marvel</a>
        <a href="movies.php?fans=dbz" class="btn btn-outline-primary">Dragon Ball Z</a>
        <a href="movies.php?fans=sw" class="btn btn-outline-primary">Star Wars</a>
    </div>

    <?php
    if (isset($_GET['fans'])) {
        switch ($_GET['fans']) {
            case 'umc':
                $title = 'Marvel';
                $description = 'El universo de superheroes mas famosos';
                $img = 'img/spiderman.jpg';
                break;

            case 'dbz':
                $title = 'Dragon Ball Z';
                $description = 'Goku y sus amigos batallan contra el mal';
                $img = 'img/goku.jpg';
                break;

            case 'sw':
                $title = 'Star Wars';
                $description = 'El maravilloso mundo de la galaxia';
                $img = 'img/dart-vader.jpg';
                break;
        }

    ?>
        <div class="card m-3" style="width: 15rem;">
            <img src="<?php echo $img ?>" class="img-thumbnail" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $title ?></h5>
                <p class="card-text"><?php echo $description ?></p>
            </div>
        </div>
    <?php
    }
    ?>

</div>

<?php include('footer.php'); ?>

</body>

</html>