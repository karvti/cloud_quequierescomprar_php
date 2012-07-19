<?php

require_once 'application/models/bean/usuario.php';

class Usuario_action extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	
	
	/**
	 * Función que graba los datos de un usuario.
	 * @param Usuario $usuario
	 */
	public function insertar_usuario($usuario)
	{
		$data = array(
				'c_usuario'		=> $usuario->get_c_usuario(),
				'email'			=> $usuario->get_email(),
				'clave'			=> $usuario->get_clave(),
				'ape_paterno'	=> $usuario->get_ape_paterno(),
				'ape_materno'	=> $usuario->get_ape_materno(),
				'nombre'		=> $usuario->get_nombre(),
				'nro_doc_id'	=> $usuario->get_nro_doc_id(),
				'cod_sexo'		=> $usuario->get_cod_sexo(),
				'direccion'		=> $usuario->get_direccion(),
				'c_ubigeo'		=> $usuario->get_c_ubigeo(),
				'celular'		=> $usuario->get_celular(),
				'telefono'		=> $usuario->get_telefono()
				);
		$this->db->insert('USUARIO', $data);
	}
	
	
	public function verificar_usuario_existe($usuario)
	{
		$this->db->select('c_usuario');
		$this->db->from('USUARIO');
		$this->db->where('c_usuario', $usuario->get_c_usuario());
		$result = $this->db->get();
		
		if($result->num_rows() > 0)
		{
			return TRUE;
		} else 
		{
			return FALSE;
		}
	}
	
	

	
	
	
}