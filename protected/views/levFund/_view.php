<?php
/* @var $this LevFundController */
/* @var $data LevFund */
?>

<div class="view">
  <!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
        -->
	<b><?php echo CHtml::encode($data->getAttributeLabel('fundSource')); ?>:</b>
	<?php echo CHtml::encode($data->fundSource); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institutionID')); ?>:</b>
	<?php echo CHtml::encode($data->institutionID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectTitle')); ?>:</b>
	<?php echo CHtml::encode($data->projectTitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('startDate')); ?>:</b>
	<?php echo CHtml::encode($data->startDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endDate')); ?>:</b>
	<?php echo CHtml::encode($data->endDate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('objective')); ?>:</b>
	<?php echo CHtml::encode($data->objective); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('how')); ?>:</b>
	<?php echo CHtml::encode($data->how); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project')); ?>:</b>
	<?php echo CHtml::encode($data->project); ?>
	<br />

	*/ ?>

</div>