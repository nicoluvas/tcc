<h2>Docentes</h2>
<style>
@import url('/assets/css/global.css');

main div>a {
    padding: 2px 5px 2px 5px;
    border: 1px solid var(--shadow);
    border-radius: 10px;
    background-color: var(--shadow);
}

main .docentes {
    display: flex;
    flex-direction: column;
    row-gap: 8px;
}

.docente {
    border: 1px solid var(--shadow);
    border-radius: 1rem;
    padding: 1rem;
}
</style>

<div class="docentes">
    <?php
        $cargos = ['2' => 'Professor', '3' => 'Secretário', '4' => 'Coordenador', '5' => 'Diretor'];
        foreach ($this->docentes as $docente):
            ?>
    <div class="docente" id="<?= $docente->cd_docente ?>">
        <p><?= $docente->nome_docente ?></p>
        <p>Cargo: <?= $cargos[$docente->id_cargo] ?></p>
        <a href="/docente/docente/<?= $docente->cd_docente ?>/info">Informações</a>
        <button class="desligarDocente" docente="<?= $docente->nome_docente ?>" id="<?= $docente->cd_docente ?>"
            <?= $docente->id_cargo>=$_SESSION['logged']['cargo']?'disabled':'' ?>>Desligar Docente</button>
    </div>
    <?php
        endforeach;
    ?>
</div>

<script>
$('.docente button.desligarDocente').click(function() {
    if (confirm('Deseja desligar o docente ' + $(this).attr('docente') + '?')) {
        $.ajax({
                url: `/docente/docente/${$(this).attr('id')}/desligar`,
                type: 'POST',
                dataType: 'json'
            })
            .done(data => {
                if (data.ok) {
                    alert('Docente Desligado!')
                    if (data.msg) {
                        alert(data.msg + '\nMatérias que lecionava: ' + data.linhas)
                    }
                    $(`.docente#${$(this).attr('id')}`).remove()
                    return
                }
                alert(data.msg)
            })
            .catch(a => {
                console.log(a)
            })
    }
    return false; 
});
</script>