<!doctype html>
<html lang="pt">
    <head>
        <title>Main Menu</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <?php
        include('cssblock.php');
        ?>
    </head>
    <body>
        <?php 
        include('navbar.php');
        ?>
        <form method='POST' action='addtab_.php'>
            <div class="form-group">
                <label for="Tab">Mesa/Comanda</label>
                <input type="text" class="form-control is-invalid" id="Tab" name="Tab">
            </div>
            <div class="form-group">
                <label for="TabDescr">Descrição</label>
                <textarea class="form-control" id="TabDescr" name="TabDescr"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Criar</button>
        </form>
        
        <?php
        include('jsblock.php');
        ?>
    </body>
</html>