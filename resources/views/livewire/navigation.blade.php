<header class="header-menu">
    <div class="header-content">
        <div class="logo">
            <div class="logo">
                <img src="{{ asset('imagenes/logo.png') }}" width="30">SUPPORT
            </div>
        </div>
        <div class="menu" id="show-menu">
            <nav>
                <ul>
                    <li class="menu-selected">
                        <a href="{{ url('/') }}" class="text-menu-selected">
                            <i class="fas fa-home"></i>Inicio</a>
                    </li>
                    <li><a href="{{ route('materias.index') }}" class="text-menu-selected"><i
                                class="fas fa-book"></i>Ver Inscritos</a></li>
                    <li><a href="#" class="text-menu-selected"><i class="fas fa-address-book"></i>Contactanos</a></li>

                    <li>

                        <div class="w-60 h-20 flex flex-row flex-wrap p-3 ml-1">
                            <div class="mx-auto w-3">
                                <!-- Profile Card -->
                                <div class=" w-60 h-20 rounded-lg shadow-lg bg-gray-600 w-full flex flex-row flex-wrap p-3 antialiased"
                                    style="
  background-image: url('https://scontent.fvvi1-2.fna.fbcdn.net/v/t31.18172-8/26685190_10156033184973328_4998021523262411079_o.jpg?_nc_cat=100&ccb=1-5&_nc_sid=8631f5&_nc_ohc=GGpFO00RA6IAX_jhdI6&tn=IiT3yrQzUFVwhSAd&_nc_ht=scontent.fvvi1-2.fna&oh=00_AT9F3hO8qsddnSW8tYyKmvqr6heks_pI6sguTwCVTsiEcg&oe=621FC837');
  background-repeat: no-repat;
  background-size: cover;
  background-blend-mode: multiply;
">
                                    <div class="md:w-4 w-full inline-flex ">
                                        <img class=" w-12 h-12 rounded-lg shadow-lg antialiased"
                                            src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png">

                                        <div class="md:w-4 w-full px-3 flex flex-row flex-wrap">
                                            <div class=" text-right text-gray-700 font-semibold relative pt-3 md:pt-0">
                                                <div class="text-sm text-white leading-tight">Admin User</div>
                                                <div class="text-sm text-gray-900 hover:text-gray-400 cursor-pointer">
                                                    <span
                                                        class="border-b border-dashed border-gray-500 pb-1">Administrator</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Profile Card -->
                                </div>
                            </div>

                    </li>




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
