<?php
include('connect.php');
?>
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
        <a class='btn btn-secondary' href='addtab.php'><img src='Entypo+/Entypo+/add-user.svg' alt='+' class='iconfy'> Adicionar nova comanda/mesa</a>
            <div class="form-group">
                <label for="TabId">Mesa/Comanda</label>
                <select class="form-control is-invalid" id="TabId">
                    <option></option>
                    <?php
                    include('printTabList.php');
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="ProdId">Produto</label>
                <select class="form-control is-invalid" id="ProdId">
                    <option></option>
                    <?php
                    //include('prodList.php');
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Example multiple select</label>
                <select multiple class="form-control" id="exampleFormControlSelect2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </form>
        
        <?php
        include('jsblock.php');
        ?>
        <script>
            $("#navBrand")[0].innerHTML = "Mesas e Comandas";
            $("#navTab")[0].setAttribute("class",$("#navTab")[0].getAttribute("class") + " active");
        </script>
    </body>
</html>