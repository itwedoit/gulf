<?php
/* @var $this StateController */
/* @var $model State */

$this->breadcrumbs=array(
	'States'=>array('index'),
	$model->StateID=>array('view','id'=>$model->StateID),
	'Update',
);

$this->menu=array(
	array('label'=>'List State', 'url'=>array('index')),
	array('label'=>'Create State', 'url'=>array('create')),
	array('label'=>'View State', 'url'=>array('view', 'id'=>$model->StateID)),
	array('label'=>'Manage State', 'url'=>array('admin')),
);
?>

<h1>Update State <?php echo $model->StateID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>