<?php  
class Db
{
	private $dbh;
	public function __construct() {
		$paramsPath = __DIR__ .'/routes.php';
			$params = include($paramsPath);

			$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
			$this->$dbh = new PDO($dsn, $params['user'], $params['password']);
		
	}

		public  function insert($data) {
			$res = $this->$dbh->prepare($data);
			$res = $res->execute();
		}
		public  function query($table){
			$result = $this->$dbh->prepare($table);
			$result2 = $result->execute();
			$res = $result->fetchAll(PDO::FETCH_ASSOC);
			if($res === false){
				return [];
			}
			return $res;
		}
		public function lastInsertId($query){
			$res = $this->$dbh->prepare($query);
			$res->execute();
			return $this->$dbh->lastInsertId();
		}
		
		


		
}


?>
