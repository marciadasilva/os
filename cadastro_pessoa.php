<?php require_once('header.html'); ?>

	<main>
    <section>
        <div class="container">
            <div class="row">
                <form name="Cadastro" action="Pessoa.php" method="post">
                    <div class="form-group row">
                        <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome...">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nome-fantasia" class="col-sm-2 col-form-label">Nome Fantasia</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nome-fantasia" name="nome-fantasia" placeholder="Nome fantasia...">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nome-social" class="col-sm-2 col-form-label">Nome Social</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nome-social" name="nome-social" placeholder="Nome social...">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="observacao" class="col-sm-2 col-form-label">Observação</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="observacao" name="observacao" placeholder="Observação...">
                        </div>
                    </div>

                    <div class="form-row">

                            <label for="cpf_cnpj">CPF-CNPJ</label>
                            <input type="text" class="form-control" id="cpf_cnpj" name="cpf-cnpj" placeholder="CPF ou CNPJ...">
                    </div>
                    <div class="form-row">
                        <label for="rg_ie">RG-IE</label>
                        <input type="text" class="form-control" id="rg_ie" name="rg-ie" placeholder="Rg ou IE...">
                    </div>

                    <div class="form-row">
                        <button type="submit" class="btn btn-primary" id="cadastrar" name="cadastrar">cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php require_once('footer.html'); ?>