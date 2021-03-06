<!doctype html>
<!--[if !IE]><!-->
<html lang="vi">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta http-equiv="content-language" content="vi" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="robots" content="noodp,index,follow" />
<meta name='revisit-after' content='1 days' />
<meta name="keywords" content="">
<title>DKT Store</title>
<link href='../Assets/Frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='../Assets/Frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='../Assets/Frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='../Assets/Frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='../Assets/Frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
<script src='../Assets/Frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361' type='text/javascript'></script>
<script src='../Assets/Frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361' type='text/javascript'></script>
<script src='../Assets/Frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
<link href='../Assets/Frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361' rel='stylesheet' type='text/css' />
</head>
<body class="index">
<!-- header -->
<?php 
    include "Views/HeaderView.php";
 ?>
<!-- end header -->
<div class="content">
  <div class="container">
    <h1 style="display:none;">DKT Store</h1>
    <div class="row">
      <div class="col-xs-12 col-md-3"> 
        <!-- end support -->
        <div class="online_support block">
          <div class="new_title">
            <h2>H??? tr??? tr???c tuy???n</h2>
          </div>
          <div class="block-content">
            <div class="sp_1">
              <p>T?? v???n b??n h??ng 1</p>
              <p>Mrs. Dung: (04) 3786 8904</p>
            </div>
            <div class="sp_1">
              <p>T?? v???n b??n h??ng 2</p>
              <p>Mr. Tu???n: (04) 3786 8904</p>
            </div>
            <div class="sp_1">
              <p>Email li??n h???</p>
              <p>support@mail.com</p>
            </div>
          </div>
        </div>
        <!-- end support online --> 
        <!-- box search -->
        <div class="panel panel-default" style="margin-top:15px;">
          <div class="panel-heading"> T??m theo m???c gi?? </div>
          <div class="panel-body">
            <ul class="list-group" style="border:0px;">
              <li class="list-group-item" style="border:0px;">Gi?? t??? &nbsp;&nbsp;
                <input type="number" min="0" value="0" id="fromPrice" class="form-control" />
              </li>
              <li class="list-group-item" style="border:0px;">?????n &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
              </li>
              <li class="list-group-item" style="border:0px; text-align:center">
                <input type="button" class="btn btn-warning" value="T??m m???c gi??" onclick="location.href = 'index.php?controller=products&action=searchPrice&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
              </li>
            </ul>
          </div>
        </div>
        <!-- end box search --> 
        <!-- box search -->
        <div class="panel panel-default" style="margin-top:15px;">
          <div class="panel-heading"> T??m theo kho???ng gi?? </div>
          <div class="panel-body">
            <ul class="list-group" style="border:0px;">
              <li class="list-group-item" style="border:0px;">
                <input type="radio" checked id="price-1tr-5tr" name="findGroupPrice" value="1tr-5tr" />
                &nbsp;&nbsp;&nbsp; Gi?? t??? 1 tri???u - d?????i 5 tri???u </li>
              <li class="list-group-item" style="border:0px;">
                <input type="radio" id="price-5tr-10tr" name="findGroupPrice" value="5tr-10tr" />
                &nbsp;&nbsp;&nbsp; Gi?? t??? 5 tri???u - d?????i 10 tri???u </li>
              <li class="list-group-item" style="border:0px;">
                <input type="radio" id="price-10tr-15tr" name="findGroupPrice" value="10tr-15tr" />
                &nbsp;&nbsp;&nbsp; Gi?? t??? 10 tri???u - d?????i 15 tri???u </li>
              <li class="list-group-item" style="border:0px;">
                <input type="radio" id="price-15tr-20tr" name="findGroupPrice" value="15tr-20tr" />
                &nbsp;&nbsp;&nbsp; Gi?? t??? 15 tri???u - d?????i 20 tri???u </li>
              <li class="list-group-item" style="border:0px;">
                <input type="radio" id="price-20tr-25tr" name="findGroupPrice" value="20tr-25tr" />
                &nbsp;&nbsp;&nbsp; Gi?? t??? 20 tri???u - d?????i 25 tri???u </li>
              <li class="list-group-item" style="border:0px;">
                <input type="radio" id="price-25tr-30tr" name="findGroupPrice" value="25tr-30tr" />
                &nbsp;&nbsp;&nbsp; Gi?? t??? 25 tri???u - d?????i 30 tri???u </li>
              <li class="list-group-item" style="border:0px; text-align:center">
                <input type="button" class="btn btn-warning" value="L???c theo gi??" onclick="searchPrice();" />
              </li>
            </ul>
          </div>
        </div>
        <script type="text/javascript">
          function searchPrice(){
              if(document.getElementById("price-1tr-5tr").checked == true)
                location.href='index.php?controller=products&action=searchPrice&fromPrice=1000000&toPrice=5000000';
              if(document.getElementById("price-5tr-10tr").checked == true)
                location.href='index.php?controller=products&action=searchPrice&fromPrice=5000000&toPrice=10000000';
              if(document.getElementById("price-10tr-15tr").checked == true)
                location.href='index.php?controller=products&action=searchPrice&fromPrice=10000000&toPrice=15000000';
              if(document.getElementById("price-15tr-20tr").checked == true)
                location.href='index.php?controller=products&action=searchPrice&fromPrice=15000000&toPrice=20000000';
              if(document.getElementById("price-20tr-25tr").checked == true)
                location.href='index.php?controller=products&action=searchPrice&fromPrice=20000000&toPrice=25000000';
              if(document.getElementById("price-25tr-30tr").checked == true)
                location.href='index.php?controller=products&action=searchPrice&fromPrice=25000000&toPrice=30000000';
          }
        </script>
        <!-- end box search --> 
        
        <?php 
          //hot news
          include "Controllers/HotNewsController.php";
          $obj = new HotNewsController();
          $obj->read();
         ?> 
        <!-- adv --> 
        <img src="../Assets/Frontend/images/banner03d5.jpg"> 
        <!-- end adv --> 
        
      </div>
      <div class="col-xs-12 col-md-9"> 
        <!-- main -->
        
        <?php 
            //load dong MVC
            if(file_exists($fileController)){
                include $fileController;
                if(class_exists($classController)){
                    $obj= new $classController();
                    $obj->$action();
                }
            }
         ?>
        
        <!-- end main --> 
      </div>
    </div>
    <!-- adv -->
    <div class="widebanner"> <a href="#"><img src="../Assets/Frontend/100/047/633/themes/517833/assets/widebanner221b.jpg?1481775169361" alt="#" class="img-responsive"></a> </div>
    <!-- end adv --> 
    
  </div>
