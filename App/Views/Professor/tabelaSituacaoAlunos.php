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
<style>
    @import url('global.css');
    table{
        text-align:center;
        border: 1px var(--shadow) solid;
        border-radius: 1rem;
        border-style: hidden;
        box-shadow: 0 0 0 1px var(--shadow);
        padding: 2.5rem;
        border-collapse: collapse;
        background-color: var(--background-alt);
    }
    thead {
        font-weight:600;
        border-style: hidden;
        border-top-right-radius: 1rem;
        border-top-left-radius: 1rem;
        box-shadow: 0 0 0 1px var(--shadow);
    }
    thead > tr > td {
        background-color: var(--accent);
        padding: 1rem;
        border-radius: 1rem;
    }
    tbody > tr {
        border: 1px var(--shadow) solid;
    }

</style>