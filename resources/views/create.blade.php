@extends('templates.template')

@section('content')
    @csrf
    <div class="container">
        <h1>@if(isset($pc))Editar Computador @else Cadastrar Computador @endif</h1>
        @if (isset($errors) && count($errors)>0)
        <div class="erro">
            @foreach ($errors->all() as $error)
            {{$error}}<br>
            @endforeach
        </div>
        @endif
        <div class="lista">
        @if(isset($pc))
            <form method="post" action="{{url("pc/$pc->id")}}">
            @method('PUT')
        @else
            <form method="post" action="{{url('pc')}}">
        @endif
            @csrf
            <label for="name"><span>*</span>Insira o nome: </label>
            <input required name="name" id="name" placeholder="ex:computador01" value="{{$pc->name ?? ''}}">

            <label for="id_processor"><span>*</span>Informe o processador: </label>
            <select name="id_processor" id="id_processor" onchange="processador()">
                <option selected id="{{$pc->relProcessor->id ?? ''}}" value="{{$pc->relProcessor->id ?? ''}}">{{$pc->relProcessor->model ?? 'Selecione'}}</option>
                @foreach ($processors as $processor)
                    <option id="{{$processor->id_mb}}" value="{{$processor->id}}">{{$processor->model}}</option>
                @endforeach
            </select>

            <label for="id_mb"><span>*</span>Placa-Mãe:</label>
            <select name="id_mb" id="id_mb" readonly="readonly">
                <option selected value="{{$pc->relMB->id ?? ''}}">{{$pc->relMB->model ?? ''}}</option>
                @foreach ($mbs as $mb)
                    <option value="{{$mb->id}}">{{$mb->model}}</option>
                @endforeach
            </select>

            <label for="video">Insira a placa de vídeo: </label>
            <input name="video" id="video" placeholder="ex:Gtx 1080 TI" value="{{$pc->video ?? ''}}">

            <label for="power_supply"><span>*</span>Insira a fonte: </label>
            <input required name="power_supply" id="power_supply" placeholder="ex:Fonte genérica 600w" value="{{$pc->power_supply ?? ''}}">

            <input required type="submit" value="@if(isset($pc))Editar @else Cadastrar @endif">
            </div>

    </div>
@endsection
