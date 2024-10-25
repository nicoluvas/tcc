<?php
    if (!EM_PERIODO_LETIVO) {
        ?>
            <p style="display:flex; justify-content:center; font-size: 10vh;">Fora de período letivo. 😐</p>
        <?php
        die();
    }
?>
<style>
    @import url('/assets/css/global.css');
    .selects {
    margin: 1vw;
    display: flex;
    justify-content: space-evenly;
}
select {
    padding: 1rem;
    background-color: var(--accent);
    color: var(--text);
    font-weight: 600;
    border-radius: .5rem;
    border: none;
    margin: 1vw;
}
main {
    display:flex;
    flex-direction:column;
    align-items:center;
}
</style>
<div class="selects">
    <select name="turma" id="turma" required>
        <option value="" id="init" selected style="display: none;">Selecione uma turma</option>
        <?php
            foreach($this->turmas as $turma):
                if (!array_key_exists($turma->cd_turma, $this->professor_materias_turmas)) continue;
                ?>
                    <option value="<?= $turma->cd_turma ?>"><?= $turma->nm_turma ?></option>
                    <?php
            endforeach;
            ?>
    </select>
    <select name="materia" id="materia" required disabled>
        <option value="" selected style="display: none;">Selecione uma matéria</option>
        <?php
            $aux = [];
            foreach($this->professor_materias_turmas as $turma):
                foreach ($turma as $id_materia => $materia):
                    if (array_key_exists($id_materia, $aux)) continue;
                    $aux[$id_materia] = $materia;
                    ?>
                        <option value="<?= $id_materia ?>"><?= $materia ?></option>
                    <?php
                endforeach;
            endforeach;
        ?>
    </select>
    <select name="unidade" id="unidade">
        <?php
            for ($i=1; $i<=UNIDADE; $i++):
                ?>
                    <option value="<?= $i ?>">Unidade <?= $i ?></option>
                <?php
            endfor;
        ?>
    </select>
</div>

<div class="situacao">
    Selecione as opções
</div>

<script>
    let professor_materia = <?= json_encode($this->professor_materias_turmas) ?>;

    $('select#turma').on('change', function () {
        $('select#materia').prop('disabled', false)

        let turma = $(this).val()
        $('select#materia option').each(function () {
            if ($(this).val() in professor_materia[turma]) {
                $(this).css('display', 'block')
            } else {
                $(this).css('display', 'none')
            }
        })

        $('select#materia').val('')
        $('div.situacao').text('Selecione as opções')
    })

    $('select#materia, select#unidade').on('change', function () {
        if ($('select#materia').val() == '') {
            return
        }
        $.ajax({
            'url': `/professor/situcacao/turma/${$('select#turma').val()}/materia/${$('select#materia').val()}/unidade/${$('select#unidade').val()}`,
            'type': 'GET',
            'dataType': 'html'
        })
        .done(function(data) {
            $('div.situacao').html(data)
        })
    })
</script>
