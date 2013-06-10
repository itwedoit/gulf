<?php
/* @var $this StateController */
/* @var $data State */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('StateID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->StateID), array('view', 'id'=>$data->StateID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::encode($data->ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('State')); ?>:</b>
	<?php echo CHtml::encode($data->State); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TotalFunds')); ?>:</b>
	<?php echo CHtml::encode($data->TotalFunds); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Type')); ?>:</b>
	<?php echo CHtml::encode($data->Type); ?>
	<br />


</div>