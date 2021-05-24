<?php
//inicio del html
include('../partials/header.php');
?>
<title>Dashboard</title>
</head>

<?php
$totalPagar = 0;
//footer del html y de la página
include('../../scripts/carrito/obtenerCarrito.php');
include('../../scripts/metodosPago/obtenerMetodosPago.php');
include('../partials/navbar.php');
?>
<div class="container">
    <div class="row animate__animated animate__fadeInLeft">
        <h3 class="text-white mt-3">
            <?php
            echo $urls[$page[0]];
            ?>
        </h3>
    </div>
</div>

<div class="container-fluid mt-5 mb-5">
    <div class="row">

        <div class="col-4">
            <div class="card bg-fondo">
                <div class="card-header text-center text-white">
                    <h4 class="">Productos/Servicios</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php
                        while ($row = $queryCarrito->fetch(PDO::FETCH_ASSOC)) {
                            $totalPagar += $row['cantidadCarrito'] * $row['precio'];
                            echo '
                        <a href="#" class="list-group-item bg-fondo text-white border border-white">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">' . $row['nombre'] . '</h5>    
                                <small>$' . $row['precio'] . ' MXN x Unidad</small>
                            </div>
                            <p class="mb-1">' . $row['descripcion'] . '</p>
                            <small>' . $row['cantidadCarrito'] . ' unidades</small>
                            <small>$' . ($row['cantidadCarrito'] * $row['precio']) . ' MXN</small>
                        </a>
                        ';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card bg-fondo">
                <div class="card-header">
                    <h4 class="text-white">Elige tu método de pago</h4>
                </div>
                <div class="card-body">
                    <form action="../../scripts/carrito/realizarPago.php" method="POST">
                        <select class="form-control" onchange="selectMetodoPago()" id='selectMetodosPago' name="metodoPago">

                            <?php
                            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {

                                echo '
                                    <option value="' . $row['id'] . '">' . ($row['noTarjeta'][0] == 4 ? 'Visa' : ($row['noTarjeta'][0] == 5 ? 'MasterCard' : 'Desnococida')) . ' terminación ' . substr($row['noTarjeta'], 12, 4) . '</option>
                                ';
                            }
                            ?>

                        </select>

                        <div class="card text-left bg-fondo text-white mt-4 mb-4">
                            <div class="card-body" id="contenidoMetodoPago">
                                <h5 class="card-title">No. tarjeta
                                </h5>
                                <p class="card-text"><b>Exp: </b></p>
                                <p class="card-text"><b>Titular: </b> </p>
                                <p class="card-text"><b>Dirección: </b></p>
                                <small></small>
                            </div>
                        </div>
                        <h3 class="text-white">Pagar: <?php echo $totalPagar; ?> MXN</h3><br>
                        <button type="submit" class="btn btn-success btn-block"> <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                            Procesar Pago
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    

    function selectMetodoPago() {
        let id = document.getElementById('selectMetodosPago').value;
        $.get(`../../scripts/metodosPago/obtenerUnMetodoPago.php?id=${id}`, function(data) {
            console.log(data);
            let result = data.result;
            $('#contenidoMetodoPago').empty();
            $('#contenidoMetodoPago').append(`
            <h5 class="card-title">
            ${result.noTarjeta[0]==4?'<i class="fa fa-cc-visa" aria-hidden="true"></i>': 
            '<i class="fa fa-cc-mastercard" aria-hidden="true"></i>'}
            terminación ${result.noTarjeta.substr(12,16)}            </h5>
                                    <p class="card-text"><b>Exp.</b> ${result.mes}/${result.anio}</p>
                                    <p class="card-text"><b>Titular:</b> ${result.titular}</p>
                                    <small>${result.noTarjeta[0]==4?'Visa':'MasterCard'}</small>
            `);
        })
    }

    
</script>


<?php
//footer del html y de la página
include('../partials/footer.php');
?>