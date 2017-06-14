<?php

namespace Blab\Libs;


class defaultSettings
{
	public function __construct(){

		$configuration = new Configuration(array(
					"type" => "ini"
				));
		$path = ROOT.DS.'App'.DS.'Autoloader'.DS.'default';
		$configuration = $configuration->initialize();
		$parsed = $configuration->parse($path);
		Registry::set("default",$parsed->default);
	}
}