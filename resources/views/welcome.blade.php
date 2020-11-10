<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/product.css')}}">

</head>
<body>

  <div class="welcome-container">
    <div class="leftside-container">
      <div class="side-content">
         <div class="side-btn">عن الشركة</div>
         <div class="side-btn"><a href="{{route('products')}}">منتجاتنا</a></div>
         <div class="side-btn">الأخبار</div>
         <div class="side-btn">المتجر</div>
         <div class="side-btn">اتصل بنا</div>
         <div class="side-btn"><a href="{{route('product-details')}}">منتجاتنا</a></div>
      </div>
      <img class="img-nav" src="{{asset('img/anjouan_leftside.svg')}}" alt="">
    </div>
    <div class="rightside-container">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('img/show/s1.png')}}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/show/s2.png')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/show/s3.png')}}" alt="Third slide">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="news-section">
    <div class="text-divider"><h2 class="h1">آخر أخبارنا</h2></div>
    <div class="container">
      <div class="row txt-md-center">
        <div class="col-lg-4 col-md-6">
          <div class="news">
            <img src="{{asset('img/news/n1.png')}}" alt="">
            <h4>إنطلاقة جديدة – المنطقة الشرقية</h4>
            <p>منتجاتنا متاحة الآن في الدمام, الخبر, الإحساء والجبيل.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="news">
            <img src="{{asset('img/news/n2.png')}}" alt="">
            <h4>إنطلاقة جديدة في كارفور</h4>
            <p>منتجاتنا متاحة الآن في أسواق كارفور بالمنطقة الوسطى والشرقية.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="news">
            <img src="{{asset('img/news/n3.png')}}" alt="">
            <h4>جديد – منتجاتنا المجمدة</h4>
            <p>نفخر بأن نقدم مجموعتنا الجديدة من المنتجات المجمدة إلى السوق السعودي.وتتماشى هذه المنتجات الجديدة مع الطعم والجودة [...]</p>
          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
         $('.carousel').carousel({
              interval: 2000
        })
    </script>
</body>
</html>