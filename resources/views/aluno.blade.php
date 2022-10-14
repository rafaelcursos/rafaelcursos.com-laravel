@extends('layouts.alunolayout')

@section('content')
    <div class="row m-0">
        <div class="col-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Seja bem vindo aluno</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
