<hr> 
<?php
$query = mysql_query("SELECT * FROM content WHERE section = 'secondSection'");
$row = mysql_fetch_assoc($query);

echo $row['content'];


?>
<hr>
<div class="row-fluid marketing">
    <div class="span9">
		<h4><i class="icon-flag"></i> News</h4>
		<?php 
		$pQuery = mysql_query("SELECT * FROM posts");

		while($row = mysql_fetch_array($pQuery)){ ?>

			<p><strong><?= $row['title'] ?></strong>
			<?= $row['content'] ?></p>

		<?php } ?>
    </div>
</div>
<hr>     

 <div class="footer">
        <p>&copy; The Woodbury Flea Market 2012 <?php if(!($_SESSION['loggedIn'])){ ?><a href="./login.php"><small>login</small></a><?php } else {
	echo'<a href="logout.php"><strong>Log-Out</strong></a>';
} ?></p>
      </div>
    </div> <!-- /container -->


  </body>
</html>