@php
    $user = Auth::user();
@endphp

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

    <!-- Custom styles -->
    @stack('styles')

    @php
        // $styles = ['main', 'sidebar'];

        if ($user) {

            $styles[] = 'back.theme.' . ($user->theme ? 'dark' : 'light');
        }
    @endphp

    {!! MDAsset::addCss($styles) !!}
   
    @stack('post-styles')

    @routes

    <!-- Scripts -->
    <script>
        window.Laravel =
        <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>
    <div class="wrapper position-relative">
        @include('_layouts.back.partials.sidebar')
        <main role="main" class="main-admin">
                @include('_layouts.back.partials.header')

                <div id="flash-messages">
                    @include('_layouts.back.partials.flash_messages')
                </div>
                    
                @yield('content')
        </main>
    </div>
   

    <div class="container-fluid">
        <div class="row">
           
          
            
        </div>
    </div>

    @include('_layouts.back.partials.footer')
    
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