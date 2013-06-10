<?php
/* @var $this LevFundController */
/* @var $model LevFund */

$this->breadcrumbs=array(
	'Leverage Funds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
/*	array('label'=>'List LevFund', 'url'=>array('index')),
	array('label'=>'Create LevFund', 'url'=>array('create')),
	array('label'=>'View LevFund', 'url'=>array('view', 'id'=>$model->id)),  */
	array('label'=>'Search LevFund', 'url'=>array('admin')),
);
?>

<h1>Update Leverage Funding <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>