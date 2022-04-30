@extends('layouts.app')

@section('content')
<div class="container">

    @include('partials.messages')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Cadastrar novo BUG Report</div>
                    <a href="{{ route('report.listing')  }}" class="btn btn-primary">Voltar para a listagem</a>
                </div>

                <div class="card-body">

                    {!! Form::open(['url' => route('report.store')]) !!}

                    @include('reports.partials.form')

                    <button type="submit" class="btn btn-primary">Cadastrar</button>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
