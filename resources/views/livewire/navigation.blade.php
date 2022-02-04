<header class="header-menu">
    <div class="header-content">
        <div class="logo">
            <div class="logo">
                <img src="{{ asset('imagenes/logo.png') }}" width="30">SUPPORT
            </div>
        </div>
        <div class="menu inline-flex" id="show-menu">
            <nav>
                <ul>
                    <li @if (Request::url() == route('inicio')) class="menu-selected" @endif>
                        <a @if (Request::url() != route('inicio')) href="{{ route('inicio') }}" class="text-menu-selected text-inline" @else disabled=true class="text-inline text-selected" @endif>
                            <i class="fas fa-home"></i>Inicio</a>
                    </li>
                    <li @if (Request::url() == route('materias.index'))  class="menu-selected" @endif>
                        <a @if (Request::url() != route('materias.index'))  href="{{ route('materias.index') }}" class="text-menu-selected text-inline" @else disabled=true class="text-inline text-selected" @endif>
                            <i class="fas fa-book"></i>Ver Materias</a>
                    </li>
                    <li @if (Request::url() == route('contact-us'))  class="menu-selected" @endif>
                        <a @if (Request::url() != route('contact-us'))  href="{{ route('contact-us') }}" class="text-menu-selected text-inline" @else disabled=true class="text-inline text-selected" @endif>
                            <i class="fas fa-address-book"></i>Contáctanos</a>
                    </li>
                    @can('admin')
                        <li @if (Request::url() == route('estudiantes.index'))  class="menu-selected" @endif>
                            <a @if (Request::url() != route('estudiantes.index'))  href="{{ route('estudiantes.index') }}" class="text-menu-selected text-inline" @else disabled=true class="text-inline" @endif>
                                <i class="fas fa-book"></i>Ver Estudiantes</a>
                    @endcan

                    @can('admin')
                        <li @if (Request::url() == route('admin.users.index'))  class="menu-selected" @endif>
                            <a @if (Request::url() != route('admin.users.index'))  href="{{ route('admin.users.index') }}" class="text-menu-selected text-inline" @else disabled=true class="text-inline" @endif>
                                <i class="fas fa-users"></i>Ver Users</a>
                    @endcan

                    @if (!auth()->user())
                        <li><a href="{{ route('login') }}" class="text-menu-selected text-inline">
                                <i class="fas fa-user"></i>Login</a>
                        </li>
                    @endif

                    @auth()
                        <li>
                            <div class="w-48 h-12 flex flex-row  flex-wrap px-2 py-2 mx-4">
                                <div class="mx-auto w-3">
                                    <!-- Profile Card -->
                                    <div class=" w-48 h-12  rounded-lg shadow-lg bg-gray-600 w-full flex flex-row flex-wrap p-3 antialiased"
                                        style=" background-image: url('https://scontent.fvvi1-2.fna.fbcdn.net/v/t31.18172-8/26685190_10156033184973328_4998021523262411079_o.jpg?_nc_cat=100&ccb=1-5&_nc_sid=8631f5&_nc_ohc=GGpFO00RA6IAX_jhdI6&tn=IiT3yrQzUFVwhSAd&_nc_ht=scontent.fvvi1-2.fna&oh=00_AT9F3hO8qsddnSW8tYyKmvqr6heks_pI6sguTwCVTsiEcg&oe=621FC837');background-repeat: no-repat;background-size: cover;background-blend-mode: multiply;">

                                        <div class=" inline-flex">
                                            <img class=" w-8 h-8 rounded-lg shadow-lg antialiased"
                                                src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png">

                                            <div class=" w-full px-3 flex flex-row flex-wrap">
                                                <div class=" text-center text-gray-700 font-semibold relative">
                                                    <div class="text-sm text-white leading-tight">
                                                        {{ auth()->user()->name }}
                                                    </div>
                                                    <div>
                                                        <a href="{{ route('user.logout') }}">
                                                            <div
                                                                class=" cursor-pointer text-xs text-gray-400 border-gray-500 hover:text-gray-700 pb-1">
                                                                Logout
                                                            </div>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Profile Card -->
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endauth
                </ul>
            </nav>
        </div>
    </div>
    <div id="icon-menu">
        <i class="fas fa-bars"></i>

    </div>
</header>
<!--Portada Principal
<div class="container-all" id="move-content">
    <div class="container-cover">
    </div>
</div>-->


<script src="{{ asset('js/menu.js') }}"></script>
