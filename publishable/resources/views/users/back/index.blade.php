@extends('_layouts.back.app')

@push('styles')
    {!! MDAsset::addCss(['datatables.bootstrap.main', 'datatables.bootstrap.fixheader', 'datatables.bootstrap.responsive']) !!}
@endpush

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <span class="btn px-0 border-0 title">{{ _i('Utilisateurs') }}</span>
            <a href="{{ route('back.users.create') }}" class="btn btn-success pull-right">{{ _i('Créer un utilisateur') }}</a>
        </div>

        <div class="card-body">
            <table id="users-table" class="table table-striped table-bordered dt-responsive nowrap">
                <thead>
                    <tr>
                        <th>{{ _i('Nom') }}</th>
                        <th>{{ _i('Prénom') }}</th>
                        <th>{{ _i('Email') }}</th>
                        <th>{{ _i('Date de création') }}</th>
                        <th>{{ _i('Rôles') }}</th>
                        <th>{{ _i('Actions') }}</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    {!! MDAsset::addJs(['datatables.main', 'datatables.bootstrap.main', 'datatables.fixheader', 'datatables.responsive', 'datatables.bootstrap.responsive']) !!}
@endpush

@push('post-scripts')
    {!! MDAsset::addJs('back.users') !!}
@endpush