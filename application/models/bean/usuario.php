<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario
{
	
	private $_c_usuario;
	private $_email;
	private $_clave;
	private $_ape_paterno;
	private $_ape_materno;
	private $_nombre;
	private $_nro_doc_id;
	private $_cod_sexo;
	private $_direccion;
	private $_c_ubigeo;
	private $_celular;
	private $_telefono;
	
	

	public function get_c_usuario()
	{
	    return $this->_c_usuario;
	}

	public function set_c_usuario($c_usuario)
	{
	    $this->_c_usuario = $c_usuario;
	}

	public function get_email()
	{
	    return $this->_email;
	}

	public function set_email($email)
	{
	    $this->_email = $email;
	}

	public function get_clave()
	{
	    return $this->_clave;
	}

	public function set_clave($clave)
	{
	    $this->_clave = $clave;
	}

	public function get_ape_paterno()
	{
	    return $this->_ape_paterno;
	}

	public function set_ape_paterno($ape_paterno)
	{
	    $this->_ape_paterno = $ape_paterno;
	}

	public function get_ape_materno()
	{
	    return $this->_ape_materno;
	}

	public function set_ape_materno($ape_materno)
	{
	    $this->_ape_materno = $ape_materno;
	}

	public function get_nombre()
	{
	    return $this->_nombre;
	}

	public function set_nombre($nombre)
	{
	    $this->_nombre = $nombre;
	}

	public function get_nro_doc_id()
	{
	    return $this->_nro_doc_id;
	}

	public function set_nro_doc_id($nro_doc_id)
	{
	    $this->_nro_doc_id = $nro_doc_id;
	}

	public function get_cod_sexo()
	{
	    return $this->_cod_sexo;
	}

	public function set_cod_sexo($cod_sexo)
	{
	    $this->_cod_sexo = $cod_sexo;
	}

	public function get_direccion()
	{
	    return $this->_direccion;
	}

	public function set_direccion($direccion)
	{
	    $this->_direccion = $direccion;
	}

	public function get_c_ubigeo()
	{
	    return $this->_c_ubigeo;
	}

	public function set_c_ubigeo($c_ubigeo)
	{
	    $this->_c_ubigeo = $c_ubigeo;
	}

	public function get_celular()
	{
	    return $this->_celular;
	}

	public function set_celular($celular)
	{
	    $this->_celular = $celular;
	}

	public function get_telefono()
	{
	    return $this->_telefono;
	}

	public function set_telefono($telefono)
	{
	    $this->_telefono = $telefono;
	}
}