<?php
class CAlbumController
{
	
	public function render() {
		$data = new CDownloadFromDisk();
		$arr_files = $data->getListFiles();
		$path_to_template = "../app/views/album.php";
		include($path_to_template);
	}
}