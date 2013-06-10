<?php
/* @var $this GrantYearController */
/* @var $model GrantYear */

$this->breadcrumbs=array(
	'Grant Years'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GrantYear', 'url'=>array('index')),
	array('label'=>'Manage GrantYear', 'url'=>array('admin')),
);
?>

<h1>Create GrantYear</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>