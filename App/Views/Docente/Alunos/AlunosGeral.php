<h2>Alunos</h2>
<style>
@import url('/assets/css/global.css');

main .docentes {
    display: flex;
    flex-direction: column;
    row-gap: 8px;
}


.nomedocente {
    padding: 1rem;
    background-color: var(--primary);
    max-width: 50%;
    color: var(--background);
    border-radius: .5rem
}

.ifde {
    display:flex;
    justify-content:center;
    flex-direction:row;
    align-items:center;
}

main  div > a {
    padding: 1rem;
      border: 1px solid var(--shadow);
      border-radius: .5rem;
      background-color: var(--secondary);
      font-size: 2rem;
    }

.turmas {
    margin: 1rem;
}

select {
    background-color: var(--text-inv);
    border: 1px solid var(--shadow);
}
</style>
<div class="turmas">
    <select id="turmasSelect" onchange="location = this.value;">
        <option value="">Selecione a turma</option>
        <?php foreach($this->turmas as $turma): ?>
        <option value="/docente/alunos/turma/<?= $turma->cd_turma ?>"><?= $turma->nm_turma ?></option>
        <?php endforeach; ?>
    </select>
</div>


<div class="docentes">
    <?php
    foreach($this->alunos as $aluno):
        ?>
    <div class="docente" id="<?= $aluno->cd_aluno ?>">
        <p class="nomedocente"><?= $aluno->nome_aluno ?></p>
        <p>Turma <?= $aluno->nm_turma ?></p>
        <div class="ifde">
            <a href="/docente/aluno/<?= $aluno->cd_aluno ?>/info">Informações</a>
            <button class="desligarDocente" aluno="<?= $aluno->nome_aluno ?>" id="<?= $aluno->cd_aluno ?>">Cancelar
                Matrícula</button>
        </div>
    </div>
    <?php
    endforeach;
    ?>
</div>

<script>
$('.aluno button.cancelarMatricula').click(function() {
    if (confirm('Deseja cancelar a matrícula de ' + $(this).attr('aluno') + '?')) {
        $.ajax({
                url: `/docente/aluno/${$(this).attr('id')}/cancelar-matricula`,
                type: 'POST',
                dataType: 'json'
            })
            .done(data => {
                if (data.ok) {
                    alert('Matrícula Cancelada!')
                    $(`.aluno#${$(this).attr('id')}`).remove()
                    return
                }
                alert('Algo deu errado!')
            })
    }
    return false; // cancel the event
});
</script>