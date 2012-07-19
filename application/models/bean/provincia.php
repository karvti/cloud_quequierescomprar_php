<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Provincia
{
	
	private $_c_pais;
	private $_c_departamento;
	private $_c_provincia;
	private $_nombre;
	
	

	public function get_c_pais()
	{
	    return $this->_c_pais;
	}

	public function set_c_pais($c_pais)
	{
	    $this->_c_pais = $c_pais;
	}

	public function get_c_departamento()
	{
	    return $this->_c_departamento;
	}

	public function set_c_departamento($c_departamento)
	{
	    $this->_c_departamento = $c_departamento;
	}

	public function get_c_provincia()
	{
	    return $this->_c_provincia;
	}

	public function set_c_provincia($c_provincia)
	{
	    $this->_c_provincia = $c_provincia;
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