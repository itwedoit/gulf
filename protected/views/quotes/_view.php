<?php
/* @var $this QuotesController */
/* @var $data Quotes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Project')); ?>:</b>
	<?php echo CHtml::encode($data->Project); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Author')); ?>:</b>
	<?php echo CHtml::encode($data->Author); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TitleHeadline')); ?>:</b>
	<?php echo CHtml::encode($data->TitleHeadline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Publication')); ?>:</b>
	<?php echo CHtml::encode($data->Publication); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IssueEdition')); ?>:</b>
	<?php echo CHtml::encode($data->IssueEdition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Link')); ?>:</b>
	<?php echo CHtml::encode($data->Link); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Notes')); ?>:</b>
	<?php echo CHtml::encode($data->Notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Copy')); ?>:</b>
	<?php echo CHtml::encode($data->Copy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectID')); ?>:</b>
	<?php echo CHtml::encode($data->projectID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personID')); ?>:</b>
	<?php echo CHtml::encode($data->personID); ?>
	<br />

	*/ ?>

</div>