@extends('templates.template')

@section('content')
    @csrf
    <div class="container">
    <h1>Computadores cadastrados:</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Processador</th>
            <th>Placa-Mãe</th>
            <th>Fonte</th>
            <th>Placa de vídeo</th>
            <th>Opções</th>
        </tr>
        @foreach ($pc as $pcs)
            @php
                $mb=$pc->find($pcs->id)->relMB;
                $processor=$pcs->find($pcs->id)->relProcessor;
            @endphp
            <tr>
                <th scope="row">{{$pcs->id}}</th>
                <td>{{$pcs->name}}</td>
                <td>{{$processor->model}}</td>
                <td>{{$mb->model}}</td>
                <td>{{$pcs->power_supply}}</td>
                <td>{{$pcs->video ?? 'OnBoard'}}</td>
                <td>
                    <a href="{{url("pc/$pcs->id")}}">
                        <button>Visualizar</button>
                    </a>
                    <a href="{{url("pc/$pcs->id/edit")}}">
                        <button>Editar</button>
                    </a>
                    <a href="{{url("pc/$pcs->id")}}" class="js-del">
                        <button>Deletar</button>
                    </a>
                </td>
            </tr>
        @endforeach

    </table>

    </div>
@endsection
