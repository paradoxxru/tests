<?php
class CItem
{
	private $path;
	private $name;
	private $link;
	private $id;
	public function render($view) {
		$path_to_view = "../app/views/"
        ."/one_items/"
        .$view. ".php";
        include ($path_to_view);
	}
	public function toProperty($arr){
		foreach($arr as $key => $val)
        {
            if(property_exists($this, $key)){
            	$this->$key = $val;
            } 
                
        }
	}
}