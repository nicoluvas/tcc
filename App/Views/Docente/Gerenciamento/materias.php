<form>
    <select name="turma" id="turma">
        <option value="" selected id='init'>Selecione uma turma</option>
        <?php
            foreach ($this->turmas as $turma):
                ?>
                    <option value="<?= $turma->cd_turma ?>" id="<?= $turma->cd_turma ?>"><?= $turma->nm_turma ?></option>
                    <?php
            endforeach;
        ?>
    </select>
    
    <select name="materia" id="materia" disabled>
        <option value="" id='init'>Selecione uma matéria</option>
        <?php
            foreach ($this->materias as $materia):
                ?>
                    <option value="<?= $materia->cd_materia ?>" id="<?= $materia->cd_materia ?>"><?= $materia->nm_materia ?></option>
                    <?php
            endforeach;
        ?>
    </select>
    <select name="professor" id="professor" disabled required>
        <option value="" selected></option>
        <?php
            foreach ($this->professores as $professor):
                ?>
                    <option value="<?= $professor->cd_docente ?>" id="<?= $professor->cd_docente ?>"><?= $professor->nome_docente ?></option>
                <?php
            endforeach;
        ?>
    </select>
    <p class="formretorno"></p>
    <button type="button" id="editar" disabled>Editar</button>
    <button type="button" id="cancelar" style="display:none">Cancelar</button>
    <button type="submit" id="salvar" style="display:none">Salvar</button>
</form>
<script>
    let professor_materia = <?= json_encode($this->professor_materia) ?>;
    $('form button#editar').on('click', function () {
        $(this).css('display', 'none')
        $('form button#cancelar').css('display', 'block')
        $('form button#salvar').css('display', 'block')
        $('form select#professor option#init').remove()
        $('form select#professor').prop('disabled', false)
    })
    
    $('form button#cancelar').on('click', function () {
        $(this).css('display', 'none')
        $('form button#salvar').css('display', 'none')
        $('form button#editar').css('display', 'block')
        $('form select#professor').prop('disabled', true)
        $('form select#professor').val(professor_materia[$('#turma').val()][$('#materia').val()])
    })

    $('form').on('submit', function (e) {
        e.preventDefault()

        $.ajax({
            url: '/docente/gerenciamento/materias',
            type: 'POST',
            dataType: 'json',
            data: $(this).serialize()
        })
        .done(data => {
            $('form button#cancelar').css('display', 'none')
            $('form button#salvar').css('display', 'none')
            $('form button#editar').css('display', 'block')
            if (data.ok) {
                $('.formretorno').text(data.msg)
                professor_materia[$('#turma').val()][$('#materia').val()] = $('#professor').val()                
                $('select#professor').prop('disabled', true)
                return
            }
            $('select#professor').prop('disabled', true)
            $('form select#professor').val(professor_materia[$('#turma').val()][$('#materia').val()])
            $('.formretorno').text(data.msg)
        })
        .catch(function (a) {
            console.log(a)
        })
    })

    $('form select#turma').on('change', function () {
        $('form select#turma option#init').remove()
        $('form select#materia').prop('disabled', false)

        var turma = $(this).val()
        $('form select#materia option').each(function () {
            if ($(this).val() in professor_materia[turma]) {
                $(this).css('display', 'block')
            } else {
                $(this).css('display', 'none')
            }
        })
    })

    $('form select#materia').on('change', function () {
        $('form select#materia option#init').remove()
        $('form button#editar').prop('disabled', false)

        var idTurma = $('form select#turma').val()
        var idMateria = $(this).val()
        if (professor_materia[idTurma][idMateria]){
            $('form select#professor').val(professor_materia[idTurma][idMateria])
        }
    })
</script>