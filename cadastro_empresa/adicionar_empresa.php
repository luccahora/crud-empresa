<?php
// Header
include_once 'includes/header.php';

?>


<div class= "row">
    <div class = "col s12 m6 push-m3">
        <h3 class = "light"> Nova Empresa </h3>

        <form class="col s12" action="php_action/create.php" method="POST">
            
            <div class="input-field col s6">
                <input placeholder="Nome Empresa" id="nome_empresa" type="text" name="nome_empresa">
                <label for="nome_empresa">Nome Empresa</label>
            </div>
           
            <div class="input-field col s6">
                <input id="cnpj_empresa" type="text"  name="cnpj_empresa" onKeyPress="MascaraGenerica(this, 'CNPJ');">
                <label for="cnpj_empresa">CNPJ</label>
            </div>

            
            <div class="row">
                    
                </div>
                <div class="row">
                    <div class="input-field col s6">
                            <input placeholder="CEP" id="cep_empresa" type="text"  name="cep_empresa"  maxlength="9" onblur="pesquisacep(this.value);  ">
                            <label for="cep_empresa">CEP</label>
                    </div>
                        <a class="waves-effect waves-light btn">Buscar CEP</a>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                            <input placeholder="Logradouro" id="logradouro_empresa" type="text"  name="logradouro_empresa">
                            <label for="logradouro_empresa">Logradouro</label>
                    </div>
                    <div class="input-field col s6">
                            <input placeholder="Bairro" id="bairro_empresa" type="text"  name="bairro_empresa">
                            <label for="bairro_empresa">Bairro</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Complemento" id="complemento_empresa" type="text"  name="complemento_empresa">
                        <label for="complemento_empresa">Complemento</label>
                    </div>
                
                    <div class="input-field col s6">
                        <input placeholder="Número" id="numeroendereco_empresa" type="text"  name="numeroendereco_empresa">
                        <label for="numeroendereco_empresa">Número</label>
                    </div>
                </div>
    
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Cidade" id="cidade_empresa" type="text"  name="cidade_empresa">
                        <label for="cidade_empresa">Cidade</label>
                    </div>
                
                    <div class="input-field col s6">
                        <input placeholder="estado" id="estado_empresa" type="text"  name="estado_empresa">
                        <label for="estado_empresa">Estado</label>
                    </div>
                </div>

                <button type="submit" class="btn" name="btn-cadastrar"> Cadastrar </button>
                <a href="index.php" class="btn"> Listar Empresas </a>
        </form>
    </div>
</div>




<?php
// Footer
include_once 'includes/footer.php';
?>