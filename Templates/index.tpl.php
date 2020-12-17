<?php //include 'base.tpl.php'; ?>
    <!--<h1><? //$title; ?></h1>-->
    <footer></footer>
    <?php 
        $db=$this->getDB();
        $dataview=['title'=>'login'];
        $this->render($dataview,"login");
    ?>
</body>
</html>