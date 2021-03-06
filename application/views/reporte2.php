</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <img src="<?= base_url() ?>plantillas/image/mopsv.png" class="img-responsive" alt=""><br />
      <ul class="nav nav-pills nav-stacked">
        <li><a href="<?= base_url() ?>">Inicio</a></li>
        <li><a href="<?= base_url() ?>carga">Actualizar DB</a></li>
        <li class="active" ><a href="<?= base_url() ?>reporte">Reportes por Departamento</a></li>
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
        <div class="panel-heading">Datos de Busqueda</div>
        <div class="panel-body">
          <form class="form-inline" method="post">
            <label for="sel1">Departamento :</label>
            <select class="form-control" id="sel1" name="departamento">
              <option value="" selected="">Todo</option>
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
            <button type="submit" class="btn btn-success">ACEPTAR</button>
          </form><br />
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">Datos de Busqueda</div>
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
    title: {
        text: 'Porcentaje de avance del departamento'
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
        ]
    },
    labels: {
        items: [{
            html: '% avance anual',
            style: {
                left: '50px',
                top: '18px',
                color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
            }
        }]
    },
    series: [{
        type: 'column',
        name: 'Avance financiero.',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
    }, {
        type: 'column',
        name: 'Avance fisico.',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
    }, {
        type: 'spline',
        name: 'Avance',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    }, {
        type: 'pie',
        name: 'Total consumption',
        data: [{
            name: 'Avance financiero.',
            y: 0,
            color: Highcharts.getOptions().colors[0] // Jane's color
        }, {
            name: 'Avance fisico.',
            y: 0,
            color: Highcharts.getOptions().colors[1] // John's color
        }],
        center: [100, 80],
        size: 100,
        showInLegend: false,
        dataLabels: {
            enabled: false
        }
    }]
});
</script>
