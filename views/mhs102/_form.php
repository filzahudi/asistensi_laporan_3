<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin() ?>
<?=$form->field($mhs102, 'no_induk_mahasiswa') ?>
<?=$form->field($mhs102, 'nama_mahasiswa') ?>
<?=$form->field($mhs102, 'kelas') ?>

<?=
    Html::submitButton('Save', ['class' => 'btn btn-primary']
        )
?>

<?php ActiveForm::end() ?>