@extends('medKitTheme::_layouts.back.app')

@section('content')

<div class="col-md-12 col-lg-10 col-xl-8 mx-auto">
    <div class="card">
        <div class="card-header">{{ _i('Créer un utilisateur') }}</div>

        <div class="card-body">
            {!! Form::open()->route('back.users.store') !!}

                {!! Form::text('name')->label(_i('Nom'))->required() !!}

                {!! Form::text('firstname')->label(_i('Prénom'))->required() !!}

                {!! Form::email('email')->label(_i('Email'))->required() !!}

                {!! Form::fieldsetOpen(_i('Rôles'), 'roles', true) !!}
                    @foreach ($roles as $key => $role)
                        {!! Form::checkbox('roles[]', $role->name, $role->id)->id('role-' . $role->id)->class('role' . ($rolesCount == 1 ? ' readonly' : ''))->required($rolesCount > 1)->checked($rolesCount == 1) !!}
                    @endforeach
                {!! Form::fieldsetClose() !!}

                {!! Form::text('login')->label(_i('Identifiant'))->required() !!}

                {!! Form::password('password')->label(_i('Mot de passe'))->required()->help(_i('%d caractères minimum', 6)) !!}

                {!! Form::password('password_confirmation')->label(_i('Confirmer le mot de passe'))->required() !!}

                <div class="text-right">
                    {!! Form::submit(_i('Créer'))->primary() !!}

                    {!! Form::anchor(_i('Retour'))->url(route('back.users.index'))->light()->class('ml-1') !!}
                </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection

@push('post-scripts')
    {!! MDAsset::addJs('back.users') !!}
@endpush
