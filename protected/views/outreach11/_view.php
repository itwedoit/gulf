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

	<b><?php echo CHtml::encode($data->getAttributeLabel('OutreachProductActivity')); ?>:</b>
	<?php echo CHtml::encode($data->OutreachProductActivity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PartnersInActivity')); ?>:</b>
	<?php echo CHtml::encode($data->PartnersInActivity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Deliverables')); ?>:</b>
	<?php echo CHtml::encode($data->Deliverables); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TargetAudiences')); ?>:</b>
	<?php echo CHtml::encode($data->TargetAudiences); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ImpactsOutcomes')); ?>:</b>
	<?php echo CHtml::encode($data->ImpactsOutcomes); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Link')); ?>:</b>
	<?php echo CHtml::encode($data->Link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other')); ?>:</b>
	<?php echo CHtml::encode($data->other); ?>
	<br />

	*/ ?>

</div>