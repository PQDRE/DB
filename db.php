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

		public  function insert_data($data) {
			$res = $this->$dbh->prepare($data);
			$res = $res->execute();
		}
		public  function get_data($table){
			$result = $this->$dbh->query($table);
			$res = $result->fetchAll(PDO::FETCH_ASSOC);
			if($res === false){
				return [];
			}
			return $res;
		}
		
		


		
}


?>