<?php
    if (EM_PERIODO_LETIVO) {
        ?>
<div class="unidade">Unidade <?= UNIDADE?></div>
<div class="unidade">Unidade Termina em <?= date('d/m/Y', strtotime(FIM_UNIDADE))?></div>
<?php
                if (date_diff(date_create(FIM_UNIDADE), date_create())->format('%a') <= 15) {
                    if (UNIDADE == 3) {
                        if (date('Y-m-d') >= date('Y-m-d', strtotime(FIM_UNIDADE))) {
                            ?>
<p>Ano Finalizado.</p>
<?php
                        } else {
                            ?>
<p>Ano Letivo está acabando.</p>
<?php
                        }
                        
                    } 
                    if (date('Y-m-d') <= date('Y-m-d', strtotime(FIM_UNIDADE))) {
                        ?>
<p>Unidade acaba em <?= date_diff(date_create(), date_create(FIM_UNIDADE))->format('%a') ?> dia(s) <br> Avise os
    Professores.</p>
<?php
                    }
                }
            ?>
<div class="mediasview">
    <fieldset class="medias">
        <legend>Nota Média do Ano: <br> <span><?= number_format($this->media_notas->media, 2, ',', '.') ?></span></legend>
        <p>Nota Média da Unidade 1: <?= number_format($this->media_notas->unidade1, 2, ',', '.') ?></p>
        <p>Nota Média da Unidade 2: <?= number_format($this->media_notas->unidade2, 2, ',', '.') ?></p>
        <p>Nota Média da Unidade 3: <?= number_format($this->media_notas->unidade3, 2, ',', '.') ?></p>
    </fieldset>
    
    <fieldset class="medias">
        <legend>Frequência Média do Ano: <br> <span><?= number_format($this->media_frequencia->media*100, 2, ',', '.') . '%' ?></span></legend>
        <p>Frequência Média da Unidade 1: <?= number_format($this->media_frequencia->unidade1*100, 2, ',', '.') . '%' ?></p>
        <p>Frequência Média da Unidade 2: <?= number_format($this->media_frequencia->unidade2*100, 2, ',', '.') . '%' ?></p>
        <p>Frequência Média da Unidade 3: <?= number_format($this->media_frequencia->unidade3*100, 2, ',', '.') . '%' ?></p>
    </fieldset>
</div>

<style>
@import url('/assets/css/global.css');
.mediasview{
    display:flex;
    flex-direction: row;
    justify-content:space-around;
}
.medias {
    background: rgba(216, 207, 167, 0.49);
    border-radius: 16px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    border: 1px solid rgba(216, 207, 167, 0.3);
}
.medias>legend{
    font-size: 2rem;
    text-align:center;
}
.medias>legend>span{
    background-color: var(--primary);
    color: var(--text-inv);
    border-radius: .5rem;
    padding: 0 .5rem 0 .5rem;
}
.medias>p{
    font-size: 1rem;
}
</style>

<?php
    }
?>

<div class="solicitacoes">
    <hr style="color:var(--shadow); margin:5rem 0 2rem 0;padding:0;background-color:var(--shadow);">
    <h2>Solicitações de contato:</h2>
    <?php
        foreach ($this->solicitacoes as $solicitacao):
            ?>
    <div class="solicitacao" id="<?= $solicitacao->cd_contato ?>">
        <p><?= $solicitacao->nome_contato ?></p>
        <p><?= $solicitacao->telefone_contato ?></p>
        <p><?= $solicitacao->email_contato ?></p>
        <button class="fechar-contato" id="<?= $solicitacao->cd_contato ?>">Fechar Contato</button>
    </div>
    <style>
        .solicitacoes {
            display:flex;
        }
        .solicitacao {
            display:flex;
            flex-direction: column;
            row-gap: .1rem;
            align-items:center;
            justify-content:center;
            border-radius: .5rem;
            border: 1px solid var(--shadow);
            background-color: var(--background-alt);
            margin: 1rem 0 1rem 0;
        }
        .solicitacao>p{
            margin:.5rem;
        }
    </style>
    <?php
        endforeach;
    ?>
    <script>
    $('button.fechar-contato').on('click', function() {
        var id = $(this).attr('id')
        $.ajax({
                'url': '/fechar-contato',
                'type': 'POST',
                'data': {
                    contato: id
                },
                'dataType': 'json'
            })
            .done((data) => {
                $(`.solicitacao#${$(this).attr('id')}`).remove()
            })
    })
    </script>
</div>