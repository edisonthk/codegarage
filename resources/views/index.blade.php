<!DOCTYPE html>
<html lang="ja" ng-app="app">
	<head>
		<meta charset="utf-8">
		<title>{{Config::get("app.name")}}</title>
		<meta name="description" content="{{$description}}">
		<meta name="keywords" content="ソースコードの倉庫のことで、MBEDのC言語からAndroidのJava, ゲームのCPPなどソースコードであれば何でもありです。">

		<link rel="icon" type="image/png" href="{{Config::get("app.url")}}/img/icon@57x57.png" />
		<base href="/">

		<!-- Open Graph Protocol -->
		<!-- Google Plus && Facebook -->
		<meta property="og:type" content="website" />
		<meta property="og:title" content="{{$title}}" />
		<meta property="og:url" content="{{$url}}" />
		<meta property="og:image" content="{{Config::get("app.url")}}/img/icon@114x114.png" />
		<meta property="og:description" content="{{$description}}" />

		<meta name="twitter:card" content="summary" />
		<meta name="twitter:title" content="{{$title}}" />
		<meta name="twitter:description" content="{{$description}}" />
		<meta name="twitter:image" content="{{Config::get("app.url")}}/img/icon@114x114.png" />
		<meta name="twitter:url" content="{{$url}}" />


		<link rel="stylesheet" type="text/css" href="{{$angular_path.'css/normalize.min.css'}}">
		<link rel="stylesheet" type="text/css" href="{{$angular_path.'css/global.css'}}">

		<link rel="stylesheet" type="text/css" href="{{$angular_path.'bower_components/components-font-awesome/css/font-awesome.min.css'}}">
		<link rel="stylesheet" type="text/css" href="{{$angular_path.'bower_components/ng-tags-input/ng-tags-input.css'}}">
		<!-- <link rel="stylesheet" type="text/css" href="bower_components/google-code-prettify/bin/prettify.min.css"> -->
		<link rel="stylesheet" type="text/css" href="{{$angular_path.'bower_components/google-code-prettify/styles/desert.css'}}">
		<!-- <link rel="stylesheet" type="text/css" href="bower_components/angular-social/angular-social.css"> -->
		<link rel="stylesheet" type="text/css" href="{{$angular_path.'bower_components/angularjs-toaster/toaster.min.css'}}">
		<script type="text/javascript">
		var prefix_path = '{{$angular_path}}';
        var debug = false;
		</script>
	</head>
	<body>
		
		<div ng-controller="LoaderController" ng-init="loaderInit()">
			<div ng-if="!loaded" class="splash-screen">
				<div class="center">
					<h1>{{Config::get("app.name")}}</h1>
					<h3>ローディング <span>...</span></h3>
				</div>
			</div>
			<ng-include ng-controller="MyController" onload="onloadedEvent()" src="global.prefix_path+'components/app.html'"></ng-include>
		</div>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-44036434-6', 'auto');
		  ga('send', 'pageview');
		</script>
		<script src="{{$angular_path.'bower_components/angular/angular.min.js'}}"></script>
		<script src="{{$angular_path.'bower_components/angular-ui-router/release/angular-ui-router.min.js'}}"></script>
		<script src="{{$angular_path.'bower_components/angular-google-analytics/dist/angular-google-analytics.min.js'}}"></script>
		<script src="{{$angular_path.'bower_components/angular-resource/angular-resource.min.js'}}"></script>
		<script src="{{$angular_path.'bower_components/showdown/src/showdown.js'}}"></script>
		<script src="{{$angular_path.'bower_components/ng-tags-input/ng-tags-input.js'}}"></script>
		<script src="{{$angular_path.'bower_components/angular-social/src/scripts/00-directive.js'}}"></script>
		<script src="{{$angular_path.'bower_components/angular-social/src/scripts/02-facebook.js'}}"></script>
		<script src="{{$angular_path.'bower_components/angular-social/src/scripts/03-twitter.js'}}"></script>
		<script src="{{$angular_path.'bower_components/angular-social/src/scripts/04-google-plus.js'}}"></script>
		<script src="{{$angular_path.'bower_components/google-code-prettify/bin/prettify.min.js'}}"></script>
		<script src="{{$angular_path.'bower_components/angular-animate/angular-animate.min.js'}}"></script>
		<script src="{{$angular_path.'bower_components/angular-sanitize/angular-sanitize.js'}}"></script>
		<script src="{{$angular_path.'bower_components/angularjs-toaster/toaster.min.js'}}"></script>
		<script src="{{$angular_path.'bower_components/angularytics/dist/angularytics.min.js'}}"></script>
        <script src="{{$angular_path.'bower_components/angular-cookies/angular-cookies.min.js'}}"></script>
		<script src="{{$angular_path.'js/app.js'}}"></script>
		<script src="{{$angular_path.'js/controllers.js'}}"></script>
        <script src="{{$angular_path.'js/markdownSearch.js'}}"></script>
		<script src="{{$angular_path.'js/directives.js'}}"></script>
		<script src="{{$angular_path.'js/services.js'}}"></script>
		
	</body>
</html>