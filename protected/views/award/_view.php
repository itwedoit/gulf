<?php
/* @var $this AwardController */
/* @var $data Award */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Grant')); ?>:</b>
	<?php echo CHtml::encode($data->Grant); ?>
	<br />


</div>