</head>
<body>
  
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <img src="<?= base_url() ?>plantillas/image/mopsv.png" class="img-responsive" alt=""><br />
      <ul class="nav nav-pills nav-stacked">
        <li><a href="<?= base_url() ?>">Inicio</a></li>
        <li class="active" ><a href="<?= base_url() ?>carga">Subir CSV</a></li>
        <li><a href="<?= base_url() ?>reporte">Reportes por Departamento</a></li>
        <li><a href="#section3">Buscar</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Buscar ...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>
    <div class="col-sm-9">
      <h4><small>MINISTERIO DE OBRAS PUBLICAS SERVICIOS Y VIVIENDAS</small></h4>
      <hr>
      <h2>SISTEMA DE SEGUIMIENTO</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Actualizado el: Nov 15, 2017.</h5>
      <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span></h5><br>
      <div class="panel panel-default">
        <div class="panel-heading">Actualizar la base de datos. <cite style="color: red">*(Nota: )</cite></div>
        <div class="panel-body">
          <form class="form-inline" method="post">
            <div class="form-group">
              <table>
                <tr>
                  <td><h1><strong>1er. Paso&nbsp;&nbsp;</strong></h1></td>
                  <td>
                    <label for="sel1">Buscar archivo .TXT :</label>
                    <input type="file" class="form-control" name="archivo">
                  </td>
                </tr>                 
                <tr>
                  <td><h1><strong>2do. Paso&nbsp;&nbsp;</strong></h1></td>
                  <td><button type="submit" class="btn btn-success"><spam class="glyphicon glyphicon-refresh"></spam>&nbsp;&nbsp;ACTUALIZAR</button></td>
                </tr>
              </table>
            </div>
          </form><br />
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

<style>
.row.content {height: 1500px}
.sidenav {
  background-color: #f1f1f1;
  height: 100%;
}
footer {
  background-color: #555;
  color: white;
  padding: 15px;
}
@media screen and (max-width: 767px) {
  .sidenav {
    height: auto;
    padding: 15px;
  }
  .row.content {height: auto;}
}
</style>