</div>
<div class="privacy">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="../Assets/Frontend/100/047/633/themes/517833/assets/ico-service-1221b.png?1481775169361" alt="Giao h??ng mi???n ph??" title="Giao h??ng mi???n ph??" class="img-responsive"> </div>
        <div class="info">
          <h3>Giao h??ng mi???n ph??</h3>
          <p>Mi???n ph?? giao h??ng trong n???i th??nh H?? N???i</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="../Assets/Frontend/100/047/633/themes/517833/assets/ico-service-2221b.png?1481775169361" class="img-responsive" alt="Khuy???n m???i" title="Khuy???n m???i"> </div>
        <div class="info">
          <h3>Khuy???n m???i</h3>
          <p>Khuy???n m???i s???n ph???m n???u ????n h??ng tr??n 1.000.000??</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="../Assets/Frontend/100/047/633/themes/517833/assets/ico-service-3221b.png?1481775169361" class="img-responsive" alt="Ho??n tr??? l???i ti???n" title="Ho??n tr??? l???i ti???n"> </div>
        <div class="info">
          <h3>Ho??n tr??? l???i ti???n</h3>
          <p>N???u s???n ph???m kh??ng ?????m b???o ch???t l?????ng ho???c s???n ph???m kh??ng ????ng mi??u t???</p>
        </div>
      </div>
    </div>
  </div>
</div>
<footer id="footer">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-3">
          <h3>V??? ch??ng t??i</h3>
          <ul class="list-unstyled">
            <li><a href="index.html">Trang ch???</a></li>
            <li><a href="gioi-thieu">Gi???i thi???u</a></li>
            <li><a href="tin-tuc">Tin t???c</a></li>
            <li><a href="gioi-thieu">Li??n h???</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>H?????ng d???n</h3>
          <ul class="list-unstyled">
            <li><a href="huo-ng-da-n-mua-ha-ng">H?????ng d???n mua h??ng</a></li>
            <li><a href="huong-dan">Giao nh???n v?? thanh to??n</a></li>
            <li><a href="do-i-tra-va-ba-o-ha-nh">?????i tr??? v?? b???o h??nh</a></li>
            <li><a href="account/register">????ng k?? th??nh vi??n</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>Ch??nh s??ch</h3>
          <ul class="list-unstyled">
            <li><a href="chinh-sach">Ch??nh s??ch thanh to??n</a></li>
            <li><a href="chi-nh-sa-ch-va-n-chuye-n">Ch??nh s??ch v???n chuy???n</a></li>
            <li><a href="chi-nh-sa-ch-do-i-tra">Ch??nh s??ch ?????i tr???</a></li>
            <li><a href="chi-nh-sa-ch-ba-o-ha-nh">Ch??nh s??ch b???o h??nh</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>??i???u kho???n</h3>
          <ul class="list-unstyled">
            <li><a href="dieu-khoan">??i???u kho???n s??? d???ng</a></li>
            <li><a href="die-u-khoa-n-giao-di-ch">??i???u kho???n giao d???ch</a></li>
            <li><a href="di-ch-vu-tie-n-i-ch">D???ch v??? ti???n ??ch</a></li>
            <li><a href="quye-n-so-hu-u-tri-tue">Quy???n s??? h???u tr?? tu???</a></li>
          </ul>
        </div>
      </div>
      <div class="payments-method"> <img src="../Assets/Frontend/100/047/633/themes/517833/assets/payments-method221b.png?1481775169361" alt="Ph????ng th???c thanh to??n" title="Ph????ng th???c thanh to??n"> </div>
    </div>
  </div>
  <div class="bottom-footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-5"> ?? B???n quy???n DKT Store</div>
        <div class="col-xs-12 col-sm-7">
          <ul class="list-unstyled">
            <li><a href="#">Trang ch???</a></li>
            <li><a href="#">Gi???i thi???u</a></li>
            <li><a href="#">Tin t???c</a></li>
            <li><a href="#">Li??n h???</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src='../Assets/Frontend/100/047/633/themes/517833/assets/owl.carousel.min221b.js?1481775169361' type='text/javascript'></script> 
<script src='../Assets/Frontend/100/047/633/themes/517833/assets/responsive-menu221b.js?1481775169361' type='text/javascript'></script> 
<script src='../Assets/Frontend/100/047/633/themes/517833/assets/elevate-zoom221b.js?1481775169361' type='text/javascript'></script> 
<script src='../Assets/Frontend/100/047/633/themes/517833/assets/main221b.js?1481775169361' type='text/javascript'></script> 
<script src='../Assets/Frontend/100/047/633/themes/517833/assets/ajax-cart221b.js?1481775169361' type='text/javascript'></script>
</body>
</html>