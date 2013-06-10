<?php
/* @var $this LeverageFundingController */
/* @var $model LeverageFunding */

$this->breadcrumbs=array(
	'Leverage Fundings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LeverageFunding', 'url'=>array('index')),
	array('label'=>'Manage LeverageFunding', 'url'=>array('admin')),
);
?>

<h1>Create LeverageFunding</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>