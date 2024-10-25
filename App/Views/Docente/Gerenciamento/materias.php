<style>
select[readonly='readonly'] {
    background: #eee;
    pointer-events: none;
    touch-action: none;
}
</style>
<form>
    <div class="selects">


        <select name="turma" id="turma">
            <option value="" selected style="display: none;">Selecione uma turma</option>
            <?php
            foreach ($this->turmas as $turma):
                ?>
            <option value="<?= $turma->cd_turma ?>" id="<?= $turma->cd_turma ?>"><?= $turma->nm_turma ?></option>
            <?php
            endforeach;
        ?>
        </select>

        <select name="materia" id="materia" disabled required>
            <option value="" selected style="display: none;">Selecione uma matéria</option>
            <?php
            foreach ($this->materias as $materia):
                ?>
            <option value="<?= $materia->cd_materia ?>" id="<?= $materia->cd_materia ?>"><?= $materia->nm_materia ?>
            </option>
            <?php
            endforeach;
        ?>
        </select>
        <select name="professor" id="professor" disabled required>
            <option value="" selected style="display: none;"></option>
            <?php
            foreach ($this->professores as $professor):
                ?>
            <option value="<?= $professor->cd_docente ?>" id="<?= $professor->cd_docente ?>">
                <?= $professor->nome_docente ?></option>
            <?php
            endforeach;
        ?>
        </select>
    </div>
    <p class="formretorno"></p>
    <button type="button" id="editar" disabled>Editar</button>
    <button type="button" id="cancelar" style="display:none">Cancelar</button>
    <button type="submit" id="salvar" style="display:none">Salvar</button>
</form>
<script>
let professor_materia = <?= json_encode($this->professor_materia) ?>;
$('form button#editar').on('click', function() {
    $(this).css('display', 'none')
    $('form button#cancelar').css('display', 'block')
    $('form button#salvar').css('display', 'block')
    $('form select#professor').prop('disabled', false)

    $('form select#turma').attr('readonly', 'readonly')
    $('form select#materia').attr('readonly', 'readonly')
})

$('form button#cancelar').on('click', function() {
    $(this).css('display', 'none')
    $('form button#salvar').css('display', 'none')
    $('form button#editar').css('display', 'block')
    $('form select#professor').prop('disabled', true)
    $('form select#professor').val(professor_materia[$('#turma').val()][$('#materia').val()])

    $('form select#turma').removeAttr('readonly', 'readonly')
    $('form select#materia').removeAttr('readonly', 'readonly')
})

$('form').on('submit', function(e) {
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
                $('form select#turma').removeAttr('readonly', 'readonly')
                $('form select#materia').removeAttr('readonly', 'readonly')
                return
            }
            $('select#professor').prop('disabled', true)
            $('form select#professor').val(professor_materia[$('#turma').val()][$('#materia').val()])
            $('.formretorno').text(data.msg)
            $('form select#turma').removeAttr('readonly', 'readonly')
            $('form select#materia').removeAttr('readonly', 'readonly')
        })
        .catch(function(a) {
            console.log(a)
        })
})

$('form select#turma').on('change', function() {
    $('form select#materia').prop('disabled', false)

    var turma = $(this).val()
    $('form select#materia option').each(function() {
        if ($(this).val() in professor_materia[turma]) {
            $(this).css('display', 'block')
        } else {
            $(this).css('display', 'none')
        }
    })
    $('form select#materia').val('')
    $('form select#professor').val(professor_materia[turma][$('form select#materia').val()])
    if (!($('form select#materia').val() in professor_materia[turma])) {
        $('form select#professor').val('')
        $('form button#editar').prop('disabled', true)
    }
})

$('form select#materia').on('change', function() {
    $('form button#editar').prop('disabled', false)

    var idTurma = $('form select#turma').val()
    var idMateria = $(this).val()
    $('form select#professor').val(professor_materia[idTurma][idMateria])
})
</script>