  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- -------- -->



    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>



		<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
       <!-- dd -->
        {!! Toastr::message() !!}
<!-- dd -->



  <script src='https://code.jquery.com/jquery-3.4.1.js'></script>
      <script id="rendered-js" >


        
$('.btnd').click(function () {
  $(this).toggleClass("click");
  $('.sidebar').toggleClass("show");
});
$('.feat-btn').click(function () {
  $('nav ul .feat-show').toggleClass("show");
  $('nav ul .first').toggleClass("rotate");
});
$('.serv-btn').click(function () {
  $('nav ul .serv-show').toggleClass("show1");
  $('nav ul .second').toggleClass("rotate");
});
$('nav ul li').click(function () {
  $(this).addClass("active").siblings().removeClass("active");
});
//# sourceURL=pen.js
    </script>


    
@yield('scripts')