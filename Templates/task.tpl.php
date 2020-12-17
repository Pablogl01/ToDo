<?php
    use App\Controllers\UserController;
    
    include 'base.tpl.php';
    ?>
    <main><h1 class="text-success">Usuario <?= $_SESSION['uname']; ?></h1>

    </main>
    <div class="container">
        <h2>Aqui puedes ver tus listas:</h2>                              
        <?php
            UserController::selectLista();
        ?><br><br><br>

        <h3>Añadir lista</h3>

        <form action="<?=BASE?>user/insertLista" method="post">
            <p>Nombre: <input type="text" name="tableName"></p>
            <p>Fecha limite: <input type="date" name="list-start"></p>
            <button type="submit" value="crear" >Crear lista</button>
        </form>
    </div>

    <?php
    include 'footer.tpl.php';
    ?>