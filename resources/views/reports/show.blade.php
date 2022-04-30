@extends('layouts.app')

@section('content')
<div class="container">

    @include('partials.messages')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="mt-2">[BUG{{ str_pad($report->id, 4, '0', STR_PAD_LEFT) }}] - {{ $report->title }}</h3>
                    <a href="{{ route('report.listing')  }}" class="btn btn-primary">Voltar para a listagem</a>
                </div>

                <div class="card-body">

                    <div class="row">

                        <div class="mb-5 col-md-3">
                            <h5>Produto:</h5>
                            <hr>
                            {{ $productTypes[$report->product] }}
                        </div>

                        <div class="mb-5 col-md-3">
                            <h5>Versão</h5>
                            <hr>
                            {{ $versionTypes[$report->version] }}
                        </div>

                        <div class="mb-5 col-md-3">
                            <h5>Módulo</h5>
                            <hr>
                            {{ $report->module }}
                        </div>

                        <div class="mb-5 col-md-3">
                            <h5>Sistema Operacional</h5>
                            <hr>
                            {{ $operationalSystemTypes[$report->operational_system] }}
                        </div>

                        <div class="mb-5 col-md-3">
                            <h5>Prioridade</h5>
                            <hr>
                            {{ $priorityTypes[$report->priority] }}
                        </div>

                        <div class="mb-5 col-md-3">
                            <h5>Severidade</h5>
                            <hr>
                            {{ $severityTypes[$report->severity] }}
                        </div>

                        <div class="mb-5 col-md-3">
                            <h5>Status</h5>
                            <hr>
                            {{ $statusTypes[$report->status] }}
                        </div>

                        <div class="mb-5">
                            <h5>URL para o BUG</h5>
                            <hr>
                            <a href="{{ $report->url }}" target="_blank">{{ $report->url }}</a>
                        </div>

                    </div>

                    <div class="row">
                        <div class="mb-5 col-md-12">
                            <h4>Descrição:</h4>
                            <hr>
                            {!! $report->bug_description !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
