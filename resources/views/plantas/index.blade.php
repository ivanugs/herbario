@extends('layouts.plantilla')

@section('title', 'Herbario Virtual | ITTJ')

@section('content')
    <h1>Bienvenido a la pagina plantas.</h1>
    <a href="{{route('species.create')}}">Dar de alta nueva planta</a>
    <div
        class="table-responsive"
    >
        <table
            class="table table-primary"
        >
            <thead>
                <tr>
                    <th scope="col">Nombre Cientifico</th>
                    <th scope="col">Nombre Comun</th>
                    <th scope="col">Familia</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Fecha de publicacion</th>
                    <th scope="col">Fecha de creacion</th>
                    <th scope="col">Fecha de actualizacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($species as $item)
                    <tr class="">
                        <td scope="row"><a href="{{route('species.show', $item->id)}}">{{$item->scientific_name}}</a></td>
                        <td>{{$item->common_name}}</td>
                        <td>{{$item->family}}</td>
                        <td>{{$item->image}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->publication_date}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    {{$species->links()}}
@endsection
