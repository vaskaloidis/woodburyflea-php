<?php

class ContentDAO{
	public static $conn, $sql, $dir;

	public function __construct($connection, $config) {
        self::$conn = $connection;

        $dir = Config::get('dir');
        self::$dir = $dir;
        include $dir . 'lib/Content.php';
    }

    public function getSections() {
        $sql = "SELECT * FROM content";

        $query = mysqli_query(self::$conn, $sql);

        while($row = mysqli_fetch_array($query)) {
            $Content = new Content();
            $Content->getid($row['id']);
            $Content->setSection($row['section']);
            $Content->setContent($row['content']);
            $Content->setCreated($row['created']);
            $Content->setNiceName($row['niceName']);
            $results[] = $Content;
        }
        return $results;
    }

	public function getContent($section) {
		$sql = "SELECT * FROM content WHERE section ='" . $section . "' ";

		$result = mysqli_query(self::$conn, $sql);

		while($row = mysqli_fetch_array($result)) {

			$Content = new Content();
			$Content->getid($row['id']);
			$Content->setSection($row['section']);
			$Content->setContent($row['content']);
			$Content->setCreated($row['created']);
            $Content->setNiceName($row['niceName']);

            return $Content;
		}
	}

	public function deleteItem($id){
        $sql = "DELETE FROM posts WHERE id='$id'";

        $result = mysqli_query(self::$conn, $sql);

        if($result){
            return true;
        } else {
            return false;
        }
    }

    public function updateSection($id, $update){

        $sql = 'UPDATE content SET content = "' . mysqli_real_escape_string(self::$conn, $update) . '" WHERE id = ' . $id . ' ';

        $result = mysqli_query(self::$conn, $sql);

        if($result){
            return TRUE;
        } else {
            echo '<div class="alert alert-danger">Sorry, there wasn an error posting your content. Please send me an email to let me know, click <a href="' . $url . '">HERE</a></div>';
            return FALSE;
        }
    }
}


?>