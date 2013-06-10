<?php
/* @var $this ReportSearchController */
/* @var $data Report */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ReportID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ReportID), array('view', 'id'=>$data->ReportID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Award')); ?>:</b>
	<?php echo CHtml::encode($data->Award); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Project')); ?>:</b>
	<?php echo CHtml::encode($data->Project); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Task')); ?>:</b>
	<?php echo CHtml::encode($data->Task); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Theme')); ?>:</b>
	<?php echo CHtml::encode($data->Theme); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProjectTitle')); ?>:</b>
	<?php echo CHtml::encode($data->ProjectTitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SubAwards')); ?>:</b>
	<?php echo CHtml::encode($data->SubAwards); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('LastName')); ?>:</b>
	<?php echo CHtml::encode($data->LastName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FirstName')); ?>:</b>
	<?php echo CHtml::encode($data->FirstName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('StartDate')); ?>:</b>
	<?php echo CHtml::encode($data->StartDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EndDate')); ?>:</b>
	<?php echo CHtml::encode($data->EndDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Publication')); ?>:</b>
	<?php echo CHtml::encode($data->Publication); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AwardAmount')); ?>:</b>
	<?php echo CHtml::encode($data->AwardAmount); ?>
	<br />

	*/ ?>

</div>