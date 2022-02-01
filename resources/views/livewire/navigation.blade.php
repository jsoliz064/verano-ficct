<header class="header-menu">
    <div class="header-content">
        <div class="logo">
            <div class="logo">
                <img src="{{ asset('imagenes/logo.png') }}" width="30">Support
            </div>
        </div>
        <div class="menu" id="show-menu">
            <nav>
                <ul>
                    <li class="menu-selected">
                        <a href="{{url('/')}}" class="text-menu-selected">
                            <i class="fas fa-home"></i>Inicio</a>
                    </li>
                    <li><a href="{{route('materias.index')}}" class="text-menu-selected"><i class="fas fa-book"></i>Ver Inscritos</a></li>
                    <li><a href="#" class="text-menu-selected"><i class="fas fa-address-book"></i>Contactanos</a></li>
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
