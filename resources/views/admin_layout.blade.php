<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{csrf_token()}}">
  <title>Mobifone Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('public/backend/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/backend/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('public/backend/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('public/backend/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('public/backend/images/favicon.png')}}" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="{{URL('/dashboard')}}"><img src="public/backend/images/logo.png" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="public/backend/images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-text mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="public/backend/images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown mr-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="public/backend/images/faces/face5.jpg" alt="profile"/>
              <span class="nav-profile-name"> <?php
                      $name = Session::get('admin_name');
                        if ($name){
                                    echo $name;
                                  }
                      ?>   </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="{{URL('/logout')}}">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link"  href="{{URL('/dashboard')}}">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sli" aria-expanded="false" aria-controls="sli">
              <i class="mdi mdi mdi-view-list menu-icon"></i>
              <span class="menu-title">Slide</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sli">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('/manage-slider')}}">Li???t k??</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL::to('/add-slider')}}">Th??m</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#pro" aria-expanded="false" aria-controls="pro">
              <i class="mdi mdi mdi-view-list menu-icon"></i>
              <span class="menu-title">S???n ph???m</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="pro">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL('/all-product')}}">Li???t k??</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL('/add-product')}}">Th??m</a></li>
              </ul>
            </div>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#cate" aria-expanded="false" aria-controls="cate">
              <i class="mdi mdi-clipboard-text  menu-icon"></i>
              <span class="menu-title">Danh m???c</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="cate">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL('/all-category')}}">Li???t k??</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL('/add-category')}}">Th??m</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#bra" aria-expanded="false" aria-controls="bra">
              <i class="mdi mdi-clipboard-text menu-icon"></i>
              <span class="menu-title">Th????ng hi???u</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="bra">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL('/all-brand')}}">Li???t k??</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL('/add-brand')}}">Th??m</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#data" aria-expanded="false" aria-controls="data">
              <i class="mdi mdi mdi-cellphone menu-icon"></i>
              <span class="menu-title">G??i c?????c data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="data">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL('/all-data-service')}}">Li???t k??</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL('/add-data-service')}}">Th??m</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#call" aria-expanded="false" aria-controls="call">
              <i class="mdi mdi mdi-cellphone menu-icon"></i>
              <span class="menu-title">G??i c?????c tho???i</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="call">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL('/all-call-service')}}">Li???t k??</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL('/add-call-service')}}">Th??m</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#serv" aria-expanded="false" aria-controls="bra">
              <i class="mdi mdi mdi-cellphone menu-icon"></i>
              <span class="menu-title">D???ch v??? kh??c</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="serv">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL('/all-serv')}}">Li???t k??</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL('/add-serv')}}">Th??m</a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#cart" aria-expanded="false" aria-controls="cart">
              <i class="mdi mdi mdi-cart menu-icon"></i>
              <span class="menu-title">????n h??ng</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="cart">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL('/manage-order')}}">Li???t k??</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#a" aria-expanded="false" aria-controls="a">
              <i class="mdi mdi mdi-bank menu-icon"></i>
              <span class="menu-title">?????u gi??</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="a">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL('/all-daugia')}}">Li???t k??</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL('/add-daugia')}}">Th??m</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL('/list-daugia')}}">T??nh tr???ng ?????u gi??</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tt" aria-expanded="false" aria-controls="tt">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Tin T???c</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tt">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL('/all-news')}}">Li???t k??</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{URL('/add-news')}}">Th??m</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#cmt" aria-expanded="false" aria-controls="cmt">
              <i class="mdi mdi-comment-account  menu-icon"></i>
              <span class="menu-title">B??nh lu???n</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="cmt">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{URL('/all-comment')}}">Li???t k?? b??nh lu???n</a></li>
                
              </ul>
            </div>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
         <div class="main-panel">
      @yield('admin_content')
    </div>

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('public/backend/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('public/backend/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('public/backend/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('public/backend/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('public/backend/js/off-canvas.js')}}"></script>
  <script src="{{asset('public/backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('public/backend/js/template.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('public/backend/js/dashboard.js')}}"></script>
  <script src="{{asset('public/backend/js/data-table.js')}}"></script>
  <script src="{{asset('public/backend/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('public/backend/js/dataTables.bootstrap4.js')}}"></script>
  <!-- End custom js for this page-->

  <script src="{{asset('public/backend/js/jquery.cookie.js')}}" type="text/javascript"></script>


  <script src="{{asset('public\backend\ckeditor\ckeditor.js')}}" type="text/javascript"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script  type="text/javascript">
       // Replace the <textarea id="editor1"> with a CKEditor
       // instance, using default configuration.
  
        CKEDITOR.replace('ckeditor');
        CKEDITOR.replace('ckeditor1');
        CKEDITOR.replace('ckeditor2');
        CKEDITOR.replace('ckeditor3');
        CKEDITOR.replace('ckeditor4');

      CKEDITOR.replace('ckeditor5');
      CKEDITOR.replace('ckeditor6');      
   CKEDITOR.replace('ckeditor7'); 
     
    
