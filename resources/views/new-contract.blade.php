@extends('layouts.app')
@section('content')
<div class="custom-bg">

    <img class="back-deco" src="{{asset('/img/login-bg.svg')}}" alt="Background image">
    <img class="logo-deco-noti" src="{{asset('/img/powered-by-white.svg')}}" alt="Background image">

    <div class="container vertical-center">
        <div class="col-md-8 col-md-offset-2 form-ctm">
            <div class="card mt-4 text-center">
            <form action="{{route('contrato.insertar')}}" method="POST">                
                {{ csrf_field() }}
                    <input value="{{$contract->id}}" name="id" type="hidden">

                    <div class="card-body">
                        <h2>Información Legal del Contrato</h2>                        
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <h5>Error, hay un campo incorrecto.</h5>
                            </div>
                        @endif
                        <div class="row">
                            <div class="column">
                                <div class="form-group">
                                    <h5>Información de Representante Legal</h5>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name_rep" id="name_rep" class="form-control" placeholder="Nombre del Representante Legal"
                                        value="{{old('name_rep', $contract->name_rep)}}" autofocus>
                                    @if ($errors->has('name_rep'))
                                    <p class="text-danger">{{ $errors->first('name_rep') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" name="social_reason" id="social_reason" class="form-control"
                                        value="{{old('social_reason')}}" placeholder="Razon Social">
                                    @if ($errors->has('social_reason'))
                                    <p class="text-danger">{{ $errors->first('social_reason') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" name="rtn" id="rtn" class="form-control" value="{{old('rtn')}}"
                                        placeholder="Número de RTN">
                                    @if ($errors->has('rtn'))
                                    <p class="text-danger">{{ $errors->first('rtn') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" name="n_identidad" id="n_identidad" class="form-control" value="{{old('n_identidad')}}"
                                        placeholder="Número de Identidad">
                                    @if ($errors->has('n_identidad'))
                                    <p class="text-danger">{{ $errors->first('n_identidad') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <select name="m_status" id="m_status" class="form-control">
                                        <option {{old('m_status') == 'Soltero' ? 'selected' : '' }}>Soltero</option>
                                        <option {{old('m_status') == 'Casado' ? 'selected' : '' }}>Casado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column">
                                <div class="form-group">
                                    <h5>Información del Contacto</h5>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="contact" id="contact" class="form-control" value="{{old('contact')}}"
                                        placeholder="Nombre del Contacto">
                                    @if ($errors->has('contact'))
                                    <p class="text-danger">{{ $errors->first('contact') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" name="adress" id="adress" class="form-control" value="{{old('adress')}}"
                                        placeholder="Dirección del Comercio">
                                    @if ($errors->has('adress'))
                                    <p class="text-danger">{{ $errors->first('adress') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="tel" id="tel" class="form-control" value="{{old('tel')}}"
                                        placeholder="Teléfono del Comercio">
                                    @if ($errors->has('tel'))
                                    <p class="text-danger">{{ $errors->first('tel') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" value="{{old('email', $contract->email)}}"
                                        placeholder="Correo Electrónico">
                                    @if($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <i class="fas fa-exclamation-circle"></i><label class="text-muted">Favor Rellenar todos los
                            Campos</label>
                        
                        <button type="submit" class="btn btn-pixel btn-block">
                            VER CONTRATO
                        </button>
                        <hr>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection