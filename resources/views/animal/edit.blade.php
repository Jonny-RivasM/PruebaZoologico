@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'profile'
])

@section('content')
    <div class="content">

        <div class="row">
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="{{ asset('paper/img/damir-bosnjak.jpg') }}" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="{{ asset('paper/img/mike.jpg') }}" alt="...">

                                <h5 class="title">{{ $name }}</h5>
                            </a>

                        </div>
                        <div>
                            <label class="col-md-12 col-form-label">{{ __('Cuidador') }}</label>
                            <select class="col-md-12 form-control" id="caregiver">
                                @foreach($users as $user)
                                    <option>{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ __('Team Members') }}</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled team-members">
                            <li>
                                <div class="row">
                                    <div class="col-md-2 col-2">
                                        <div class="avatar">
                                            <img src="{{ asset('paper/img/faces/ayo-ogunseinde-2.jpg') }}" alt="Circle Image"
                                                 class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        {{ __('DJ Khaled') }}
                                        <br />

                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-2 col-2">
                                        <div class="avatar">
                                            <img src="{{ asset('paper/img/faces/joe-gardner-2.jpg') }}" alt="Circle Image"
                                                 class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        {{ __('Creative Tim') }}
                                        <br />

                                    </div>

                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 text-center">
                <form class="col-md-12" action="{{ route('animals.update', $id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">{{ __('Edit Profile') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Nombre') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ $name }}" required>
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Especie') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="species" class="form-control" placeholder="Especie" value="{{ $species }}" required>
                                    </div>
                                    @if ($errors->has('species'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('species') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Genero') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="gender" class="form-control" placeholder="Genero" value="{{ $gender }}" required>
                                    </div>
                                    @if ($errors->has('gender'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Fecha de nacimiento') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="bithdate" class="form-control" placeholder="Fecha de nacimiento" value="{{ $bithdate }}" required>
                                    </div>
                                    @if ($errors->has('bithdate'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('bithdate') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Fecha de ingreso') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="admissiondate" class="form-control" placeholder="Fecha de ingreso" value="{{ $admissiondate }}" required>
                                    </div>
                                    @if ($errors->has('admissiondate'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('admissiondate') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Color') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="color" class="form-control" placeholder="Color" value="{{ $color }}" required>
                                    </div>
                                    @if ($errors->has('color'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('color') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Raza') }}</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="race" class="form-control" placeholder="Raza" value="{{ $race }}" required>
                                    </div>
                                    @if ($errors->has('race'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('race') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">{{ __('Foto') }}</label>
                                <div class="col-md-9">
                                    @if($photo)
                                        <div class="form-group">
                                            <input type="text" name="photo" class="form-control" placeholder="Foto" value="{{ $photo }}">
                                        </div>
                                        @if ($errors->has('photo'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('photo') }}</strong>
                                            </span>
                                        @endif
                                    @else
                                        <input type="text" name="photo" class="form-control" placeholder="Foto" value=" ">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-info btn-round">{{ __('Guardar') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
