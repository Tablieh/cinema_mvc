<?php
	namespace App;
	
	abstract class Autoloader {

		public static function register() {
			spl_autoload_register(array(__CLASS__, 'autoload'));
		}

		public static function autoload($class) {

			//$class = Model\Manager\EntrepriseManager (FullyQualifiedClassName)
			//namespace = Model\Manager, nom de la classe = EntrepriseManager

			// on explose notre variable $class par \
			$parts = preg_split('#\\\#', $class);
			//$parts = ['Model', 'Manager', 'EntrepriseManager']

			// on extrait le dernier element 
			$className = array_pop($parts);
			//$className = EntrepriseManager

			// on créé le chemin vers la classe
			// on utilise DS car plus propre et meilleure portabilité entre les différents systèmes (windows/linux) 

			//avant : ['Model', 'Manager']
			//après implode : "model\manager"
			$path = strtolower(implode(DS, $parts));
			
			$file = $className.'.php';
			//$file = EntrepriseManager.php

			$filepath = ROOT_DIR.$path.DS.$file;
			//$filepath = ./model/manager/EntrepriseManager.php
			if(file_exists($filepath)){
				require $filepath;
			}
		}
	}
