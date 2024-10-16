<h2>Docentes</h2>
<style>
      @import url('/assets/css/global.css');
    main  div > a {
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
    main .docente+.docente {
        border-top: 1px solid #c2c2c2;
    }
</style>
<div class="docentes">
    <?php
        $cargos = ['2' => 'Professor', '3' => 'Secretário', '4' => 'Coordenador', '5' => 'Diretor'];
        foreach ($this->docentes as $docente):
            ?>
                <div class="docente">
                    <p><?= $docente->nome_docente ?></p>
                    <p>Cargo: <?= $cargos[$docente->id_cargo] ?></p>
                </div>
            <?php
        endforeach;
    ?>
</div>