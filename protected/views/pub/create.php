<?php
/* @var $this PubController */
/* @var $model Pub */

$this->breadcrumbs=array(
	'Pubs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pub', 'url'=>array('index')),
	array('label'=>'Manage Pub', 'url'=>array('admin')),
);
?>

<h1>Create Pub</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>