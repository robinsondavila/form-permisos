
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario || Equipos</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="./Logo.png">
    <script src="js/app-permisos.js"></script>
    <script src="jspdf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    
    
</head>

<body>
    
<!-- header inner -->
    
     <!-- header inner -->

    

    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/contacto/contact1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Permisos virtuales</h2>
                            <h3 style="color:white">Horario de atención: 7:00h A 17:00h</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Hero Area End -->
    
<!-- Start main -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h3><center>PERMISO DE EQUIPOS ELECTRONICOS</center></h3>
                <hr>
                <form id="form-permiso">
                    <div class="mb-3">
                        <label for="curso" class="form-label">Curso</label>
                        <select class="form-select" id="curso" required>
                            <option value=""selected disabled>Seleccione su Curso</option>
                            <option value="Taller/Computación">Taller/Computación</option>
                            <option value="Taller/Dibujo">Taller/Dibujo</option>
                            <option value="Taller/Electricidad">Taller/Electricidad</option>
                            <option value="Taller/Electrónica">Taller/Electrónica</option>
                            <option value="Taller/Mecánica">Taller/Mecánica</option>
                            <option value="CCLL">CCLL</option>
                            <option value="Primero Básico">Primero Básico</option>
                            <option value="Segundo Básico">Segundo Básico</option>
                            <option value="Tercero Básico">Tercero Básico</option>
                        </select>
                    </div>
<br><br>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre completo del estudiante</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="grado" class="form-label">Grado</label>
                            <input type="text" class="form-control" id="grado">
                        </div>
                        <div class="col-md-6">
                            <label for="seccion" class="form-label">Sección</label>
                            <input type="text" class="form-control" id="seccion">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="carrera" class="form-label">Carrera</label>
                        <input type="text" class="form-control" id="carrera" placeholder="Opcional">
                    </div>

                    <div class="mb-3">
                        
                            <label for="area" class="form-label">Área</label>
                            <input type="text" class="form-control" id="area">

                    </div>

                    <h4><center>DESCRIPCIÓN DEL EQUIPO</center></h4>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="tipo" class="form-label">Tipo</label>
                            <input type="text" class="form-control" id="tipo" >
                        </div>
                        <div class="col-md-6">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" class="form-control" id="color">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="marca" class="form-label">Marca</label>
                            <input type="text" class="form-control" id="marca" >
                        </div>
                        <div class="col-md-6">
                            <label for="motivo" class="form-label">Motivo</label>
                            <input type="text" class="form-control" id="motivo">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="modelo" class="form-label">Modelo</label>
                            <input type="text" class="form-control" id="modelo">
                        </div>
                        <div class="col-md-6">
                            <label for="instructor" class="form-label">Instructor</label>
                            <input type="text" class="form-control" id="instructor">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="serie" class="form-label">No. Serie</label>
                            <input type="text" class="form-control" id="serie">
                        </div>
                        <div class="col-md-6">
                            <label for="observaciones" class="form-label">Observaciones</label>
                            <input type="text" class="form-control" id="observaciones">
                        </div>
                    </div>

                    <span class="d-block pb-2">Firma digital padre de familia</span>
                    <div class="signature mb-2" style="width: 100%; height: 200px;">
                        <canvas id="signature-canvas"
                            style="border: 1px dashed rgb(0, 140, 255); width: 100%; height: 200px;"></canvas>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="dpi" class="form-label">DPI padre de familia</label>
                            <input type="text" class="form-control" id="dpi">
                        </div>
                        <div class="col-md-6">
                            <label for="number" class="form-label">Número de teléfono padre/encargado</label>
                            <input type="text" class="form-control" id="number">
                        </div>
                    </div>


                    <center><button type="submit" class="btn btn-primary mb-4">Generar PDF</button></center>
                </form>
            </div>
        </div>
    </div>

</body>
</html>