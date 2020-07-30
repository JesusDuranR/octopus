<div class="page-wrapper">
    <div class="container-fluid">
        ¡Hola programadores!

        <form action="<?php echo site_url()?>/NotificationController" method="POST">
            <input type="text" name="nombre"/>
            <input type="submit" value="DAME CLIC"/>
        <form>

        <?php echo $name ?>
    </div>
</div>