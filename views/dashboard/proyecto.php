<?php include_once __DIR__ . '/header-dashboard.php'; ?>

<div class="contenedor-sm">
    <div class="contenedor-nueva-tarea">
        <button type="button" class="agregar-tarea" id="agregar-tarea">
            &#43;Nueva Tarea
        </button>
    </div>
    <div id="filtros" class="filtros">
         <id class="filtros-inputs">
             <h2>Filtros</h2>
             <div class="campos">
                 <label for="todas">Todas</label>
                 <input type="radio" id="todas" name="filtro" value="" checked>
             </div>
             <div class="campos">
                 <label for="completadas">Completadas</label>
                 <input type="radio" id="completadas" name="filtro" value="1">
             </div>
             <div class="campos">
                 <label for="pendientes">Pendientes</label>
                 <input type="radio" id="pendientes" name="filtro" value="0">
             </div>
         </id>
    </div>
    <ul id="listado-tareas" class="listado-tareas"></ul>
</div>

<?php include_once __DIR__ . '/footer-dashboard.php'; ?>

<?php
$script .= '
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="build/js/tareas.js"></script>
';

?>