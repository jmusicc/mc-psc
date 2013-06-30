<?php
	// *********************************************************************************************
    //Minecraft Skin Central CMS System V0.6
	//Author : P373R
	// *********************************************************************************************

	//Database Connection
	define('DB_HOST', 'localhost');
    define('DB_USER', '');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', '');

	// *********************************************************************************************
    // This paths are the two folders, where you are holding the skin and cloak files.
	//Paths must have the / at the end and preferrably the ./ at the beginning...
	//Lower and uppercase is Essential!!
	// *********************************************************************************************
	//Note that the skin path must be edited inside your client's minecraft.jar with a hex editor!
	//Editable files is differ in every build.
	// *********************************************************************************************
	//Theese two Directory names and the files in it MUST BE CHMOD 777 permissions!!!!!
	
	$skinpath="./MinecSkins123/";
	$cloakpath="./MinecCloaks123/";
	
	// Your server's Adress and port number
	$serveradress="yourserver.ip.or.domain.com";
	$serverport="25565";

	// *********************************************************************************************	
	// Language setup. Can be anything you want if u translate it, 
	// basicly this contains HU and EN languages.
	// *********************************************************************************************
	
	$language="en";
?>