<?php include 'layouts/cabecalho.php' ?>

<div class="formulario">
    <form action="PHP/gera_curriculum.php" method="POST">
        <div id="dados-pessoais">

            <h3>Dados Pessoais</h3>

            <div class="inputs">
                <label for="nome">Nome</label>
                <br>
                <input type="text" name="nome">
            </div>

            <div class="inputs">
                <label for="nacionalidade">Nacionalidade</label>
                <br>
                <select name="nacionalidade" id="nacionalidade">
                    <option value="padrao"></option>
                    <option value="Brasileiro">Brasileiro</option>
                    <option value="Imigrante nacionalizado">Imigrante nacionalizado</option>
                    <option value="Imigrante">Imigrante</option>
                </select>
            </div>

            <div class="inputs">
                <label for="idade">Idade</label>
                <br>
                <input type="text" name="idade" id="idade">
            </div>
            <div class="inputs">
                <label for="sexo">Sexo</label><br>
                <select name="sexo" id="sexo">
                    <option value="padrao"></option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Não Binário">Não Binário</option>
                </select>
            </div>
            <div class="inputs">
                <label for="estado-civil">Estado Civil</label><br>
                <select name="estado-civil" id="estado-civil">
                    <option value="padrao"></option>
                    <option value="Solteiro(a)">Solteiro(a)</option>
                    <option value="Casado(a)">Casado(a)</option>
                    <option value="União Estavel">União Estavel</option>
                    <option value="Seperado(a)">Seperado(a)</option>
                    <option value="Divorciado(a)">Divorciado(a)</option>
                    <option value="Viúvo(a)">Viúvo(a)</option>
                </select>
            </div>

            <div class="inputs">
                <label for="estado">Estado</label><br>
                <select name="estados" id="estados">
                    <?php include 'PHP/seletor_estado.php' ?>
                </select>
            </div>

            <div class="inputs">
                <label for="cidade">Cidade</label><br>
                <input type="text" id="cidade" name="cidade">

            </div>

            <div class="inputs">
                <label for="endereco">Endereço</label><br>
                <input type="text" name="endereco" id="endereco">
            </div>

            <div class="inputs">
                <label for="telefone">Telefone</label><br>
                <input type="tel" name="telefone" id="telefone">
            </div>
            <div class="inputs">
                <label for="email">E-mail</label><br>
                <input type="email" name="email" id="email">
            </div>
            <br />
            <br />
            <br />
        </div>

        <div class="objetivo">
            <h3>Objetivo / cargo pretendido</h3>
            <div class="inputs-2">
                <input type="text" name="objetivo" id="objetivo">
            </div>
            <br />
            <br />
            <br />
        </div>
        <div class="formacao" id="teste">
            <h3>Formação academica</h3>
            <div class="box-inputs" id="box-formacao">
                <div class="inputs">
                    <label for="curso">Curso</label><br>
                    <input type="text" name="curso[]" id="curso">
                </div>
                <div class="inputs">
                    <label for="instituicao">Instituição</label><br>
                    <input type="text" name="instituicao[]" id="instituicao">
                </div>
                <div class="inputs">
                    <label for="conclusao">Conclusão</label><br>
                    <select name="conclusao[]" id="conclusao">
                        <option value="Concluido">Concluido</option>
                        <option value="Previsão de conclusão">Previsão de conclusão</option>
                    </select>
                </div>
                <div class="inputs" id="teste">
                    <label for="ano">Ano</label><br>
                    <input type="text" name="ano[]" id="ano">
                </div>
            </div>
            <div class="mais" id="mais-formacao">
                <a id="botao-formacao"><i class="fa fa-plus-circle" aria-hidden="true"></i> Adicionar
                    mais</a>
            </div>
            <br />
            <br />
            <br />
        </div>

        <div class="experiencia">

            <h3>Experiência Profissional</h3>
            <div class="box-inputs" id="box-experiencia">
                <div class="inputs">
                    <label for="empresa">Empresa</label><br>
                    <input type="text" name="empresa[]" id="empresa">
                </div>
                <div class="inputs">
                    <label for="ano-entrada">Ano entrada</label><br>
                    <input type="date" name="ano-entrada[]" id="ano-entrada">
                </div>
                <div class="inputs">
                    <label for="ano-saida">Ano Saída</label><br>
                    <input type="date" name="ano-saida[]" id="ano-saida">
                </div>
                <div class="inputs">
                    <label for="cargo">Cargo</label><br>
                    <input type="text" name="cargo[]" id="cargo">
                </div>
                <br />
                <div class="inputs" id="cargo2">
                    <label for="atividades-cargo">Atividades Desempenhadas no cargo</label><br>
                    <textarea name="atividade-cargo[]" id="atividade-cargo" cols=1 00% rows="4"></textarea>
                </div>
            </div>
            <div class="mais" id="mais-experiencia">
                <a id="botao-experiencia" class="mais-button"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Adicionar mais</a>
            </div>
            <br />
            <br />
            <br />
        </div>

        <div class="qualificações">

            <h3>Qualificações e atividades Complementares</h3>
            <div class="box-inputs" id="box-qualificacoes">
                <div class="inputs-2">
                    <input type="text" name="qualificacao[]" id="qualificacao">
                </div>
            </div>
            <div class="mais" id="mais-qualificacoes">
                <a id="botao-qualificacoes" class="mais-button"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Adicionar mais</a>
            </div>
            <br />
            <br />
            <br />
        </div>

        <div class="informacoes-adicionais">

            <h3>Informações Adicionais</h3>

            <div class="box-inputs" id="box-informacoes-adicionais">
                <div class="inputs-2">
                    <input type="text" name="informacoes-adicionais[]" id="informacoes-adicionais">
                </div>
            </div>
            <div class="mais" id="mais-informacoes-adicionais">
                <a id="botao-informacoes-adicionais" class="mais-button"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Adicionar mais</a>
            </div>
            <br />
            <br />
            <br />
        </div>

        <div class="inputs">
            <div class="botao">
                <input type="submit" name="gerar" id="gerar" value="Gerar Curriculum">
                <input type="reset" value="Limpar" id="limpar">
            </div>
        </div>
    </form>

</div>

<?php include 'layouts/rodape.php' ?>