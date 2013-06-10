<?php
/* @var $this LevFunController */
/* @var $model LevFun */

$this->breadcrumbs=array(
	'Lev Funs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LevFun', 'url'=>array('index')),
	array('label'=>'Create LevFun', 'url'=>array('create')),
	array('label'=>'View LevFun', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LevFun', 'url'=>array('admin')),
);
?>

<h1>Update LevFun <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>