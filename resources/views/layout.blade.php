<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---------Seo--------->
    <meta name="description" content="{{$meta_desc}}">
    <meta name="keywords" content="{{$meta_keywords}}"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <link  rel="canonical" href="{{$url_canonical}}" />
    <meta name="author" content="">
    <link rel="icon" href="{{asset('public/frontend/images/metalogo.png')}}" type="image/png" sizes="16x16">
    
    {{--   <meta property="og:image" content="{{$image_og}}" />  
      <meta property="og:site_name" content="http://localhost/tutorial_youtube/shopbanhanglaravel" />
      <meta property="og:description" content="{{$meta_desc}}" />
      <meta property="og:title" content="{{$meta_title}}" />
      <meta property="og:url" content="{{$url_canonical}}" />
      <meta property="og:type" content="website" /> --}}
    <!--//-------Seo--------->
    <title>{{$meta_title}}</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/lightgallery.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/lightslider.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettify.css')}}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;1,400;1,800&display=swap');
        </style>

   

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{('public/frontend/images/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <header id="header"><!--header-->
        {{-- <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> 0934404954</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> ntphong20it12.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top--> --}}
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <h4 style="font-weight: bold; color:#0F044C; padding-left: 8px"> <i class="fa fa-home" aria-hidden="true"></i>   MAKE MY HOME</h4>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                
                                {{-- <li><a href="{{URL::to('/yeu-thich')}}"><i class="fa fa-star"></i> Y??u th??ch</a></li> --}}
                                <?php
                                   $customer_id = Session::get('customer_id');
                                   $shipping_id = Session::get('shipping_id');
                                   if($customer_id!=NULL && $shipping_id==NULL){ 
                                 ?>
                                  <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-credit-card"></i> THANH TO??N</a></li>
                                
                                <?php
                                }elseif($customer_id!=NULL && $shipping_id!=NULL){
                                ?>
                                <li><a href="{{URL::to('/payment')}}"><i class="fa fa-credit-card"></i> THANH TO??N</a></li>
                                <?php 
                                }else{
                                ?>
                                <li><a href="{{URL::to('/dang-nhap')}}"><i class="fa fa-credit-card"></i> THANH TO??N</a></li>
                                <?php
                                }
                                ?>
                                

                                <li><a href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-cart"></i> GI??? H??NG
                                    <span class="show-cart"></span>

                                        <div class="clearfix"></div>
                                        
                                        <span class="giohang-hover">
                                            
                                        </span>
                                    </a>
                                </li>

                                @php
                                    $customer_id = Session::get('customer_id');
                                    if($customer_id!=NULL){ 
                                    @endphp

                                    <li>
                                        <a href="{{URL::to('history')}}"><i class="fa fa-clock-o"></i>L???CH S??? ????N H??NG</a>
                                    </li>

                                    
                                    @php
                                    }
                                @endphp 

                                <?php
                                $customer_id = Session::get('customer_id');
                                if($customer_id!=NULL){ 
                                    ?>

                                    <li>
                                        <a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-sign-out"></i> ????NG XU???T  </a>

                                       {{--  <img width="15%" src="{{Session::get('customer_picture')}}"> {{Session::get('customer_name')}} --}}
                                    </li>


                                    <?php
                                }else{
                                   ?>
                                   <li><a href="{{URL::to('/dang-nhap')}}"><i class="fa fa-sign-in"></i> ????NG NH???P</a></li>
                                   <?php 
                               }
                               ?>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom" id="navbar"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/trang-chu')}}" class="active">TRANG CH???</a></li>
                                <li class="dropdown"><a href="#">S???N PH???M<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        @foreach($category as $key => $cate)
                                            @if ($cate->category_parent==0)
                                                <li><a href="{{URL::to('/danh-muc/'.$cate->slug_category_product)}}">{{$cate->category_name}}</a></li>

                                                @foreach($category as $key => $cate_sub)
                                                    @if($cate_sub->category_parent==$cate->category_id)
                                                    <ul class="cate_sub">
                                                    <li><a href="{{URL::to('/danh-muc/'.$cate_sub->slug_category_product)}}">{{$cate_sub->category_name}}</a></li>
                                                    </ul>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="#">TIN T???C<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        @foreach($category_post as $key => $danhmucbaiviet)
                                            <li><a href="{{URL::to('/danh-muc-bai-viet/'.$danhmucbaiviet->cate_post_slug)}}">{{$danhmucbaiviet->cate_post_name}}</a></li>
                                        @endforeach
                                    
                                    </ul>
                                </li> 
                                <li><a href="{{URL::to('/gio-hang')}}">
                                    GI??? H??NG
                                    <span class="show-cart"></span>
                                </a>
                                </li>
                                <li><a href="{{URL::to('/lien-he')}}">TH??NG TIN</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <form action="{{URL::to('/tim-kiem')}}" autocomplete="off" method="POST">
                            {{csrf_field()}}
                        <div class="search_box">

                            <input type="text" style="width: 45%;margin-right: 5px" name="keywords_submit" id="keywords" class="keywords" style="box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;" placeholder=""/>
                            <input type="submit" style="width:25%; margin-top:0;color:#fff" name="search_items" class="button" value="T??M KI???M">
                            <div id="search_ajax"></div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
    
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        <style type="text/css">
                            img.img.img-responsive.img-slider {
                                height: 381px;
                                width: 1000px;
                                border-radius:10px;
                            }
                        </style>
                        <div class="carousel-inner">
                        @php 
                            $i = 0;
                        @endphp
                        @foreach($slider as $key => $slide)
                            @php 
                                $i++;
                            @endphp
                            <div class="item {{$i==1 ? 'active' : '' }}">
                                
                                <div class="col-sm-12">
                                    <img alt="{{$slide->slider_desc}}" src="{{asset('public/uploads/slider/'.$slide->slider_image)}}" height="300" width="100%" class="img img-responsive img-slider">
                                
                                </div>
                            </div>
                        @endforeach  
                            
                            
                        </div>
                        
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh m???c s???n ph???m</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->

                            @foreach($category as $key => $cate)
                            
                            
                            <div class="panel panel-default">
  
                                @if($cate->category_parent==0)   
                                <div class="panel-heading">
                                    <h3 class="panel-title" style="color:#0F044C;font-weight: bold">
  
                                        <a data-toggle="collapse" data-parent="#accordian" href="#{{$cate->slug_category_product}}">
                                            <span class="badge pull-right"><i class="fa fa-plus" style="color:#0F044C"></i></span>
                                            {{$cate->category_name}}
                                        </a>

                                    </h3>
                                </div>
                                <div id="{{$cate->slug_category_product}}" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            @foreach($category as $key => $cate_sub)
                                                @if($cate_sub->category_parent==$cate->category_id)
                                                    <li style="color:#0F044C;font-weight: bold"><a href="{{URL::to('/danh-muc/'.$cate_sub->slug_category_product)}}">{{$cate_sub->category_name}}</a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            </div>

                        @endforeach
                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>Th????ng hi???u </h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach($brand as $key => $brand)
                                    <li style="color:#0F044C;font-weight: bold"><a href="{{URL::to('/thuong-hieu/'.$brand->brand_slug)}}"> <span class="pull-right"></span>{{$brand->brand_name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                     
                    
                    </div>
                </div>
                <div class="col-sm-9 padding-right">

                    @yield('content')
                    
                </div>
            </div>
        </div>
    </section>
    
    <footer id="footer"><!--Footer-->
        
        
        <div class="footer-widget" style="color:#0F044C">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="companyinfo">
                            <h2><span>M</span>ake my Home</h2>
                            <p>T?? ??i???m th??? gi???i b??n trong ng??i nh?? c???a b???n</p>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget" style="color:#0F044C">
                            <h2>D???ch v???</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Ch??nh s??ch ?????i tr???</a></li>
                                <li><a href="#">??i???u kho???n d???ch v???</a></li>
                                <li><a href="#">B???o m???t</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-widget" style="color:#0F044C">
                            <h2>Th??ng tin</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">?????a ch??? 1:Th??nh ph??? ?????ng H???i, Qu???ng B??nh </a></li>
                                <li><a href="#">?????a ch??? 2:470 ???????ng Tr???n ?????i Ngh??a, Ho?? H???i, Ng?? H??nh S??n,???? N???ng </a></li>
                                <li><a href="#">S??? ??i???n tho???i: 09433049534</a></li>
                                <li><a href="#">Fanpage: Make My Home - Kinh doanh n???i th???t t???i gi???n</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget" style="color:#0F044C">
                            <h2>Li??n h??? v???i ch??ng t??i</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Vui l??ng nh???p email" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>C???p nh???t nh???ng th??ng b??o <br />m???i nh???t c???a ch??ng t??i...</p>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        
    </footer><!--/Footer-->
    

  
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>

    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{asset('public/frontend/js/simple.money.format.js')}}"></script>
    
    
    
    
    
    {{-- gallery ???nh chi ti???t s???n ph???m --}}
    <script src="{{asset('public/frontend/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/lightslider.js')}}"></script>
    <script src="{{asset('public/frontend/js/prettify.js')}}"></script>


    <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
   {{--  <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
    <script>paypal.Buttons().render('body');</script> --}}
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=2339123679735877&autoLogAppEvents=1"></script>




<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "101122452371970");
  chatbox.setAttribute("attribution", "biz_inbox");

  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v12.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>


{{-- Tabs s???n ph???m trang ch??? --}}
<script type="text/javascript">
    $(document).ready(function(){

            var cate_id = $('.tabs_pro').data('id');
            var _token = $('input[name="_token"]').val();
            //alert(cate_id);
            $.ajax({
                url:'{{url('/product-tabs')}}',
                method:"POST",
                data:{cate_id:cate_id,_token:_token},
                success:function(data){
                    $('#tabs_product').html(data);
                }
            }); 
            
        $('.tabs_pro').click(function(){
            var cate_id = $(this).data('id');
            // alert(cate_id);
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:'{{url('/product-tabs')}}',
                method:"POST",  
                data:{cate_id:cate_id,_token:_token},

                success:function(data){
                    $('#tabs_product').html(data);
                }
            }); 
        });
    });
