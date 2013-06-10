<?php
/* @var $this CostController */
/* @var $data Cost */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CostID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CostID), array('view', 'id'=>$data->CostID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Salaries')); ?>:</b>
	<?php echo CHtml::encode($data->Salaries); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FringeBenefits')); ?>:</b>
	<?php echo CHtml::encode($data->FringeBenefits); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Equipment')); ?>:</b>
	<?php echo CHtml::encode($data->Equipment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Travel')); ?>:</b>
	<?php echo CHtml::encode($data->Travel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ParticipantSupportCosts')); ?>:</b>
	<?php echo CHtml::encode($data->ParticipantSupportCosts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Materials')); ?>:</b>
	<?php echo CHtml::encode($data->Materials); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('PublicationCosts')); ?>:</b>
	<?php echo CHtml::encode($data->PublicationCosts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ConsultantServices')); ?>:</b>
	<?php echo CHtml::encode($data->ConsultantServices); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ComputerServices')); ?>:</b>
	<?php echo CHtml::encode($data->ComputerServices); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SubAwards')); ?>:</b>
	<?php echo CHtml::encode($data->SubAwards); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FacilityRental')); ?>:</b>
	<?php echo CHtml::encode($data->FacilityRental); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SARATime')); ?>:</b>
	<?php echo CHtml::encode($data->SARATime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OtherDirecCost')); ?>:</b>
	<?php echo CHtml::encode($data->OtherDirecCost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IndirectCost')); ?>:</b>
	<?php echo CHtml::encode($data->IndirectCost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Task')); ?>:</b>
	<?php echo CHtml::encode($data->Task); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Theme')); ?>:</b>
	<?php echo CHtml::encode($data->Theme); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Year')); ?>:</b>
	<?php echo CHtml::encode($data->Year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InstitutionAbrev')); ?>:</b>
	<?php echo CHtml::encode($data->InstitutionAbrev); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EntryDate')); ?>:</b>
	<?php echo CHtml::encode($data->EntryDate); ?>
	<br />

	*/ ?>

</div>