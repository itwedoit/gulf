<?php
/* @var $this PersonController */
/* @var $data Person */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('personID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->personID), array('view', 'id'=>$data->personID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intstituionAbbr')); ?>:</b>
	<?php echo CHtml::encode($data->intstituionAbbr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institutionID')); ?>:</b>
	<?php echo CHtml::encode($data->institutionID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Institution')); ?>:</b>
	<?php echo CHtml::encode($data->Institution); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectID')); ?>:</b>
	<?php echo CHtml::encode($data->projectID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstName')); ?>:</b>
	<?php echo CHtml::encode($data->firstName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastName')); ?>:</b>
	<?php echo CHtml::encode($data->lastName); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Role')); ?>:</b>
	<?php echo CHtml::encode($data->Role); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eMailAddress')); ?>:</b>
	<?php echo CHtml::encode($data->eMailAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('secondaryRole')); ?>:</b>
	<?php echo CHtml::encode($data->secondaryRole); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('degreePursuing')); ?>:</b>
	<?php echo CHtml::encode($data->degreePursuing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ThesisResearchTopic')); ?>:</b>
	<?php echo CHtml::encode($data->ThesisResearchTopic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Department')); ?>:</b>
	<?php echo CHtml::encode($data->Department); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Supervisor')); ?>:</b>
	<?php echo CHtml::encode($data->Supervisor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ExpectedCompletionYear')); ?>:</b>
	<?php echo CHtml::encode($data->ExpectedCompletionYear); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CompletionsQuarter')); ?>:</b>
	<?php echo CHtml::encode($data->CompletionsQuarter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SummerInternship')); ?>:</b>
	<?php echo CHtml::encode($data->SummerInternship); ?>
	<br />

	*/ ?>

</div>