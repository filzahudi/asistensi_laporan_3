<?php
    use yii\widgets\DetailView;
?>

<?=

    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kode_buku',
            'judul',
            'jml_item',
        ]
    ])
?>
