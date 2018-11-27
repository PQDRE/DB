<?php  class database
{

		public static function connect()
		{
			$paramsPath = __DIR__ .'/params.php';
			$params = include($paramsPath);


			$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
			$db = new PDO($dsn, $params['user'], $params['password']);

			return $db;
		}


		public static function query($query, $params= []) {
			$statement = self::connect()->prepare($query);
			$statement->execute($params);
			if(explode(' ', $query)[0] == 'SELECT') {
				$data = $statement->fetchAll();
				return $data;
			}
		}
}
?>