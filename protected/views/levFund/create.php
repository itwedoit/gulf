<?php
/* @var $this LevFundController */
/* @var $model LevFund */

$this->breadcrumbs=array(
	'Leverage Funds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LevFund', 'url'=>array('index')),
	array('label'=>'Manage Leverage Funding', 'url'=>array('admin')),
);
?>

<h1>Create Funding</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>