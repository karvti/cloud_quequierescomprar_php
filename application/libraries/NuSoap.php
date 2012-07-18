<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NuSoap
{
	
	function __construct()
	{
		require_once(str_replace("\\","/",APPPATH).'libraries/nusoap-0.9.5/lib/nusoap'.EXT); //Por si estamos ejecutando este script en un servidor Windows
	}
	
}


