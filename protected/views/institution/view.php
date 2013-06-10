<?php
/* @var $this InstitutionController */
/* @var $model Institution */

$this->breadcrumbs=array(
	'Institutions'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Institution', 'url'=>array('index')),
	array('label'=>'Create Institution', 'url'=>array('create')),
	array('label'=>'Update Institution', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Institution', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Institution', 'url'=>array('admin')),
);
?>

<h1>View Institution #<?php echo $model->ID; ?></h1>

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
	),
)); ?>
