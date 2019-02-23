<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap-admin.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link rel="stylesheet" href="css/custom-css/custom-member.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->

<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="/admin"><i class="fas fa-users"></i> <span>Manage Member</span></a> </li>
    <li> <a href="/admin_class"><i class="fas fa-book"></i>Manage Class</span></a> </li>
    <li> <a href="widgets.html"><i class="icon icon-inbox"></i> <span>Post</span></a> </li>
    <li><a href="tables.html"><i class="fas fa-sign-out-alt"></i> <span>Sign Out</span></a></li>
      </ul>
    </li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
<section>
  <div class="username-box">
  <p>Create User</p>
    <form method="POST">
      <select>
        <option selected="selected">Username</option>
        @foreach($member as $user)
          <option>{{$user->username}}</option>
        @endforeach
      </select><br>
      <input type="password" value="password"></input>
    </form>
  </div>
</section>

<section>
  <div class="course-box">
  <p>Manage Course</p>
    <form method="POST">
      <select id="member-username">
        <option selected="selected">Username</option>
        @foreach($member as $user)
          <option>{{$user->username}}</option>
        @endforeach
      </select><br>
      <select>
          <option selected="selected">Course</option>
      </select><br>
      <div class="row">
        <div class="col-sm-3">
          <input type="checkbox" value="course1">Course 1</input>
        </div>
        <div class="col-sm-3">
          <input type="checkbox" value="course2">Course 2</input>
        </div>
        <div class="col-sm-3">
          <input type="checkbox" value="course3">Course 3</input>
        </div>
      </div>
    </form> 
    <p id="lol">adwawd</p> 
  </div>
</section>
<!--End-Action boxes-->    

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<script>
  var member = @json($member->toArray());
  document.getElementById("lol").innerHTML = Object.values(member[0])[1];
  var sel = document.getElementById('member-username');
  var opts = "username";
  document.getElementById('member-username').onchange = function() {
    opts = sel.options[sel.selectedIndex].text;
    var i;
    for(i=0; i<member.length; i++) {
      if (opts == Object.values(member[i])[4]) {
        document.getElementById("password-user").value = Object.values(member[i])[5];
      }
    }
  }
</script>

<!--end-Footer-part-->
<script src="js/custom-js/custom-member.js"></script>
<script src="js/excanvas.min.js"></script> 
<script src="js/jquery-admin.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap-admin.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
