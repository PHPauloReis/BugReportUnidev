@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>Reports cadastrados</div>
                    <a href="{{ route('report.create')  }}" class="btn btn-success">Cadastrar novo</a>
                </div>

                <div class="card-body">



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
