<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'album-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'GenreId'); ?>
		<?php echo $form->textField($model,'GenreId'); ?>
		<?php echo $form->error($model,'GenreId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ArtistId'); ?>
		<?php echo $form->textField($model,'ArtistId'); ?>
		<?php echo $form->error($model,'ArtistId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Title'); ?>
		<?php echo $form->textField($model,'Title',array('size'=>60,'maxlength'=>160)); ?>
		<?php echo $form->error($model,'Title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Price'); ?>
		<?php echo $form->textField($model,'Price'); ?>
		<?php echo $form->error($model,'Price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AlbumThumbUrl'); ?>
		<?php echo $form->textField($model,'AlbumThumbUrl',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'AlbumThumbUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AlbumArtUrl'); ?>
		<?php echo $form->textField($model,'AlbumArtUrl',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'AlbumArtUrl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tracks'); ?>
		<?php echo $form->textArea($model,'tracks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tracks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LinerNotes'); ?>
		<?php echo $form->textArea($model,'LinerNotes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'LinerNotes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->