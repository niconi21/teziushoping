<?php
$post = $_GET['statusPost'];
$put = $_GET['statusPut'];
$idCategoria = $_GET['categoria'];
//inicio del html
if (!isset($idCategoria))
    include('../../scripts/articulo/obtenerTodosProductosServicios.php');

include('../../scripts/articulo/obtenerCategorias.php');
include('../partials/header.php');
?>
<title>Productos y servicios</title>
</head>

<?php
//footer del html y de la página
include('../partials/navbar.php');
if ($post == 200)
    echo '<div class="alert alert-success mt-5" role="alert">
<b>¡Felicidades!</b>Producto agregado al carrito
</div>';
else if ($post == 400)
    echo '<div class="alert alert-danger mt-5" role="alert">
<b>¡Oops...!</b>El producto no ha sido agregado al carrito
</div>';
if ($put == 200)
    echo '<div class="alert alert-info mt-5" role="alert">
<b>¡Felicidades!</b> Producto actualizado en elcarrito
</div>';
else if ($put == 400)
    echo '<div class="alert alert-warning mt-5" role="alert">
<b>¡Oops...!</b>El producto no ha sido actualizado en el carrito
</div>';
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

<div class="container-fluid mt-5">
    <div class="row mb-5">
        <div class="col-3 text-white text-center">
            <h4>Categorías</h4>
            <div class="form-inline my-2 my-lg-0 ml-3">
                <input class="form-control" type="search" placeholder="Categoría" aria-label="Search" id="inputBuscar">
                <button class="btn btn-success my-2 my-sm-0" type="submit" onclick="buscador(<?php echo '\'' . $host . '\'' ?>)"><i class="fa fa-search" aria-hidden="true"></i> </button>
            </div>
            <div class="list-group mt-4">

                <?php
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {

                    echo '<span  class="list-group-item bg-fondo text-white" onclick="buscarCategoria(' . $row['id'] . ',\'' . $host . '\')">' . $row['nombre'] . '</span>';
                }
                ?>


            </div>
        </div>
        <div class="col-9  pt-3">
            <h4 class="text-white" id="textoPublicaciones">Últimos publicados</h4>
            <div class="card-columns bg-fondo" id="contenedorProductosServicios">
                <?php
                while ($row = $queryProductos->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="card m-3 border border-dark" style="width: 18rem;">
                    <img src="' . $host . 'productos/' . $row['imagen'] . '" class="card-img-top" alt="...">
                    <div class="card-body">
                        <form action="../../scripts/carrito/altaCarrito.php" method="POST">
                                <h5 class="card-title">' . $row['nombre'] . '</h5>
                                <p class="card-text"><small class="text-muted"><b>Publicado:</b> ' . $row['fecha'] . '</small></p>
                                <p class="card-text"><small class="text-muted"><b>Precio:</b> ' . $row['precio'] . '</small></p>
                                <p class="card-text">' . $row['descripcion'] . '</p>
                                <p class="card-text"><small class="text-muted"><b>Stock:</b> ' . $row['cantidad'] . '</small></p>
                                <p class="card-text"><input type=number min="0" max="' . $row['cantidad'] . '" class="form-control" placeholder="Unidades" name="cantidad"/></p>
                                <div class="row">
                                    <div class="col">
                                        <a type"button" onclick="modalProducto(' . $row['id'] . ',\'' . $host . '\')" class="card-link btn btn-info btn-block"><i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="col">
                                    <button type="submit" name="id_publicacion" value="' . $row['id'] . '"  class="card-link btn btn-success btn-block"><i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>';
                }
                ?>


            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalProducto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Disco duro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center text-justify" id="contenidoModalProducto">
                -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<script>
    function buscarCategoria(id, host) {
        $.get(`../../scripts/articulo/obtenerProductoCategoria.php?id=${id}`, function(data) {
            $('#contenedorProductosServicios').empty();
            if (data.ok) {
                contenido = '';
                data.results.forEach(result => {
                    contenido += `
                    <div class="card m-3 border border-dark" style="width: 18rem;">
                    <img src="${host}productos/${result.imagen}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <form action="../../scripts/carrito/altaCarrito.php" method="POST">
                                <h5 class="card-title">Tornillos</h5>
                                <p class="card-text"><small class="text-muted"><b>Publicado:</b> ${result.fecha}</small></p>
                                <p class="card-text"><small class="text-muted"><b>Precio:$ </b> ${result.precio}</small></p>
                                <p class="card-text">${result.descripcion}</p>
                                <p class="card-text"><small class="text-muted"><b>Stock:</b> ${result.cantidad}</small></p>
                                <p class="card-text"><input type=number min="0" max="${result.cantidad}" class="form-control" placeholder="Unidades" name="cantidad"/></p>
                                <div class="row">
                                    <div class="col">
                                        <a type"button" onclick="modalProducto(${result.id},${host})" class="card-link btn btn-info btn-block"><i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="col">
                                    <button type="submit" name="id_publicacion" value="${result.id}"  class="card-link btn btn-success btn-block"><i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>`;
                });
                $('#contenedorProductosServicios').append(contenido);
                $('#textoPublicaciones').empty();
                $('#textoPublicaciones').append(data.results[0].nombreCategoria);
            } else {
                $('#textoPublicaciones').empty();
                $('#textoPublicaciones').append('No hay resultados');
            }

        })
    }

    function buscador(host) {
        let categoriaInput = $('#inputBuscar').val();
        let id = 0;
        $.get('../../scripts/articulo/obtenerCategoriaJquery.php', function(data) {
            data.results.forEach(categoria => {
                if (categoria.nombre == categoriaInput) {
                    id = categoria.id;
                    $.get(`../../scripts/articulo/obtenerProductoCategoria.php?id=${id}`, function(data) {
                        $('#contenedorProductosServicios').empty();
                        if (data.ok) {
                            contenido = '';
                            data.results.forEach(result => {
                                contenido += `
                    <div class="card m-3 border border-dark" style="width: 18rem;">
                    <img src="${host}productos/${result.imagen}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <form action="../../scripts/carrito/altaCarrito.php" method="POST">
                                <h5 class="card-title">Tornillos</h5>
                                <p class="card-text"><small class="text-muted"><b>Publicado:</b> ${result.fecha}</small></p>
                                <p class="card-text"><small class="text-muted"><b>Precio:$ </b> ${result.precio}</small></p>
                                <p class="card-text">${result.descripcion}</p>
                                <p class="card-text"><small class="text-muted"><b>Stock:</b> ${result.cantidad}</small></p>
                                <p class="card-text"><input type=number min="0" max="${result.cantidad}" class="form-control" placeholder="Unidades" name="cantidad"/></p>
                                <div class="row">
                                    <div class="col">
                                        <a type"button" onclick="modalProducto(${result.id},${host})" class="card-link btn btn-info btn-block"><i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="col">
                                    <button type="submit" name="id_publicacion" value="${result.id}"  class="card-link btn btn-success btn-block"><i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>`;
                            });
                            $('#contenedorProductosServicios').append(contenido);
                            $('#textoPublicaciones').empty();
                            $('#textoPublicaciones').append(data.results[0].nombreCategoria);
                        } else {
                            $('#textoPublicaciones').empty();
                            $('#textoPublicaciones').append('No hay resultados');
                        }

                    })
                    return;
                }
            });
        })

    }
</script>

<?php
//footer del html y de la página
include('../partials/footer.php');
?>