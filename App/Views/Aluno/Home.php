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

    <button id="frequencia" onClick="vira()">Frequência</button>
    <button id="notas" onClick="vira()">Boletim</button>
</div>

<script>
$('button#frequencia').on('click', () => window.location.href = `/aluno/frequencia/p/${$('select#ano').val()}`)
$('button#notas').on('click', () => window.location.href = `/aluno/boletim/p/${$('select#ano').val()}`)
function vira() {
    var el = getElementById('liao');
    el.className = 'girado';
}
</script>
<style>
div {
    display:flex;
    flex-direction:column;

}
</style>