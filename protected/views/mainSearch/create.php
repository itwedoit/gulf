<?php
/* @var $this MainSearchController */
/* @var $model MainSearch */

$this->breadcrumbs=array(
	'Main Searches'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MainSearch', 'url'=>array('index')),
	array('label'=>'Manage MainSearch', 'url'=>array('admin')),
);
?>

<h1>Create MainSearch</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>