 <!--Footer-->
 <footer class="page-footer text-center font-small mt-4 wow fadeIn">

<div class="pt-4 container">
  <div class="row">
    <div class="col-12 col-sm-6 col-md-4">
      <img src="img/logo.png" alt="">
    </div>
    <div class="col-12 col-sm-6 col-md-4 text-left mt-4"">
      <a class=" href="">About Us</a><br>
      <a href="">Marketplace</a><br>
      <a href="">Raw Materials Suppliers</a><br>
      <a href="">Industry Institutions & associations</a><br>
    </div>
    <div class="col-12 col-sm-6 col-md-4 text-left mt-4"">
      <a class=" href="">Machinery, Equipment & Molds</a><br>
      <a href="">Services / Service Providers</a><br>
      <a href="">Industry Updates</a><br>
      <a href="">Product Category</a><br>
    </div>

  </div>

</div>
<!--/.Call to action-->

<hr class="my-4">

<!-- Social icons -->
<div class="pb-4">
  <a href="" target="_blank">
    <i class="fab fa-facebook-f mr-3"></i>
  </a>

  <a href="" target="_blank">
    <i class="fab fa-twitter mr-3"></i>
  </a>

  <a href="" target="_blank">
    <i class="fab fa-youtube mr-3"></i>
  </a>

  <a href="" target="_blank">
    <i class="fab fa-google-plus-g mr-3"></i>
  </a>

  <a href="" target="_blank">
    <i class="fab fa-dribbble mr-3"></i>
  </a>

  <a href="" target="_blank">
    <i class="fab fa-pinterest mr-3"></i>
  </a>

  <a href="" target="_blank">
    <i class="fab fa-github mr-3"></i>
  </a>

  <a href="" target="_blank">
    <i class="fab fa-codepen mr-3"></i>
  </a>
</div>
<!-- Social icons -->

<!--Copyright-->
<div class="footer-copyright py-3">
  © 2019 Copyright:
  <a href="" target="_blank"> Injaz Co. </a>
</div>
<!--/.Copyright-->

</footer>
<!--/.Footer-->




<!-- SCRIPTS -->

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->



<script type="text/javascript" src="js/mdb.min.js"></script>
<script src="js/materialize.min.js"></script>
<!-- Calender JavaScript -->




    <script src="js/uploadfiles/sortable.js" type="text/javascript"></script>
    <script src="js/uploadfiles/fileinput.js" type="text/javascript"></script>
    <script src="js/uploadfiles/themes/fas/theme.js" type="text/javascript"></script>
    <script src="js/uploadfiles/themes/explorer-fas/theme.js" type="text/javascript"></script>


<script>
    $( document ).ready(function() {
        $('[data-toggle="tooltip"]').tooltip({'placement': 'top'});


        $("#kv-explorer").fileinput({
          'theme': 'explorer-fas',
          'uploadUrl': '#',
          overwriteInitial: false,
          'elErrorContainer': '#errorBlock',
          initialPreviewAsData: true,});



      });

    </script>



<!-- Custom  JavaScript -->

<script type="text/javascript" src="js/multilevel-navbar.js"></script>

<script type="text/javascript" src="js/custom.js"></script>



  <!-- Initializations -->
<script type="text/javascript">
// Animations initialization
new WOW().init();

$('.datepicker').pickadate({
  labelMonthNext: 'Go to the next month',
  labelMonthPrev: 'Go to the previous month',
  labelMonthSelect: 'Pick a month from the dropdown',
  labelYearSelect: 'Pick a year from the dropdown',
  selectMonths: true,
  selectYears: true
});

$('.file_upload').file_upload();
</script>

</body>

</html>
