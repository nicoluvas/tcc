<form>
    <h2>Cadastrar Aluno</h2>
    <fieldset>
        <legend>Aluno</legend>
        <input type="text" name="nome" placeholder="Nome" required />
        <input type="tel" name="telefone" placeholder="Telefone" required />
        <input type="text" name="cpf" placeholder="CPF" required />
        <input type="text" name="rg" placeholder="RG" required />
        <input type="date" name="nascimento" placeholder="Nascimento" required />
        <select name="turma" id="turma" required>
            <option value="">Selecione uma turma</option>
            <option value="6">6º ano</option>
            <option value="7">7º ano</option>
            <option value="8">8º ano</option>
            <option value="9">9º ano</option>
            <option value="1">1º ano EM</option>
            <option value="2">2º ano EM</option>
            <option value="3">3º ano EM</option>
        </select>
    </fieldset>

    <!-- Endereço -->
    <fieldset>
        <legend>Endereço</legend>
        <section>
            <div>

                <input type="number" name="cep" id="cep" placeholder="CEP" required />
                <p id="ceperro" style="color: #f00;"></p>
            </div>
            <div>

                <select name="uf" id="uf" required>
                    <option value="">Selecione um Estado</option>
                </select>
            </div>
            <div>

                <select name="localidade" id="localidade" disabled required>
                    <option value="">Selecione uma Cidade</option>
                </select>
            </div>
        </section>
        <section>
            <fieldset class="enderecofield">

                <input type="text" name="bairro" id="bairro" placeholder="Bairro" required />
            </fieldset>
            <fieldset class="enderecofield">

                <input type="text" name="logradouro" id="logradouro" placeholder="Rua" required />
            </fieldset>
            <fieldset class="enderecofield">

                <input type="number" name="numero" id="numero" placeholder="Número" min="1" required />
            </fieldset>
            <fieldset class="enderecofield">

                <input type="text" name="complemento" id="complemento" placeholder="Complemento" />
            </fieldset>
        </section>
    </fieldset>

    <!-- Responsável -->
    <fieldset>
        <legend>Responsável</legend>
        <input type="text" name="nome_responsavel" placeholder="Nome do Responsável" required />
        <input type="tel" name="telefone_responsavel" placeholder="Telefone do Responsável" required />
        <input type="text" name="cpf_responsavel" placeholder="CPF do Responsável" required />
        <input type="email" name="email_responsavel" placeholder="Email" required />
    </fieldset>
    <input type="submit" id="btn-cadastrar" value="Cadastrar" />
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

    $(document).ready(function() {
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

    $("form").on("submit", function(event) {
        event.preventDefault(); // impede que a pagina seja recarregada

        $.ajax({
            url: "/docente/aluno/cadastrar",
            type: "post",
            dataType: "json",
            data: $("form").serialize(),
            success: function(data) {
                if (data.ok) {
                    $('p#formretorno').text('Aluno Cadastrado; senha inicial: ' + data.senha)
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
@import url('global.css');

input,
fieldset,
select {
    border-radius: 1rem;
    padding: 1rem;
    margin: 0.5rem;
    background-color: var(--background);
    border: none;

}

input {
    background-color: var(--background);
    border: none;
}

fieldset {
    background-color: var(--background-alt);
    border: 1px solid var(--shadow);
}

legend {
    color: var(--text);
    font-size: 3rem;
}

section {
    display: flex;
}

#btn-cadastrar {
    background-color: var(--accent);
    cursor: pointer;
    font-size: 2rem;
    transition: all 0.1s ease;
}

#btn-cadastrar:hover {
    opacity: 0.8;
}

#btn-cadastrar:active {
    scale: 0.99;
}


.enderecofield {
    display: flex;
    flex-direction: column;
    margin: 0;
    padding: 0;
    border: none;
}

select {}
</style>