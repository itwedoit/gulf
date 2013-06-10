<?php
/* @var $this ReportSearchController */
/* @var $model Report */

$this->breadcrumbs=array(
	'Reports'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Report', 'url'=>array('index')),
	array('label'=>'Create Report', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('report-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Reports</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php
$dialog = $this->widget('ext.ecolumns.EColumnsDialog', array(
    'options' => array(
        'title' => 'Layout settings',
        'autoOpen' => false,
        'show' => 'fade',
        'hide' => 'fade',
    ),
    'htmlOptions' => array('style' => 'display: none'), //disable flush of dialog content
    'ecolumns' => array(
        'gridId' => 'report-grid', //id of related grid
        'storage' => 'session', //where to store settings: 'db', 'session', 'cookie'
        'fixedLeft' => array('CCheckBoxColumn'), //fix checkbox to the left side 
        'model' => $model, //model is used to get attribute labels
        'columns' => array(
             array(
            'header' => '#',
            'value' => '++$row',
        ),
            
           		'Award',
		'Project',
		'Task',
		'Theme',
		'ProjectTitle',
		'SubAwards',
		'LastName',
		'FirstName',
		'StartDate',
		'EndDate',
		'Publication',
		'AwardAmount',
            
            
            
            array(
                'class' => 'CButtonColumn',
            ),
        ),
    )
        ));
?>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'report-grid',
    'dataProvider' => $model->search(),
    'columns' => $dialog->columns(),
    'template' => $dialog->link() . "{summary}\n{items}\n{pager}",
//    'filter' => $model,
//    'columns' => array(
//        'firstName',
//        'lastName',
//        'Role',
//        'intstituionAbbr',
//        'projectID',
//        'degreePursuing',
//        'ThesisResearchTopic',
//        'Department',
//        'secondaryRole', /*
//          'email',
//
//
//
//          'Supervisor',
//          'ExpectedCompletionYear',
//          'CompletionsQuarter',
//          'SummerInternship',
//          'personID',
//          'Institution',
//          'eMailAddress', */
//        array(
//            'class' => 'CButtonColumn',
//        ),
//    ),
));
?>
