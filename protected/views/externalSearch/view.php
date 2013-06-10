<?php
/* @var $this ExternalSearchController */
/* @var $model ExternalSearch */

$this->breadcrumbs=array(
	'External Searches'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ExternalSearch', 'url'=>array('index')),
	array('label'=>'Create ExternalSearch', 'url'=>array('create')),
	array('label'=>'Update ExternalSearch', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ExternalSearch', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExternalSearch', 'url'=>array('admin')),
);
?>

<h1>View ExternalSearch #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Grant',
		'Consortia',
		'Task',
		'ProjectTitle',
		'SubAwards',
		'LastName',
		'FirstName',
		'StartDate',
		'EndDate',
		'Keyword',
		'Publication',
		'InstitutionID',
		'State',
		'DataSet',
		'Award',
		'Type',
		'Theme1',
		'PersonID',
		'Theme2',
		'Theme3',
		'Theme4',
		'Theme5',
		'Institution',
	),
)); ?>
