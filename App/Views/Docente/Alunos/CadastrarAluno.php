<form>
    <h2>Cadastrar Aluno</h2>
    <input type="text" name="nome" placeholder="Nome" required />
    <input type="tel" name="telefone" placeholder="Telefone" required pattern="[0-9]{11}"/>
    <input type="text" name="cpf" placeholder="CPF" required pattern="[0-9]{11}"/>
    <input type="text" name="rg" placeholder="RG" required pattern="[0-9x]{9}"/>
    <input type="email" name="email" placeholder="Email" required />
    <input type="date" name="nascimento" placeholder="Nascimento" required />
    <!-- Endereço -->
    <fieldset style="width: 100%;">
        <legend>Endereço</legend>
        <section>
            <div>
                <label for="cep">CEP</label>
                <input type="number" name="cep" id="cep" placeholder="CEP" required />
                <p id="ceperro" style="color: #f00;"></p>
            </div>
            <div>
                <label for="uf">UF</label>
                <select name="uf" id="uf" required>
                    <option value="">Selecione um Estado</option>
                </select>
            </div>
            <div>
                <label for="localidade">Cidade</label>
                <select name="localidade" id="localidade" disabled required>
                    <option value="">Selecione um Cidade</option>
                </select>
            </div>
        </section>
        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" id="bairro" placeholder="Bairro" required />
        <section>
            <fieldset style="flex: 14;">
                <label for="logradouro">Rua</label>
                <input type="text" name="logradouro" id="logradouro" placeholder="Rua" required />
            </fieldset>
            <fieldset style="flex: 1;">
                <label for="numero">Número</label>
                <input type="number" name="numero" id="numero" placeholder="Número" min="1" required />
            </fieldset>
        </section>
        <label for="complemento">Complemeto</label>
        <input type="text" name="complemento" id="complemento" placeholder="Complemento" />
    </fieldset>
    <fieldset>
        <legend>Responsavel</legend>
        <input type="text" name="nome_responsavel" placeholder="Nome do Responsável" required pattern="[0-9]{11}"/>
        <input type="tel" name="telefone_responsavel" placeholder="Telefone do Responsável" required pattern="[0-9]{11}"/>
        <input type="text" name="cpf_responsavel" placeholder="CPF do Responsável" required pattern="[0-9]{9}"/>
        <input type="text" name="rg_responsavel" placeholder="RG do Responsável" required pattern="[0-9x]{9}"/>
    </fieldset>
    <input type="submit" value="Cadastrar" />
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

        $("form").on("submit", function (event) {
            event.preventDefault(); // impede que a pagina seja recarregada

            $.ajax({
                url: "/docente/aluno/cadastrar",
                type: "post",
                dataType: "json",
                data: $("form").serialize(),
                success: function (data) {
                    if (data.ok) {
                        $('p#formretorno').text('Aluno Cadastrado')
                        $("form")[0].reset();
                        $("form select#localidade").empty();
                        $("form select#localidade").prop("disabled", true);
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