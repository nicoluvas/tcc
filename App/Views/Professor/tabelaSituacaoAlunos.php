<table>
    <thead>
        <td>Nome</td>
        <td>Frequência Total</td>
        <td>Frequência Unidade</td>
        <td>Prova</td>
        <td>Trabalho</td>
        <td>Média Unidade</td>
    </thead>
    <?php
        foreach ($this->situacoes as $situacao):
            ?>
                <tr>
                    <td><?= $situacao->nome_aluno ?></td>
                    <td><?= $situacao->frequencia_unidade??'100%' ?></td>
                    <td><?= $situacao->frequencia_total??'100%' ?></td>
                    <td><?= $situacao->frequencia_total??'100%' ?></td>
                    <td><?= $situacao->frequencia_total??'100%' ?></td>
                    <td><?= $situacao->frequencia_total??'100%' ?></td>
                </tr>
            <?php
        endforeach;
    ?>
</table>