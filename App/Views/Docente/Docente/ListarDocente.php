<h2>Docentes</h2>
<style>
@import url('/assets/css/global.css');

main  div > a {
    padding: 1rem;
      border: 1px solid var(--shadow);
      border-radius: .5rem;
      background-color: var(--secondary);
      font-size: 2rem;
    }


main .docentes {
    display: flex;
    flex-direction: column;
    row-gap: 8px;
}

.docente {
    border: 1px solid var(--shadow);
    background-color: var(--background-alt);
    border-radius: 1rem;
    padding: 1rem;
    align-items:center;
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
</style>

<div class="docentes">
    <?php
        $cargos = ['2' => 'Professor', '3' => 'Secretário', '4' => 'Coordenador', '5' => 'Diretor'];
        foreach ($this->docentes as $docente):
            ?>
    <div class="docente" id="<?= $docente->cd_docente ?>">
        <p class="nomedocente"><?= $docente->nome_docente ?></p>
        <p>Cargo: <?= $cargos[$docente->id_cargo] ?></p>
        <div class="ifde">

            <a href="/docente/docente/<?= $docente->cd_docente ?>/info" >Informações</a>
            <button class="desligarDocente" docente="<?= $docente->nome_docente ?>" id="<?= $docente->cd_docente ?>"
                <?= $docente->id_cargo>$_SESSION['logged']['cargo']||($docente->id_cargo==$_SESSION['logged']['cargo']&&$docente->cd_docente!=$_SESSION['logged']['id'])?'disabled':'' ?>>Desligar Docente</button>
        </div>
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