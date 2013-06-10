<?php
/* @var $this MSearchController */
/* @var $model MSearch */

$this->breadcrumbs = array(
    'Project Search' => array('admin'),
    'Search',
);

$this->menu = array(
    array('label' => 'List MSearch', 'url' => array('index')),
    array('label' => 'Create MSearch', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('msearch-grid', {
		data: $(this).serialize()
	});
	return false;
});

$('#export').live('click',function(){
	window.location.replace('http://tracker.gulfresearchinitiative.org/index.php?r=mSearch/export&' + $('.search-form form :input:not([type=\"hidden\"])').serialize());
	return false;
});
");
?>

<h1>Search for Projects</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" >
    <?php
    $this->renderPartial('_search1', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->


<?php
//$this->widget('EExcelView', array(
//    'dataProvider' => $model->search(),
//    'title' => 'Title',
//    'grid_mode' => 'export',
//    'template' => "{summary}\n{items}\n{exportbuttons}\n{pager}",
//    'columns' => array(
//        'ProjectTitle',
//        'Grant',
//        'Consortia',
//    )
//));
?>

<?php
$this->widget('ext.GroupGridView', array(
    'id' => 'msearch-grid',
    'dataProvider' => $model->search(),
    'mergeColumns' => array('ProjectTitle', 'Institution', 'LastName', 'State',),
    'columns' => array(
        array(
            'header' => '#',
            'value' => '++$row',
        ),
        'id',
//        array(
//            'header' => 'Project Title',
//            'value' => '$data->ProjectTitle . " --- ". $data->Grant . " --- ". //           $data->Consortia',
//            'type' => 'raw',
//        ),
       'ProjectTitle',
       'Grant',
        'Consortia',
//      'projectID',

        'State',
        'Institution',
        'LastName',
//        'Award',
        array(
            'name' => 'Award',
            'value' => '"$".number_format($data->Award,2)',
        ),
//        'StartDate',
//        'EndDate',
//        'Publication',
//        array('class' => 'CLinkColumn'),
        array('class' => 'CButtonColumn'),
    ),
    'summaryText' => '<div style="float:left;"><b>Total Amount:</b> ' . ($model->search()->itemCount === 0 ? 0 : '$' . number_format($model->getTotal($model->search()->criteria), 2)) . '</div><div style="float:right;">' . CHtml::link('Export to Excel', '#', array('id' => 'export')) . '</div> <div style="clear:both;"></div> <br> <b>Displaying:</b> {start} to {end} from {count}',
));
?>
