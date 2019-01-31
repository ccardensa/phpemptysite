<!DOCTYPE html>
<html lang="es">

<head>
    <title>Alamo Chile</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="../includes/images/Alamo_logo.png" />
    <link rel="alternate" title="Alamo rent RSS" type="application/rss+xml" href="/feed.rss" />

    <link rel="stylesheet" href="../includes/jquery.steps/main.css" />
    <link rel="stylesheet" href="../includes/jquery.steps/normalize.css" />
    <link rel="stylesheet" href="../includes/jquery.steps/jquery.steps.css" />
    <link rel="stylesheet" href="../includes/css/base.css" />

    <link rel="stylesheet" href="../includes/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../includes/kendo/styles/kendo.common.min.css" />
    <link rel="stylesheet" href="../includes/kendo/styles/kendo.default.min.css" />


    <script src="../includes/js/jquery-1.9.1.min.js"></script>

    <script src="../includes/kendo/kendo.all.min.js"></script>
    <script src="../includes/bootstrap/js/bootstrap.min.js"></script>

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
                                    <a href="reserva.html"> Haz tú Reserva</a> |</li>
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
              <h2>Detalle de la Compra</h2>
              <h2>Detalle del Cliente</h2>
            </section>
            <div class="clear"></div>
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
        $(function () {

            $("#vehiculos-paso2").change(function () {
                var id = $('select[id=vehiculos-paso2]').val();
                $('#vehiculos').empty();


                $.ajax({
                    type: "GET",
                    url: "http://app.alamochile.com:8090/apex/alamo/reservas/categorias/"
                }).then(function (data) {

                    $.each(data.items, function (i, item) {
                        if (item.categoria == id) {
                            $('#vehiculos').append('<div class="box-wrap"><div class="box-vehiculo ' + item.categoria + '" data-id="' + item.categoria + '"><div class="box-img"><img id="' + item.categoria + '" src="includes/images/notfound.jpg" width="220" height="158" /></div><div class="box-content"><label>Categoría: </label><span>' + item.nombre_categoria + '</span><br /><label>Valor Día: </label><span>$' + item.valor + ' / USD $ ' + item.valor_us + '</span><br /><label>Fin de Semana: </label><span>$' + item.valor_finsemana + ' / USD $ ' + item.valor_finsemana_us + '</span><div class="box-button"><input type="button" class="btn-seleccionar" value="Seleccionar" /></div></div></div><div><br></div></div>');
                        }
                    });
                });
            });


            $.ajax({
                type: "GET",
                url: "http://app.alamochile.com:8090/apex/alamo/reservas/sucursales/"
            }).then(function (data) {


                $.each(data.items, function (i, item) {
                    $('#sucursal').append('<option id="' + item.codigo + '" value="' + item.sucursal + '">' + item.sucursal + '</option>');
                });
            });

            $.ajax({
                type: "GET",
                url: "http://app.alamochile.com:8090/apex/alamo/reservas/categorias/"
            }).then(function (data) {

                $.each(data.items, function (i, item) {
                    $('#vehiculos-paso2').append('<option id="' + item.categoria + '" value="' + item.categoria + '">' + item.nombre_categoria + '</option>');
                    $('#CatVehiculos').append('<option id="' + item.categoria + '" value="' + item.categoria + '">' + item.nombre_categoria + '</option>');
                    $('#vehiculos').append('<div class="box-wrap"><div class="box-vehiculo ' + item.categoria + '" data-id="' + item.categoria + '"><div class="box-img"><img id="' + item.categoria + '" src="includes/images/notfound.jpg" width="220" height="158" /></div><div class="box-content"><label>Categoría: </label><span>' + item.nombre_categoria + '</span><br /><label>Valor Día: </label><span>$' + item.valor + ' / USD $ ' + item.valor_us + '</span><br /><label>Fin de Semana: </label><span>$' + item.valor_finsemana + ' / USD $ ' + item.valor_finsemana_us + '</span><div class="box-button"><input type="button" class="btn-seleccionar" value="Seleccionar" /></div></div></div><div><br></div></div>');
                });
            });


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
            allNextBtn.click(function () {
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='email'],input[type='password'],input[type='url']"),
                    isValid = true;
                // Validation
                $(".form-group").removeClass("has-error");
                for (var i = 0; i < curInputs.length; i++) {
                    if (!curInputs[i].validity.valid) {
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
        .space-v20px {
            height: 20px;
        }

        .lbl-fecha {
            width: 150px;
        }

        #vehiculos {
            background-color: #e8e8e8;
            padding: 10px;
            display: inline-table;
            border-radius: 6px;
        }

        .box-wrap {
            padding: 5px;
            float: left;
            width: 50%;
        }

        .box-content {
            width: 55%;
            background-color: #fff;
            padding: 10px;
            float: left;
            border-radius: 5px;
            line-height: 26px;
        }

        .box-vehiculo {
            width: 100%;
            background-color: #0070c6;
            padding: 10px;
            float: left;
            border-radius: 4px;
        }

        .box-img {
            width: 45%;
            float: left;
        }

        .box-button {
            width: 100%;
            padding: 3px;
            float: left;
            text-align: right;
        }

        .btn-seleccionar {
            color: #0070c6;
            background-color: #fff100;
            border-radius: 5px;
            border: solid 1px #ffd400;
            padding: 5px 10px 5px 10px;
            font-size: 14px;
            text-align: right;
        }

        .w150 {
            width: 150px;
        }

        .row h4 {
            color: #fff100 !important;
        }

        .row a {
            color: #fff100 !important;
            margin-left: 5px;
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