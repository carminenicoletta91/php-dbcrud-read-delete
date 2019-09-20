<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- CSS:STYLE-->
    <link rel="stylesheet" href="style.css">
    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js" charset="utf-8"></script>
    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
    <!-- JS: CHART JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <title>PHP-CRUD-READ-DELETE</title>

  </head>
  <body>
    <div class="container">
      <h1>Pagamenti</h1>
      <div class="accepted-box">
        <h2>Accepted</h2>
        <div class="accepted-items">

        </div>
      </div>
      <div class="pending-box">
        <h2>Pending</h2>
        <div class="pending-items">

        </div>
      </div>
      <div class="rejected-box">
        <h2>Rejected</h2>
        <div class="rejected-items">

        </div>
      </div>
    </div>
    <script id="item-template" type="text/x-handlebars-template">
    <div class="item" data-id={{{id}}}>
      <i class="fas fa-times btn-delete"></i>
      <p>N.PRENOT:{{{numeropr}}}</p>
      <p>PREZZO:{{{price}}}</p>
      <p>PAGANTE:{{{pagante}}}</p>

    </div>
  </script>
  </body>
</html>
