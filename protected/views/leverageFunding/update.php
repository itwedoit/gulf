<?php
/* @var $this LeverageFundingController */
/* @var $model LeverageFunding */

$this->breadcrumbs=array(
	'Leverage Fundings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LeverageFunding', 'url'=>array('index')),
	array('label'=>'Create LeverageFunding', 'url'=>array('create')),
	array('label'=>'View LeverageFunding', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LeverageFunding', 'url'=>array('admin')),
);
?>

<h1>Update LeverageFunding <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>