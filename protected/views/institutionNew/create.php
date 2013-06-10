<?php
/* @var $this InstitutionNewController */
/* @var $model InstitutionNew */

$this->breadcrumbs=array(
	'Institution News'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InstitutionNew', 'url'=>array('index')),
	array('label'=>'Manage InstitutionNew', 'url'=>array('admin')),
);
?>

<h1>Create InstitutionNew</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>