</script>




{{-- Autocomlplete T??m ki???m --}}
<script type="text/javascript">
    $('#keywords').keyup(function(){
        var query = $(this).val();

          if(query != '')
            {
             var _token = $('input[name="_token"]').val();

             $.ajax({
              url:"{{url('/autocomplete-ajax')}}",
              method:"POST",
              data:{query:query, _token:_token},
              success:function(data){
               $('#search_ajax').fadeIn();  
                $('#search_ajax').html(data);
              }
             });

            }else{

                $('#search_ajax').fadeOut();  
            }
    });

    $(document).on('click', '.li_search_ajax', function(){  
        $('#keywords').val($(this).text());  
        $('#search_ajax').fadeOut();  
    }); 
</script>



    {{-- Gallery ???nh chi ti???t s???n ph???m --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#imageGallery').lightSlider({
   
            gallery:true,
            item:1,
               loop:true,
               thumbItem:3,
               slideMargin:0,
               enableDrag: false,
               currentPagerPosition:'left',
               onSliderLoad: function(el) {
                   el.lightGallery({
                       selector: '#imageGallery .lslide'
                   });
            }

        });  
        });
    </script>
    <script type="text/javascript">

        $(document).ready(function(){
            $('.send_order').click(function(){
                swal({
                    title: "X??c nh???n ????n h??ng",
                    text: "????n h??ng s??? kh??ng ???????c ho??n tr??? khi ?????t,b???n c?? mu???n ?????t kh??ng?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "C???m ??n, Mua h??ng",

                    cancelButtonText: "????ng,ch??a mua",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                     if (isConfirm) {
                        var shipping_email = $('.shipping_email').val();
                        var shipping_name = $('.shipping_name').val();
                        var shipping_address = $('.shipping_address').val();
                        var shipping_phone = $('.shipping_phone').val();
                        var shipping_notes = $('.shipping_notes').val();
                        var shipping_method = $('.payment_select').val();
                        var order_fee = $('.order_fee').val();
                        var order_coupon = $('.order_coupon').val();
                        var _token = $('input[name="_token"]').val();

                        $.ajax({
                            url: '{{url('/confirm-order')}}',
                            method: 'POST',
                            data:{shipping_email:shipping_email,shipping_name:shipping_name,shipping_address:shipping_address,shipping_phone:shipping_phone,shipping_notes:shipping_notes,_token:_token,order_fee:order_fee,order_coupon:order_coupon,shipping_method:shipping_method},
                            success:function(){
                               swal("????n h??ng", "????n h??ng c???a b???n ???? ???????c g???i th??nh c??ng", "success");
                            }
                        });

                        window.setTimeout(function(){ 
                            location.reload();
                        } ,3000);

                      } else {
                        swal("????ng", "????n h??ng ch??a ???????c g???i, l??m ??n ho??n t???t ????n h??ng", "error");

                      }
              
                });

               
            });
        });
    

    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.add-to-cart').click(function(){

                var id = $(this).data('id_product');
                // alert(id);
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_quantity = $('.cart_product_quantity_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                if(parseInt(cart_product_qty)>parseInt(cart_product_quantity)){
                    alert('L??m ??n ?????t nh??? h??n ' + cart_product_quantity);
                }else{

                    $.ajax({
                        url: '{{url('/add-cart-ajax')}}',
                        method: 'POST',
                        data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token,cart_product_quantity:cart_product_quantity},
                        success:function(){

                            swal({
                                    title: "???? th??m s???n ph???m v??o gi??? h??ng",
                                    text: "B???n c?? th??? mua h??ng ti???p ho???c t???i gi??? h??ng ????? ti???n h??nh thanh to??n",
                                    showCancelButton: true,
                                    cancelButtonText: "Xem ti???p",
                                    confirmButtonClass: "btn-success",
                                    confirmButtonText: "??i ?????n gi??? h??ng",
                                    closeOnConfirm: false
                                },
                                function() {
                                    window.location.href = "{{url('/gio-hang')}}";
                                });

                        }

                    });
                }

                
            });
            
        });
    </script>
    <script>
        function Addtocart($product_id){
            var id = $product_id;
                // alert(id);
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_quantity = $('.cart_product_quantity_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                if(parseInt(cart_product_qty)>parseInt(cart_product_quantity)){
                    alert('L??m ??n ?????t nh??? h??n ' + cart_product_quantity);
                }else{

                    $.ajax({
                        url: '{{url('/add-cart-ajax')}}',
                        method: 'POST',
                        data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token,cart_product_quantity:cart_product_quantity},
                        success:function(){
                            swal({
                                    title: "???? th??m s???n ph???m v??o gi??? h??ng",
                                    text: "B???n c?? th??? mua h??ng ti???p ho???c t???i gi??? h??ng ????? ti???n h??nh thanh to??n",
                                    showCancelButton: true,
                                    cancelButtonText: "Xem ti???p",
                                    confirmButtonClass: "btn-success",
                                    confirmButtonText: "??i ?????n gi??? h??ng",
                                    closeOnConfirm: false
                                },
                                function() {
                                    window.location.href = "{{url('/gio-hang')}}";
                                });
                        }
                    });
                }
        }
    </script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('.choose').on('change',function(){
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
           
            if(action=='city'){
                result = 'province';
            }else{
                result = 'wards';
            }
            $.ajax({
                url : '{{url('/select-delivery-home')}}',
                method: 'POST',
                data:{action:action,ma_id:ma_id,_token:_token},
                success:function(data){
                   $('#'+result).html(data);     
                }
            });
        });
        });
          
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.calculate_delivery').click(function(){
                var matp = $('.city').val();
                var maqh = $('.province').val();
                var xaid = $('.wards').val();
                var _token = $('input[name="_token"]').val();
                if(matp == '' && maqh =='' && xaid ==''){
                    alert('L??m ??n ch???n ????? t??nh ph?? v???n chuy???n');
                }else{
                    $.ajax({
                    url : '{{url('/calculate-fee')}}',
                    method: 'POST',
                    data:{matp:matp,maqh:maqh,xaid:xaid,_token:_token},
                    success:function(){
                       location.reload(); 
                    }
                    });
                } 
        });
    });
    </script>


    {{-- B??nh lu???n trang chi ti???t s???n ph???m --}}
    <script type="text/javascript">
        $(document).ready(function(){
            load_comment();
            
            function load_comment(){
                var product_id = $('.comment_product_id').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{url('/load-comment')}}",
                    method:"POST",
                    data:{product_id:product_id, _token:_token},
                    success:function(data){
                    
                    $('#comment_show').html(data);
                    }
                });
            }
            $('.send-comment').click(function(){
                var product_id = $('.comment_product_id').val();
                var comment_name = $('.comment_name').val();
                var comment_content = $('.comment_content').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{url('/send-comment')}}",
                    method:"POST",
                    data:{product_id:product_id,comment_name:comment_name,comment_content:comment_content, _token:_token},
                    success:function(data){
                    
                    $('#notify_comment').html('<span class="text text-success">Th??m b??nh lu???n th??nh c??ng, b??nh lu???n ??ang ch??? duy???t</span>');
                    load_comment();
                    $('#notify_comment').fadeOut(9000);
                    $('.comment_name').val('');
                    $('.comment_content').val('');
                    }
                });
            });
        });
    </script>


    {{-- S???p x???p theo gi??,a-z --}}
    <script type="text/javascript">
        $(document).ready(function(){

            $('#sort').on('change',function(){

                var url = $(this).val(); 
                // alert(url);
                    if (url) { 
                        window.location = url;
                    }
                return false;
            });

        }); 