</script>
<script type="text/javascript">
    $('.comment_duyet_btn').click(function(){
        var comment_status = $(this).data('comment_status');

        var comment_id = $(this).data('comment_id');
        var comment_product_id = $(this).attr('id');
        if(comment_status==0){
            var alert = 'Thay ?????i th??nh duy???t th??nh c??ng';
        }else{
            var alert = 'Thay ?????i th??nh kh??ng duy???t th??nh c??ng';
        }
          $.ajax({
                url:"{{url('/allow-comment')}}",
                method:"POST",

                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{comment_status:comment_status,comment_id:comment_id,comment_product_id:comment_product_id},
                success:function(data){
                    location.reload();
                   $('#notify_comment').html('<span class="text text-alert">'+alert+'</span>');

                }
            });


    });
    $('.btn-reply-comment').click(function(){
        var comment_id = $(this).data('comment_id');

        var comment = $('.reply_comment_'+comment_id).val();

        

        var comment_product_id = $(this).data('product_id');

        
        // alert(comment);
        // alert(comment_id);
        // alert(comment_product_id);
        
          $.ajax({
                url:"{{url('/reply-comment')}}",
                method:"POST",

                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{comment:comment,comment_id:comment_id,comment_product_id:comment_product_id},
                success:function(data){
                    $('.reply_comment_'+comment_id).val('');
                   $('#notify_comment').html('<span class="text text-alert">Tr??? l???i b??nh lu???n th??nh c??ng</span>');

                }
            });


    });
</script>
<!-- Xu li don hang -->
<script type="text/javascript">
    $('.order_details').change(function(){
        var order_status = $(this).val();
        var order_id = $(this).children(":selected").attr("id");
        var _token = $('input[name="_token"]').val();

        //lay ra so luong
        quantity = [];
        $("input[name='product_sales_quantity']").each(function(){
            quantity.push($(this).val());
        });
        //lay ra product id
        order_product_id = [];
        $("input[name='order_product_id']").each(function(){
            order_product_id.push($(this).val());
        });
        j = 0;
        for(i=0;i<order_product_id.length;i++){
            //so luong khach dat
            var order_qty = $('.order_qty_' + order_product_id[i]).val();
            //so luong ton kho
            var order_qty_storage = $('.order_qty_storage_' + order_product_id[i]).val();

            if(parseInt(order_qty)>parseInt(order_qty_storage)){
                j = j + 1;
                if(j==1){
                    alert('S??? l?????ng b??n trong kho kh??ng ?????');
                }
                $('.color_qty_'+order_product_id[i]).css('background','#000');
            }
        }
        
        if(j==0){
          
                $.ajax({
                        url : '{{url('/update-order-qty')}}',
                            method: 'POST',
                            data:{_token:_token, order_status:order_status ,order_id:order_id ,quantity:quantity, order_product_id:order_product_id},
                            success:function(data){
                                alert('Thay ?????i t??nh tr???ng ????n h??ng th??nh c??ng');
                                location.reload();
                            }
                });
            
        }

    });
</script>
<!-- Xu li don hang -->
<script type="text/javascript">
   
  $( function() {
    $( "#date_start" ).datepicker({
        prevText:"Th??ng tr?????c",
        nextText:"Th??ng sau",
        dateFormat:"dd/mm/yy",
        dayNamesMin: [ "Th??? 2", "Th??? 3", "Th??? 4", "Th??? 5", "Th??? 6", "Th??? 7", "Ch??? nh???t" ],
        duration: "slow"
    });
    $( "#date_end" ).datepicker({
        prevText:"Th??ng tr?????c",
        nextText:"Th??ng sau",
        dateFormat:"dd/mm/yy",
        dayNamesMin: [ "Th??? 2", "Th??? 3", "Th??? 4", "Th??? 5", "Th??? 6", "Th??? 7", "Ch??? nh???t" ],
        duration: "slow"
    });
  } );
 
</script>
</body>

</html>

