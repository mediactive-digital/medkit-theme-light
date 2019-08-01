@extends('_layouts.back.notlogged')
@section('content')


<div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
    <div class="card">
        <div class="card-header">{{ _i('Réinitialiser le mot de passe') }}</div>

        <div class="card-body">
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