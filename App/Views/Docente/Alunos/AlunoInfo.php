<?php
    if (empty($this->aluno)) {
        echo "<h1>Aluno não encontrado</h1>";
        die();
    }
?>
<form>
    <!-- cabecalho -->
    <h2>Informações de: <?= $this->aluno->nome_aluno ?></h2>

    <!-- geral -->
    <fieldset>
        <legend>Aluno</legend>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" placeholder="Nome" value="<?= $this->aluno->nome_aluno ?>" disabled
                required />
        </div>

        <div>
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" placeholder="Telefone" value="<?= $this->aluno->telefone_aluno ?>"
                disabled required />
        </div>
        <div>
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" placeholder="CPF" value="<?= $this->aluno->cpf_aluno ?>" disabled required />
        </div>
        <div><label for="rg">RG</label>
            <input type="text" name="rg" placeholder="RG" value="<?= $this->aluno->rg_aluno ?>" disabled required />

        </div>
        <div>
            <label for="nascimento">Nascimento</label>
            <input type="date" name="nascimento" placeholder="Nascimento" value="<?= $this->aluno->nascimento_aluno ?>"
                disabled required />
        </div>
        <h3>Engressou em <?= date_format(date_create($this->aluno->dt_cadastro), 'd/m/Y') ?></h3>
        <div>
            <label for="turma">Turma</label>
            <select name="turma" id="turma">
                <option value="<?= $this->aluno->cd_turma%2==0?$this->aluno->cd_turma-1:$this->aluno->cd_turma ?>">
                    <?= $this->aluno->nm_turma[0] . 'º A' ?></option>
                <option value="<?= $this->aluno->cd_turma%2!=0?$this->aluno->cd_turma+1:$this->aluno->cd_turma ?>">
                    <?= $this->aluno->nm_turma[0] . 'º B' ?></option>
            </select>
        </div>
    </fieldset>

    <!-- endereco -->
    <fieldset>
        <legend>Endereço</legend>
        <section>
            <div>

                <input type="number" name="cep" id="cep" placeholder="CEP" required value="<?= $this->aluno->cep ?>"
                    disabled />
                <p id="ceperro" style="color: #f00;"></p>
            </div>
            <div>
                <label for="uf">UF</label>
                <select name="uf" id="uf" required disabled>
                    <option value="">Selecione um Estado</option>
                </select>
            </div>
            <div>
                <label for="localidade">Cidade</label>
                <select name="localidade" id="localidade" required disabled>
                    <option value="">Selecione um Cidade</option>
                </select>
            </div>
        </section>
        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" id="bairro" placeholder="Bairro" required value="<?= $this->aluno->bairro ?>"
            disabled />

        <div>
            <label for="logradouro">Rua</label>
            <input type="text" name="logradouro" id="logradouro" placeholder="Rua" required
                value="<?= $this->aluno->logradouro ?>" disabled />
        </div>
        <div>
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" placeholder="Número" min="1" required
                value="<?= $this->aluno->numero ?>" disabled />
        </div>

        <label for="complemento">Complemeto</label>
        <input type="text" name="complemento" id="complemento" placeholder="Complemento"
            value="<?= $this->aluno->complemento ?>" disabled />
        </div>
    </fieldset>

    <!-- responsavel -->
    <fieldset>
        <legend>Responsavel</legend>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" placeholder="Nome" value="<?= $this->aluno->nome_responsavel ?>" disabled
                required />
        </div>

        <div>
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" placeholder="Telefone" value="<?= $this->aluno->telefone_responsavel ?>"
                disabled required />
        </div>
        <div>
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" placeholder="CPF" value="<?= $this->aluno->cpf_responsavel ?>" disabled
                required />
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="email" value="<?= $this->aluno->email_responsavel ?>" disabled
                required />
        </div>
    </fieldset>

    <button type="button" id="editar">Editar</button>
    <button type="button" id="cancelar" style="display: none">Cancelar</button>
    <input type="submit" value="Atualizar" style="display: none" disabled />
    <p id="formretorno"></p>

    <script>
    var searchCities = async (callback) => {
        $("form select#localidade").prop("disabled", false);
        await fetch(
                `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${$("form select#uf").val()}/distritos`
            )
            .then((response) => {
                if (!response.ok) {
                    return;
                }
                return response.json();
            })

            .then((cities) => {
                cities = cities.sort((a, b) => {
                    // ordenando pelo nome
                    if (a.nome < b.nome) {
                        return -1;
                    }
                });

                $("select#localidade").empty();
                cities.map((city) => {
                    const option = document.createElement("option");
                    option.setAttribute("value", city.nome);
                    option.textContent = city.nome;

                    $("select#localidade").append(option);
                });
            });

        callback(); // somente preencher as informações quando a requisição for concluida
    };

    $(document).ready(async function() {
        await fetch("https://servicodados.ibge.gov.br/api/v1/localidades/estados")
            .then((response) => {
                if (!response.ok) {
                    return;
                }
                return response.json();
            })

            .then((states) => {
                states = states.sort((a, b) => {
                    // ordenando pela sigla
                    if (a.sigla < b.sigla) {
                        return -1;
                    }
                });

                states.map((state) => {
                    const option = document.createElement("option");
                    option.setAttribute("value", state.sigla);
                    option.textContent = state.nome;

                    $("select#uf").append(option);
                });
                $('select#uf').val('<?= $this->aluno->uf ?>')
                searchCities(function() {
                    $('select#localidade').val('<?= $this->aluno->cidade ?>')
                    $("form select#localidade").prop("disabled", true)
                })
            });
        $('select#turma').val('<?= $this->aluno->cd_turma ?>')
        $("form select#turma").prop("disabled", true)
    });

    // colocar as cidades no select
    $("form select#uf").change(searchCities);

    // consulta do cep
    $("form input#cep").change(function() {
        $("form input#cep + p").remove();
        fetch(`https://viacep.com.br/ws/${$(this).val()}/json/`)
            .then((response) => {
                if (!response.ok) {
                    return;
                }
                return response.json();
            })

            .then((cep) => {
                if (cep?.erro) {
                    throw new Error();
                }
                $("form select#uf").val(cep.uf);

                searchCities(function() {
                    // callback
                    $("form select#localidade").val(cep.localidade);
                    $("form input#bairro").val(cep.bairro);
                    $("form input#logradouro").val(cep.logradouro);
                });
            })

            .catch(() => {
                const p = document.createElement("p");
                p.textContent = "Informe um CEP válido";
                p.style.color = "#fd2419";
                $(this).parent().append(p);
            });
    });

    $('form button#editar').click(function() {
        $('form input').each(function() {
            $(this).prop("disabled", false)
        })
        $('form select#uf').prop('disabled', false)
        $('form select#localidade').prop('disabled', false)
        $('form select#turma').prop('disabled', false)
        $(this).css('display', 'none')
        $('form button#cancelar').css('display', 'block')
        $('form input[type="submit"]').css('display', 'block')
    })

    $('form button#cancelar').click(function() {
        window.location.reload()
    })

    $("form").on("submit", function(event) {
        event.preventDefault(); // impede que a pagina seja recarregada

        $.ajax({
            url: "/docente/aluno/<?= $this->aluno->cd_aluno ?>/info",
            type: "post",
            dataType: "json",
            data: $("form").serialize(),
            success: function(data) {
                if (data.ok) {
                    $('p#formretorno').text('Aluno Atualizado')
                    $('form input').each(function() {
                        $(this).prop('disabled', true)
                    })
                    $('form input[type="submit"]').css('display', 'none')
                    $('form button#cancelar').css('display', 'none')
                    $('form button#editar').css('display', 'block')
                    $("form select#uf").prop("disabled", true);
                    $("form select#localidade").prop("disabled", true);
                    $("form select#turma").prop("disabled", true);
                    return;
                }
                $('p#formretorno').text(data.msg)
            },
        });
    });
    </script>
</form>