<?php
/* @var $this MSearchController */
/* @var $model MSearch */

$this->breadcrumbs=array(
	'Project Search'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MSearch', 'url'=>array('index')),
	array('label'=>'Create MSearch', 'url'=>array('create')),
	array('label'=>'Update MSearch', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MSearch', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MSearch', 'url'=>array('admin')),
);
?>

<h1>Abstract for Projects<?php echo $model->ProjectTitle;?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
  
    'Award',
		'Grant',
		'Consortia',
		
		'Task',
		'SubAwards',
		'LastName',
		'FirstName',
		'StartDate',
		'EndDate',
		
		'Publication',
		'Institution',
	   'Keyword',
		
	),
)); ?>
