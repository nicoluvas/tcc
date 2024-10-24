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
    })

    $('select#materia').on('change', function () {
        
    })
</script>
