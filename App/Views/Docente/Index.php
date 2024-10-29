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
                                <p>Ano Finalizado! Contate o diretor</p>
                                <?php
                        } else {
                            ?>
                                <p>Ano Letivo está acabando!</p>
                            <?php
                        }
                        
                    } 
                    if (date('Y-m-d') <= date('Y-m-d', strtotime(FIM_UNIDADE))) {
                        ?>
                            <p>Unidade acaba em <?= date_diff(date_create(), date_create(FIM_UNIDADE))->format('%a') ?> dia(s) <br> Avise os Professores a Darem as Notas</p>
                        <?php
                    }
                }
            ?>
            <p>Nota Média do Ano: <?= number_format($this->media_notas->media, 2, ',', '.') ?></p>
            <p>Nota Média da Unidade 1: <?= number_format($this->media_notas->unidade1, 2, ',', '.') ?></p>
            <p>Nota Média da Unidade 2: <?= number_format($this->media_notas->unidade2, 2, ',', '.') ?></p>
            <p>Nota Média da Unidade 3: <?= number_format($this->media_notas->unidade3, 2, ',', '.') ?></p>

            <p>Frequência Média do Ano: <?= number_format($this->media_frequencia->media*100, 2, ',', '.') . '%' ?></p>
            <p>Frequência Média da Unidade 1: <?= number_format($this->media_frequencia->unidade1*100, 2, ',', '.') . '%' ?></p>
            <p>Frequência Média da Unidade 2: <?= number_format($this->media_frequencia->unidade2*100, 2, ',', '.') . '%' ?></p>
            <p>Frequência Média da Unidade 3: <?= number_format($this->media_frequencia->unidade3*100, 2, ',', '.') . '%' ?></p>

        <?php
    }
?>

<div class="solicitacoes">
    <h2>Solicitações de contato</h2>
    <?php
        foreach ($this->solicitacoes as $solicitacao):
            ?>
                <div class="solicitacao" id="<?= $solicitacao->cd_contato ?>">
                    <p><?= $solicitacao->nome_contato ?></p>
                    <p><?= $solicitacao->telefone_contato ?></p>
                    <p><?= $solicitacao->email_contato ?></p>
                    <button class="fechar-contato" id="<?= $solicitacao->cd_contato ?>">Fechar Contato</button>
                </div>
            <?php
        endforeach;
    ?>
    <script>
        $('button.fechar-contato').on('click', function () {
            var id = $(this).attr('id')
            $.ajax({
                'url': '/fechar-contato',
                'type': 'POST',
                'data': {contato: id},
                'dataType': 'json'
            })
            .done((data) => {
                $(`.solicitacao#${$(this).attr('id')}`).remove()
            })
        })
    </script>
</div>
