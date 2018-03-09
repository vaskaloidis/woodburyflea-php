<?php
$admin = true;
$page = 'admin';
include('head.php');

if (isset($_POST['html']) && $_POST['html'] == TRUE) {
} else {
    print '
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
    </script>';
}

echo '<div class="main">
     <div class="container">
     <center>';

if (isset($_SESSION['admin'])) {
    if ($_SESSION['admin'] == true) {
        if (isset($_POST['updateContentAction'])) {
            $content = $_POST['content'];
            $section = $_POST['section'];
            $id = $_POST['id'];

            $query = $ContentDAO->updateSection($id, $content);

            if ($query) {
//                Rollbar::report_message('WFM Section update for Section: ' + $section, Level::INFO);
                echo '<p>Update successful!</p>';
                echo '<p><a href="' . $url . '">Return to Admin Section</a>';
            } else {
                throw new Exception('Error modifying section',
                    array(
                        "error_type" => "modify_section_action",
                        'section_id' => $id,
                        'section_name' => $section,
                        'section_content' => $content));
                echo '<p>Update Failed!</p>';
            }

        } elseif (isset($_POST['section'])) {
            $section = $_POST['section'];
            $query = mysqli_query($conn, "SELECT * FROM content WHERE section='$section'");

            $row = mysqli_fetch_assoc($query);
            ?>
            <h2><?= $row['niceName'] ?></h2>
            <form action="modifySectionAdmin.php" method="POST">
			<textarea rows="8" name="content" style="width:800px"><br/>
                <?= $row['content'] ?>
			</textarea><br/>
                <input type="hidden" name="id" value="<?= $row['id'] ?>"/>
                <input type="hidden" name="updateContentAction" value="TRUE"/>
                <input type="hidden" name="section" value="<?= $section ?>"/>
                <input class="btn" type="submit" name="submit" value="submit">
                <a href="<?= $url ?>admin.php">Cancel</a>
            </form>
        <?php }
    }
} else {
    echo 'You are not logged in.';
}

echo '</center></div></div>';

?>
