<?php 

class controller extends database {
	public static function CreateView($viewName) {
		require_once ("./View/$viewName.php");
		
	}
}








 ?>