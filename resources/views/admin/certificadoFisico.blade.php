<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>-->
        <!--<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css"/>-->
        <!--<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />-->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <!--<script src="{{ asset('assets/js/moment.min.js') }}" type="text/javascript"></script>-->
        <link href="print.css" rel="stylesheet">
        <style type="text/css" media="screen,print">
            .break{
                display: block;
                clear: both;
                page-break-after: always;
                /*border :1px solid red*/
            }
            .page-breaker {
                display: block;
                page-break-after: always;
                border :1px solid red
            }
            .abreak{
                display: block;
                page-break-inside: avoid;
                /*border :1px solid blue*/
            }
            .content {
                display: block;
                width: auto;
                background: lightgray;
            }
            img{
                display: block;
                margin-left: auto;
                margin-right: auto
            }
            hr { 
                display: block;
                margin-top: 0.5em;
                margin-bottom: 0.5em;
                margin-left: auto;
                margin-right: 350px;
                border-style: inset;
                border-width: 1px;
            } 
        </style>

    </head>		
    <body>
        
        <div class="hidden">
        @if($data['mes']=="01")
        {!! $data['mes']="Enero" !!}
        @elseif($data['mes']=="02")
        {!! $data['mes']="Febrero" !!}
        @elseif($data['mes']=="03")
        {!! $data['mes']="Marzo" !!}
        @elseif($data['mes']=="04")
        {!! $data['mes']="Abril" !!}
        @elseif($data['mes']=="05")
        {!! $data['mes']="Mayo" !!}
        @elseif($data['mes']=="06")
        {!! $data['mes']="Junio" !!}
        @elseif($data['mes']=="07")
        {!! $data['mes']="Julio" !!}
        @elseif($data['mes']=="08")
        {!! $data['mes']="Agosto" !!}
        @elseif($data['mes']=="09")
        {!! $data['mes']="Septiembre" !!}
        @elseif($data['mes']=="10")
        {!! $data['mes']="Octubre" !!}
        @elseif($data['mes']=="11")
        {!! $data['mes']="Noviembre" !!}
        @elseif($data['mes']=="12")
        {!! $data['mes']="Diciembre" !!}
        @endif
        </div>
       
        <section class="content">
            <div class="row panel panel-default">
                <div class="col-xs-3">
                    <img class="img-responsive" src="{{ asset('assets/images/IEDTejaresLogo.png')}}" alt="ideTejares" width="150" height="150"> 
                </div>
                <div class="col-xs-6" height="300px">
                    <div class="col-xs-12"></div>
                    <h3 align="center">Secretaría de Educación Distrital <br>
                        COLEGIO LOS TEJARES
                        INSTITUCION EDUCATIVA DISTRITAL
                        <br>Localidad 5ª de Usme
                    </h3>
                </div>
                <div class="col-xs-3">
                    <img class="img-responsive" src="{{ asset('assets/images/secretariaLogo.png')}}" alt="secretariaLogo" width="150" height="150"> 
                </div>
                <div class="panel panel-default col-xs-12" align="center">
                    <h4>EDUCACIÓN ESPECIAL “En Tejares caminamos hacia una integración propicia y a una inclusión oportuna”</h4>
                    <br>
                    <br>
                    <h4 align="center">El COLEGIO LOS TEJARES IED</h4>
                    <br>
                    <br>
                    <div class="col-xs-3" align="center"></div>
                    <div class="col-xs-6" align="center">
                        <p align=justify>
                            Hace constar que: {{$data['nombres']}} {{$data['apellidos']}}  identificado(a) con  documento n° {{$data['nDocumento']}} de {{$data['ciudad']}}; Del Colegio {{$data['colegio']}}  en   la ciudad DE BOGOTÁ matriculado(a) en la jornada de la {{$data['journ']}}, grado {{$data['grado']}} cumplió a cabalidad el SERVIVIO SOCIAL {{$data['ano']}} obligatorio de conformidad  con lo establecido en la ley 115 del 8 de Febrero de 1994, la resolución 4210 de 1996, expedida  por el MEN y el acuerdo 55 de 2002 del Consejo de Bogotá, cumpliendo un total de {{$data['horas']}} HORAS en  esta institución  educativa sede {{$data['sede']}}. 
                        </p>
                        <br>
                        <p align=left>Se expide  a  los  {{$data['dia']}} días del mes de {{$data['mes']}} de {{$data['ano']}}.
                            <br>
                            <br>
                            <br>
                            Cordialmente:
                        </p>
                        <br>
                        <br>
                        <br>
                        <br>

                        <hr>
                        <p align=left>
                            Luz Edith Cuesta Delgado CC¨. 54254482<br>
                            Docente de NEE<br>
                            JM<br> 

                        </p>
                    </div>
                    <div class="col-xs-3" align="center"></div>
                </div>

            </div>

        </section>
    </body>
</html>