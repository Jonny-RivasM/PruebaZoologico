@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'tables'
])

@section('content')

<br>
<br>
<br>

    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <form action="{{route('animals.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="species">Especie</label>
                        <input type="text" name="species" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Genero</label>
                        <input type="text" name="gender" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="bithdate">Fecha de nacimiento</label>
                        <input type="date" name="bithdate" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="admissiondate">Fecha de ingreso</label>
                        <input type="date" name="admissiondate" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="color">Color</label>
                        <input type="text" name="color" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="race">Raza</label>
                        <input type="text" name="race" class="form-control" required>
                    </div>

                    <div class="form-group ">
                        <label for="photo" class="">Foto</label>
                        <input class="form-control" type="file"  name="photo">
                    </div>

                    <div class="form-group">
                        <label for="user_id">Cuidador</label>
                        <select name="user_id" id="user_id" class="form-control">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="reset" class="btn btn-default" value="Cancel">
                        <a href="javascript:history.back()">Ir a listado</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

