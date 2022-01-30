<div id="move-content">
    <div class="formuario-div">
        <br><br><br><br><br>
        <div class="">
            <form class="well form-horizontal" action=" " method="post" id="contact_form"
                style="background-color:transparent;color:#ffff">
                <!--<fieldset>-->
                <!-- Form Name -->
                <p style="color:#ffff;text-align: center;font-size: 20px;"><i class="fas fa-file-alt"></i> Formulario</p>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Nombre</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon" style="background-color:rgb(47, 47, 47);color:#ffff"><i
                                    class="glyphicon glyphicon-user"></i></span>
                            <input name="first_name" placeholder="Nombre Completo" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Registro</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fas fa-clipboard"></i></span>
                            <input name="number" class="form-control" type="text" placeholder="000000000"
                                pattern="[0-9]{4,15}" size="4" min="4" maxlength="9" max="9" class="form-control"
                                type="text" required>
                        </div>
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Correo</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="email" placeholder="E-Mail Address" class="form-control" type="text">
                        </div>
                    </div>
                </div>


                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Celular</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input name="phone" placeholder="+591XXXXXXXXX" pattern="[0-9-+()]{8,15}" size="5" min="8"
                                maxlength="15" max="15" class="form-control" type="text" required>

                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Carrera</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fab fa-buffer"></i></span>
                            <select name="state" class="form-control selectpicker">
                                <option value=" ">Selccione una opcion</option>
                                <option><i class="fas fa-laptop-code"></i>Ing. Sistemas</option>
                                <option><i class="fas fa-server"></i>Ing. Informatica</option>
                                <option><i class="fas fa-satellite-dish"></i>Ing. Redes</option>

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

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-danger">Enviar <span
                                class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>

                <!--</fieldset>-->
            </form>
        </div>
    </div><!-- /.container -->
</div>
