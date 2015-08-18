<?php
    include('includes/header.php');
?>

<div class = "row">
    <div class = "large-12 collumn">
        <h1>User Home page</h1>

        <p>This is where user information will appear in the finished system.</p>

        <?php
            var_dump($_SESSION);
        ?>
    </div>

</div>

<?php
    include ('includes/footer.php');
?>
