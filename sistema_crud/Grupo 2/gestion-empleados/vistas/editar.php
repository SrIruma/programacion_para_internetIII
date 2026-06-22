<?php
$id = $_GET['id'];
$empleado = EmpleadoController::obtenerPorId($id);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    EmpleadoController::actualizar($id, $_POST['nombre'], $_POST['puesto'], $_POST['salario']);
}
?>

<h2>Editar Empleado</h2>
<div class="card p-4 shadow-sm mt-3" style="max-width: 600px;">
</div>
