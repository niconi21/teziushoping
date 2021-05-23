const $seleccionArchivos = document.querySelector("#seleccionArchivos"),
  $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");

// Escuchar cuando cambie
$seleccionArchivos.addEventListener("change", () => {
  // Los archivos seleccionados, pueden ser muchos o uno
  const archivos = $seleccionArchivos.files;
  // Si no hay archivos salimos de la función y quitamos la imagen
  if (!archivos || !archivos.length) {
    $imagenPrevisualizacion.src = "";
    return;
  }
  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
  const primerArchivo = archivos[0];
  // Lo convertimos a un objeto de tipo objectURL
  const objectURL = URL.createObjectURL(primerArchivo);
  // Y a la fuente de la imagen le ponemos el objectURL
  $imagenPrevisualizacion.src = objectURL;
});

function eliminarProductoServicio(nombre, id) {
  Swal.fire({
    title: `¿Estás seguro de querer eliminar a ${nombre}?`,
    showDenyButton: true,
    confirmButtonText: `Cancelar`,
    denyButtonText: `Eliminar`,
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire("Operación cancelada", "", "info");
    } else if (result.isDenied) {
      $.ajax({
        type: "POST",
        url: "../../scripts/articulo/bajaArticulo.php",
        data: { id },
        success: function (response) {
          var jsonData = JSON.parse(response);
          if (jsonData.success == "1") {
            Swal.fire(
              "Producto/servicio eliminado",
              "Se ha dado de baja el producto/servicio",
              "success"
            );
          } else {
            Swal.fire({
              title: "Oops...! Error al dar de baja la publicación",
              icon: "error",
            });
          }
        },
      });
    }
  });
}

function eliminarMetodoPago(id) {
  Swal.fire({
    title: "¿Estás seguro de querer eliminar este método de pago?",
    showDenyButton: true,
    confirmButtonText: `Cancelar`,
    denyButtonText: `Eliminar`,
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire("Operación cancelada", "", "info");
    } else if (result.isDenied) {
      $.get(
        `../../scripts/metodosPago/bajaMetodoPago.php?id=${id}`,
        function (data) {
          if (data.ok) {
            Swal.fire(
              "Método de pago eliminado",
              "Se ha eliminado el método de pago",
              "success"
            );
            setTimeout(() => {
              window.location.href = "./misMetodosPago.php?statusDelete=200";
            }, 1000);
          } else {
            Swal.fire(
              "Oops...!",
              "Ha ocurrido un error al eliminar su método de pago",
              "danger"
            );
          }
        }
      );
    }
  });
}

function bajaCuentaUsuario() {
  Swal.fire({
    title: "Ingresa tu contraseña para dar de baja la cuenta",
    input: "password",
    inputLabel: "Contraseña",
    showCancelButton: true,
    inputValidator: (contrasenia) => {
      $.ajax({
        type: "POST",
        url: "../../scripts/usuarios/bajaUsuarios.php",
        data: { contrasenia },
        success: function (response) {
          console.log(response);
          var jsonData = JSON.parse(response);
          if (jsonData.success == "1") {
            window.location.href = "../../scripts/usuarios/logout.php";
          } else {
            Swal.fire({
              title: "Oops...! contraseña erronea",
              icon: "error",
            });
          }
        },
      });
    },
  });
}

function modalVentas(id, host) {
  $.get(`../../scripts/ventas/obtenerUnaVenta.php?id=${id}`, function (data) {
    let result = data.result;
    console.log(data);
    let contenido = `
      <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Venta de ${result.nombreProducto}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center text-justify">
      <img src="${host}productos/${
      result.imagen
    }" alt="" width="150px" class="">
      <p class="text-left"><b>Descripción:</b>${result.descripcion}</p>
      <p class="text-left"><b>Precio:</b> $${result.precio} MXN</p>
      <p class="text-left"><b>Cantidad:</b> ${result.cantidad} unidades</p>
      <p class="text-left"><b>Monto total:</b> $${result.monto}MXN</p>
      <p class="text-left"><b>Vendedor:</b> ${result.nombreComprador} ${
      result.apellidos
    }</p>
      <p class="text-left"><b>Método de pago:</b> <i class="fa fa-cc-visa" aria-hidden="true"></i>
          terminación ${result.noTarjeta.substr(12, 16)}</p>
      <p class="text-left"><b>Status:</b><span class="${result.status == 'En proceso' ? 'text-warning' : (result.status == 'En camino' ? 'text-info' : 'text-success')}">${
        result.status
      }</span></p>
      <p class="text-left"><b>Fecha:</b> ${result.fecha}</p>
      </div>
      `;
    $("#contenedorVentasModal").empty();
    $("#contenedorVentasModal").append(contenido);
    $("#modalVentas").modal("toggle");
    $("#modalVentas").modal("show");
  });
  $("#modalVentas").modal("toggle");
  $("#modalVentas").modal("show");
}

function modalCompras(id, host) {
  $.get(`../../scripts/compras/obtenerUnaCompra.php?id=${id}`, function (data) {
    let result = data.result;
    console.log(data);
    let contenido = `
      <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Compra de ${result.nombreProducto}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center text-justify">
      <img src="${host}productos/${
      result.imagen
    }" alt="" width="150px" class="">
      <p class="text-left"><b>Descripción:</b>${result.descripcion}</p>
      <p class="text-left"><b>Precio:</b> $${result.precio} MXN</p>
      <p class="text-left"><b>Cantidad:</b> ${result.cantidad} unidades</p>
      <p class="text-left"><b>Monto total:</b> $${result.monto}MXN</p>
      <p class="text-left"><b>Vendedor:</b> ${result.nombreVendedor} ${
      result.apellidos
    }</p>
      <p class="text-left"><b>Método de pago:</b> <i class="fa fa-cc-visa" aria-hidden="true"></i>
          terminación ${result.noTarjeta.substr(12, 16)}</p>
      <p class="text-left"><b>Status:</b><span class="${result.status == 'En proceso' ? 'text-warning' : (result.status == 'En camino' ? 'text-info' : 'text-success')}">${
        result.status
      }</span></p>
      <p class="text-left"><b>Fecha:</b> ${result.fecha}</p>
      </div>
      `;
    $("#contenedorComprasModal").empty();
    $("#contenedorComprasModal").append(contenido);
    $("#modalCompras").modal("toggle");
    $("#modalCompras").modal("show");
  });
}

function modalProducto(id, host) {
  $.get(
    `../../scripts/articulo/ObtenerUnProductoServicio.php?id=${id}`,
    function (data) {
      let result = data.result;
      console.log(data);
      $("#exampleModalLabel").empty();
      $("#exampleModalLabel").append(result.nombre);
      let contenido = `
      <img src="${host}/productos/${result.imagen}" alt="" width="150px" class="">
      <p class="text-left"><b>Descripción:</b>${result.descripcion}</p>
      <p class="text-left"><b>Precio:</b> $${result.precio} MXN</p>
      <p class="text-left"><b>Vendedor:</b> ${result.nombreUsuario} ${result.apellidos}</p>
      <p class="text-left"><b>Stok:</b> ${result.cantidad} unidades</p>
      <p class="text-left"><b>Fecha de publicacion:</b> ${result.fecha} A.M</p>`;
      $("#contenidoModalProducto").empty();
      $("#contenidoModalProducto").append(contenido);
      $("#modalProducto").modal("toggle");
      $("#modalProducto").modal("show");
    }
  );
}
