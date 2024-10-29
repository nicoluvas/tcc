<div>
    <select id="ano">
        <?php
            foreach ($this->anos as $ano):
                ?>
        <option value="<?= $ano->id_periodo_letivo ?>"
            <?= null !== ID_PERIODO_LETIVO&&ID_PERIODO_LETIVO==$ano->id_periodo_letivo?'selected':'' ?>>
            <?= date('Y', strtotime($ano->inicio)) ?></option>
        <?php
            endforeach;
        ?>
    </select>

    <button id="frequencia">Frequencia</button>
    <button id="notas">Boletim</button>
</div>

<script>
$('button#frequencia').on('click', () => window.location.href = `/aluno/frequencia/p/${$('select#ano').val()}`)
$('button#notas').on('click', () => window.location.href = `/aluno/boletim/p/${$('select#ano').val()}`)
</script>
<style>
div {
    display:flex;
    flex-direction:column;
    
}
</style>