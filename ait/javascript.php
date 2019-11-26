 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
 <script type="text/javascript" src="jquery-1.4.1.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
 <!-- Bootstrap core CSS -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <!-- Material Design Bootstrap -->
 <link href="css/mdb.min.css" rel="stylesheet">
 <!-- Your custom styles (optional) -->
 <link href="css/style.css" rel="stylesheet">

 <!-- Ajax-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function()
  {
   $(".group").change(function()
   {
    var id=$(this).val();
    var dataString = 'id='+ id;

    $.ajax
    ({
     type: "POST",
     url: "ajax.php",
     data: dataString,
     cache: false,
     success: function(html)
     {
        $(".subject").html(html);
     }
     });
    });
  });
  </script>

  <script type="text/javascript">
  $(document).ready(function()
  {
   $(".grouptue").change(function()
   {
    var id=$(this).val();
    var dataString = 'id='+ id;

    $.ajax
    ({
     type: "POST",
     url: "ajaxtue.php",
     data: dataString,
     cache: false,
     success: function(html)
     {
        $(".subjecttue").html(html);
     }
     });
    });
  });
  </script>

  <script type="text/javascript">
  $(document).ready(function()
  {
   $(".groupwed").change(function()
   {
    var id=$(this).val();
    var dataString = 'id='+ id;

    $.ajax
    ({
     type: "POST",
     url: "ajaxwed.php",
     data: dataString,
     cache: false,
     success: function(html)
     {
        $(".subjectwed").html(html);
     }
     });
    });
  });
  </script>

  <script type="text/javascript">
  $(document).ready(function()
  {
   $(".groupthus").change(function()
   {
    var id=$(this).val();
    var dataString = 'id='+ id;

    $.ajax
    ({
     type: "POST",
     url: "ajaxthus.php",
     data: dataString,
     cache: false,
     success: function(html)
     {
        $(".subjectthus").html(html);
     }
     });
    });
  });
  </script>

  <script type="text/javascript">
  $(document).ready(function()
  {
   $(".groupfri").change(function()
   {
    var id=$(this).val();
    var dataString = 'id='+ id;

    $.ajax
    ({
     type: "POST",
     url: "ajaxfri.php",
     data: dataString,
     cache: false,
     success: function(html)
     {
        $(".subjectfri").html(html);
     }
     });
    });
  });
  </script>
 <!-- Print -->
 <script>
   function Print() {
     window.print();
   }
 </script>

 <!-- Selection -->
 <script>
   $(document).ready(function() {
     $('.mdb-select').materialSelect();
   });
 </script>


 <script>
   function groupselect() {
     var sgroup = document.getElementById("myGroupSelect").value;

     document.getElementById("groupselect").innerHTML = "You selected: " + sgroup;

     $.ajax({
       type: 'POST',
       url: 'index.php',
       data: {
         Major: x
       },
       cache: false,
       success: function(getreturn) {
         alert(getreturn); //you get return value in this varibale, us it anywhere
       }
     });
   }
 </script>
 <script>
   function roomselect() {
     var sroom = document.getElementById("myRoomSelect").value;
     document.getElementById("roomselect").innerHTML = "You selected: " + sroom;
   }
 </script>

 <script>
   function subselect() {
     var ssub = document.getElementById("mySubSelect").value;
     document.getElementById("subselect").innerHTML = "You selected: " + ssub;
   }
 </script>

 <script>
   function timeselect() {
     var svtime = document.getElementById("myTimeSelect").value;
     var stime = parseInt(svtime, 10);
     var sduration = 4;
     var sfinish = stime + sduration;
     document.getElementById("timeselect").innerHTML = "Class from: " + stime + "am" + " to " + sfinish + "pm";
   }
 </script>
