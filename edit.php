<?php
include_once("templates/header.php");
?>
    <div class="container">
        <?php include_once("templates/backbtn.html"); ?>
        <h1 id="main-title">Editar Contato</h1>
        <form id="create-form" action="<?php $BASE_URL ?>config/process.php" method="POST" >
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?php print_r($contact['id']) ?>">
            <div class="form-group">
                <label for="name">Nome do contato:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" value="<?php print_r($contact['name']) ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefone do contato:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" value="<?php print_r($contact['phone']) ?>" required>
            </div>
            <div class="form-group">
                <label for="observations">Observações:</label>
                <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira as observações" rows="3"><?php print_r($contact['observations']) ?></textarea>
            </div>
             <button class="btn btn-primary"type="submit">Atualizar</button>

        </form>
    </div>
<?php
include_once("templates/footer.php");
?>