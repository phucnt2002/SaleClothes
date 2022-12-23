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
				if (isset($_POST['id_user'])) {
					$id = $_POST['id_user'];

					$sql = 'delete from user where id_user = '.$id;
					execute($sql);
				}
				break;
		}
	}
}?>