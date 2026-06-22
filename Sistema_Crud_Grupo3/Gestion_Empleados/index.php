<?php
require_once('./controladores/EmpleadosController.php');

// Capturamos la accion que viene por la URL
$action = isset($_GET['action']) ? $_GET['action'] : 'inicio';

// Incluimos el sidebar (cabecera + menu)
require_once('./vistas/modulos/sidebar.php');

// Segun la accion mostramos la vista o ejecutamos el metodo
switch ($action) {

    case 'inicio':
        require_once('./vistas/modulos/inicio.php');
        break;

    case 'crear':
        require_once('./vistas/modulos/crear.php');
        break;

    case 'guardar':
        EmpleadosController::GuardarEmpleados(
            $_POST['txtNombre'],
            $_POST['txtPuesto'],
            $_POST['txtSalario'],
            $_POST['txtFechaIngreso']
        );
        break;

    case 'editar':
        require_once('./vistas/modulos/editar.php');
        break;

    case 'actualizar':
        EmpleadosController::EditarEmpleado(
            $_POST['txtId'],
            $_POST['txtNombre'],
            $_POST['txtPuesto'],
            $_POST['txtSalario'],
            $_POST['txtFechaIngreso']
        );
        break;

    case 'eliminar':
        EmpleadosController::EliminarEmpleado($_GET['id']);
        break;
}

// Incluimos el footer (cierre de etiquetas)
require_once('./vistas/modulos/footer.php');
?>
