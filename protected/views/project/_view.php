<?php
/* @var $this ProjectController */
/* @var $data Project */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Grant')); ?>:</b>
	<?php echo CHtml::encode($data->Grant); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Consortia')); ?>:</b>
	<?php echo CHtml::encode($data->Consortia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Task')); ?>:</b>
	<?php echo CHtml::encode($data->Task); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProjectTitle')); ?>:</b>
	<?php echo CHtml::encode($data->ProjectTitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SubAwards')); ?>:</b>
	<?php echo CHtml::encode($data->SubAwards); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LastName')); ?>:</b>
	<?php echo CHtml::encode($data->LastName); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('FirstName')); ?>:</b>
	<?php echo CHtml::encode($data->FirstName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StartDate')); ?>:</b>
	<?php echo CHtml::encode($data->StartDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EndDate')); ?>:</b>
	<?php echo CHtml::encode($data->EndDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Award')); ?>:</b>
	<?php echo CHtml::encode($data->Award); ?>
	<br />

	*/ ?>

</div>