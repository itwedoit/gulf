<?php
/* @var $this OutreachController */
/* @var $data Outreach */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Project')); ?>:</b>
	<?php echo CHtml::encode($data->Project); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Outreachproduct')); ?>:</b>
	<?php echo CHtml::encode($data->Outreachproduct); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Partners')); ?>:</b>
	<?php echo CHtml::encode($data->Partners); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Deliverable')); ?>:</b>
	<?php echo CHtml::encode($data->Deliverable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TargetAudience')); ?>:</b>
	<?php echo CHtml::encode($data->TargetAudience); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Impacts')); ?>:</b>
	<?php echo CHtml::encode($data->Impacts); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Link')); ?>:</b>
	<?php echo CHtml::encode($data->Link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personID')); ?>:</b>
	<?php echo CHtml::encode($data->personID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectID')); ?>:</b>
	<?php echo CHtml::encode($data->projectID); ?>
	<br />

	*/ ?>

</div>