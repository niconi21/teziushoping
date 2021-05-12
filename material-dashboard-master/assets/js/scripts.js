function eliminarProductoServicio() {
  Swal.fire({
    title: "¿Estás seguro de querer eliminar este producto/servcio?",
    showDenyButton: true,
    confirmButtonText: `Cancelar`,
    denyButtonText: `Eliminar`,
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire("Operación cancelada", "", "info");
    } else if (result.isDenied) {
      Swal.fire(
        "Producto/servicio eliminado",
        "Se ha eliminado el producto/servicio",
        "success"
      );
    }
  });
}
