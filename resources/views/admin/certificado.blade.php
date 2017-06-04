@extends('layouts.app')

@section('content')

<div class="container col-md-12">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Formulario Certificado Servicio Social</div>
                @if (! $errors->isEmpty())
                <div class="alert alert-danger col-md-12">
                    <p><strong>Oops!</strong>Por Favor Arregla Los siguientes Errores:</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="panel-body">
                    <form method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                        <div class="form-group col-md-6">
                            <div class="col-md-5">
                                <label class="control-label ">Nombres:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="nombres" id="firstName" value="{{old('nombres')}}">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="col-md-4">
                                <label class="control-label ">Apellidos:</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="lastName" name="apellidos" value="{{old('apellidos')}}">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="col-md-5">
                                <label class="control-label ">Numero de Documento:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="nDocumento" name="nDocumento" value="{{old('nDocumento')}}">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="col-md-4">
                                <label class="control-label">Ciudad Expedicion:</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="seat" name="ciudad" value="{{old('ciudad')}}">
                            </div>                           
                        </div>

                        <div class="form-group col-md-6">
                            <div class="col-md-5">
                                <label class="control-label ">Horas de Servicio social:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="hours" name="horas" value="{{old('horas')}}">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="col-md-4">
                                <label class="control-label ">Grado:</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="grade" name="grado" value="{{old('grado')}}">
                            </div>
                        </div>


                        <div class="form-group col-md-6">
                            <div class="col-md-5">
                                <label class="control-label">Sede:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="seat" name="sede" value="{{old('sede')}}">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="col-md-4">
                                <label class="control-label">Colegio:</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="seat" name="colegio" value="{{old('colegio')}}">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="col-md-5">
                                <label class="control-label ">Jornada:</label>
                            </div>
                            <div class="col-md-7">
                                <select class="form-control"  id="journ" name="journ">
                                    <option value="Mañana">Mañana</option>
                                    <option value="Tarde">Tarde</option>
                                </select>

                            </div>
                        </div>
                        <div class="form-group col-md-6"></div>
                        <div class="form-group col-md-6"></div>
                        <div class="form-group col-md-6">
                            <button class="btn btn-primary" type="submit" style="display: block; margin: 0 auto;">Descargar en PDF</button>
                        </div>

                        <input type="hidden" value="{{Carbon\Carbon::today()->format('d')}}" name="dia">
                        <input type="hidden" value="{{Carbon\Carbon::today()->format('m')}}" name="mes">
                        <input type="hidden" value="{{Carbon\Carbon::today()->format('Y')}}" name="ano">
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
