<?php
/* @var $this RoleController */
/* @var $data Role */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Role')); ?>:</b>
	<?php echo CHtml::encode($data->Role); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OtherRole')); ?>:</b>
	<?php echo CHtml::encode($data->OtherRole); ?>
	<br />


</div>