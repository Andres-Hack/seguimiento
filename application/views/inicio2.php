</head>
<body>

<div class="container-fluid">
  <div class="row content" ng-app="myApp">
    <div class="col-sm-3 sidenav">
      <img src="<?= base_url() ?>plantillas/image/mopsv.png" class="img-responsive" alt=""><br />
      <ul class="nav nav-pills nav-stacked">
        <li class="active" ><a href="<?= base_url() ?>">Inicio</a></li>
        <li><a href="<?= base_url() ?>carga">Actualizar DB</a></li>
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
      <br />
      <div class="panel panel-default" ng-controller="myController">
        <div class="panel-heading">Datos de Busqueda</div>
        <div class="panel-body">
          <form method="post" action="<?= base_url() ?>">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label><span class="glyphicon glyphicon-certificate"></span>&nbsp;&nbsp;Departamento :</label>
                <select class="form-control" id="sel1" name="dep" ng-click="myFunc()" ng-model="depart" required="">
                  <option value="" selected>Todo</option>
                  <option value="LA PAZ">LA PAZ</option>
                  <option value="BENI">BENI</option>
                  <option value="CHUQUISACA">CHUQUISACA</option>
                  <option value="COCHABAMBA">COCHABAMBA</option>
                  <option value="ORURO">ORURO</option>
                  <option value="PANDO">PANDO</option>
                  <option value="POTOSI">POTOSI</option>
                  <option value="SANTA CRUZ">SANTA CRUZ</option>
                  <option value="TARIJA">TARIJA</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label><span class="glyphicon glyphicon-barcode"></span>&nbsp;&nbsp;Codigo de proyecto :</label>
                <select class="form-control" name="cod" re>
                  <option value="" selected="">Todo</option>
                  <option value="{{x}}" ng-repeat="x in myData">{{x}}</option>
                </select>
              </div>
              <!--
              <div class="form-group col-md-3">
                <label><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;&nbsp;Estado :</label>
                <select class="form-control" id="sel1" name="estado">
                  <option value="" selected>Todo</option>
                  <option value="Baja">Baja</option>
                  <option value="Cierre de Proyecto">Cierre de Proyecto</option>
                  <option value="En Contratacion">En Contratacion</option>
                  <option value="En Ejecucion">En Ejecucion</option>
                  <option value="En Gestion">En Gestion</option>
                  <option value="Paralizado">Paralizado</option>
                  <option value="Viviendas Construidas">Viviendas Construidas</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="sel1">Tipo :</label>
                <select class="form-control"  id="disabledInput" name="tipo">
                  <option value="" selected="">Todo</option>
                  <option value="Comunidades Urbanas">Comunidades Urbanas</option>
                  <option value="Emergencia">Emergencia</option>
                  <option value="Mixturita">Mixturita</option>
                  <option value="P.M.A.R. Extraordinaria">P.M.A.R. Extraordinaria</option>
                  <option value="P.M.A.R. Iniciativa">P.M.A.R. Iniciativa</option>
                  <option value="P.M.A.R. Rural">P.M.A.R. Rural</option>
                  <option value="P.M.A.R. Urbana">P.M.A.R. Urbana</option>
                  <option value="Vivienda Nueva">Vivienda Nueva</option>
                  <option value="Vivienda Nueva a Inicitiva">Vivienda Nueva a Inicitiva</option>
                  <option value="Vivienda Nueva Extraordinaria">Vivienda Nueva Extraordinaria</option>
                  <option value="Vivienda Nueva Nueva Urbana">Vivienda Nueva Urbana</option>
                </select>
              </div>
            -->
            </div>
            <div class="form-row">
              <div class="form-group col-md-3">
                <button type="submit" class="btn btn-success">ACEPTAR</button>              
              </div>
            </div>
          </form><br />
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <table class="egt">
            <tr>
              <td style="color: red"><strong>Tipo : </strong></td>
              <td></td>
            </tr>
            <tr>
              <td style="color: red"><strong>Gestion de aprovación : </strong></td>
              <td></td>
            </tr>
            <tr>
              <td style="color: red"><strong>Nombre de proyecto : </strong></td>
              <td></td>
            </tr>
            <tr>
              <td style="color: red"><strong>Codigo : </strong></td>
            </tr>
          </table>
        </div>
        <div class="panel-body">
          <script src="https://code.highcharts.com/highcharts.js"></script>
          <script src="https://code.highcharts.com/modules/exporting.js"></script>
          <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
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

<script type="text/javascript">

Highcharts.chart('container', {
  chart: {
    type: 'areaspline'
  },
  title: {
    text: 'Grafico de avance financiero y fisico'
  },
  legend: {
    layout: 'vertical',
    align: 'left',
    verticalAlign: 'top',
    x: 200,
    y: 200,
    floating: true,
    borderWidth: 1,
    backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
  },
  xAxis: {
    categories: [
      'Enero',
      'Febrero',
      'Marzo',
      'Abril',
      'Mayo',
      'Junio',
      'Julio',
      'Agosto',
      'Septiembre',
      'Octubre'
    ],
    plotBands: [{
      from: 4.5,
      to: 6.5,
      color: 'rgba(68, 170, 213, .2)'
    }]
  },
  yAxis: {
    title: {
      text: '% de avance'
    }
  },
  tooltip: {
    shared: true,
    valueSuffix: ' %'
  },
  credits: {
    enabled: false
  },
  plotOptions: {
    areaspline: {
      fillOpacity: 0.5
    }
  },
  series: [{
    name: 'Avance financiero.',
    data: [0,0,0,0,0,0,0,0,0,0]
  }, {
    name: 'Avance fisico.',
    data: [0,0,0,0,0,0,0,0,0,0]
  },  ]
});

</script>
