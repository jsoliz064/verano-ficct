<div id="move-content">
    <div class="formuario-div">
        <br><br><br><br><br>
        <div class="container">
            <form class="formulario well form-horizontal" id="contact_form"
                style="background-color:#222222;color:#ffff;box-sizing: border-box;box-shadow: 0 15px 25px #afbecf;border-radius: 15px;">
                <!--<fieldset>-->
                <!-- Form Name -->
                <p style="color:#ffff;text-align: center;font-size: 20px;">
                    <i class="fas fa-file-alt my-4"></i>
                    REGISTRA
                    TUS MATERIAS
                </p>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Nombre Completo</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon" style="background-color:rgb(47, 47, 47);color:#ffff">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                            <input id="nombre" wire:model="nombre" name="nombre" placeholder="Nombre Completo"
                                class="form-control" pattern="[0-9]{10,40}" size="10" min="10" maxlength="40" max="40"
                                type="text" required>
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Registro</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon" style="background-color:rgb(47, 47, 47);color:#ffff"><i
                                    class="fas fa-clipboard"></i></span>
                            <input id="registro" wire:model="registro" name="number" class="form-control" type="text"
                                placeholder="000000000" pattern="[0-9]{4,15}" size="4" min="4" maxlength="9" max="9"
                                class="form-control" type="number" required>
                        </div>
                    </div>
                </div>


                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Telefono</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon" style="background-color:rgb(47, 47, 47);color:#ffff"><i
                                    class="glyphicon glyphicon-earphone"></i></span>
                            <input id="telefono" wire:model="telefono" name="phone" placeholder="+591 XXXXXXX"
                                pattern="[0-9-+()]{8,15}" size="5" min="8" maxlength="8" max="8" class="form-control"
                                type="text" required>
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Carrera</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon" style="background-color:rgb(47, 47, 47);color:#ffff"><i
                                    class="fab fa-buffer"></i></span>
                            <select id="carrera" wire:model="carrera_id" name="state" class="form-control selectpicker">
                                <option value="">Seleccione una opción</option>
                                @foreach ($carreras as $carrera)
                                    <option value="{{ $carrera->id }}">
                                        {{ $carrera->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Text input-->


                <!-- Select Basic -->

                <div class="form-group">
                    <label class="col-md-4 control-label">Materia 1</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon" style="background-color:rgb(47, 47, 47);color:#ffff"><i
                                    class="glyphicon glyphicon-list"></i></span>
                            <select id="materia" name="state" class="form-control selectpicker">
                                <option value=" ">Selccione una opcion</option>
                                <option>Calculo</option>
                                <option>Fisica</option>
                                <option>Ingles</option>

                            </select>
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Materia 2</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon" style="background-color:rgb(47, 47, 47);color:#ffff">
                                <i class="fas fa-search"></i></span>
                            <input id="materia" wire:model="buscar" name="materia" placeholder="Buscar Materia"
                                class="form-control" pattern="[0-9]{10,40}" size="10" min="10" maxlength="10" max="40"
                                type="text" required>

                        </div>
                    </div>
                    <br><br>
                    @foreach ($materias as $materia)
                        <div class="form-check"
                            style=" background-color: yellow;padding: 1px;margin: 1px; ;color:#ffff">
                            <input
                                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault">
                                {{ $materia->nombre }}
                            </label>
                        </div>
                    @endforeach
                </div>

                <!-- Button -->
                <div class="form-group" align="center">
                    <button wire:click.prevent="guardar()" onClick="alerta()" type="button"
                        class="btn2">Inscribir <span class="glyphicon glyphicon-send"></span></button>


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
                </div>
            </form>
        </div>
    </div><!-- /.container -->
</div>
</div>
<!-- /.container -->


<script src="{{ asset('js/formulario.js') }}"></script>
