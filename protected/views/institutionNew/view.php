<?php
/* @var $this InstitutionNewController */
/* @var $model InstitutionNew */

$this->breadcrumbs=array(
	'Institution News'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List InstitutionNew', 'url'=>array('index')),
	array('label'=>'Create InstitutionNew', 'url'=>array('create')),
	array('label'=>'Update InstitutionNew', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete InstitutionNew', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InstitutionNew', 'url'=>array('admin')),
);
?>

<h1>View InstitutionNew #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'InstitutionAbrev',
		'Field3',
		'AmountPerInstitution',
		'ID',
		'InstitutionID',
		'Institution',
		'State',
		'Type',
		'FundRec',
		'personID',
		'projectID',
	),
)); ?>
