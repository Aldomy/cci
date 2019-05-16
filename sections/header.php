<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CCI Portal</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    <!-- Font Awesome -->





    <!-- Material Design Bootstrap -->

    <link href="css/mdb.css" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/materialize.min.css">

    <!-- Calender CSS -->
    <link rel='stylesheet' href='css/fullcalendar.min.css' />


      <link href="css/uploadfiles/fileinput.min.css" media="all" rel="stylesheet" type="text/css"/>
      <link href="js/uploadfiles/themes/explorer-fas/theme.css" media="all" rel="stylesheet" type="text/css"/>

      <!-- JQuery -->
      <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
      <script src='js/lib/jquery-ui.min.js'></script>
      <script src='js/lib/moment.min.js'></script>

      <script src='js/lib/fullcalendar.min.js'></script>

      <!-- Charts -->

      <script type="text/javascript" src="js/charts/loader.js"></script>

      <script type="text/javascript" src="js/charts/charts.js"></script>



        <script>

          $(document).ready(function(){
            var calendar=$("#calendar").fullCalendar({
              editable:true,
              header:{
                left:'prev,next,today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
              },
              selectable:true,
              selectHelper:true,
              theme: 'bootstrap4'
            });
          });

        </script>

        <script src="js/fSelect.js"></script>
        <script>
        (function($) {
            $(function() {
                $('.test').fSelect();
            });
        })(jQuery);

        $('.file_upload').file_upload();

        </script>


    <!-- custom styles -->
    <link href="css/fSelect.css" rel="stylesheet">

    <link href="css/multilevel-navbar.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">


    <style type="text/css">
      .fs-wrap{

      width:100%;
      }

      .fs-label{
      display: block;
      width: 100%;
      height: calc(2.25rem + 2px);
      padding: 0.375rem 0.75rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #495057;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;

      background-image: url(img/lightbox/dropmenu2.jpg) !important;
      /* background-blend-mode: screen; */
      background-color: #01445c !important;
      color:white;
      }



      .fs-arrow{
      border-top: 5px solid #fffcfc;
      border-left: 3px solid transparent;
      border-right: 3px solid transparent;
      }

      .fs-dropdown{
      background: rgb(209, 238, 255) !important;
      width:90% !important;
      }

    </style>




</head>

<body>
