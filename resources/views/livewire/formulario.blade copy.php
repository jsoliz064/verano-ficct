<div class="page-formulario">
    <div class="background"></div>
    <div class="backdrop"></div>
    <div class="formulario-div">
        <!-- HEADER -->
        <div class="header2">
            <h1 class="h1">
                <span class="title">Ficct</span>
                <span class="title">Inscribete</span>
            </h1>
            <center>
                <img class="imagen" src="{{ asset('imagenes/logo.png') }}" width="150">
                <p class="texto.ficct"> Bienvenido al formulario Ficct ⚡⚡⚡<br>
                    para todas las materias de la<br>
                </p>



                Hola, esperamos que los materiales
                y recursos disponibles en el entorno virtual que desarrollaremos te ayuden en la asignatura. Completa el
                siguiente formulario para saber qué guía necesitas📚
                <div class='console-container'><span hidden>_</span><span id='text'></span>
                    <div class='console-underscore' id='console'>|</div>
                </div>
            </center>
        </div>
        <div class="container-form">
            <form id="contact_form">
                <!--<fieldset>-->
                <!-- Text input-->
                Nombre Completo
                <div class="input-group">
                    <span class="input-group-addon" style="background-color:#ec0708;color:#ffff">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>

                    <input id="nombre" wire:model="nombre" name="nombre" placeholder="Nombre Completo" class="form-control2" size="10" min="10" maxlength="40" max="40" type="text" required>
                </div>



                <!-- Text input-->
                Registro
                <div class="input-group">
                    <span class="input-group-addon" style="background-color:#ec0708;color:#ffff"><i class="fas fa-clipboard"></i></span>
                    <input id="registro" wire:model="registro" class="form-control2" placeholder="000000000" type="tel" size="5" pattern="[0-9-+()]{4,9}" min="4" maxlength="9" max="9" class="form-control2" width=100vw required>
                </div>




                <!-- Text input-->
                Telefono
                <div class="input-group">
                    <span class="input-group-addon" style="background-color:#ec0708;color:#ffff"><i class="glyphicon glyphicon-earphone"></i></span>
                    <input id="telefono" wire:model="telefono" placeholder="+591 XXXXXXX" type="tel" size="5" pattern="[0-9-+()]{8,8}" min="8" maxlength="8" max="8" class="form-control2" width=100vw required>
                </div>



                <!-- Text input-->
                Carrera
                <div class="input-group">
                    <span class="input-group-addon" style="background-color:#ec0708;color:#ffff"><i class="glyphicon glyphicon-list"></i></span>
                    <select class="form-control2 mi-selector1" wire:model="carrera_id" name="carrera" width=100vw required>
                        <option value="">Seleccione una opción</option>
                        @foreach ($carreras as $carrera)
                        <option value="{{ $carrera->id }}">
                            {{ $carrera->nombre }}
                        </option>
                        @endforeach
                    </select>
                </div>



                <!-- Text input-->


                <!-- Select Basic -->
                Materia 1
                <div class="input-group">
                    <span class="input-group-addon" style="background-color:#ec0708;color:#ffff"><i class="glyphicon glyphicon-list"></i></span>
                    <select class="form-control2 mi-selector2" id="materia1" wire:model="materia1" name="materia1" width=100vw required>
                        <option value="">Selccione una opcion</option>
                        @foreach ($materias as $materia)
                        <option value="{{ $materia->id }}">
                            {{ $materia->nombre }}
                        </option>
                        @endforeach
                    </select>
                </div>



                <!-- Text input-->

                Materia 2
                <div class="input-group">
                    <span class="input-group-addon" style="background-color:#ec0708;color:#ffff"><i class="glyphicon glyphicon-list"></i></span>
                    <select class="form-control2 mi-selector3" id="materia2" wire:model="materia2" name="materia2" width=100vw required>
                        <option value="">Selccione una opcion</option>
                        @foreach ($materias as $materia)
                        <option value="{{ $materia->id }}">
                            {{ $materia->nombre }}
                        </option>
                        @endforeach
                    </select>
                </div>


                <!-- Button -->
                <div>
                    <button wire:click.prevent="guardar()" type="button" class="btn-login">Inscribir
                    </button>
                    @if (session()->has('message'))
                    <h4>{{ session('message') }}</h4>
                    @endif
                </div>
                <center>
                    <h5>Facultad
                        de Ingeniera en Ciencias de la Computación.</h5<<<<<cAaaa>
                </center>
            </form>
        </div>
    </div>
</div>
<!-- </div>/.container -->


<!-------------->
@push('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    Livewire.on('guardar', inscriptionMessage => {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: '¡Has inscrito tus materias exitosamente!',
            showConfirmButton: false,
            timer: 1500
        })
    })
</script>
@endpush
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="{{ asset('js/formulario.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="{{ asset('js/mi-script.js') }}"></script>