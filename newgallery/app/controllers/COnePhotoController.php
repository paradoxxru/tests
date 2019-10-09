<?php

class COnePhotoController
{
	public function render() {
		
		$data = new CDownloadFromDisk();
		$arr_files = $data->getInfoPhoto();
		$path_to_template = "../app/views/onephoto.php";
		include($path_to_template);
	}
}