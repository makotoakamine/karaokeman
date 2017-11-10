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
        <div class='container-fluid'>
            <?php
            include("navbar.php");
            ?>
            <a class='btn btn-secondary' href='addprod.php'><img src='Entypo+/Entypo+/add-to-list.svg' alt='+' class='iconfy'> Adicionar novo produto</a>
            <!--Início tabela de comida-->
            <!--<div class='alert alert-secondary' role='alert'><strong>Pratos e Petiscos</strong></div>-->
            <table class="table table-sm">
                <thead>
                    <tr class='table-secondary'><th colspan='4'>Pratos e Petiscos</th></tr>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Produto</th>
                        <th scope="col">Detalhes</th>
                        <th scope="col">Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('connect.php');
                    $sql = "SELECT T0.prod , T0.proddet , IFNULL(T1.price,0) as 'price' , MAX(IFNULL(T1.Id,0)) FROM Prod T0 LEFT JOIN Price T1 ON T0.prod = T1.prod  WHERE T0.status = 'O' AND T0.tipo = 'Comida' GROUP BY T0.prod , T0.proddet , T1.price ORDER BY T0.prod ";
                    $result = $db->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $i = 1;
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><th scope=\"row\">" . $i . "</th>";
                            echo "<td>" . $row["prod"] . "</td>";
                            $ff = "And here's some amazing\" content. It's very engaging. Right?";
                            echo "<td><button type='button' class='btn btn-success btn-sm' data-toggle='modal' data-target='#ModalDet' onclick='completemodal(this)' data-content=\"" .  htmlspecialchars($row["proddet"]) . "\">Detalhes</button></td>";
                            echo "<td>$" . $row["price"] . " <img src='Entypo+/Entypo+/cycle.svg' alt='Atualizar' class='iconfy' onclick='changevalue(this)'></td></tr>";
                            $i++;
                        }
                    }
                    ?>
                </tbody>
            </table>
            <!--------------------------------------------------------->
            <!--Início tabela de bebidas-->
            <!--<div class='alert alert-secondary' role='alert'><strong>Bebidas</strong></div>-->
            <table class="table table-sm">
                <thead>
                   <tr class='table-secondary'><th colspan='4'>Bebidas</th></tr>
                   <tr>
                       <th scope="col">#</th>
                       <th scope="col">Produto</th>
                       <th scope="col">Detalhes</th>
                       <th scope="col">Preço</th>
                   </tr>
                </thead>
                <tbody>
                   <?php
                   include('connect.php');
                   $sql = "SELECT T0.prod , T0.proddet , IFNULL(T1.price,0) as 'price' , MAX(IFNULL(T1.Id,0)) FROM Prod T0 LEFT JOIN Price T1 ON T0.prod = T1.prod  WHERE T0.status = 'O' AND T0.Tipo = 'Bebida' GROUP BY T0.prod , T0.proddet , T1.price ORDER BY T0.prod ";
                   $result = $db->query($sql);
                   if ($result->num_rows > 0) {
                       // output data of each row
                       $i = 1;
                       while($row = $result->fetch_assoc()) {
                           echo "<tr><th scope=\"row\">" . $i . "</th>";
                           echo "<td>" . $row["prod"] . "</td>";
                           $ff = "And here's some amazing\" content. It's very engaging. Right?";
                           echo "<td><button type='button' class='btn btn-success btn-sm' data-toggle='modal' data-target='#ModalDet' onclick='completemodal(this)' data-content=\"" .  htmlspecialchars($row["proddet"]) . "\">Detalhes</button></td>";
                           echo "<td>$" . $row["price"] . " <img src='Entypo+/Entypo+/cycle.svg' alt='Atualizar' class='iconfy' onclick='changevalue(this)'></td></tr>";
                           $i++;
                       }
                   }
                   ?>
                </tbody>
            </table>
            <!--------------------------------------------------------->
            <!--Início tabela de outros-->
            <!--<div class='alert alert-secondary' role='alert'><strong>Outros</strong></div>-->
            <table class="table table-sm">
                <thead>
                   <tr class='table-secondary'><th colspan='4'>Outros</th></tr>
                   <tr>
                       <th scope="col">#</th>
                       <th scope="col">Produto</th>
                       <th scope="col">Detalhes</th>
                       <th scope="col">Preço</th>
                   </tr>
                </thead>
                <tbody>
                   <?php
                   include('connect.php');
                   $sql = "SELECT T0.prod , T0.proddet , IFNULL(T1.price,0) as 'price' , MAX(IFNULL(T1.Id,0)) FROM Prod T0 LEFT JOIN Price T1 ON T0.prod = T1.prod  WHERE T0.status = 'O' AND T0.Tipo = 'Outros' GROUP BY T0.prod , T0.proddet , T1.price ORDER BY T0.prod ";
                   $result = $db->query($sql);
                   if ($result->num_rows > 0) {
                       // output data of each row
                       $i = 1;
                       while($row = $result->fetch_assoc()) {
                           echo "<tr><th scope=\"row\">" . $i . "</th>";
                           echo "<td>" . $row["prod"] . "</td>";
                           $ff = "And here's some amazing\" content. It's very engaging. Right?";
                           echo "<td><button type='button' class='btn btn-success btn-sm' data-toggle='modal' data-target='#ModalDet' onclick='completemodal(this)' data-content=\"" .  htmlspecialchars($row["proddet"]) . "\">Detalhes</button></td>";
                           echo "<td>$" . $row["price"] . " <img src='Entypo+/Entypo+/cycle.svg' alt='Atualizar' class='iconfy' onclick='changevalue(this)'></td></tr>";
                           $i++;
                       }
                   }
                   ?>
                </tbody>
            </table>
            <!--------------------------------------------------------->
            <div class="modal fade" id="ModalDet" tabindex="-1" role="dialog" aria-labelledby="ModalDet" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalDetTit">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="ModalDetBody">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include('jsblock.php');
        ?>
        
        <script type="text/javascript" >
            function completemodal(x){
                $("#ModalDetBody")[0].innerHTML = x.getAttribute("data-content");
                $("#ModalDetTit")[0].innerHTML = x.parentNode.parentNode.childNodes[1].innerHTML;
            }
            function changevalue(x){
                x.parentNode.hidden = true;
                var y = document.createElement("td");
                y.innerHTML = "<td><input class='form-control form-control-sm' type='text'><button class='btn btn-success'>Salvar</button><button class='btn btn-success'>Cancelar</button></td>";
                // y.innerHTML = "<td><div class='form-group row'><div class='col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2'><input class='form-control form-control-sm' type='text'></div></div><button class='btn btn-success'>Salvar</button><button class='btn btn-success'>Cancelar</button></td>";
                // y.innerHTML = "<td><input class='form-control' type='text' onblur='validcurr(this)'></td>";
                x.parentNode.parentNode.appendChild(y);
                
            }
        </script>
        <script>
            $("#navBrand")[0].innerHTML = "Lista de Produtos";
            $("#navProd")[0].setAttribute("class",$("#navProd")[0].getAttribute("class") + " active");
        </script>
    </body>
</html>