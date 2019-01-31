<!DOCTYPE html>
<html lang="es">

<head>
    <title>Alamo Chile</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="includes/images/Alamo_logo.png" />
    <link rel="alternate" title="Alamo rent RSS" type="application/rss+xml" href="/feed.rss" />

    <link rel="stylesheet" href="includes/jquery.steps/main.css" />
    <link rel="stylesheet" href="includes/jquery.steps/normalize.css" />
    <link rel="stylesheet" href="includes/jquery.steps/jquery.steps.css" />
    <link rel="stylesheet" href="includes/css/base.css" />

     <link rel="stylesheet" href="includes/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="includes/kendo/styles/kendo.common.min.css" />
    <link rel="stylesheet" href="includes/kendo/styles/kendo.default.min.css" />


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
                        <a href="javascript:" id="logo">
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
                    <div class="stepwizard">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                    <p>Account Details</p>
                                </div>
                                
                                <div class="stepwizard-step">
                                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                    <p>Career</p>
                                </div>
                                
                                <div class="stepwizard-step">
                                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                    <p>Social Media</p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row setup-content" id="step-1">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <h3> Account Details</h3>
                                        <div>
                                                <label>Sucursal de Recogida</label>
                                                <select class="form-control">
                                                        <option>Seleccione Sucursal</option>
                                                    </select>
                                                <label>País Residencia</label>
                                                <select class="form-control">
                                                    <option>Seleccione País</option>
                                                </select>
                                                <label>Categoria Vehículo</label>
                                                <select class="form-control">
                                                    <option>Seleccione Vehículo</option>
                                                </select>
                                                <label>Fecha Arriendo</label><div class="clear"></div>
                                                <input type="text"  id="fArriendo"/>
                                                
                                                <label>Fecha Devolución</label><div class="clear"></div>
                                                <input type="text" id="fDevolucion" />
                                        </div>
                                        <button class="btn btn-light btn-block nextBtn pull-right" type="button" >Next</button>
                                    </div>
                                </div>
                           </div>
            
                           <div class="row setup-content" id="step-2">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <h3> Career</h3>
                                        <!-- content go here -->
                                        <button class="btn btn-light btn-block nextBtn pull-right" type="button" >Next</button>
                                    </div>
                                </div>
                           </div>
            
                           <div class="row setup-content" id="step-3">
                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <h3> Social Media</h3>
                                        <!-- content go here -->
                                        <button class="btn btn-light nextBtn btn-block pull-right" type="submit">Finish!</button>
                                    </div>
                                </div>
                           </div>

            </section>  
            <div class="clear"></div>
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
            $(function ()
            {


$("#fArriendo").kendoDateTimePicker({
                        value: new Date(),
                        dateInput: true
                    });

                    $("#fDevolucion").kendoDateTimePicker({
                        value: new Date(),
                        dateInput: true
                    });

    var navListItems = $('div.setup-panel div a'), // tab nav items
            allWells = $('.setup-content'), // content div
            allNextBtn = $('.nextBtn'); // next button

    allWells.hide(); // hide all contents by defauld

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });
    // next button
    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='email'],input[type='password'],input[type='url']"),
            isValid = true;
           // Validation
        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }
        // move to next step if valid
        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});
 
          
        </script>

<style type="text/css">
    .form-control {
        height: 37px;
    }
    .stepwizard-step p {
        margin-top: 10px;
    }
    
    .stepwizard-row {
        display: table-row;
    }
    
    .stepwizard {
        display: table;
        width: 100%;
        position: relative;
    }
    
    .stepwizard-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }
    
    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;
    
    }
    
    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }
    
    .btn-circle {
      width: 30px;
      height: 30px;
      text-align: center;
      padding: 6px 0;
      font-size: 12px;
      line-height: 1.428571429;
      border-radius: 15px;
    }
    </style>
</body>

</html>