<?php
/* @var $this GrantYearController */
/* @var $data GrantYear */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GrantUnitID')); ?>:</b>
	<?php echo CHtml::encode($data->GrantUnitID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GrantUnit')); ?>:</b>
	<?php echo CHtml::encode($data->GrantUnit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProgramID')); ?>:</b>
	<?php echo CHtml::encode($data->ProgramID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StartDate')); ?>:</b>
	<?php echo CHtml::encode($data->StartDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EndDate')); ?>:</b>
	<?php echo CHtml::encode($data->EndDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AwardDate')); ?>:</b>
	<?php echo CHtml::encode($data->AwardDate); ?>
	<br />


</div>