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
                                    <a href="reserva-v1.html"> Reserva versión 1</a> |</li>
                                    <li>
                                            <a href="reserva-v2.html"> Reserva versión 2</a> |</li>                                    
                                    <li>
                                    <a href="servicios.html"> Servicios</a> |</li>
                                <li>
                                    <a href="ofertas.html"> Ofertas</a> |</li>
                                <li>
                                    <a href="sucursales.html"> Sucursales</a> |</li>
                                <li>
                                    <a href="contacto.html"> Contactanos</a>
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
                                <select class="form-control">
                                    <option>Seleccione Sucursal</option>
                                </select>
                            </div>
                            <div id="retorno"  class="form-group">
                                <label>Sucursal de Devolución</label>
                                <select class="form-control">
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
                                <select class="form-control">
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
                        <input type="button" value="Reservar" id="btnEnviar" />
                    </div>
                </div>
            </section>  <div class="clear"></div>
            <section id="servicios">
                    Servicios
                </section>                  
        </div>
        
            <div class="clear"></div>
            <footer>
                <div>
                    <h4>Alamo</h4>
                    <div>
                        <ul>
                            <li><a href="javascript:"></a></li>
                            <li><a href="javascript:"></a></li>
                        </ul>
                    </div>
                </div>
                <div>
                        <h4>Alamo</h4>
                        <div>
                            <ul>
                                <li><a href="javascript:"></a></li>
                                <li><a href="javascript:"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                            <h4>Alamo</h4>
                            <div>
                                <ul>
                                    <li><a href="javascript:"></a></li>
                                    <li><a href="javascript:"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                                <h4>Alamo</h4>
                                <div>
                                    <ul>
                                        <li><a href="javascript:"></a></li>
                                        <li><a href="javascript:"></a></li>
                                    </ul>
                                </div>
                            </div>
            </footer>
    </div>
    <script>

        $(document).ready(function () {
           
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
</body>

</html>