<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width">
	<meta http-equiv="X-UA-Compatible">
	<title>Gestión de Salas UTC</title>

	<link href='calendar/core/main.css' rel='stylesheet' />
    <link href='calendar/daygrid/main.css' rel='stylesheet' />

    <style>
    html,body{
    	margin: 0; padding: 0;
    	font-family: Arial, Halvetica, sans-serif ;
    	font-size: 14px;
    }
    #calendar{max-width: 900px; margin: 40px auto;}  
    	
    </style>

    <script src='calendar/core/main.js'></script>
    <script src='calendar/daygrid/main.js'></script>

	<script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'dayGrid' ]
        });
       //Calendario convertir español
        calendar.setOption('locale','Es')

        calendar.render();
      });
    </script>
</head>

<body>
<div id="calendar"></div>

</body>
</html>
