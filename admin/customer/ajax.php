<?php
header("content-type:text/html; charset=UTF-8");
?>
<?php
require_once('../database/dbhelper.php');

if (!empty($_POST)) {
	if (isset($_POST['action'])) {
		$action = $_POST['action'];

		switch ($action) {
			case 'delete':
				if (isset($_POST['id_dangky'])) {
					$id = $_POST['id_dangky'];

					$sql = 'delete from tbl_dangky where id_dangky = '.$id;
					execute($sql);
				}
				break;
		}
	}
}?>