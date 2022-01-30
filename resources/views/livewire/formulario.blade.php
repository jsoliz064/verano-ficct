<div id="move-content">
    <div class="formuario-div">
        <br><br><br><br><br>
        <div class="container">
            <form class="well form-horizontal" id="contact_form"
                style="background-color:#222222;color:#ffff">
                <!--<fieldset>-->
                <!-- Form Name -->
                <p style="color:#ffff;text-align: center;font-size: 20px;"><i class="fas fa-file-alt my-4"></i> REGISTRA TUS MATERIAS</p>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Nombre</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon" style="background-color:#222222;color:#ffff"><i
                                    class="glyphicon glyphicon-user"></i></span>
                            <input id="nombre" wire:model="nombre" name="first_name"  placeholder="Nombre Completo" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Registro</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-clipboard"></i></span>
                            <input id="registro" wire:model="registro" name="number" class="form-control" type="text" placeholder="000000000"
                                pattern="[0-9]{4,15}" size="4" min="4" maxlength="9" max="9" class="form-control"
                                type="text" required>
                        </div>
                    </div>
                </div>


                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Telefono</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input id="telefono" wire:model="telefono" name="phone" placeholder="+591 XXXXXXX" pattern="[0-9-+()]{8,15}" size="5" min="8"
                                maxlength="8" max="8" class="form-control" type="text" required>
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Carrera</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fab fa-buffer"></i></span>
                            <select id="carrera" wire:model="carrera_id" name="state" class="form-control selectpicker">
                                <option value="">Seleccione una opción</option>
                                @foreach ($carreras as $carrera)
                                    <option value="{{$carrera->id}}">
                                        {{$carrera->nombre}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Text input-->


                <!-- Select Basic -->

                <div class="form-group">
                    <label class="col-md-4 control-label">Materia</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select name="state" class="form-control selectpicker">
                                <option value=" ">Selccione una opcion</option>
                                <option>Calculo</option>
                                <option>Fisica</option>
                                <option>Ingles</option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Materia</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <input id="materia" wire:model="buscar" name="materia" placeholder="Buscar Materia" pattern="[0-9-+()]{8,15}" size="5" min="8"
                                maxlength="8" max="8" class="form-control my-4" type="text" required>
                            @foreach ($materias as $materia)
                                    <div class="form-check">
                                        <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault"> {{$materia->nombre}}
                                        </label>
                                    </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4" align="center">
                        <button wire:click.prevent="guardar()" type="button" class="btn btn-danger">Inscribir <span
                                class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>
                @if (session()->has('message'))
                    <div class="form-group">
                            <div class="col-md-4" align="center">
                                <h4>{{session('message')}}</h4>
                            </div>
                    </div>
                @endif  
                
            </form>
        </div>
    </div><!-- /.container -->
</div>
