@extends('admin_layout')
@section('admin_content')


      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="">Thêm tin tức</h4>
                  
                </div>
                 <?php
                             $message = Session::get('message');
                            if ($message){
                             echo '<span class="text-alert;color:red;">',$message.'</span>';
                                Session::put('message',null);
                                }
                                 ?>
                <div class="card-body">
                 
                  <form action="{{URL::to('save-news')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tiêu đề </label>
                          <input type="text" name="news_name" class="form-control" id="exampleInputEmail1">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form" style="padding-bottom: 10px">
                          <label for="exampleInputEmail1">Hình ảnh</label>
                              <input type="file" class="form-control" name="news_images">
                         
                        </div>
                      </div>
                      
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tom tat tin tuc</label>
                          <textarea rows="8"  name="news_desc"  class="form-control" id="ckeditor2" > </textarea>
                        </div>
                      </div>
                   
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Chi tiet tin tuc</label>
                          <textarea rows="8"  name="news_content"  class="form-control" id="ckeditor1" > </textarea>
                        </div>
                      </div>
                   </div>
                    <div class="row">
                      <div class="col-md-2">
                        <label for="exampleInputPassword1">Trạng thái</label>
                        <br>
                                    <select  style="height: 30px ;width: 100px ; padding-left: 10px" name="news_status" input-sm m-bot15> 
                                        <option value="0">Hiện</option>
                                        <option value="1">Ẩn</option>
                                    </select>

                   </div>
                   </div>
                    <button type="submit" class="btn btn-primary pull-right" name="save-news">Thêm tin tức</button>
                    <div class="clearfix"></div>
                  </form>

                </div>
              </div>
            </div>
            <div class="col-md-4">
              {{-- <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="javascript:;" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-primary btn-block">Free Download</a>
        </li>
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
        <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>
  @endsection