<?php
/* @var $this ExternalSearchController */
/* @var $model ExternalSearch */

$this->breadcrumbs=array(
	'External Searches'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExternalSearch', 'url'=>array('index')),
	array('label'=>'Manage ExternalSearch', 'url'=>array('admin')),
);
?>

<h1>Create ExternalSearch</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>