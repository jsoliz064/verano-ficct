<div id="move-content">
    <div class="formuario-div">
        <br><br><br><br><br>
        <div class="container">



            <form class="formulario well form-horizontal" id="contact_form"
                style="background-color:#141e30;;color:#ffff;box-sizing: border-box;box-shadow: 0 15px 25px #afbecf;border-radius: 15px;">
                <!--<fieldset>-->
                <!-- Form Name -->
                <section class="info_title">
                    <span class="fa fa-user-circle"></span>
                    <h2>REGISTRA<br>TUS MATERIAS</h2>
                </section>

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
                            <select id="carrera" wire:model="carrera_id" name="carrera"
                                class="form-control selectpicker">
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
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Materia 2</label>
                    <div class="col-md-4 selectContainer">
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
                    </div>
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


<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="{{ asset('js/formulario.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="{{ asset('js/mi-script.js') }}"></script>
