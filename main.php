<div class="col-md-9">
    <!-- batas atas bootstrap -->
    <?php
    // tangkap request di url

    if (isset($_REQUEST['hal']) && !empty($_REQUEST['hal'])) {
        $hal = $_REQUEST['hal'];
        include_once $hal . '.php';
    } else {
        include_once 'home.php';
    }

    ?>
</div>
<!-- batas bawah bootstrap -->
</div>