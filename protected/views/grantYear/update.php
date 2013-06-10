<?php
/* @var $this GrantYearController */
/* @var $model GrantYear */

$this->breadcrumbs=array(
	'Grant Years'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List GrantYear', 'url'=>array('index')),
	array('label'=>'Create GrantYear', 'url'=>array('create')),
	array('label'=>'View GrantYear', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage GrantYear', 'url'=>array('admin')),
);
?>

<h1>Update GrantYear <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>