<form>
    <h2>Docente <?= $this->docente->nome_docente ?></h2>
    <input type="text" name="nome" placeholder="Nome" required value="<?= $this->docente->nome_docente ?>" disabled/>
    <input type="tel" name="telefone" placeholder="Telefone" required value="<?= $this->docente->telefone_docente ?>" disabled/>
    <input type="text" name="cpf" placeholder="CPF" required value="<?= $this->docente->cpf_docente ?>" disabled/>
    <input type="text" name="rg" placeholder="RG" required value="<?= $this->docente->rg_docente ?>" disabled/>
    <input type="email" name="email" placeholder="Email" required value="<?= $this->docente->email_docente ?>" disabled/>
    <!-- Endereço -->
    <fieldset style="width: 100%;">
        <legend>Endereço</legend>
        <section>
            <div>
                <label for="cep">CEP</label>
                <input type="number" name="cep" id="cep" placeholder="CEP" required value="<?= $this->docente->cep ?>" disabled/>
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
                <select name="localidade" id="localidade" required>
                    <option value="">Selecione um Cidade</option>
                </select>
            </div>
        </section>
        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" id="bairro" placeholder="Bairro" required value="<?= $this->docente->bairro ?>" disabled/>
        <section>
            <fieldset style="flex: 14;">
                <label for="logradouro">Rua</label>
                <input type="text" name="logradouro" id="logradouro" placeholder="Rua" required value="<?= $this->docente->logradouro ?>" disabled/>
            </fieldset>
            <fieldset style="flex: 1;">
                <label for="numero">Número</label>
                <input type="number" name="numero" id="numero" placeholder="Número" min="1" required value="<?= $this->docente->numero ?>" disabled/>
            </fieldset>
        </section>
        <label for="complemento">Complemeto</label>
        <input type="text" name="complemento" id="complemento" placeholder="Complemento" value="<?= $this->docente->complemento ?>" disabled/>
    </fieldset>
    <select name="cargo" id="cargo" required disabled>
        <option value="">Selecione um cargo</option>
        <?php
            $cargos = ['2' => 'Professor', '3' => 'Secretário', '4' => 'Coordenador', '5' => 'Diretor'];
            for ($i = 2; $i <= $_SESSION['logged']['cargo']; $i++):
                ?>
                    <option value="<?= $i ?>"><?= $cargos[$i] ?></option>
                <?php
            endfor;
        ?>
    </select>
    <button type="button" id="editar">Editar</button>
    <button type="button" id="cancelar" style="display: none">Cancelar</button>
    <input type="submit" value="Atualizar" style="display: none" disabled/>
    <p id="formretorno"></p>
    <script>
        var searchCities = async (callback) => {
            $("form select#localidade").prop("disabled", false);
            await fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${$("form select#uf").val()}/distritos`)
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

        $(document).ready(function () {
            fetch("https://servicodados.ibge.gov.br/api/v1/localidades/estados")
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
                    $('select#uf').val('<?= $this->docente->uf ?>')
                    $('select#cargo').val('<?= $this->docente->id_cargo ?>')
                    searchCities(function () {
                        $('select#localidade').val('<?= $this->docente->cidade ?>')
                        $("form select#localidade").prop("disabled", true)
                    })
                });
        });

        // colocar as cidades no select
        $("form select#uf").change(searchCities);

        // consulta do cep
        $("form input#cep").change(function () {
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

                    searchCities(function () {
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

        $('form button#editar').click(function () {
            $('form input').each(function () {
                $(this).prop("disabled", false)
            })
            $('form select#uf').prop('disabled', false)
            $('form select#localidade').prop('disabled', false)
            <?php
                if ($this->docente->cd_docente == $_SESSION['logged']['id']) {
                    echo '$("p#formretorno").text("Você não pode alterar seu próprio cargo")';
                } else {
                echo "$('form select#cargo').prop('disabled', false)";
                }
            ?>

            $(this).css('display', 'none')
            $('form button#cancelar').css('display', 'block')
            $('form input[type="submit"]').css('display', 'block')
        })

        $('form button#cancelar').click(function () {
            window.location.reload()
        })

        $("form").on("submit", function (event) {
            event.preventDefault(); // impede que a pagina seja recarregada

            $.ajax({
                url: "/docente/docente/<?= $this->docente->cd_docente ?>/info",
                type: "post",
                dataType: "json",
                data: $("form").serialize(),
                success: function (data) {
                    if (data.ok) {
                        $('p#formretorno').text('Docente Atualizado')
                        $('form input').each(function () {
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
<style>
    
</style>