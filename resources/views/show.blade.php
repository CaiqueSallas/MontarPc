@extends('templates.template')

@section('content')
    <div class="container">
        @php
            $mb=$pc->find($pc->id)->relMB;
            $processor=$pc->find($pc->id)->relProcessor;
        @endphp
        <h1>Visualizar</h1>
            <div class="lista">
                <p><span>Nome:</span> {{$pc->name}}</p>
                <p><span>Processador:</span> {{$processor->model}}</p>
                <p><span>Placa-Mãe:</span> {{$mb->model}}</p>
                <p><span>Placa de vídeo:</span> {{$pc->video ?? 'OnBoard'}}</p>
                <p><span>Fonte:</span> {{$pc->power_supply}}</p>
            </div>
    </div>
@endsection
