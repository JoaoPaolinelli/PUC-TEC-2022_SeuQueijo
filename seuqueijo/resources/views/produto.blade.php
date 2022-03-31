<!-- 
@extends('layouts.main')

@section('title','Produto Queijo')

@section('content')


<h1>Tela do Queijo</h1>

@if($id ?? '' != null)
<p>Exibindo produto id: {{$id ?? ''}}</p>
@else
<p>id vazio</p>
@endif



@endsection -->