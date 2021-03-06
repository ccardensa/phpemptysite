<!DOCTYPE html>
<html lang="es">

<head>
    <title>Alamo Chile</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="includes/images/Alamo_logo.png" />
    <link rel="alternate" title="Alamo rent RSS" type="application/rss+xml" href="/feed.rss" />

    <link rel="stylesheet" href="includes/kendo/styles/kendo.common.min.css" />
    <link rel="stylesheet" href="includes/kendo/styles/kendo.default.min.css" />

    
    <link rel="stylesheet" href="includes/css/base.css" />

    <link rel="stylesheet" href="includes/bootstrap/css/bootstrap.min.css" />
    

    <script src="includes/js/jquery-1.9.1.min.js"></script>
    <script src="includes/kendo/kendo.all.min.js"></script>
    <script src="includes/bootstrap/js/bootstrap.min.js"></script>
    
</head>

<body>
    <div id="contento">
        <div id="wrapper">
            <header>

                <div id="principal">
                    <div class="logo">
                        <a href="/" id="logo">
                            <h1>Alamo Rent a Carl</h1>
                        </a>
                    </div>
                    <div id="menus">
                        <nav id="idioma">
                            <ul>
                                <li>Portugues</li>
                                <li>Ingles</li>
                            </ul>
                        </nav>
                        <div class="clear"></div>

                        <nav id="menu">
                            <ul>
                                <li>
                                   <span class="glyphicon glyphicon-home"></span> |</li>
                                <li>
                                    <a href="reserva.php"> Haz tú Reserva</a> |</li>                                    
                                    <li>
                                    <a href="servicios.php"> Servicios</a> |</li>
                                <li>
                                    <a href="ofertas.php"> Ofertas</a> |</li>
                                <li>
                                    <a href="sucursales.php"> Sucursales</a> |</li>
                                <li>
                                    <a href="contacto.php"> Contactanos</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </header>
            <div class="clear"></div>
            <section id="cuerpo">
                <div id="slider">
                    <img src="includes/images/familia2.jpeg" width="1120px" height="450px">
                </div>
                <div id="formulario">
                    <form>
                        
                            <div class="form-group">                            
                                <label>Sucursal de Recogida</label>
                                <select class="form-control" id="sucursalOrigen">
                                    <option>Seleccione Sucursal</option>
                                </select>
                            </div>
                            <div id="retorno"  class="form-group">
                                <label>Sucursal de Devolución</label>
                                <select class="form-control" id="sucursalDdestino">
                                    <option>Seleccione Sucursal</option>
                                </select>
                            </div>
                            <div class="clear"></div>
                            <div  class="form-check">                              
                                <input class="form-check-input" type="checkbox" id="devolver" />
                                <label>¿Devolver en otra Ciudad?</label>
                            </div>                            
                            <div class="clear"></div>
                            <div class="form-group">
                                <label>País Residencia</label>
                                <select class="form-control">
                                    <option>Seleccione País</option>
                                </select>
                            </div>
                            <div class="clear"></div>
                            <div class="form-group">
                                <label>Categoria Vehículo</label>
                                <select class="form-control" id="CatVehiculos">
                                    <option>Seleccione Vehículo</option>
                                </select>
                            </div>
                            <div class="clear"></div>
                            <div class="form-group">
                                <label>Fecha Arriendo</label><div class="clear"></div>
                                <input type="text"  id="fArriendo"/>
                            </div>
                            <div class="form-group">
                                    <label>Fecha Devolución</label><div class="clear"></div>
                                    <input type="text" id="fDevolucion" />
                                </div>
                    </form>
                    <p>* Vehículos sujetos a disponibilidad</p>
                    <div class="botonera">
                        <input type="button" value="Reservar" id="btnEnviar" onclick="window.location='/reserva.php';"/>
                    </div>
                </div>
            </section>  <div class="clear"></div>
            <section id="servicios">
                    Servicios
                </section>                  
        </div>
        
            <div class="clear"></div>
            <footer>
                <div class="row">
                <div class="col-md-3">
                    
                    <div class="">
                            <h4>Alamo</h4>    
                            <a href="javascript:">texto 1</a>
                            <br>
                            <a href="javascript:">texto 1</a>
                            <br>
                            <a href="javascript:">texto 1</a>
                    </div>
                </div>
                <div class="col-md-3">
                    
                        <div class="footer-text">
                                <h4>Acerca de Alamo</h4>    
                                <a href="javascript:">texto 1</a>
                            <br>
                            <a href="javascript:">texto 1</a>
                            <br>
                            <a href="javascript:">texto 1</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                    
                            <div class="">
                                    <h4>Sucursales</h4>    
                                    <a href="javascript:">texto 1</a>
                            <br>
                            <a href="javascript:">texto 1</a>
                            <br>
                            <a href="javascript:">texto 1</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                    
                                <div class="">
                                        <h4>Atención al Cliente</h4>    
                                        <a href="javascript:">texto 1</a>
                                <br>
                                <a href="javascript:">texto 1</a>
                                <br>
                                <a href="javascript:">texto 1</a>
                                </div>
                            </div>
                    </div>
                    
                    
            </footer>
    </div>
    <script>

        $(document).ready(function () {
        
           
$.ajax({
        type: "GET",
        url: "http://app.alamochile.com:8090/apex/alamo/reservas/sucursales/"
    }).then(function(data) {
            
      
            $.each(data.items, function(i, item) {
                $('#sucursalOrigen').append('<option id="' + item.codigo + '" value="' + item.sucursal + '">' + item.sucursal + '</option>');
                $('#sucursalDestino').append('<option id="' + item.codigo + '" value="' + item.sucursal + '">' + item.sucursal + '</option>');
                
            });
    });

$.ajax({
        type: "GET",
        url: "http://app.alamochile.com:8090/apex/alamo/reservas/categorias/"
    }).then(function(data) {
            
            $.each(data.items, function(i, item) {
                $('#CatVehiculos').append('<option id="' + item.categoria + '" value="' + item.nombre_categoria + '">' + item.nombre_categoria + '</option>');              
            });
    });

           $("#retorno").hide();

            $('#devolver').on('click', function () {
                if ($(this).is(':checked')) {
                    // Hacer algo si el checkbox ha sido seleccionado
                    $("#retorno").show();
                } else {
                    // Hacer algo si el checkbox ha sido deseleccionado
                    $("#retorno").hide();
                }
            });

            $("#fArriendo").kendoDateTimePicker({
                        value: new Date(),
                        dateInput: true
                    });

                    $("#fDevolucion").kendoDateTimePicker({
                        value: new Date(),
                        dateInput: true
                    });
        });

    </script>
    <style>
        .row h4 {color:#fff100 !important;}
        .row a{ color:#fff100 !important; margin-left: 5px;}
    </style>
</body>

</html>