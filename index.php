<?php 

class Config {
	public $data;
	public function __construct() {
		$this->data = include  __DIR__ . '/config.php';
		//echo $this->data['db']['host'];
		

	}
}

class Db extends Config {
 	protected $_conn;
	public function __construct() {
		//include 'configg.php';
		$config = new Config();
		$param = $config->data['db']['driver'] . ':host=' . $config->data['db']['host'] . ';dbname=' . $config->data['db']['dbname'];
		try {
			$this->_conn = new PDO($param, $config->data['db']['user'], $config->data['db']['password']);
			echo 'ok';
		} catch (PDOException $e) {
			echo 'error' . var_dump($e);
		}

}
}
$db = new Db();


 ?>
