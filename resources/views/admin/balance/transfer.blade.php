@extends('adminlte::page')

{{-- @section('title', 'AdminLTE') --}}

@section('content_header')
    <h1>Nova transferência</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
        <li><a href="">Transferência</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
          <h3>Relizar Transferência</h3>
          Informe o recebedor
        </div>
        <div class="box-body">
            @include('admin.includes.alerts')
            <form method="POST" action="{{ route('confirm.transfer') }}">
                {!! csrf_field() !!}
                <div class="form-group">
                    <input type="text" name="sender" placeholder="Nome de quem vai receber a transferência" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Próximo passo</button>
                </div>
            </form>
        </div>
    </div>
@stop