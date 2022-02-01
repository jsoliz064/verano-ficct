<div class="background"></div>
<div class="backdrop"></div>
<div class="page2">
    <!-- <div class="container2">-->
    <div class="formulario2">
        <!-- HEADER -->
        <div class="header2">
            <div class="logo2">
                <div class="logo-area2">
                    <<span class="red">/</span><span class="big">Support</span>>
                </div>
            </div>


            <h3>
                REGISTRA<br>TUS MATERIAS
                <div class="contenedor9">
                    <p>><span>_</span></p>
                    <p>Suppot Ficct.....<span>&#160;</span></p>
                </div>
            </h3>
        </div>
        <!-- FORMULARIO -->

        <div class="container2">
            <form id="contact_form">
                <!--<div class="input2">
                <i class="fa fa-lock icone"></i>
                <input type="password" id="login-password" name="password" placeholder="Password">
                <i id="show-password" class="fa fa-eye icone"></i>
        </div>

        -->

                <!-- Text input-->
                Nombre Completo
                <div class="input-group">
                    <span class="input-group-addon" style="background-color:rgb(47, 47, 47);color:#ffff">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input id="nombre" wire:model="nombre" name="nombre" placeholder="Nombre Completo"
                        class="form-control" pattern="[0-9]{10,40}" size="10" min="10" maxlength="40" max="40"
                        type="text" required>
                </div>

                <!-- Text input-->
                Registro
                <div class="input-group">
                    <span class="input-group-addon" style="background-color:rgb(47, 47, 47);color:#ffff"><i
                            class="fas fa-clipboard"></i></span>
                    <input id="registro" wire:model="registro" name="number" class="form-control" type="text"
                        placeholder="000000000" pattern="[0-9]{4,15}" size="4" min="4" maxlength="9" max="9"
                        class="form-control" type="number" required>
                </div>


                <!-- Text input-->
                Telefono
                <div class="input-group">
                    <span class="input-group-addon" style="background-color:rgb(47, 47, 47);color:#ffff"><i
                            class="glyphicon glyphicon-earphone"></i></span>
                    <input id="telefono" wire:model="telefono" name="phone" placeholder="+591 XXXXXXX"
                        pattern="[0-9-+()]{8,15}" size="5" min="8" maxlength="8" max="8" class="form-control"
                        type="text" required>
                </div>



                <!-- Text input-->
                Carrera
                <div class="input-group">
                    <span class="input-group-addon" style="background-color:rgb(47, 47, 47);color:#ffff"><i
                            class="fab fa-buffer"></i></span>
                    <select id="carrera" wire:model="carrera_id" name="carrera" class="form-control selectpicker">
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
                    <span class="input-group-addon" style="background-color:rgb(47, 47, 47);color:#ffff"><i
                            class="glyphicon glyphicon-list"></i></span>
                    <select id="materia1" wire:model="materia1" name="materia1"
                        class="mi-selector1 form-control selectpicker">
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
                    <span class="input-group-addon" style="background-color:rgb(47, 47, 47);color:#ffff"><i
                            class="glyphicon glyphicon-list"></i></span>
                    <select id="materia2" wire:model="materia2" name="materia2"
                        class="mi-selector2 form-control selectpicker ">
                        <option value="">Selccione una opcion</option>
                        @foreach ($materias as $materia)
                            <option value="{{ $materia->id }}">
                                {{ $materia->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <!-- Button -->

                <!--<button wire:click.prevent="guardar()" onClick="alerta()" type="button" class="btn2">Inscribir
                    <span class="glyphicon glyphicon-send"></span></button>
                
                <input type="submit" name="login" value="Login" class="btn btn-login">-->

                <button wire:click.prevent="guardar()" onClick="alerta()" type="button" class="btn btn-login">Inscribir
                    <span class="glyphicon glyphicon-send"></span></button>


                @if (session()->has('message'))
                    <div class="form-group">
                        <div class="col-md-4" align="center">
                            <!--<h4>{{ session('message') }}</h4>-->


                            <div class="alerta" align="center">
                                <div class="titulo4"></div>
                                <div class="descricao"></div>
                                <div class="fechar">{{ session('message') }}</div>
                            </div>
                            <div class="bg"></div>

                        </div>
                    </div>
                @endif
            </form>
            <!-- SEPARADOR -->
        </div>
        <!--</div>-->
    </div>
</div>
<!-- Font Awesome -->




<!--sssss-->
<div id="move-content">

    <!-- /.container -->
</div>
















<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="{{ asset('js/formulario.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="{{ asset('js/mi-script.js') }}"></script>
