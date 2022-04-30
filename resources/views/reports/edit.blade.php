@extends('layouts.app')

@section('content')
<div class="container">

    @include('partials.messages')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Atualizar BUG Report</div>
                    <a href="{{ route('report.listing')  }}" class="btn btn-primary">Voltar para a listagem</a>
                </div>

                <div class="card-body">

                    {!! Form::model($report, ['url' => route('report.update', $report->id)]) !!}

                        @method('put')
                        @include('reports.partials.form')

                        <button type="submit" class="btn btn-primary">Atualizar</button>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
