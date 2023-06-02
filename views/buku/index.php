<?php
    use yii\grid\GridView;
    use yii\grid\SerialColumn;
    use yii\grid\ActionColumn;
    use yii\helpers\Html;
?>
    <?= Html::a('Buku Baru', ['tambah'], ['class' => 'btn btn-primary']) ?>
<?=

    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => SerialColumn::className()],
            'id',
            'kode_buku',
            'judul',
            'jml_item',
            ['class' => ActionColumn::className()]
        ]
    ]);
?>
