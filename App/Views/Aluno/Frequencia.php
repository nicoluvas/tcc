<select name="materia" id="materia">
    <option value="">Selecionar Matéria</option>
    <?php
        foreach ($this->materias as $materia):
            ?>
                <option value="<?= $materia->cd_materia ?>"><?= $materia->nm_materia ?></option>
            <?php
        endforeach;
    ?>
</select>
<select name="unidade" id="unidade">
    <?php
        for ($i=1;$i<=UNIDADE;$i++):
            ?>
                <option value="<?= $i ?>" <?= $i==UNIDADE?'selected':'' ?>>Unidade <?= $i ?></option>
            <?php
        endfor;
    ?>
</select>

<div class="frequencia">
    <?php $this->renderView('tabelaFrequencia', 'Aluno'); ?>
</div>
<div class="faltas">
    <?php $this->renderView('faltas', 'Aluno'); ?>
</div>
<script>
    $('select#materia, select#unidade').on('change', function () {
        console.log($(this).val())

        $.ajax({
            'url': '/aluno/frequencia',
            'type': 'GET',
            'dataType': 'json',
            'data': {'materia': $('select#materia').val(), 'unidade': $('select#unidade').val()}
        })
        .done(data => {
            $('div.frequencia').html(data.frequencia)
            $('div.faltas').html(data.faltas)
        })
        .catch(data => console.log(data))
    })
</script>
