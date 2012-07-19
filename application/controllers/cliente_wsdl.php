<?php

class Cliente_wsdl extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->library('nusoap_lib');

		$this->nusoap_client = new nusoap_client("http://localhost:8060/ws_practica/PersonaService?wsdl", TRUE);
		if($this->nusoap_client->fault)
		{
			echo 'Error: '.$this->nusoap_client->fault;
			return;
		}
		else
		{
			if ($this->nusoap_client->getError())
			{
				echo 'Error: '.$this->nusoap_client->getError();
				return;
			}
			else
			{
				$parametros = array('apellidoPaterno' => 'Principe');
				$row = $this->nusoap_client->call('consultarPersona', $parametros);

				if (!$error = $this->nusoap_client->getError())
				{
					echo "Resultado: ".print_r ($row);
				} else
				{
					echo "ERROR:".print_r ($error);
				}


			}
		}


	}

}

/*

$endpoint = " http://server:8080/provision/services/provision ";
$ns = "provision.ws.namespace.com";
$client = new nusoapclient($endpoint);
$result = $client->call('doTest', array ('index' => 12), $ns);
echo '<h2>Request</h2>';
echo '<pre>' .  htmlspecialchars($client->request, ENT_QUOTES) .  '</pre>'; > echo '<h2>Response</h2>';
echo '<pre>' .  htmlspecialchars($client->response, ENT_QUOTES) .  '</pre>';*/