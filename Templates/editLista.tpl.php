<?php
    use App\Controllers\UserController;
    
    include 'base.tpl.php';
    ?>
    <main><h1 class="text-success">Usuario <?= $_SESSION['uname']; ?></h1>

    </main>
    <div class="container">
        <h3>Editar Item</h3>

        <form action="<?=BASE?>user/editarItems" method="post">
            <p>Cambiar nombre: <input type="text" name="ItemName"></p>
            <p>Cambiar estado: 
                <select name="estado" size="1">
                    <option>Por hacer</option>
                    <option>Hecho</option>
                </select>
            </p>
            <button type="submit" value="guardar" >Guardar cambios</button>
        </form>
    </div>

    <?php
    include 'footer.tpl.php';
    ?>