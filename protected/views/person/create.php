<?php
/* @var $this PersonController */
/* @var $model Person */

$this->breadcrumbs=array(
	'people'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Person', 'url'=>array('index')),
	array('label'=>'People Search', 'url'=>array('admin')),
);
?>

<h1>Create Person</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>