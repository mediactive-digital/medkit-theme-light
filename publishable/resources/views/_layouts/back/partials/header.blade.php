<nav class="navbar sticky-top">
	
	<a class="navbar-brand" href="">Nom de la route courante ( à faire )</a>
	{{-- <div class="col px-0"> --}}
		<button id="toggle-sidebar" class="btn btn-link border-0 px-3 py-0"><i class="fa fa-bars"></i></button>
	{{-- </div> --}}

	<ul class="navbar-nav flex-nowrap flex-row">
		<li class="nav-item text-nowrap">
			{{-- <a id="disconnect" class="nav-link d-inline-block px-3 py-0" href="{{ route('logout') }}">
				<i class="fa fa-fw fa-power-off"></i><span>{{ _i('Déconnexion') }}</span>
			</a> --}}
		</li>
		<li class="nav-item">
			{{-- <a id="disconnect" class="nav-link d-inline-block px-3 py-0" href="{{ route('logout') }}">
				<i class="fa fa-fw fa-power-off"></i><span>{{ _i('Déconnexion') }}</span>
			</a> --}}
			<div class="dropdown">
					<button class="btn dropdown-toggle" type="button" id="dropdownMenuButtonUserActions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="material-icons">
							account_circle
						</i>
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButtonUserActions">
					  <p class="dropdown-header"> {{ _i('Bonjour') }} , {{ $user->firstname }} {{ $user->name }}</p>
					  <div class="dropdown-divider"></div>
					  <a class="dropdown-item" href="#">Action</a>
					  <a class="dropdown-item" href="#">Action 2</a>
					  <a class="dropdown-item" href="#">Une autre méga action</a>
					  <a class="dropdown-item" href="{{ route('logout') }}">{{ _i('Déconnexion') }}</a>
					</div>
			</div>
			
		</li>
	</ul>
</nav>