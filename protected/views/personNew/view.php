<?php
/* @var $this PersonNewController */
/* @var $model PersonNew */

$this->breadcrumbs=array(
	'Person News'=>array('index'),
	$model->personID,
);

$this->menu=array(
	array('label'=>'List PersonNew', 'url'=>array('index')),
	array('label'=>'Create PersonNew', 'url'=>array('create')),
	array('label'=>'Update PersonNew', 'url'=>array('update', 'id'=>$model->personID)),
	array('label'=>'Delete PersonNew', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->personID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PersonNew', 'url'=>array('admin')),
);
?>

<h1>View PersonNew #<?php echo $model->personID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'personID',
		'intstituionAbbr',
		'institutionID',
		'Institution',
		'projectID',
		'firstName',
		'lastName',
		'Role',
		'eMailAddress',
		'secondaryRole',
		'email',
		'degreePursuing',
		'ThesisResearchTopic',
		'Department',
		'Supervisor',
		'ExpectedCompletionYear',
		'CompletionsQuarter',
		'SummerInternship',
	),
)); ?>
