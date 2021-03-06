<?php echo $this->Form->create('Employee', array(
			'type'=>'file', 
			'novalidate'=>'novalidate'
			)
		); ?>
<div class="page-header">
	<h2>Actualizar Empleado</h2>
</div>
<div class="col-md-12">
	<div class="col-md-8">
		<!-- vacio -->
	</div>
	<div class="col-md-3">
		<div class="dropdown">
		  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		    Acciones
		    <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		
			<li><?php echo $this->Html->link(__('Lista Empleados'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Lista Panteones'), array('controller' => 'cementeries', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Nuevo Panteón'), array('controller' => 'cementeries', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('Lista Puestos'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Nuevo Puesto'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
		  </ul>
		</div>
	</div>
</div>

<div class="col-md-12">
	<div class="col-md-6">
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', 
			array(
				'label'=>'Nombre',
				'class'=>'form-control',
				'placeholder'=>'Nombre'
			)
		);
		echo $this->Form->input('numero_cobro',
			array(
				'label'=>'numero de Cobro',
				'class'=>'form-control',

				)
			);
		echo $this->Form->input('syndicate_id',
			array(
				'label'=>'Sindicato',
				'class'=>'form-control'
				)
			);
		echo $this->Form->input('addres',
			array(
				'label'=>'Dirección',
				'placeholder'=>'Dirección',
				'class'=>'form-control'
				)
			);
		echo $this->Form->input('telephone',
			array(
				'label'=>'Teléfono',
				'placeholder'=>'Teléfono',
				'class'=>'form-control'
				)
			);

		echo $this->Form->input('foto',
			array(
				'label'=>'Foto',
				'type'=>'file',
				'id'=>'foto',
				'class'=>'file',
				'data-show-upload'=>'false',
				'data-show-caption'=>'true'


				)
			);
		echo $this->Form->input('foto_dir',
			array(
				'type'=>'hidden'
				)
			);		
//INE y Dirección
		echo $this->Form->input('ife',
			array(
				'label'=>'INE',
				'type'=>'file',
				'id'=>'ife',
				'class'=>'file',
				'data-show-upload'=>'false',
				'data-show-caption'=>'true'
				)
			);
		echo $this->Form->input('ife_dir',
			array(
				'type'=>'hidden'
				)
			);		
		echo $this->Form->input('dom',
			array(
				'label'=>'Domicilio',
				'type'=>'file',
				'id'=>'dom',
				'class'=>'file',
				'data-show-upload'=>'false',
				'data-show-caption'=>'true'


				)
			);
		echo $this->Form->input('dom_dir',
			array(
				'type'=>'hidden'
				)
			);				
//Fin INE y Dirección
		echo $this->Form->input('cementery_id', 
			array(
				'class'=>'form-control',
				'label'=>'Panteón',
				'placeholder'=>'Panteón'
				)
			);
		echo $this->Form->input('position_id', 
			array(
				'class'=>'form-control',
				'label'=>'Puesto',
				'placeholder'=>'Puesto'
				)
			);

	?>
	<br>
	<?php echo $this->Form->end(
			array(
				'label'=>'Actualizar',
				'Class'=>'btn btn-info'
		)
	); ?>

	</div>
	<div class="col-md-6">
		<!-- vacio -->
	</div>
</div>
