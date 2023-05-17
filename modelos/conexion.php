<?php

	class Conexion{
		static public function conectar(){
			$link = new PDO("mysql:host=192.168.1.12;port=3306;dbname=sifcon","eguzman","Unicah123@");
			$link ->exec("set names utf8");
			return $link;
		}
	}