</script>


{{-- L???c gi?? s???n ph???m --}}
<script type="text/javascript">
    $(document).ready(function(){

       $( "#slider-range" ).slider({
          orientation: "horizontal",
          range: true,

          min:{{$min_price_range}},
          max:{{$max_price_range}},

          steps:10000,
          values: [ {{$min_price}}, {{$max_price}} ],
         
          slide: function( event, ui ) {
            $( "#amount_start" ).val(ui.values[ 0 ]).simpleMoneyFormat();
            $( "#amount_end" ).val(ui.values[ 1 ]).simpleMoneyFormat();


            $( "#start_price" ).val(ui.values[ 0 ]);
            $( "#end_price" ).val(ui.values[ 1 ]);

          }

        });

        $( "#amount_start" ).val($( "#slider-range" ).slider("values",0)).simpleMoneyFormat();
        $( "#amount_end" ).val($( "#slider-range" ).slider("values",1)).simpleMoneyFormat();

    }); 
</script>

<script type="text/javascript">
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {
        sticky_navbar()
    };

    // Get the navbar
    var navbar = document.getElementById("navbar");

    // Get the offset position of the navbar
    var sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function sticky_navbar() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
</script>


<script type="text/javascript">
 
    
       
    hover_cart();
    show_cart();

    function hover_cart(){
         $.ajax({
                url:'{{url('/hover-cart')}}',
                method:"GET",
                success:function(data){
                    $('.giohang-hover').html(data);
                   
                }

            }); 
    }
   
        //show cart quantity
        function show_cart(){
              $.ajax({
                url:'{{url('/show-cart')}}',
                method:"GET",
                success:function(data){
                    $('.show-cart').html(data);
                   
                }

            }); 
        }

    function Deletecart(id){
        var id = id;
        // alert(id);
          $.ajax({
                url:'{{url('/remove-item')}}',
                method:"GET",
                data:{id:id},
                success:function(data){
                    alert('X??a s???n ph???m trong gi??? h??ng th??nh c??ng');

                    document.getElementsByClassName("home_cart_"+id)[0].style.display = "inline";
                    document.getElementsByClassName("rm_home_cart_"+id)[0].style.display = "none";

                    hover_cart();
                    show_cart();
                    cart_session();

                }

            }); 
    }
    $(document).ready(function(){
        
        $('.add-to-cart').click(function(){

            var id = $(this).data('id_product');
            // alert(id);
            var cart_product_id = $('.cart_product_id_' + id).val();
            var cart_product_name = $('.cart_product_name_' + id).val();
            var cart_product_image = $('.cart_product_image_' + id).val();
            var cart_product_quantity = $('.cart_product_quantity_' + id).val();
            var cart_product_price = $('.cart_product_price_' + id).val();
            var cart_product_qty = $('.cart_product_qty_' + id).val();
            var _token = $('input[name="_token"]').val();

            if(parseInt(cart_product_qty)>parseInt(cart_product_quantity)){
                alert('L??m ??n ?????t nh??? h??n ' + cart_product_quantity);
            }else{

                $.ajax({
                    url: '{{url('/add-cart-ajax')}}',
                    method: 'POST',
                    data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token,cart_product_quantity:cart_product_quantity},
                    success:function(){

                        swal({
                                title: "???? th??m s???n ph???m v??o gi??? h??ng",
                                text: "B???n c?? th??? mua h??ng ti???p ho???c t???i gi??? h??ng ????? ti???n h??nh thanh to??n",
                                showCancelButton: true,
                                cancelButtonText: "Xem ti???p",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "??i ?????n gi??? h??ng",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "{{url('/gio-hang')}}";
                            });

                      show_cart();
                      hover_cart();
                      cart_session();
                    }

                });
            }

            
        });

    });
</script>
</body>
</html>