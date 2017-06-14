<?php

	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', $_SERVER['DOCUMENT_ROOT']);
	define("VIEWS_PATH", ROOT.DS."App".DS."views");
	require_once ROOT.DS.'App'.DS.'Autoloader'.DS.'autoload.php';

    //print_r(\Blab\Libs\Registry::get('default'));
	use Blab\Mvc\Bootstrap as Bootstrap;
	Bootstrap::run($_SERVER['REQUEST_URI']);

	//new Blab\Libs\Blab_Model();
	/* Test Comment
	$test = new BLAB_Framework\Inspector("BLAB_Framework\Configuration");
	//$properties = $test->getClassProperties();
	//print_r($test->getPropertyMeta($properties[1]));
	print_r($test->getClassMeta());
*/
/*
$configuration = new BLAB\Libs\Configuration(array(
"type" => "ini"
));

$configuration = $configuration->initialize();
$parsed = $configuration->parse("database");
print_r($parsed);
*/
/*
$getMaches = BLAB_Framework\StringMethods::match("_type","^_([a-zA-Z]+)$");
var_dump($getMaches[0]);
*/
/*
$base = new BLAB_Framework\Base();
//var_dump($base->getProperty());
//var_dump($base->setProperty("foo"));
//var_dump($base->getProperty());
var_dump($base->property);
var_dump($base->property="foo");
var_dump($base->GETproperty());

//var_dump(explode("get", "getData"));
*/
/*
$config = new Blab\Config\Driver\Ini();
print_r($config->parse("Blab\Config\configuration"));
*/
//print_r($_SERVER['REQUEST_URI']);
/*
$router = new Blab\Mvc\Router();

$router-> addRoute(
new Blab\Mvc\Router\Route\Simple(array(
	"pattern" => "profile/:name",
	"controller" => "profile",
	"action" => "name"
	))
);

$router->url = $_SERVER['REQUEST_URI'];
//$router->url = 'chris/profile';
$router-> dispatch();

print_r($routes= $router->getRoutes());
//$router->_controller = "hello";
//echo $router->_controller;
*/
/*
$dis = new Blab\Mvc\Dispatcher(array(
	'url'=>$_SERVER['REQUEST_URI']
	));
$dis->dispatch();

//echo $router->getController();
/*
$dispatcher = new Blab\Mvc\dispatcher();
$dispatcher->dispatch();
*/
/*
$database = new Blab\Libs\Database(array(
				"type" =>"mysql",
				"options" =>array(
				"host" =>"localhost",
				"username" =>"root",
				"password" =>"",
				"dbName" =>"mvc_pro",
				"port" =>"3306"
			)
		));
$database = $database->initialize();
$connect = $database->connect();

// Get All Data

$all = $database->query()
	->from("users", array(
	"username" =>"abuahsan"
	))
	->join("points", "points.id = users.id", array(
	"points" =>"rewards"
	))
	->where(array(
		"username"=>"abuahsan"
	))
	->order("name", "desc")
	->limit(100)
	->all();

$print = print_r($all, true);
echo "all = >{$print}";

$getAll = $database->query()
	->from("users")
	->where(array(
		"username"=>"abuahsan"
	))
	->order("name", "desc")
	->limit(100)
	->all();

$print = print_r($getAll, true);
echo "all = >{$print}";
*/
/*
// INSERT Data
$id = $database->query()
->from("users")
->insert(array(
"username"=>"abuahsan",
"first_name" =>"MD: Abu Ahsan",
"last_name" =>"Apu",
"name"=>"MD : Abu Ahsan Basir",
"joined"=>date("Y-m-d")
));
echo "id = >{$id}\n";
*/
/*
// DELETE Data
$affected = $database->query()
->from("users")
->where(array(
	"username"=>"abuahsan",
	"last_name"=>"Apu"
))
->delete();
echo "affected =>{$affected}\n";
*/
/*
// Update Data
$id = $database->query()
->from("users")
->where(array(
		"username"=>"abuahsan",
		"last_name"=>"Apu"
	))
->update(array(
"last_name"=>"Basir",
"modified" =>date("Y-m-d H:i:s")
));
echo "id = >{$id}\n";
*/
/*
$count = $database->query()
->from("users")
->count();
echo "count = >{$count}\n";
*/
/*
$database = new Blab\Libs\Database(array(
				"type" =>"mysql",
				"options" =>array(
				"host" =>"localhost",
				"username" =>"root",
				"password" =>"",
				"dbName" =>"mvc_pro",
				"port" =>"3306"
			)
		));
$database = $database->initialize()->connect();

$user = new Blab\Mvc\Models\User(array(
    "connector" => $database
));
$database->createTable($user);

*/
/*
// Alternet

$database = new Blab\Libs\Database(array(
					"type" => "mysql",
					"options" => array(
					"host" => "localhost",
					"username" => "root",
					"password" => "",
					"dbName" => "mvc_pro"
				)
			));
Blab\Libs\Registry::set("database", $database->initialize()->connect());
$database = Blab\Libs\Registry::get("database");
$database->createTable(new Blab\Mvc\Models\User());
*/
?>
