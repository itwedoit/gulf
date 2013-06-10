<?php
/* @var $this InstitutionNewController */
/* @var $model InstitutionNew */

$this->breadcrumbs=array(
	'Institution News'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List InstitutionNew', 'url'=>array('index')),
	array('label'=>'Create InstitutionNew', 'url'=>array('create')),
	array('label'=>'View InstitutionNew', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage InstitutionNew', 'url'=>array('admin')),
);
?>

<h1>Update InstitutionNew <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>