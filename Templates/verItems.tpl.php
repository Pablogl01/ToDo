<?php
    use App\Controllers\UserController;
    
    include 'base.tpl.php';
    ?>
    <main><h1 class="text-success">Usuario <?= $_SESSION['uname']; ?></h1>

    </main>
    <div class="container">
        <h2>El contenido de la lista seleccionada es:</h2>                              
        <?php
            UserController::verItems();
        ?><br><br><br>

        <h3>Añadir Item</h3>

        <form action="<?=BASE?>user/insertItem" method="post">
            <p>Nombre: <input type="text" name="itemName"></p>
            <button type="submit" value="crear" >Añadir item</button>
        </form>
    </div>

    <?php
    include 'footer.tpl.php';
    ?>