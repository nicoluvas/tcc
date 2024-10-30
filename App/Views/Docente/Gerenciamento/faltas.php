<input type="date" id="dia" max=<?= date('Y-m-d', strtotime('+1 day')) ?>>
<div class="faltas">
    <?php
        $this->renderView('faltasFiltradas', 'Docente/Gerenciamento');
    ?>
</div>
<script>
    $('input#dia').on('change', function () {
        $.ajax({
            'url': '/docente/gerenciamento/faltas',
            'type': 'GET',
            'dataType': 'html',
            'data': {'dia': $(this).val()}
        })
        .done(data => $('.faltas').html(data))
    })
</script>