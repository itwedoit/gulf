<?php
/* @var $this ReportSearchController */
/* @var $model Report */

$this->breadcrumbs=array(
	'Reports'=>array('index'),
	$model->ReportID,
);

$this->menu=array(
	array('label'=>'List Report', 'url'=>array('index')),
	array('label'=>'Create Report', 'url'=>array('create')),
	array('label'=>'Update Report', 'url'=>array('update', 'id'=>$model->ReportID)),
	array('label'=>'Delete Report', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ReportID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Report', 'url'=>array('admin')),
);
?>

<h1>View Report #<?php echo $model->ReportID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ReportID',
		'Award',
		'Project',
		'Task',
		'Theme',
		'ProjectTitle',
		'SubAwards',
		'LastName',
		'FirstName',
		'StartDate',
		'EndDate',
		'Publication',
		'AwardAmount',
	),
)); ?>
