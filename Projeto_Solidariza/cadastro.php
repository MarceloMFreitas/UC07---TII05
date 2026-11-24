<?php include_once 'includes/header.php'; ?>

    <main class="conteudo-principal container-form">
        <section class="card-form">
            <div class="cabecalho-form">
                <h2>Criar Conta de Doador</h2>
                <p>Preencha seus dados para paticipar das campanhas de arrecadação</p>
            </div>
            <form id="form-cadastro" class="formulario" method="POST" action="actions/auth_register.php">
                <fieldset class="grupo-secao">
                    <legend>Dados Pessoais e Acesso</legend>
                    <div class="grupo-input">
                        <label for="nome">Nome Completo</label>
                        <input 
                            type="text" 
                            id="nome" 
                            name="nome" 
                            placeholder="Ex. Maria da Silva"
                            maxlength="150"
                            required
                        >
                    </div>
                    <div class="grupo-input">
                        <label for="email">Email</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            placeholder="Ex. maria@email.com"
                            maxlength="150"
                            required
                        >
                    </div>
                    <div class="linha-dupla">
                        <div class="grupo-input">
                            <label for="senha">Senha</label>
                            <input 
                                type="password" 
                                id="senha" 
                                name="senha" 
                                placeholder="Mínimo 6 caracteres"
                                minlength="6"
                                required
                            >
                        </div>
                        <div class="grupo-input">
                            <label for="confirma-senha">Confirme a Senha</label>
                            <input 
                                type="password" 
                                id="confirma-senha" 
                                name="confirma-senha" 
                                placeholder="Mínimo 6 caracteres"
                                minlength="6"
                                required
                            >
                        </div>
                    </div>
                </fieldset>
                <fieldset class="grupo-secao">
                    <legend>Endereço para logistica de coleta</legend>
                    <div class="linha-dupla">
                        <div class="grupo-input">
                            <label for="cep">CEP</label>
                            <input 
                                type="text" 
                                id="cep" 
                                name="cep" 
                                placeholder="Ex. 12345-678"
                                maxlength="9"
                                required
                            >
                            <small id="cep-status" class="texto-ajuda">Digite o CEP para preenchimento automático</small>
                        </div>
                        <div class="grupo-input">
                            <label for="bairro">Bairro</label>
                            <input 
                                type="text" 
                                id="bairro" 
                                name="bairro" 
                                placeholder="Preenchido automaticamente"
                                required
                            >
                        </div>
                    </div>
                    <div class="grupo-input">
                        <label for="logradouro">Logradouro</label>
                        <input 
                            type="text" 
                            id="logradouro" 
                            name="logradouro" 
                            placeholder="Preenchido automaticamente"
                            required
                        >
                    </div>
                    <div class="linha-dupla">
                        <div class="grupo-input">
                            <label for="localidade">Cidade</label>
                            <input 
                                type="text" 
                                id="localidade" 
                                name="localidade" 
                                placeholder="Preenchido automaticamente"
                                required
                            >
                        </div>
                        <div class="grupo-input">
                            <label for="uf">Estado</label>
                            <input 
                                type="text" 
                                id="uf" 
                                name="uf" 
                                placeholder="Preenchido automaticamente"
                                required
                            >
                        </div>
                    </div>
                </fieldset>
                <button type="submit" class="btn-sustentavel btn-bloco btn-grande">Cadastrar</button>
            </form>
            <div class="rodape-form">
                <p>Já tem uma conta? <a href="login.php">Entre aqui</a></p>
            </div>
        </section>
    </main>

<?php include_once 'includes/footer.php'; ?>