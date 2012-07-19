<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'application/models/bean/usuario.php';

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		redirect('principal');
	}


	
	public function nuevo_usuario()
	{

		$set_rules = array(
				array(
						'field'	=> 'txt_usuario',
						'label'	=> 'usuario',
						'rules'	=> 'trim|required|xss_clean')
		);

		$this->form_validation->set_rules($set_rules);

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('pag_form_usuario');
			$this->load->view('templates/footer');
		} else
		{
			$usuario = new Usuario();
			
			$usuario->set_c_usuario($this->input->post('txt_usuario'));
			$usuario->set_clave($this->input->post('txt_clave'));
			$usuario->set_ape_paterno($this->input->post('txt_ape_paterno'));
			$usuario->set_ape_materno($this->input->post('txt_ape_materno'));
			$usuario->set_nombre($this->input->post('txt_nombre'));
			$usuario->set_email($this->input->post('txt_email'));
			$usuario->set_nro_doc_id($this->input->post('txt_nro_doc_id'));
			$usuario->set_direccion($this->input->post('txt_direccion'));
			$usuario->set_celular($this->input->post('txt_celular'));
			$usuario->set_telefono($this->input->post('txt_telefono'));
			$usuario->set_cod_sexo($this->input->post('ddlb_sexo'));

			$this->_insertar_usuario($usuario);
			echo 'insertado';
		}
	}


	private function _insertar_usuario($usuario)
	{
		$this->load->model('usuario_action');

		if($this->usuario_action->verificar_usuario_existe($usuario) == TRUE)
		{
			return FALSE;
		} else {
			if($this->usuario_action->insertar_usuario($usuario) == TRUE)
			{
				return TRUE;
			} else {
				return FALSE;
			}
		}
	}

}