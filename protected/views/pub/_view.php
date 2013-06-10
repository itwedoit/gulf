<?php
/* @var $this PubController */
/* @var $data Pub */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Project')); ?>:</b>
	<?php echo CHtml::encode($data->Project); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Author')); ?>:</b>
	<?php echo CHtml::encode($data->Author); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('authorsStudents')); ?>:</b>
	<?php echo CHtml::encode($data->authorsStudents); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Title')); ?>:</b>
	<?php echo CHtml::encode($data->Title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Publication')); ?>:</b>
	<?php echo CHtml::encode($data->Publication); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Year')); ?>:</b>
	<?php echo CHtml::encode($data->Year); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Volume')); ?>:</b>
	<?php echo CHtml::encode($data->Volume); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Issue')); ?>:</b>
	<?php echo CHtml::encode($data->Issue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pages')); ?>:</b>
	<?php echo CHtml::encode($data->Pages); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ISBN')); ?>:</b>
	<?php echo CHtml::encode($data->ISBN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOI')); ?>:</b>
	<?php echo CHtml::encode($data->DOI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PublicationType')); ?>:</b>
	<?php echo CHtml::encode($data->PublicationType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PublicationStatus')); ?>:</b>
	<?php echo CHtml::encode($data->PublicationStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Theme')); ?>:</b>
	<?php echo CHtml::encode($data->Theme); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Keywords')); ?>:</b>
	<?php echo CHtml::encode($data->Keywords); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Link')); ?>:</b>
	<?php echo CHtml::encode($data->Link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LinkGoMRI')); ?>:</b>
	<?php echo CHtml::encode($data->LinkGoMRI); ?>
	<br />

	*/ ?>

</div>