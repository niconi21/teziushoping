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

function eliminarMetodoPago() {
  Swal.fire({
    title: "¿Estás seguro de querer eliminar este método de pago?",
    showDenyButton: true,
    confirmButtonText: `Cancelar`,
    denyButtonText: `Eliminar`,
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire("Operación cancelada", "", "info");
    } else if (result.isDenied) {
      Swal.fire(
        "Método de pago eliminado",
        "Se ha eliminado el método de pago",
        "success"
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

function modalVentas(id) {
  $("#modalVentas").modal("toggle");
  $("#modalVentas").modal("show");
}
function modalCompras(id) {
  $("#modalCompras").modal("toggle");
  $("#modalCompras").modal("show");
}
