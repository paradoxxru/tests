<?php
Class CRouter {
	public static function getController() {
		$param_padge = $_GET;
		$routes = [
			"allalbums" => "CAllAlbumsController",
			"album1" => "CAlbumController",
			"album2" => "CAlbumController",
			"album3" => "CAlbumController",
			"onephoto" => "COnePhotoController"
		];
		if(isset($param_padge['page']) && isset($routes[$param_padge['page']])) {
			$controller = new $routes[$param_padge['page']]();
		}
		else {
			$_GET['page'] = "allalbums";
			$controller = new $routes['allalbums']();
		}
		return $controller;
	}
}