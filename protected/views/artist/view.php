<?php
$this->breadcrumbs=array(
	'Artists'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Artist', 'url'=>array('index')),
	array('label'=>'Create Artist', 'url'=>array('create')),
	array('label'=>'Update Artist', 'url'=>array('update', 'id'=>$model->ArtistId)),
	array('label'=>'Delete Artist', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ArtistId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Artist', 'url'=>array('admin')),
);
?>

<h1>View Artist #<?php echo $model->ArtistId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ArtistId',
		'Name',
		'bio',
		'ArtistArtUrl',
	),
)); ?>
