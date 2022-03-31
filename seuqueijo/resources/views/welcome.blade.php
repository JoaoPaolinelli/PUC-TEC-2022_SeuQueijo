@extends('layouts.main')

@section('title','Seu Queijo')

@section('content')
<div class=" slide-block">

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>
<br>
<div class="container categoria-card">

    <h2 class="titulos">Categorias</h2>
    <div class="row">
        <div class="col-sm-3">

            <div class="card" style="width: 18rem;">
                <img src="/img/blonde.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/blonde.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/blonde.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <img src="/img/blonde.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="card bg-dark text-white">
    <h2 class="titulos">Queijos artesanais</h2>
        <img src="/img/4.jpg" class="card-img" alt="...">
        
        <div class="card-img-overlay">
            <div class="card card-com-imagem" style="width: 18rem;">

                <img src="/img/blonde.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <br>
    <h2>Produtores em Destaque</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card">
                <img src="/img/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="/img/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<div class="container">
    <br>

    <h2>Ultimas noticias do blog</h2>
    <div class="row">
        <div class="card" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>

        <div class="card" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
        <div class="card" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
</div>
<hr>

@if(10 > 5)
<p>A condicao eh true</p>
@endif

<p>{{$nome}}</p>

@if($nome == 'Joao')
<p>O nome eh {{$nome}} e ele tem {{$idade}} anos</p>
@else
<p>O nome nao eh Joao</p>
@endif

@for($i = 0; $i < count($array); $i++) <p>{{$array[$i]}}</p>
    @endfor

    @foreach($name as $nomes)
    <p>{{$nomes}} - Indice = {{$loop->index}}</p>
    @endforeach

    @endsection