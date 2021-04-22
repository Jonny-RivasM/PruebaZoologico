@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'tables'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('animals.index')}}" method="get">
                    <div class="form-row">
                        <div class="col-ms-4">
                            <input type="text" class="form-control" name="text" value="{{$text}}">
                        </div>
                        <div class="col-ms-5">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                        </div>
                        <div class="col-ms-3 text-right">
                            <a href="{{ route('animals.create') }}" class="btn btn-primary right">
                                Nuevo
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Simple Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        Especie
                                    </th>
                                    <th>
                                        Genero
                                    </th>
                                    <th>
                                        Fecha de nacimiento
                                    </th>
                                    <th>
                                        Fecha de admisión
                                    </th>
                                    <th>
                                        Color
                                    </th>
                                    <th>
                                        Raza
                                    </th>
                                    <th>
                                        Foto
                                    </th>
                                    <th>
                                        Opciones
                                    </th>
                                </thead>
                                <tbody>
                                    @if(count($animals)<=0)
                                        <tr>
                                            <td colspan="8">No hay registros</td>
                                        </tr>
                                    @else
                                        @foreach($animals as $animal)
                                            <tr>
                                                <td>
                                                    {{$animal->name}}
                                                </td>
                                                <td>
                                                    {{$animal->species}}

                                                </td>
                                                <td>
                                                    {{$animal->gender}}

                                                </td>
                                                <td>
                                                    {{$animal->bithdate}}

                                                </td>
                                                <td>
                                                    {{$animal->admissiondate}}

                                                </td>
                                                <td>
                                                    {{$animal->color}}

                                                </td>
                                                <td>
                                                    {{$animal->race}}

                                                </td>
                                                <td>
                                                    {{$animal->photo}}

                                                </td>
                                                <td>
                                                    <a href="{{route('animals.edit', $animal->id)}}" class="btn btn-primary btn-sm">Editar</a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{$animal->id}}">
                                                        Eliminar
                                                    </button>
                                                </td>


                                            </tr>
                                            @include('animal.delete')
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                            {{$animals->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



