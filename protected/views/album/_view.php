<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('AlbumId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->AlbumId), array('view', 'id'=>$data->AlbumId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GenreId')); ?>:</b>
	<?php echo CHtml::encode($data->GenreId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ArtistId')); ?>:</b>
	<?php echo CHtml::encode($data->ArtistId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Title')); ?>:</b>
	<?php echo CHtml::encode($data->Title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Price')); ?>:</b>
	<?php echo CHtml::encode($data->Price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AlbumThumbUrl')); ?>:</b>
	<?php echo CHtml::encode($data->AlbumThumbUrl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AlbumArtUrl')); ?>:</b>
	<?php echo CHtml::encode($data->AlbumArtUrl); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tracks')); ?>:</b>
	<?php echo CHtml::encode($data->tracks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LinerNotes')); ?>:</b>
	<?php echo CHtml::encode($data->LinerNotes); ?>
	<br />

	*/ ?>

</div>