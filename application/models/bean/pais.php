<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pais
{
	
	private $_c_pais;
	private $_nombre;
	

	public function get_c_pais()
	{
	    return $this->_c_pais;
	}

	public function set_c_pais($c_pais)
	{
	    $this->_c_pais = $c_pais;
	}

	public function get_nombre()
	{
	    return $this->_nombre;
	}

	public function set_nombre($nombre)
	{
	    $this->_nombre = $nombre;
	}
}