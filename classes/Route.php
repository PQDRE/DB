<?php 

class Route{

	public static $Routes = [];
	public static function set($route, $function) {
		self::$Routes[] = $route;
		//print_r(self::$Routes);
		if($_GET['usl'] == $route) {
		$function->__invoke();}
	}

}


 ?>