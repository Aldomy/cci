<!DOCTYPE html>
<html lang="ar" >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CCI Portal</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <link rel="stylesheet" href="css/materialize.min.css">


    <!-- Material Design Bootstrap -->
    <link href="css/mdb.css" rel="stylesheet">
   <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/uploadfiles/fileinput.min.css" media="all" rel="stylesheet" type="text/css"/>
      <link href="js/uploadfiles/themes/explorer-fas/theme.css" media="all" rel="stylesheet" type="text/css"/>


    <!-- Calender CSS -->
    <link rel='stylesheet' href='css/fullcalendar.min.css' />

    <!-- Your custom styles (optional) -->
    <link href="css/fSelect.css" rel="stylesheet">

    <link href="css/multilevel-navbar.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/ar.css" rel="stylesheet">
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script src='js/lib/jquery-ui.min.js'></script>
        <script src='js/lib/moment.min.js'></script>

        <script src='js/lib/fullcalendar.min.js'></script>
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

            $(function(){
            $('.selectpicker').selectpicker();
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
        </script>



    <style type="text/css">
      html,
      body,
      header,
      .carousel {
        height: 60vh;
      }


      @media (max-width: 740px) {
        html,
        body,
        header,
        .carousel {
          height: 100vh;
        }

        .logo{
          width:70% !important;

        }


        .search{
          width: 130px !important;
        }
      }

      @media (min-width: 800px) and (max-width: 850px) {
        html,
        body,
        header,
        .carousel {
          height: 100vh;
        }
      }

      @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #929FBA!important;
              }
          }


          .a-login{
            font-size: 14px !important;
            padding: 0px !important;

          }

          .side-height{
              height:180px;
          }

          .img-height{
              max-height:330px !important;
          }



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
            /*background-blend-mode: screen;*/
            background-color: #01445c !important;
            color:white;
        }

        .fs-arrow{
          border-top: 5px solid #fffcfc;
        }

        .fs-dropdown{
          background: rgb(209, 238, 255) !important;
          width:90% !important;
        }

    </style>

</head>

<body >
