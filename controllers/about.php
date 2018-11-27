<?php 
class about extends controller {
	public static function test() {
		print_r(self::query("SELECT * FROM users"));
	}
}


 ?>