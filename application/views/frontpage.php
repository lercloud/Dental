  <!-- Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Clinica Dental Mónica Jorratt</a>
          </div>
          
        </div>
      </div>

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Buscar Pacientes</h1>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab">
          <li><a href="#nombre" data-toggle="tab">Por Nombre</a></li>
          <li><a href="#apellido" data-toggle="tab">Por Apellido</a></li>
          <li><a href="#direccion" data-toggle="tab">Por Dirección</a></li>
          <li><a href="#fecha" data-toggle="tab">Por fecha</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="nombre">
            <p>
            <form class="form-horizontal" role="form" id="porNombre">
              <div class="form-group">
                <label for="inputNombre" class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="inputNombre" placeholder="Nombre del Paciente" /><br />
                  <button type="submit" class="btn btn-default">Buscar por Nombre</button>
                </div>

              </div>
            </form>

          </div>
          <div class="tab-pane" id="apellido">
            <p>
            <form class="form-horizontal" role="form" id="porApellido">
              <div class="form-group">
                <label for="inputApellido" class="col-sm-2 control-label">Apellido</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="inputApellido" placeholder="Apellido del Paciente" /><br />
                  <button type="submit" class="btn btn-default">Buscar por Apellido</button>
                </div>

              </div>
            </form>
          </div>
          <div class="tab-pane" id="direccion">
            <p>
            <form class="form-horizontal" role="form" id="porApellido">
              <div class="form-group">
                <label for="inputDireccion" class="col-sm-2 control-label">Dirección</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="inputDirección" placeholder="Dirección del Paciente" /><br />
                  <button type="submit" class="btn btn-default">Buscar por Dirección</button>
                </div>

              </div>
            </form>
          </div>
          <div class="tab-pane" id="fecha">
            <p>
              <form class="form-horizontal" role="form" id="porApellido">
              <div class="form-group">
                <label for="inputFecha" class="col-sm-2 control-label">Fecha</label>
                <div class="col-sm-5">
                  <input type="date" class="form-control" id="inputFecha" /><br />
                  <button type="submit" class="btn btn-default">Buscar por Fecha</button>
                </div>

              </div>
            </form>
            
          </div>
        </div>
      </div>
    </div>