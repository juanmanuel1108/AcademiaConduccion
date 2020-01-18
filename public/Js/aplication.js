var c = 0;
var url_servidor = "http://192.168.64.2/";

function deleteProvider(id){
    Swal.fire({
        title: 'Estas seguro que quieres eliminar este proveedor?',
        text: "Despues de aceptar, no se podra revertir!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, borralo'
    }).then((result) => {
        if (result.value) {
            var url = url_servidor + "Proyecto_MVC/Controllers/ProveedorController.php?action=delete&id=" + id;
            location.href = url;
            Swal.fire(
            'Borrado!',
            'El proveedor ha sido eliminado de la lista.',
            'Completado!'
        )
        }
    })
}

function updateProvider(id)
{
    var url = url_servidor + 'Proyecto_MVC/Controllers/ProveedorController.php?action=update&id=' + id;
    location.href = url;
}

function showDetailsProvider(id) {
    var url = url_servidor + 'Proyecto_MVC/Controllers/ProveedorController.php?action=detail&id=' + id;
    location.href = url;
}

function deleteClient(id){
    Swal.fire({
        title: 'Estas seguro que quieres eliminar este cliente?',
        text: "Despues de aceptar, no se podra revertir!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, borralo'
    }).then((result) => {
        if (result.value) {
            var url = url_servidor + "Proyecto_MVC/Controllers/ClienteController.php?action=delete&id=" + id;
            location.href = url;
            Swal.fire(
            'Borrado!',
            'El cliente ha sido eliminado de la lista.',
            'Completado!'
        )
        }
    })
}

function showDetailsClient(id) {
    var url = url_servidor + 'Proyecto_MVC/Controllers/ClienteController.php?action=detail&id=' + id;
    location.href = url;
}

function updateClient(id)
{
    var url = url_servidor + 'Proyecto_MVC/Controllers/ClienteController.php?action=update&id=' + id;
    location.href = url;
}

function signUp()
{
    var url = url_servidor + 'Proyecto_MVC/Controllers/UsuarioController.php?action=insert';
    location.href = url;
}

function logIn()
{
    var url = url_servidor + 'Proyecto_MVC/Controllers/UsuarioController.php?action=login';
    location.href = url;
}

function logOut()
{
    var url = url_servidor + 'Proyecto_MVC/Controllers/UsuarioController.php?action=logout';
    location.href = url;
}

function deleteUser(id){
    Swal.fire({
        title: 'Estas seguro que quieres eliminar este usuario?',
        text: "Despues de aceptar, no se podra revertir!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, borralo'
    }).then((result) => {
        if (result.value) {
            var url = url_servidor + "Proyecto_MVC/Controllers/UsuarioController.php?action=delete&id=" + id;
            location.href = url;
            Swal.fire(
            'Borrado!',
            'El usuario ha sido eliminado de la lista.',
            'Completado!'
        )
        }
    })
}

function showDetailsUser(id) {
    var url = url_servidor + 'Proyecto_MVC/Controllers/UsuarioController.php?action=detail&id=' + id;
    location.href = url;
}

function updateUser(id)
{
    var url = url_servidor + 'Proyecto_MVC/Controllers/UsuarioController.php?action=update&id=' + id;
    location.href = url;
}

function showDetailsFactura(cod_fac)
{
    var url = url_servidor + 'Proyecto_MVC/Controllers/ClienteXProductoController.php?action=detail&cod_fac=' + cod_fac;
    location.href = url;
}

function printFactura(cod_fac)
{
    var url = url_servidor + 'Proyecto_MVC/Controllers/ClienteXProductoController.php?action=print&cod_fac=' + cod_fac;
    location.href = url;
}

function deleteFactura(cod_fac)
{
    Swal.fire({
        title: 'Estas seguro que quieres eliminar esta Factura?',
        text: "Despues de aceptar, no se podra revertir!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, borralo'
    }).then((result) => {
        if (result.value) {
            var url = url_servidor + "Proyecto_MVC/Controllers/ClienteXProductoController.php?action=delete&cod_fac=" + cod_fac;
            location.href = url;
            Swal.fire(
            'Borrado!',
            'El proveedor ha sido eliminado de la lista.',
            'Completado!'
        )
        }
    })
}

function updateFactura(cod_fac)
{
    var url = url_servidor + 'Proyecto_MVC/Controllers/ClienteXProductoController.php?action=print&cod_fac=' + cod_fac;
    location.href = url;
}

function deleteProduct(id){
    Swal.fire({
        title: 'Estas seguro que quieres eliminar este product?',
        text: "Despues de aceptar, no se podra revertir!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, borralo'
    }).then((result) => {
        if (result.value) {
            var url = url_servidor + "Proyecto_MVC/Controllers/ProductoController.php?action=delete&id=" + id;
            location.href = url;
            Swal.fire(
            'Borrado!',
            'El producto ha sido eliminado de la lista.',
            'Completado!'
        )
        }
    })
}

function showDetailsProduct(id) {
    var url = url_servidor + 'Proyecto_MVC/Controllers/ProductoController.php?action=detail&id=' + id;
    location.href = url;
}

function updateProduct(id)
{
    var url = url_servidor + 'Proyecto_MVC/Controllers/ProductoController.php?action=update&id=' + id;
    location.href = url;
}