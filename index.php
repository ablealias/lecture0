<?php 
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');	
	class DBConnect{
		private $pdo;
		
		function __construct(){			
		}
		
		function connect() {			
			try {
				$this->pdo= new PDO('mysql:host=127.0.0.1;dbname=mccorp;port=3306',DB_USERNAME,DB_PASSWORD);
				echo "DB Connection Successful";
			}catch (PDOException $e) {			
				echo "Failed to connect to MySQL: " . $e->getMessage();
			}
			return $this->pdo;			
		}		
	}
     
        $dbconnect = new DBConnect();
		$pdo = $dbconnect->connect();	
		
   	

?>
