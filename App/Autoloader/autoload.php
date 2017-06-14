<?php 
session_start();
set_include_path($_SERVER['DOCUMENT_ROOT']);
//define("DS", DIRECTORY_SEPARATOR);

function __autoload($class)
{
    // Find Class Name from given class with Namespace
    $className = substr(strrchr($class, "\\"), 1);
    // Find Directory Name from given class with Namespace
    $dirName = str_replace("\\",DS,substr($class, 0, strrpos( $class, "\\")));

    $paths = explode(PATH_SEPARATOR, get_include_path());
    
    //$flags = PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE;
    //$file = strtolower(str_replace("\\", DIRECTORY_SEPARATOR, trim($class, "\\"))).".php";

    $libs = strtolower($className).'.php';
    $libClass = strtolower($className).'.class.php';
    $controllerName = str_replace('controller', '', strtolower($className)).'.controller.php';
    $modelName = strtolower($className).'_model.php';
    $interfacesName = $className.'.interface.php';
  
    foreach ($paths as $path)
    {

        //echo $path ."<br>";
        $filePath       = $path.DS.$dirName.DS.$libs;
        $libPath        = $path.DS.$dirName.DS.$libClass;
        $controllerPath = $path.DS.$dirName.DS.$controllerName;
        $modelPath      = $path.DS.$dirName.DS.$modelName;
        $interfacePath  = $path.DS.$dirName.DS.$interfacesName;
        //echo $combined."<br/>";
        if (file_exists($filePath)) {
           
            require_once $filePath;
            return;
        }elseif (file_exists($libPath)) {

            require_once($libPath);
            return;

        }elseif (file_exists($controllerPath)) {
            
            require_once($controllerPath);
            return;

        }elseif (file_exists($modelPath)) {
            
            require_once($modelPath);
            return;

        }elseif(file_exists($interfacePath)){

            require_once($interfacePath);
            return;

        }else{
            //Session::setFlash("Opps!Your Looking file Not Exists.");
            //Redirect::to('/');
            throw new Exception('Failed to include class :'.$className);
        }
    }
    
    throw new Exception("{$className} not found");

}
    new Blab\Libs\defaultSettings();
// Logged In User
    $default = \Blab\Libs\Registry::get('default');

    if (\Blab\Libs\Cookie::exists($default->cookieName) && !\Blab\Libs\Session::exists($default->sessionName)) {
        
        $hash = \Blab\Libs\Cookie::get($default->cookieName);
        
        $db = \Blab\Mvc\Models\Blab_Model::getDBInstance();

        $hashCheck = $db->query()
                    ->from('users_session')
                    ->where(array('hash','=',$hash))
                    ->firstResult();

        if ($hashCheck) {  

            //print_r($hashCheck->first()); 
            
            $user = new \Blab\Libs\BLAB_User($hashCheck->user_id);

            $user->login();
        }
    }

/*
class Autoloader
{
    public static function autoload($class)
    {
        autoload($class);
    }
    
}

spl_autoload_register('autoload');

spl_autoload_register(array('autoloader', 'autoload'));

// these can only be called within a class context...
// spl_autoload_register(array($this, 'autoload'));
// spl_autoload_register(__CLASS__.'::load');
*/