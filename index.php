<?php   
    require_once 'actions/category_action.class.php';
    $contr = new category_action();
?>
<html>
    <head>
        <title>Заголовок</title>
    </head>
    <body>
        
        <!-- здесь контент -->
        <?php
            $contr->index();
        ?>
        
        asdasdasdasdasdasdasdasd<-- это измененная хрень -->
    </body>
</html>
