<?php
/* @var $this SearchPController */
/* @var $model SearchP */

$this->breadcrumbs=array(
	'Search Ps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SearchP', 'url'=>array('index')),
	array('label'=>'Manage SearchP', 'url'=>array('admin')),
);
?>

<h1>Create SearchP</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>