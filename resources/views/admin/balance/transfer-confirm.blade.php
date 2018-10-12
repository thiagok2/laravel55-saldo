@extends('adminlte::page')

{{-- @section('title', 'AdminLTE') --}}

@section('content_header')
    <h1>Confimar transferência</h1>

    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
        <li><a href="">Transferência</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
          <h3>Confirmar Transferência</h3>
          Informe o valor
        </div>
        <div class="box-body">
            @include('admin.includes.alerts')

            <p><strong>Recebedor: </strong>{{ $sender->name }}</p>
            <p><strong>Seu Saldo Atual: </strong>{{ number_format($balance->amount, 2, ',', '.') }}</p>

            <form action="{{ route('transfer.store') }}" method="POST">
                {!! csrf_field() !!}

                <input type="hidden" name="sender_id" value="{{ $sender->id }}">

                <div class="form-group">
                    <input type="text" name="value" placeholder="Valor da Transferência" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
@stop