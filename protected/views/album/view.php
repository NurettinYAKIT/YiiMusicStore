<?php
$this->breadcrumbs=array(
	'Albums'=>array('index'),
	$model->Title,
);

$this->menu=array(
	array('label'=>'List Album', 'url'=>array('index')),
	array('label'=>'Create Album', 'url'=>array('create')),
	array('label'=>'Update Album', 'url'=>array('update', 'id'=>$model->AlbumId)),
	array('label'=>'Delete Album', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->AlbumId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Album', 'url'=>array('admin')),
);
?>

<h1>View Album #<?php echo $model->AlbumId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'AlbumId',
		'GenreId',
		'ArtistId',
		'Title',
		'Price',
		'AlbumThumbUrl',
		'AlbumArtUrl',
		'tracks',
		'LinerNotes',
	),
)); ?>
