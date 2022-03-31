@extends('layouts.main')

@section('title','Materias')

@section('content')


<!-- A partir desse if posso realizar pesquisas no banco de dados e renderizar os conteudos -->
@if(isset($materia[$id])) 
<hr>
<h1 class="titulo-principal">{{$materia[$id]}}</h1>
<hr>
@else

<hr>
<h1 class="titulo-principal">Home</h1>
<hr>



<div class="container">
    <h2>Materias</h2>

    <ul class="nav flex-column">
        @foreach($materia as $materias => $value)
        
        <li class="nav-item">
            <a href="{{$materias}}">
                {{$value}}
            </a>
        </li>
        
        @endforeach
    </ul>
</div>

@endif

@endsection