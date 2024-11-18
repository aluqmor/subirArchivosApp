@extends('base')

@section('title', 'Lista de Archivos')

@section('content')
    <div class="container">
        <h2>Archivos Subidos</h2>
        <ul class="file-list">
            @foreach ($archivos as $archivo)
                <li>
                    <a href="{{ route('subir.show', $archivo->id) }}">
                        <img src="{{ route('subir.show', $archivo->id) }}" alt="{{ $archivo->nombre_original }}">
                        <p>{{ $archivo->nombre_original }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
