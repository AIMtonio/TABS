<?php
try{
	require '../mongo/vendor/autoload.php';
		$mongo = new \MongoDB\Client;
		$db = $mongo->selectDatabase('agencia');
}
catch(MongoConnectionExceptioon $e){
	die($e->getMessage());
};  

?>