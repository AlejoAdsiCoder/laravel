    @include('head')
    <div class="container-fluid">
    <div class="row">
    <div class="main col-md-4">
        
        <form action="">
                <div class="row">
                    <div class="form-group col">
                        <label for="">Tipo Documento</label>
                        <select name="" class="form-control" id="">
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group col">
                        <label for="">Número identificación</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                    <div class="row">
                    <div class="form-group col">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col">
                        <label for="">Apellidos</label>
                        <input type="text" class="form-control">
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="">Fecha nacimiento</label>
                        <input type="date" class="form-control" id="fechanac">
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="row">
                    <div class="form-group col">
                        <label for="">Barrio</label>
                        <select name="barrio" class="form-control" id=""></select>
                    </div>
        
                    <div class="form-group col">
                        <label for="">Dirección</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="">Deporte</label>
                        <select name="deporte" class="form-control" id="deporte">
                            <option value="">baloncesto</option>
                            <option value="">natacion</option>
                            <option value="">futbol</option>
                        </select>
                    </div>
                    
                    <button class="btn btn-primary">Registrar</button>
        </form>
    </div>
    <div class="side col-md-8">
        <table class="table table-sm">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tipo documento</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">E-mail</th>
                <th scope="col">Deporte</th>
                <th scope="col">Barrio</th>
                <th scope="col">Dirección</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>