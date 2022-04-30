@extends('layouts.app')

@section('content')
<div class="container">

    @include('partials.messages')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Reports cadastrados</div>
                    <a href="{{ route('report.create')  }}" class="btn btn-success">Cadastrar novo</a>
                </div>

                <div class="card-body">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Autor</th>
                            <th style="width: 150px;">Prioridade</th>
                            <th style="width: 400px;">Severidade</th>
                            <th style="width: 100px;">Status</th>
                            <th style="width: 215px;">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($reports)
                            @foreach($reports as $report)
                                <tr>
                                    <td class="align-middle">[BUG{{ str_pad($report->id, 4, '0', STR_PAD_LEFT) }}] - {{ $report->title }}</td>
                                    <td class="align-middle">{{ $report->user->name }}</td>
                                    <td class="align-middle">{{ config('constants')['priority'][$report->priority] }}</td>
                                    <td class="align-middle">{{ config('constants')['severity'][$report->severity] }}</td>
                                    <td class="align-middle">{{ config('constants')['status'][$report->status] }}</td>
                                    <td class="align-middle">
                                        <a class="btn btn-success btn-sm" href="{{ route('report.show', $report->id) }}">Visualizar</a>
                                        <a class="btn btn-primary btn-sm" href="{{ route('report.edit', $report->id) }}">Editar</a>
                                        <a class="btn btn-danger btn-sm" onclick="deleteInDatabase('{{ route('report.destroy', $report->id) }}')">Excluir</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
