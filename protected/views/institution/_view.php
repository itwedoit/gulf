<?php
/* @var $this InstitutionController */
/* @var $data Institution */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InstitutionAbrev')); ?>:</b>
	<?php echo CHtml::encode($data->InstitutionAbrev); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Field3')); ?>:</b>
	<?php echo CHtml::encode($data->Field3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AmountPerInstitution')); ?>:</b>
	<?php echo CHtml::encode($data->AmountPerInstitution); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InstitutionID')); ?>:</b>
	<?php echo CHtml::encode($data->InstitutionID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Institution')); ?>:</b>
	<?php echo CHtml::encode($data->Institution); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('State')); ?>:</b>
	<?php echo CHtml::encode($data->State); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Type')); ?>:</b>
	<?php echo CHtml::encode($data->Type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FundRec')); ?>:</b>
	<?php echo CHtml::encode($data->FundRec); ?>
	<br />

	*/ ?>

</div>