<?php
/**
 * 
 */
class CDownloadFromDisk
{
	protected $name_dir;
	protected $files;

	function __construct()
	{
		self::setParams();
	}

	private function setParams() {
		if(isset($_GET)) {
			if(isset($_GET['page'])){
				if($_GET['page'] == 'allalbums')
					$this->name_dir = $_GET['page'];
				else
					$this->name_dir = "allalbums/".$_GET['page'];
			} 
		}
	}

	public function getListFiles() {
		if(isset($this->name_dir)) {
			$path = "./assets/img/".$this->name_dir;
			$folder = opendir($path);
			if($folder) {
				$i=0;
				while($file = readdir($folder)){
					if($file != '.' && $file != '..') {
						if(is_dir($path."/".$file)) {
							$this->files[$i]['path'] = $path."/".$file;
							$this->files[$i]['name'] = $file.".jpg";
							$this->files[$i]['link'] = $file;
						} else {
							$this->files[$i]['name'] = $file;
							$this->files[$i]['path'] = $path;
							$this->files[$i]['link'] = $file;
						}
						$i++;
					}
				} 
			}
		}
		return $this->files;
	}
	public function getInfoPhoto() {
		if(isset($_GET['path']) && isset($_GET['id'])) {
			$this->files[0]['path'] = $_GET['path'];
			$this->files[0]['name'] = $_GET['id'];
		}
		return $this->files;
	}
	
}