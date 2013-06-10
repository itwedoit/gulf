<?php
/* @var $this OutreachController */
/* @var $model Outreach */

$this->breadcrumbs=array(
	'Outreaches'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Outreach', 'url'=>array('index')),
	array('label'=>'Create Outreach', 'url'=>array('create')),
	array('label'=>'View Outreach', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Outreach', 'url'=>array('admin')),
);
?>

<h1>Update Outreach <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>