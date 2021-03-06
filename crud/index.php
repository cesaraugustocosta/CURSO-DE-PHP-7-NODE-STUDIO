<?php 
    // Conexão
    include_once 'php_action/db_connect.php';
    // Header
    include_once 'includes/header.php'; 
    // Messagem
    include_once 'includes/message.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM clientes";
                    $resultado = mysqli_query($connect, $sql);
                    while ($dados = mysqli_fetch_array($resultado)):
                    $id = $dados['id'];
                    $nome = $dados['nome']; 
                    $sobrenome = $dados['sobrenome']; 
                    $email = $dados['email']; 
                    $idade = $dados['idade']; 
                ?>
                <tr>                    
                    <td><?=$nome; ?></td>
                    <td><?=$sobrenome; ?></td>
                    <td><?=$email; ?></td>
                    <td><?=$idade; ?></td>
                    <td><a href="editar.php?id=<?=$id ;?>" class="btn-floating blue"><i class="material-icons">edit</i></a></td>
                    <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>
                    <!-- Modal Structure -->
                    <div id="modal<?=$id ;?>" class="modal">
                        <div class="modal-content">
                        <h4>Opa</h4>
                        <p>Tem certeza que deseja excluir esse cliente?</p>
                        </div>
                        <div class="modal-footer">                        
                            <form action="php_action/delete.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                            </form>
                        </div>
                    </div>                    
                </tr> 
                <?php endwhile; ?>    
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar Cliente</a>
    </div>
    
</div>
<?php 
    // Footer
    include_once 'includes/footer.php'; 
?>



      