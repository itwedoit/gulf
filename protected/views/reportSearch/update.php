<?php
/* @var $this ReportSearchController */
/* @var $model Report */

$this->breadcrumbs=array(
	'Reports'=>array('index'),
	$model->ReportID=>array('view','id'=>$model->ReportID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Report', 'url'=>array('index')),
	array('label'=>'Create Report', 'url'=>array('create')),
	array('label'=>'View Report', 'url'=>array('view', 'id'=>$model->ReportID)),
	array('label'=>'Manage Report', 'url'=>array('admin')),
);
?>

<h1>Update Report <?php echo $model->ReportID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>