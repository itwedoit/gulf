<?php
/* @var $this WorkshopController */
/* @var $data Workshop */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Project')); ?>:</b>
	<?php echo CHtml::encode($data->Project); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InternalExternal')); ?>:</b>
	<?php echo CHtml::encode($data->InternalExternal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Date1')); ?>:</b>
	<?php echo CHtml::encode($data->Date1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Location')); ?>:</b>
	<?php echo CHtml::encode($data->Location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Organizer')); ?>:</b>
	<?php echo CHtml::encode($data->Organizer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Objective')); ?>:</b>
	<?php echo CHtml::encode($data->Objective); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Participants')); ?>:</b>
	<?php echo CHtml::encode($data->Participants); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Participant')); ?>:</b>
	<?php echo CHtml::encode($data->Participant); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Website')); ?>:</b>
	<?php echo CHtml::encode($data->Website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectID')); ?>:</b>
	<?php echo CHtml::encode($data->projectID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personID')); ?>:</b>
	<?php echo CHtml::encode($data->personID); ?>
	<br />

	*/ ?>

</div>