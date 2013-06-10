<?php
/* @var $this OutreachController */
/* @var $model Outreach */

$this->breadcrumbs=array(
	'Outreaches'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Outreach', 'url'=>array('index')),
	array('label'=>'Manage Outreach', 'url'=>array('admin')),
);
?>

<h1>Create Outreach</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>