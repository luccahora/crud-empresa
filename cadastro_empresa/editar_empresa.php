<?php
// Header
include_once 'includes/header.php';

include_once 'php_action/db_conexao.php';

if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
   
    $sql = "SELECT * FROM empresas WHERE id = '$id'" ;
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;    

?>


<div class= "row">
    <div class = "col s12 m6 push-m3">
        <h3 class = "light"> Editar Empresa </h3>

        <form class="col s12" action="php_action/update.php" method="POST">
            
            <input type="hidden" value=" <?php echo $dados['id']; ?> " name="id" >
            <div class="input-field col s6">
                <input placeholder="Nome Empresa" id="nome_empresa" type="text" name="nome_empresa" value=" <?php echo $dados['nome_empresa']; ?> " >
                <label for="nome_empresa">Nome Empresa</label>
            </div>
           
            <div class="input-field col s6">
                <input id="cnpj_empresa" type="text"  name="cnpj_empresa" value=" <?php echo $dados['cnpj_empresa']; ?>" onKeyPress="MascaraGenerica(this, 'CNPJ')"; >
                <label for="cnpj_empresa">CNPJ</label>
            </div>

            
                <div class="row">
                    <div class="input-field col s6">
                            <input placeholder="CEP" id="cep_empresa" type="text"  name="cep_empresa"  maxlength="9" onblur="pesquisacep(this.value);" value=" <?php echo $dados['cep_empresa']; ?>"  >
                            <label for="cep_empresa">CEP</label>
                    </div>
                        <a class="waves-effect waves-light btn">Buscar CEP</a>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                            <input placeholder="Logradouro" id="logradouro_empresa" type="text"  name="logradouro_empresa" value=" <?php echo $dados['logradouro_empresa']; ?>" >
                            <label for="logradouro_empresa">Logradouro</label>
                    </div>
                    <div class="input-field col s6">
                            <input placeholder="Bairro" id="bairro_empresa" type="text"  name="bairro_empresa" value=" <?php echo $dados['bairro_empresa']; ?>" >
                            <label for="bairro_empresa">Bairro</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Complemento" id="complemento_empresa" type="text"  name="complemento_empresa" value=" <?php echo $dados['complemento_empresa']; ?>" >
                        <label for="complemento_empresa">Complemento</label>
                    </div>
                
                    <div class="input-field col s6">
                        <input placeholder="Número" id="numeroendereco_empresa" type="text"  name="numeroendereco_empresa" value=" <?php echo $dados['numeroendereco_empresa']; ?>" >
                        <label for="numeroendereco_empresa">Número</label>
                    </div>
                </div>
    
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Cidade" id="cidade_empresa" type="text"  name="cidade_empresa" value=" <?php echo $dados['cidade_empresa']; ?>" >
                        <label for="cidade_empresa">Cidade</label>
                    </div>
                
                    <div class="input-field col s6">
                        <input placeholder="estado" id="estado_empresa" type="text"  name="estado_empresa" value=" <?php echo $dados['estado_empresa']; ?>" >
                        <label for="estado_empresa">Estado</label>
                    </div>
                </div>

                <button type="submit" class="btn" name="btn-editar" id="botao-atualizar" > Atualizar </button>
                <a href="index.php" class="btn"> Listar Empresas </a>
        </form>
    </div>
</div>




<?php
// Footer
include_once 'includes/footer.php';
?>