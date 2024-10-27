<table>
    <thead>
        <td>Nome</td>
        <td>Frequência Unidade</td>
        <td>Frequência Total da Matéria</td>
        <td>Trabalho</td>
        <td>Prova</td>
        <td>Média Unidade</td>
    </thead>
    <?php
        foreach ($this->situacoes as $situacao):
            ?>
                <tr>
                    <td><?= $situacao->nome_aluno ?></td>
                    <td><?= number_format($situacao->frequencia_unidade*100, 2, ',', '.').'%' ?></td>
                    <td><?= number_format($situacao->frequencia_total*100, 2, ',', '.').'%' ?></td>
                    <td><?= number_format($situacao->trabalho, 2, ',', '.') ?></td>
                    <td><?= number_format($situacao->prova, 2, ',', '.') ?></td>
                    <td><?= number_format(($situacao->trabalho + ($situacao->prova*2))/3, 2, ',', '.') ?></td>
                </tr>
            <?php
        endforeach;
    ?>
</table>