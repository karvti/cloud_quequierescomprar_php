<?php echo form_open(base_url('')); ?>
<table cellpadding="0" cellspacing="0" border="1">
	<tr>
		<td>Usuario:</td>
		<td><?php
		$attr = array(
				'name'		=> 'txt_usuario',
				'id'		=> 'txt_usuario',
				'maxlength'	=> '30',
				'size'		=> '20',
				'class'		=> 'form_input'
		);
		echo form_input($attr);
		?>
		</td>
		<td>Clave:</td>
		<td><?php
		$attr = array(
				'name'		=> 'txt_clave',
				'id'		=> 'txt_clave',
				'maxlength'	=> '15',
				'size'		=> '15',
				'class'		=> 'form_input'
		);
		echo form_password($attr);
		?>
		</td>
		<td><?php
		echo form_submit('btn_enviar', 'Iniciar Sesión')
		?>
		</td>
	</tr>
</table>                                                                                                                                                                      
<?php echo form_close(); ?>
<table cellpadding="0" cellspacing="0" border="1">
	<tr>
		<td><img src="<?php echo base_url('imagenes/img_icon_user.png'); ?>" />
		</td>
		<td><?php echo 'RICKRAF'; ?></td>
	</tr>
</table>
<?php echo anchor('login/nuevo_usuario', 'Registrese');  ?>