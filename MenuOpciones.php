<?php if ($TipoUsuario == "Administrador") { ?>

<div class="sb-sidenav-menu-heading">Interfaz Principal</div>

<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
    aria-expanded="false" aria-controls="collapsePages">
    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
    Gestión General
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
    data-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
        <a class="nav-link collapsed" href="#" data-toggle="collapse"
            data-target="#pagesCollapseAuth" aria-expanded="false"
            aria-controls="pagesCollapseAuth">Area Academica
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
            data-parent="#sidenavAccordionPages">
            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link"
                    href="GestionDocente.php">Gestión de Docentes</a><a class="nav-link"
                    href="GestionEstudiante.php">Gestión de Estudiantes</a><a class="nav-link"
                    href="GestionAula.php">Gestión de Aulas</a><a class="nav-link"
                    href="GestionMateria.php">Gestión de Materias</a></nav>
        </div>
        <a class="nav-link collapsed" href="#" data-toggle="collapse"
            data-target="#pagesCollapseError" aria-expanded="false"
            aria-controls="pagesCollapseError">Area Administrativa
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
            data-parent="#sidenavAccordionPages">
            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link"
                    href="GestionFacultad.php">Gestión de Facultad</a><a class="nav-link"
                    href="GestionJefeDepartamento.php">Gestión Jefe de Departamento</a><a
                    class="nav-link" href="GestionPrograma.php">Gestión de programa</a><a
                    class="nav-link" href="GestionUsuario.php">Gestión de Usuarios</a></nav>
        </div>
    </nav>
</div>

<?php } ?>

<?php if ($TipoUsuario == "JefeDepartamento") { ?>

<div class="sb-sidenav-menu-heading">Interfaz Principal</div>

<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
    aria-expanded="false" aria-controls="collapsePages">
    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
    Gestión General
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
    data-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
        <a class="nav-link collapsed" href="#" data-toggle="collapse"
            data-target="#pagesCollapseAuth" aria-expanded="false"
            aria-controls="pagesCollapseAuth">Area Academica
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
            data-parent="#sidenavAccordionPages">
            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link"
                    href="PlanAsignatura.php">Plan de Asignaturas</a><a class="nav-link"
                    href="RelacionDocente.php">Relación Docente</a><a class="nav-link"
                    href="CargaAcademica.php">Carga Academica</a>
                <a class="nav-link" href="FiltroAsistenciaDocente.php">Estadisticas asistencia
                    docente</a>
                <a class="nav-link" href="FiltroAsistenciaEstudiante.php">Estadisticas
                    asistencia estudiante</a>
        </div>
        <a class="nav-link collapsed" href="#" data-toggle="collapse"
            data-target="#pagesCollapseError" aria-expanded="false"
            aria-controls="pagesCollapseError">Area Administrativa
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
            data-parent="#sidenavAccordionPages">
            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link"
                    href="GestionDocente.php">Gestión de Docente</a><a class="nav-link"
                    href="GestionEstudiante.php">Gestión Estudiante</a><a class="nav-link"
                    href="GestionPrograma.php">Gestión de programa</a></nav>
        </div>
    </nav>
</div>

<?php } ?>

<?php if ($TipoUsuario == "Docente") { ?>

<div class="sb-sidenav-menu-heading">Interfaz Principal</div>

<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
    aria-expanded="false" aria-controls="collapsePages">
    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
    Gestión General
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
    data-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
        <a class="nav-link collapsed" href="#" data-toggle="collapse"
            data-target="#pagesCollapseAuth" aria-expanded="false"
            aria-controls="pagesCollapseAuth">Area Academica
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
            data-parent="#sidenavAccordionPages">
            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link"
                    href="PlanAsignatura.php">Plan de Asignaturas</a><a class="nav-link"
                    href="PlanDesarrolloAsignatura.php">Plan de desarrollo de Asignaturas</a><a
                    class="nav-link" href="RelacionDocente.php">Relación Docente</a><a
                    class="nav-link" href="CargaAcademica.php">Carga Academica</a><a
                    class="nav-link" href="CargarAsistencia.php">Cargar formato de
                    asistencia</a>
        </div>
        <a class="nav-link collapsed" href="#" data-toggle="collapse"
            data-target="#pagesCollapseError" aria-expanded="false"
            aria-controls="pagesCollapseError">Area Administrativa
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
            data-parent="#sidenavAccordionPages">
            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link"
                    href="TablaAsistenciaEstudiante.php">Asistencia de Alumnos</a><a
                    class="nav-link"
                    href="FiltroAsistenciaEstudianteNoAsistidos.php">Inasistencia de
                    Alumnos</a><a class="nav-link" href="TablaEstudiante.php">Listado de
                    Estudiantes</a><a class="nav-link"
                    href="FiltroAsistenciaEstudiante.php">Estadisticas asistencia
                    estudiante</a><a class="nav-link" href="AsistenciaDocente.php">Ingresar a
                    clases</a></nav>
        </div>
    </nav>
</div>

<?php } ?>

<?php if ($TipoUsuario == "Estudiante") { ?>

<div class="sb-sidenav-menu-heading">Interfaz Principal</div>

<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
    aria-expanded="false" aria-controls="collapsePages">
    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
    Gestión General
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
    data-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
        <a class="nav-link collapsed" href="#" data-toggle="collapse"
            data-target="#pagesCollapseAuth" aria-expanded="false"
            aria-controls="pagesCollapseAuth">Area Academica
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
            data-parent="#sidenavAccordionPages">
            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link"
                    href="PlanAsignatura.php">Plan de Asignaturas</a><a class="nav-link"
                    href="PlanDesarrolloAsignatura.php">Plan de desarrollo de Asignaturas</a><a
                    class="nav-link" href="RelacionDocente.php">Relación Docente</a><a
                    class="nav-link" href="CargaAcademica.php">Carga Academica</a>
        </div>
        <a class="nav-link collapsed" href="#" data-toggle="collapse"
            data-target="#pagesCollapseError" aria-expanded="false"
            aria-controls="pagesCollapseError">Area Administrativa
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
            data-parent="#sidenavAccordionPages">
            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link"
                    href="MiAsistenciaEstudiante.php">Mis asistencias</a><a class="nav-link"
                    href="MisClasesEstudiante.php">Mis clases</a><a class="nav-link"
                    href="AsistenciaEstudiante.php">Ingresar a clases</a></nav>
        </div>
    </nav>
</div>

<?php } ?>