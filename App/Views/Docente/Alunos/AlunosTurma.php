<h2>Alunos Turma <?= $this->turma ?></h2>
<style>
      @import url('/assets/css/global.css');
    main  div > a {
    padding: 2px 5px 2px 5px;
      border: 1px solid var(--shadow);
      border-radius: 10px;
      background-color: var(--shadow);
    }
    main .alunos {
        display: flex;
        flex-direction: column;
        row-gap: 8px;
    }
    main .aluno+.aluno {
        border-top: 1px solid #c2c2c2;
    }
</style>

<div class="alunos">
    <?php
    foreach($this->alunos as $aluno):
        ?>
            <div class="aluno" id="<?= $aluno->cd_aluno ?>">
                <p><?= $aluno->nome_aluno ?></p>
                <p>Turma <?= $aluno->nm_turma ?></p>
                <a href="/docente/aluno/<?= $aluno->cd_aluno ?>/info">Informações</a>
                <button class="cancelarMatricula" aluno="<?= $aluno->nome_aluno ?>" id="<?= $aluno->cd_aluno ?>">Cancelar Matrícula</button>
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

