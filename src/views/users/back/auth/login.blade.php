@extends('medKitTheme::_layouts.back.notlogged')
@section('content')

<div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
    <div class="card">
        <div class="card-header">{{ _i('Connexion') }}</div>

        <div class="card-body">
            <div class="row">
				{!! form_start($form) !!}
				{!! form_row($form->login) !!}
				{!! form_row($form->password) !!}
				{!! form_row($form->remember) !!}
				{!! form_row($form->submit) !!}
				{!! form_rest($form) !!}
            </div>
        </div>
    </div>
</div>

</body>
</html>

@endsection
