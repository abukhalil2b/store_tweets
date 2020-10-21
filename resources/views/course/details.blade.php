<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('css/meetings.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
	<title>meeting</title>
</head>
<body>
	<div class="upper-nav">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-3 col-lg-3 header-right-btn-container">
					<a href="/" class="btn header-btn-outline">عودة</a>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 header-logo-table-container">
                <table class="logo-table">
                        <tr>
                            <td><img class="header-logo-img" src="{{ asset('img/logo1.png') }}" alt=""></td>
                            <td>
                                <span class="logo-title-lg" >الجمعية العمانية للعناية بالقرآن الكريم</span>
                                <span class="logo-title-sm" >ولاية العامرات</span>
                            </td>
                        </tr>
                    </table>
				</div>
				<div class="col-sm-12 col-md-3 col-lg-3 header-left-btn-container">
					<a href="" class="btn header-btn-outline"> دخول المسجلين </a>
				</div>
			</div>
		</div>
	</div>

	<div class="body">
		<div class="container">
			<div class="row">
				<span class="body-title-lg">مقدمة في الفن الإسلامي</span>
				<div class="card">
                      <img class="card-img-top" src="{{ asset('img/logo1.png') }}" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">
                            <h5>مقدمة في الفن الإسلامي هو مساق مجاني   </h5>
                            <h6>مقدمة في الفن الإسلامي هو مساق مجاني يهدف لتعريف المتعلمين بأبعاده الثقافية والفكرية المختلفة، من خلال التركيز على الرؤية المعرفية والتعريفات ...</h6>
                            <span class="badge badge-success">مجانية</span>
                            <div>تاريخ البدء 30-11-2020</div>
                            <button class="btn btn-block btn-info mt-1" >سجل الآن</button>
                        </p>
                      </div>
                    </div>
			</div>
		</div>
	</div><!-- .body -->

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-12 footer-link-container">
					<div class="footer-link">
						<span> <a href="">عن البرنامج</a> |</span>
						<span> <a href="">المدونة</a> |</span>
						<span> <a href="">اتصل بنا</a> </span>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 footer-social-container">
					<div class="social">
						<img src="{{asset('img/instagram.png')}}"width="30">
						<img src="{{asset('img/facebook.png')}}" width="30">
						<img src="{{asset('img/twitter.png')}}"  width="30">
						<img src="{{asset('img/youtube.png')}}"  width="30">
					</div>
				</div>
				<div class="col-lg-6 col-md-5 col-sm-12 footer-logo-container">
					<table class="footer-logo-table" >
						<tr>
							<td>
                                <img class="header-logo-img" src="{{ asset('img/logo1.png') }}" alt="">
							</td>
							<td>
								<span class="footer-logo-top-txt">الجمعية العمانية للعناية بالقرآن الكريم</span>
								<span class="footer-logo-down-txt">ولاية العامرات</span>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>