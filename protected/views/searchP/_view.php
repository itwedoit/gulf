<?php
/* @var $this SearchPController */
/* @var $data SearchP */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	<?php echo CHtml::encode($data->total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Institution')); ?>:</b>
	<?php echo CHtml::encode($data->Institution); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AmountPerInstitution')); ?>:</b>
	<?php echo CHtml::encode($data->AmountPerInstitution); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProjectTitle')); ?>:</b>
	<?php echo CHtml::encode($data->ProjectTitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InstitutionID')); ?>:</b>
	<?php echo CHtml::encode($data->InstitutionID); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('Theme')); ?>:</b>
	<?php echo CHtml::encode($data->Theme); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('startDate')); ?>:</b>
	<?php echo CHtml::encode($data->startDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endDate')); ?>:</b>
	<?php echo CHtml::encode($data->endDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Publication')); ?>:</b>
	<?php echo CHtml::encode($data->Publication); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DataSet')); ?>:</b>
	<?php echo CHtml::encode($data->DataSet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PrincipalInvestigator')); ?>:</b>
	<?php echo CHtml::encode($data->PrincipalInvestigator); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consortia')); ?>:</b>
	<?php echo CHtml::encode($data->consortia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectID')); ?>:</b>
	<?php echo CHtml::encode($data->projectID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personID')); ?>:</b>
	<?php echo CHtml::encode($data->personID); ?>
	<br />

	*/ ?>

</div>