 <!--Navbar -->
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1">
    <a class="navbar-brand" href="#">AIT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Timetable
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="print.php">Print</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item avatar">
          <a class="nav-link p-0" href="#">
            <img src="images/logo.jpg" class="rounded-circle z-depth-0" alt="avatar image" height="35">
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!--/.Navbar -->
  
 <!-- Change active -->
 <script type="text/javascript">
  $('.navbar-nav .nav-item').click(function(){
    $('.navbar-nav .nav-item.active').removeClass('active');
    $(this).addClass('active');
})
</script> 