<?php
/* @var $this LevFunController */
/* @var $model LevFun */

$this->breadcrumbs=array(
	'Lev Funs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LevFun', 'url'=>array('index')),
	array('label'=>'Manage LevFun', 'url'=>array('admin')),
);
?>

<h1>Create LevFun</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>