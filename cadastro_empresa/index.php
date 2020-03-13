<?php

// Header
include_once 'php_action/db_conexao.php';
include_once 'includes/header.php';
include_once 'includes/alertaMensagem.php';
?>

<div class= "row">
    <div class = "col s12 m6 push-m3">
    <h3 class = "light">Empresas</h3>
    <table id="table_id"  class="display" style="width:100%" >
        <thead>
                <tr>
                    <th>Nome Empresa</th>
                    <th>CNPJ</th>                    
                    <th>CEP</th>
                    <th>Logradouro</th>
                    <th>Bairro</th>
                    <th>Complemento</th>
                    <th>Numero</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                 </tr>
        </thead>
        
        <tbody>
            <?php
            $sql = "SELECT * FROM `empresas`";
            $resultado = mysqli_query($connect, $sql);
            while($dados = mysqli_fetch_array($resultado)):
            ?>
            <tr class="empresas">
                <td class="info-nome" id="" > <?php echo $dados['nome_empresa']; ?> </td>
                <td class="info-cnpj" > <?php echo $dados['cnpj_empresa']; ?> </td>                
                <td class="info-cep" > <?php echo $dados['cep_empresa']; ?> </td>
                <td class="info-logradouro" > <?php echo $dados['logradouro_empresa']; ?> </td>
                <td class="info-bairro" > <?php echo $dados['bairro_empresa']; ?> </td>
                <td class="info-complemento" > <?php echo $dados['complemento_empresa']; ?> </td>
                <td class="info-numero" > <?php echo $dados['numeroendereco_empresa']; ?> </td>
                <td class="info-cidade" > <?php echo $dados['cidade_empresa']; ?> </td>
                <td class="info-estado" > <?php echo $dados['estado_empresa']; ?> </td>
                <td id="botao-edicao" > <a href="editar_empresa.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"> <i class="material-icons"> edit </i></a> </td>
                
                <td id="botao-deletar" > <a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger "> <i class="material-icons"> delete </i></a> </td>
                
                <!-- Modal Deletar -->
                <div id="modal<?php echo $dados['id']; ?>" class="modal">
                    <div class="modal-content">
                        <h4>Deseja excluir o regristo da empresa?</h4>
                      
                    </div>
                    <div class="modal-footer">
                      
                        <form action="php_action/delete.php" method="POST" >

                            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                            <button type="submit" name="btn-deletar" class="btn red" id="botaodeletar-confimar" >Sim quero deletar</button>
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                        </form>

                    </div>
                </div>  

             </tr>
            <?php endwhile; ?>
           
        </tbody>
    </table>
    <br>
    <a href="adicionar_empresa.php" class="btn" > Cadastrar Empresa </a>
    </div>
</div>

<script>
  
</script>

<?php


include_once 'includes/footer.php';
?>

