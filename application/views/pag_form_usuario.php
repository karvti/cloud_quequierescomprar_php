<?php echo form_open(base_url('login/nuevo_usuario')); ?>
<?php
# Array de los atributos del formulario
$atr = array(
		'ape_paterno'	=> array(
				'name'		=> 'txt_ape_paterno',
				'id'		=> 'txt_ape_paterno',
				'maxlength'	=> '30',
				'size'		=> '20',
				'class'		=> 'form_input'
		),
		'ape_materno'	=> array(
				'name'		=> 'txt_ape_materno',
				'id'		=> 'txt_ape_materno',
				'maxlength'	=> '30',
				'size'		=> '20',
				'class'		=> 'form_input'
		),
		'nombre'		=> array(
				'name'		=> 'txt_nombre',
				'id'		=> 'txt_nombre',
				'maxlength'	=> '40',
				'size'		=> '30',
				'class'		=> 'form_input'
		),
		'email'			=> array(
				'name'		=> 'txt_email',
				'id'		=> 'txt_email',
				'maxlength'	=> '40',
				'size'		=> '30',
				'class'		=> 'form_input'
		),
		'clave'			=> array(
				'name'		=> 'txt_clave',
				'id'		=> 'txt_clave',
				'maxlength'	=> '40',
				'size'		=> '30',
				'class'		=> 'form_input'
		),
		'c_usuario'			=> array(
				'name'		=> 'txt_usuario',
				'id'		=> 'txt_usuario',
				'maxlength'	=> '40',
				'size'		=> '30',
				'class'		=> 'form_input'
		),
		'nro_doc_id'			=> array(
				'name'		=> 'txt_nro_doc_id',
				'id'		=> 'txt_nro_doc_id',
				'maxlength'	=> '40',
				'size'		=> '30',
				'class'		=> 'form_input'
		),
		'direccion'			=> array(
				'name'		=> 'txt_direccion',
				'id'		=> 'txt_direccion',
				'maxlength'	=> '40',
				'size'		=> '30',
				'class'		=> 'form_input'
		),
		'celular'			=> array(
				'name'		=> 'txt_celular',
				'id'		=> 'txt_celular',
				'maxlength'	=> '40',
				'size'		=> '30',
				'class'		=> 'form_input'
		),
		'telefono'			=> array(
				'name'		=> 'txt_telefono',
				'id'		=> 'txt_telefono',
				'maxlength'	=> '40',
				'size'		=> '30',
				'class'		=> 'form_input'
		),
		'cod_sexo'			=> array(
				'M'		=> 'MASCULINO',
				'F'		=> 'FEMENINO'
		)
);

?>
<table cellspacing="0" cellpadding="0" border="1" width="700">
	<tr>
		<td>Usuario:</td>
		<td><?php echo form_input($atr['c_usuario']); ?></td>
		<td><?php echo form_error($atr['c_usuario']['name'], '<div class="form_error">', '</div>'); ?></td>
	</tr>
	<tr>
		<td>Clave:</td>
		<td><?php echo form_password($atr['clave']); ?></td>
		<td><?php echo form_error($atr['clave']['name'], '<div class="form_error">', '</div>'); ?></td>
	</tr>
	<tr>
		<td>Ape. Paterno:</td>
		<td><?php echo form_input($atr['ape_paterno']); ?></td>
		<td><?php echo form_error($atr['ape_paterno']['name'], '<div class="form_error">', '</div>'); ?></td>
	</tr>
	<tr>
		<td>Ape. Materno:</td>
		<td><?php echo form_input($atr['ape_materno']); ?></td>
		<td><?php echo form_error($atr['ape_materno']['name'], '<div class="form_error">', '</div>'); ?></td>
	</tr>
	<tr>
		<td>Nombre:</td>
		<td><?php echo form_input($atr['nombre']); ?></td>
		<td><?php echo form_error($atr['nombre']['name'], '<div class="form_error">', '</div>'); ?></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><?php echo form_input($atr['email']); ?></td>
		<td><?php echo form_error($atr['email']['name'], '<div class="form_error">', '</div>'); ?></td>
	</tr>
	<tr>
		<td>DNI:</td>
		<td><?php echo form_input($atr['nro_doc_id']); ?></td>
		<td><?php echo form_error($atr['nro_doc_id']['name'], '<div class="form_error">', '</div>'); ?></td>
	</tr>
	<tr>
		<td>Telefono:</td>
		<td><?php echo form_input($atr['telefono']); ?></td>
		<td><?php echo form_error($atr['telefono']['name'], '<div class="form_error">', '</div>'); ?></td>
	</tr>
	<tr>
		<td>Celular:</td>
		<td><?php echo form_input($atr['celular']); ?></td>
		<td><?php echo form_error($atr['celular']['name'], '<div class="form_error">', '</div>'); ?></td>
	</tr>
	<tr>
		<td>Direcci&oacute;n:</td>
		<td><?php echo form_input($atr['direccion']); ?></td>
		<td><?php echo form_error($atr['direccion']['name'], '<div class="form_error">', '</div>'); ?></td>
	</tr>
	<tr>
		<td>Sexo:</td>
		<td><?php echo form_dropdown('ddlb_sexo', $atr['cod_sexo']); ?></td>
		<td><?php echo form_error('ddlb_sexo', '<div class="form_error">', '</div>'); ?></td>
	</tr>
	<tr>
		<td colspan="2"><?php echo form_submit('btn_enviar', 'Grabar Datos'); ?>
		</td>
	</tr>

</table>
<?php echo form_close(); ?>
