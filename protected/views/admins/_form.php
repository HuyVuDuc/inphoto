<?php
/* @var $this AdminsController */
/* @var $model Admins */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'admins-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => FALSE,
        'enableClientValidation' => true
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'fullname'); ?>
<?php echo $form->textField($model, 'fullname', array('size' => 60, 'maxlength' => 250)); ?>
<?php echo $form->error($model, 'fullname'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'address'); ?>
<?php echo $form->textField($model, 'address', array('size' => 60, 'maxlength' => 250)); ?>
<?php echo $form->error($model, 'address'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'tel'); ?>
<?php echo $form->textField($model, 'tel', array('size' => 60, 'maxlength' => 250)); ?>
<?php echo $form->error($model, 'tel'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'email'); ?>
<?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 250)); ?>
<?php echo $form->error($model, 'email'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'nickname'); ?>
<?php echo $form->textField($model, 'nickname', array('size' => 60, 'maxlength' => 250)); ?>
<?php echo $form->error($model, 'nickname'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'password'); ?>
<?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 250)); ?>
<?php echo $form->error($model, 'password'); ?>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->