<?php

    foreach ($this->faltas as $falta):
        ?>
            <div class="aluno" id="<?= $falta->cd_aluno ?>">
                <p class="nome"><?= $falta->nome_aluno ?></p>
                <p class="materia"><?= $falta->nm_materia ?></p>
                <p class="data"><?= date_format(date_create($falta->dt_aula), 'd/m/Y') ?></p>
                <button class="justificar" id="<?= $falta->cd_aluno ?>" periodo="<?= $falta->id_periodo_letivo ?>" aula="<?= $falta->id_aula ?>">Justificar</button>
            </div>
        <?php
    endforeach;
?>
<script>
    $('button.justificar').on('click', function () {
        $.ajax({
            'url': '/docente/gerenciamento/faltas/justificar',
            'data': {'aluno': $(this).attr('id'), 'periodo': $(this).attr('periodo'), 'aula': $(this).attr('aula')},
            'type': 'POST',
            'dataType': 'json'
        })
        .done((data) => {
            alert(data.msg)
            $(`.aluno#${$(this).attr('id')}`).remove()
        })
        .catch(function (a) {
            console.log(a)
        })
    })
</script>