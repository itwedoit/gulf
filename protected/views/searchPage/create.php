<?php
/* @var $this SearchPageController */
/* @var $model SearchPage */

$this->breadcrumbs=array(
	'Search Pages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SearchPage', 'url'=>array('index')),
	array('label'=>'Manage SearchPage', 'url'=>array('admin')),
);
?>

<h1>Create SearchPage</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>