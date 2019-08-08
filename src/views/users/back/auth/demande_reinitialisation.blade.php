@extends('medKitTheme::_layouts.back.notlogged')
@section('content')

<div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
    @if (session('status'))
        <div class="alert alert-success mb-4">
            {{ session('status') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">{{ _i('Réinitialiser le mot de passe') }}</div>

        <div class="card-body">
            <div class="alert alert-info">
                {{ _i('Veuillez saisir votre adresse email pour réinitialiser votre mot de passe') }}.<br />
                {{ _i('Vous recevrez les instructions dans quelques instants') }}.
            </div>

            <div class="row">
                <div class="col-md-6 mx-auto">
                    {!! form($form) !!}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

@endsection
