<!doctype html>
<html lang="pt">
    <head>
        <title>Main Menu</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
        <?php
        include('navbar.php');
        ?>
        <form method='POST' action='addprod_.php'>
            <div class="form-group">
                <label for="Prod">Produto</label>
                <input type="text" class="form-control is-invalid" id="Prod" name="Prod">
            </div>
            <div class="form-group">
                <label for="ProdDescr">Descrição</label>
                <textarea class="form-control is-invalid" id="ProdDescr" name="ProdDescr"></textarea>
            </div>
            <div class="form-group">
                <label for="Type">Classificação</label>
                <select class="form-control is-invalid" id="Type" name="Type">
                    <option></option>
                    <option>Comida</option>
                    <option>Bebida</option>
                    <option>Outros</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Criar</button>
        </form>
        
        <?php
        include('jsblock.php');
        ?>
        <script type="text/javascript">
            $("#navBrand")[0].innerHTML = "Lista de Produtos";
            $("#navProd")[0].setAttribute('class',$("#navProd")[0].getAttribute('class') + ' active');
        </script>
    </body>
</html>