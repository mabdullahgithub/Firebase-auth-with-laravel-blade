
<!DOCTYPE HTML>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title>Login & Signup</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Triple Forms Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="{{ asset('assets\css\font-awesome.min.css') }}" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="http://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext"
	 rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
<script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
	<div class="main-bg">
		<!-- title -->
		<h1>Signup / Login</h1>
		<!-- //title -->
<!---728x90--->

		<div class="sub-main-w3">
			<div class="image-style">

			</div>
			<!-- vertical tabs -->
			<div class="vertical-tab">
				<div id="section1" class="section-w3ls">
					<input type="radio" name="sections" id="option1" checked>
					<label for="option1" class="icon-left-w3pvt"><span class="fa fa-user-circle" aria-hidden="true"></span>Login</label>
					<article>
						<form action="{{ route('login') }}" method="post">
							@csrf
							<h3 class="legend">Login Here</h3>
							<div class="input">
								<span class="fa fa-envelope-o" aria-hidden="true"></span>
								<input type="email" placeholder="Email" id="email" name="email" required />
							</div>
							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="password" placeholder="Password" id="password" name="password" required />
							</div>
							<button type="submit" class="btn submit">Login</button>
							<a href="#" class="bottom-text-w3ls">Forgot Password?</a>
						</form>
					</article>
				</div>
				<div id="section2" class="section-w3ls">
					<input type="radio" name="sections" id="option2">
					<label for="option2" class="icon-left-w3pvt"><span class="fa fa-pencil-square" aria-hidden="true"></span>Register</label>
					<article>
						<form action="{{ route('register') }}" method="post">
              @csrf
							<h3 class="legend">Register Here</h3>
							<div class="input">
								<span class="fa fa-user-o" aria-hidden="true"></span>
								<input type="text" placeholder="Username" id="name" name="name" required />
							</div>
              <div class="input">
								<span class="fa fa-envelope-o" aria-hidden="true"></span>
								<input type="email" placeholder="Email"  id="email" name="email" required />
							</div>
							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="password" placeholder="Password" id="password" name="password" required />
							</div>
							<button type="submit" class="btn submit">Register</button>
						</form>
					</article>
				</div>
				<div id="section3" class="section-w3ls">
					<input type="radio" name="sections" id="option3">
					<label for="option3" class="icon-left-w3pvt"><span class="fa fa-lock" aria-hidden="true"></span>Forgot Password?</label>
					<article>
						<form action="#" method="post">
							<h3 class="legend last">Reset Password</h3>
							<p class="para-style">Enter your email address below and we'll send you an email with instructions.</p>
							<p class="para-style-2"><strong>Need Help?</strong> Learn more about how to <a href="#">retrieve an existing
									account.</a></p>
							<div class="input">
								<span class="fa fa-envelope-o" aria-hidden="true"></span>
								<input type="email" placeholder="Email" name="email" required />
							</div>
							<button type="submit" class="btn submit last-btn">Reset</button>
						</form>
					</article>
				</div>
			</div>
			<!-- //vertical tabs -->
			<div class="clear"></div>
		</div>
		<div class="copyright">
			<h2>Muhammad Abdullah | TecJAunt | All rights reserved
			</h2>
		</div>
	</div>


<script>(function(){var js = "window['__CF$cv$params']={r:'85543d509c0e22b1',t:'MTcwNzkwMjQ3Mi4xNDAwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../../../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/a990e557/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>

</html>