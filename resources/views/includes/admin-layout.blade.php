<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap-admin.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap-responsive.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/fullcalendar.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/matrix-style.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/matrix-media.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/custom-css/custom-member.css') }}" />
<link href="{{ URL::asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ URL::asset('css/jquery.gritter.css') }}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="/admin"><i class="fas fa-users"></i> <span>Manage Member</span></a> </li>
    <li> <a href="/enroll"><i class="icon icon-inbox"></i> <span>Show Enrollment</span></a> </li>
    <li> <a href="/kelas"><i class="fas fa-book"></i>Manage Class</span></a> </li>
    <li> <a href="/kelas/create"><i class="fas fa-plus-square"></i>Create Class</span></a> </li>
    <li> <a href="/subkelas"><i class="fas fa-book"></i>Manage SubClass</span></a> </li>
    <li> <a href="/subkelas/create"><i class="fas fa-plus-square"></i>Create SubClass</span></a> </li>
    <li> <a href="/posts"><i class="icon icon-inbox"></i> <span>Post</span></a> </li>
    <li> <a href="/posts/create"><i class="fas fa-plus-square"></i> <span>Create Post</span></a> </li>
    <li> <a href="/admin/video"><i class="icon icon-inbox"></i> <span>Manage Video</span></a> </li>
    <li> <a href="/admin/video/upload"><i class="fas fa-plus-square"></i> <span>Upload Video</span></a> </li>
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
@include('includes.messages')
@yield('content')
<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="/js/excanvas.min.js"></script> 
<script src="/js/jquery-admin.min.js"></script> 
<script src="/js/jquery.ui.custom.js"></script> 
<script src="/js/bootstrap-admin.min.js"></script> 
<script src="/js/jquery.flot.min.js"></script> 
<script src="/js/jquery.flot.resize.min.js"></script> 
<script src="/js/jquery.peity.min.js"></script> 
<script src="/js/fullcalendar.min.js"></script> 
<script src="/js/matrix.js"></script> 
<script src="/js/matrix.dashboard.js"></script> 
<script src="/js/jquery.gritter.min.js"></script> 
<script src="/js/matrix.interface.js"></script> 
<script src="/js/matrix.chat.js"></script> 
<script src="/js/jquery.validate.js"></script> 
<script src="/js/matrix.form_validation.js"></script> 
<script src="/js/jquery.wizard.js"></script> 
<script src="/js/jquery.uniform.js"></script> 
<script src="/js/select2.min.js"></script> 
<script src="/js/matrix.popover.js"></script> 
<script src="/js/jquery.dataTables.min.js"></script> 
<script src="/js/matrix.tables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
  window.onload = function () { 
    /*$(".btn-danger").click(function(e) {
      e.preventDefault();
      Swal.fire({
        title: 'Are you sure?' + $(this).attr('href'),
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        window.location.href = $(this).attr('href');
      })
    });

    $("#sidebar > ul *").click(function() {
      $(this).attr('class', 'active')
    });*/

    $(".largerCheckbox").click(function() {
      if($(this).prop("checked") == true){
        /*$.ajax({
            url: '/get_sub_kelas/' + $(this).val(),
            type:"GET",
            success:function(msg){
              //$('#checkbox_sub_kelas').append('<h5>' +'hahahah'+ '</h5>');
              $.each(msg, function(i, item) {
                $('.checkbox_sub_kelas').append('<input type="checkbox" value="' + item.id + '">' + item.nama + '</input>');
              });

            },  
            dataType:"json"
        });*/
        $('#checkbox_sub_kelas' + $(this).val()).css('display', 'block');
      }
      else if($(this).prop("checked") == false){
        $('#checkbox_sub_kelas' + $(this).val()).css('display', 'none');
        //$('#checkbox_sub_kelas' + $(this).val()).children().prop('checked', 'true');
      }
    });
  }
</script>
</body>
</html>
