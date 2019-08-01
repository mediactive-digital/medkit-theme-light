<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page.title', env('APP_NAME'))</title>

    <!-- Meta -->
    <meta name="description" content="@yield('page.meta_description', env('APP_NAME') )">
    <meta name="author" content="@yield('page.meta_author', env('APP_AUTHOR', 'Mediactive Digital') )">
    @yield('pages.metas')

    <!-- Styles -->
    {{-- {!! MDAsset::addCss(['bootstrap', 'fontawesome', 'swal']) !!} --}}
    {{-- {!! MDAsset::addCss('back.theme.default') !!} --}}


    {!! MDAsset::addCss('back.theme.light') !!}

    <!-- Custom styles -->
    @stack('styles')

    {{-- {!! MDAsset::addCss(['main']) !!} --}}
   
    @stack('post-styles')

    <!-- Scripts -->
    <script>
        window.Laravel =
        <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <main role="main" class="col-md-12 px-4">
                <div class="row py-4">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <!-- Translations -->
    {!! Translation::get() !!}

    <!-- General Theme script -->
    {!! MDAsset::addJs('back.default') !!}

    

    <!-- Custom scripts required -->
    @stack('scripts')

    {!! MDAsset::addJs('back.app') !!}

    @stack('post-scripts')
</body>
</html>