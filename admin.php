<?php $page = 'admin';
$admin = true; ?>
<?php
    include('head.php');
//    session_start();
?>
<style>

.sections {
	padding:15px;
	border:1px solid black;
}
</style>
<?php if(isset($_SESSION['admin'])){ ?>
<?php if($_SESSION['admin'] == true) { ?>
    <div class="container" >
        <h1> Admin Section </h1 >
        <hr >
        <?php
        foreach ($ContentDAO->getSections() as $row) {
            $section = $row->getSection();
            echo '<h3>';
            echo $row->getNiceName();
            echo '</h3>'
            ?>

            <form action="modifySectionAdmin.php" method="post">
                <button type="submit" class="btn btn-small btn-primary">Edit Section</button>
                <small><b>html:</b></small>
                <input type="checkbox" name="html" value="TRUE"/>
                <input type="hidden" name="section" value="<?php echo $row->getSection(); ?>"/>
            </form><br>
            <div class="sections">
                <?php echo $row->getContent(); ?>
            </div>

            <hr>
        <?php } ?>


    <hr>
    <?php
    }
} else {
    if (isset($_POST['loginSubmitted'])) {
        echo '<p>You have succesfully logged in</p>';
    } else {
        echo 'You are not logged in';
    }
}
    ?>
    </div>
<br>
<br>
</body>
</html>