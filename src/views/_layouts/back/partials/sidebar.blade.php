<nav class="sidebar">
	<div class="logo d-block">
		<a href="{{ route('back.index')}}" class="d-block text-center border-bottom {{ $user->theme ? 'text-white text-uppercase' : 'text-dark text-uppercase' }}">
			{{ env('APP_NAME') }}
		</a>
	</div>
	@php
		// dd(config('laravel-menu.views.back.sidebar'));
	@endphp
	@include('medKitTheme::_layouts.back.menu.sidebar', ['items' => $menu->roots()])
</nav>
