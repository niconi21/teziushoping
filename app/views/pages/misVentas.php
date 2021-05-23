<?php
//inicio del html
include('../partials/header.php');
?>
<title>Mis ventas</title>
</head>

<?php
//footer del html y de la página
include('../../scripts/ventas/obtenerVentas.php');
include('../partials/navbar.php');
?>
<div class="container">
    <div class="row animate__animated animate__fadeInLeft">
        <h6 class="text-white mt-3">
            <?php
            echo $urls[$page[0]];
            ?>
        </h6>
    </div>
</div>
<div class="container-fluid mt-5 animate__animated animate__fadeInRight">
    <div class="row">
        <div class="col">
            <table class="table  table-dark table-striped table-hover">
                <thead class="text-center">
                    <td>Imagen</td>
                    <td>Producto/Servicio</td>
                    <td>Comprador</td>
                    <td>Método de pago</td>
                    <td>Cantidad</td>
                    <td>Monto total</td>
                    <td>Fecha</td>
                    <td>Status</td>
                    <td>Acción</td>
                </thead>
                <tbody>
                    <?php
                    while ($row = $queryVentas->fetch(PDO::FETCH_ASSOC)) {
                        echo '
                        <tr>
                        <td><img src="' . $host . 'productos/' . $row['imagen'] . '" alt="" width="100px"></td>
                        <td>' . $row['nombreProducto'] . '</td>
                        <td>' . $row['nombreComprador'] . ' ' . $row['apellidos'] . '</td>
                        <td><i class="fa fa-cc-visa" aria-hidden="true"></i>
                            terminación ' . substr($row['noTarjeta'], 12, 16) . '</td>
                        <td>' . $row['cantidad'] . ' unidad</td>
                        <td>$' . $row['monto'] . '</td>
                        <td>' . $row['fecha'] . '</td>
                        <td>
                            <select name="statusVenta" id="selectStatusCompra' . $row['id'] . '" class="form-control" onchange="actualizarStatus(' . $row['id'] . ')">
                                <option ' . ($row['status'] == 'En proceso' ? 'selected' : '') . ' value="En proceso">En proceso</option>
                                <option ' . ($row['status'] == 'En camino' ? 'selected' : '') . ' value="En camino">En camino</option>
                                <option ' . ($row['status'] == 'Entregado' ? 'selected' : '') . ' value="Entregado">Entregado</option>
                            </select>
                        </td>
                        <td class="text-center">
                            <button onclick="modalVentas('.$row['id'].', \''.$host.'\')" class="btn btn-btn-btn-outline-dark"><i class="fa fa-eye text-white" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                        ';
                    }
                    ?>







                </tbody>
            </table>


        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalVentas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="contenedorVentasModal">
            <div class="modal-header" >
                <h5 class="modal-title" id="exampleModalLabel">Venta de disco duro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center text-justify">
                <img src="../../assets/img/productos.jpg" alt="" width="150px" class="">
                <p class="text-left"><b>Descripción:</b>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias ut alias quidem impedit deserunt nisi natus soluta, cum deleniti maxime laudantium, atque, ea voluptas repellat voluptatem? Asperiores voluptatibus nam earum!</p>
                <p class="text-left"><b>Precio:</b> $1200 MXN</p>
                <p class="text-left"><b>Cantidad:</b> 2 unidades</p>
                <p class="text-left"><b>Monto total:</b> $2400MXN</p>
                <p class="text-left"><b>Comprador:</b> Nicolas Moreno Durán</p>
                <p class="text-left"><b>Método de pago:</b> <i class="fa fa-cc-visa" aria-hidden="true"></i>
                    terminación 2108</p>
                <p class="text-left"><b>Status:</b><span class="text-success">Entregado</span></p>
                <p class="text-left"><b>Fecha:</b> 12-03-2021 12:55:32 A.M</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    function actualizarStatus(id) {

        let status = $(`#selectStatusCompra${id}`).val();
        $.post('../../scripts/ventas/actualizarVenta.php',{id, status},function(data){
            if(data.ok){
                Swal.fire({
                    title: 'Estatus actualizado',
                    icon: 'success'
                }).then(data=>{

window.location.href = './misVentas.php';
})
            }else{
                Swal.fire({
                    title: 'Ocurrió un error',
                    icon: 'danger'
                }).then(data=>{

                    window.location.href = './misVentas.php';
                })
            }
        })
    }
</script>
<?php
//footer del html y de la página
include('../partials/footer.php');
?>


<!-- <select name="statusVenta" id="selectStatusCompra'.$row['id'].'" class="form-control" onchange="actualizarStatus('.$row['id'].')">
                                        <option '.($row['status']== 'En proceso' ? 'selected' : '').'value="En proceso">En proceso</option>
                                        <option '.($row['status']== 'En camino' ? 'selected' : '').'value="En camino">En camino</option>
                                        <option '.($row['status']== 'Entregado' ? 'selected' : '').'value="Entregado">Entregado</option>
                                    </select>

                                    function actualizarStatus(id) {
    
    console.log($(`#selectStatusCompra${id}`).val());
}
</script> -->