<?php
class CAllAlbumsController
{

	public function render()
	{
		
		$data = new CDownloadFromDisk();
		$arr_files = $data->getListFiles();
		$path_to_template = "../app/views/allalbums.php";
		include($path_to_template);
	}
}