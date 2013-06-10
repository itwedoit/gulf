<?php
/* @var $this ExternalSearchController */
/* @var $model ExternalSearch */

$this->breadcrumbs=array(
	'External Searches'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExternalSearch', 'url'=>array('index')),
	array('label'=>'Create ExternalSearch', 'url'=>array('create')),
	array('label'=>'View ExternalSearch', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ExternalSearch', 'url'=>array('admin')),
);
?>

<h1>Update ExternalSearch <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>