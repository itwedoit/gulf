<?php
/* @var $this QuotesController */
/* @var $model Quotes */

$this->breadcrumbs=array(
	'Quotes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Quotes', 'url'=>array('index')),
	array('label'=>'Create Quotes', 'url'=>array('create')),
	array('label'=>'Update Quotes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Quotes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Quotes', 'url'=>array('admin')),
);
?>

<h1>View Quotes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Project',
		'Author',
		'TitleHeadline',
		'Publication',
		'IssueEdition',
		'Link',
		'Notes',
		'Copy',
		'projectID',
		'personID',
	),
)); ?>
