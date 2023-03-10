<html>

<head>
    <!--links>-->
    <link rel="stylesheet" href="css/estilocad.css">
    <title> Cadastro de Usuario </title>
</head>
<body>
    <!--Essa é a imagem do lado do formulario-->
    <div class="container">
        <div class="form-image">
            <img src="Nossa logo" </div>
        </div>
        <!-- Inicio formulario-->
        <div class="form">
            <form method="POST" action="cadastro.php">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <!--Essa botão não ta indo pro "Login", não sei qual o erro-->
                    <div class="login-button">
                        <button><a href="login">Entrar</a></button>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label>Nome</label>
                        <input type="text" name="nome" id="nome" required placeholder="Digite seu nome">
                    </div>
                    <div class="input-box">
                        <label>E-mail</label>
                        <input type="text" name="email" id="email" required placeholder="email@email.com">
                    </div>
                    <div class="input-box">
                        <label>CPF ou CNPJ</label>
                        <input type="text" name="doc" id="doc" required placeholder="Digite seu CPf ou Cnpj">
                    </div>
                    <div class="input-box">
                        <label>Razao social</label>
                        <input type="text" name="rsocial" id="rsocial" required placeholder="Digite sua razão social">
                    </div>
                    <div class="input-box">
                        <label>Contato</label>
                        <input type="text" name="contato" id="contato" required placeholder="(xx) xxxx-xxxx">
                    </div>
                    <div class="input-box">
                        <label>Cep</label>
                        <input type="text" name="cep" id="cep" required placeholder="99999-999">
                    </div>
                    <div class="input-box">
                        <label>Endereco</label>
                        <input type="text" name="endereco" id="endereco" required placeholder="Digite seu endereço">
                    </div>
                    <div class="input-box">
                        <label>Numero</label>
                        <input type="text" name="endnumero" id="endnumero" required placeholder="0000">
                    </div>
                    <div class="input-box">
                        <label>Bairro</label>
                        <input type="text" name="bairro" id="bairro" required placeholder="Sete de Setembro">
                    </div>
                    <div class="input-box">
                        <label>Cidade</label>
                        <input type="text" name="cidade" id="cidade" required placeholder="Diadema">
                    </div>
                    <div class="input-box">
                        <label>Estado</label>
                        <input type="text" name="estado" id="estado" required placeholder="São Paulo">
                    </div>
                    <!--Criar uma opção para o usuario criar uma senha ao se cadastrar-->
                    <div class="input-box">
                        <label>Senha</label>
                        <input type="password" name="senha" id="senha" required placeholder="Digite sua senha">
                    </div>
                </div> <!--fim inputs-->
                <div class="login-button">
                    <button type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">Cadastrar</button>
                </div>
                <div class="login-button">
                    <a href='../'>Voltar</a>
                </div>
        </div>
        </form> <!--fim form-->
    </div>
</body>
</html>
