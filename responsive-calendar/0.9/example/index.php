<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Responsive Calendar Widget that will make your day</title>
    <meta name="distributor" content="Global" />
    <meta itemprop="contentRating" content="General" />
    <meta name="robots" content="All" />
    <meta name="revisit-after" content="7 days" />
    <meta name="description" content="The source of truly unique and awesome jquery plugins." />
    <meta name="keywords" content="slider, carousel, responsive, swipe, one to one movement, touch devices, jquery, plugin, bootstrap compatible, html5, css3" />
    <meta name="author" content="w3widgets.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <!-- Respomsive slider -->
    <link href="../css/responsive-calendar.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <!-- Responsive calendar - START -->
    	<div class="responsive-calendar">
        <div class="controls">
            <a class="pull-left" data-go="prev"><div class="btn btn-primary">Prev</div></a>
            <h4><span data-head-year></span> <span data-head-month></span></h4>
            <a class="pull-right" data-go="next"><div class="btn btn-primary">Next</div></a>
        </div>
		<h4 style="text-align:center"><span><a href="cadastrar_agenda.php">Cadastrar</a></span></h4>
		<hr>
        <div class="day-headers">
          <div class="day header">Mon</div>
          <div class="day header">Tue</div>
          <div class="day header">Wed</div>
          <div class="day header">Thu</div>
          <div class="day header">Fri</div>
          <div class="day header">Sat</div>
          <div class="day header">Sun</div>
        </div>
        <div class="days" data-group="days">
          
        </div>
      </div>
      <!-- Responsive calendar - END -->
    </div>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/responsive-calendar.js"></script>
    <script type="text/javascript">
	
      $(document).ready(function () {
        $(".responsive-calendar").responsiveCalendar({
          time: '<?php echo date("Y-m")?>',
          events: {
			  //Sintaxe para retornar dados: "2016-12-24": {"number": 5, "url": "http://w3widgets.com/responsive-slider"},
			  
            //"2016-12-24": {"number": 1, "url": "responsive-slider"},
			<?php
			$conexao = mysql_connect ("localhost", "root", "");
			mysql_select_db ("contemporaneo");
			
			$QueryBuscarAgenda = "SELECT * FROM agenda_aulas";
			$exeQrBuscarAgenda = mysql_query($QueryBuscarAgenda);

			if(mysql_num_rows($exeQrBuscarAgenda)>0){
				while($resBuscarAgenda = mysql_fetch_assoc($exeQrBuscarAgenda)){
			?>
            "<?php echo $resBuscarAgenda['data']?>": {"number": "<i data-toggle='modal' data-target='#modal<?php echo $resBuscarAgenda['id']?>' class='btn btn-sm glyphicon glyphicon-info-sign' alt='Ver tudo' title='Ver tudo'></i>", "event": "?evento=1"},
			
			<?php
				}
			}
			?>
		  }
        });
      });
    </script>
	<?php
	$conexao = mysql_connect ("localhost", "root", "");
	mysql_select_db ("contemporaneo");
	
	$QueryBuscarAgenda = "SELECT * FROM agenda_aulas";
	$exeQrBuscarAgenda = mysql_query($QueryBuscarAgenda);
	
	if(mysql_num_rows($exeQrBuscarAgenda)>0){
		while($resBuscarAgenda = mysql_fetch_assoc($exeQrBuscarAgenda)){
	?>
	<div class="modal fade" id="modal<?php echo $resBuscarAgenda['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Modal title: <?php echo $resBuscarAgenda['id']?></h4>
		  </div>
		  <div class="modal-body">
			...
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>
	<?php
		}
	}
	?>
  </body>
</html>