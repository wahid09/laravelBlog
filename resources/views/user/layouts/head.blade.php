<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>LaravelBlog</title>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<!-- Bootstrap core CSS -->
<link href="{{asset('user/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Custom fonts for this template -->
<link href="{{asset('user/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- Custom styles for this template -->
<link href="{{asset('user/css/clean-blog.min.css')}}" rel="stylesheet">
<style type="text/css" media="screen">
	header.masthead .page-heading h1, header.masthead .site-heading h1 {
    font-size: 40px;
}
body{
	background-color: #ffebe6;
}
.fixed-top{
	position:fixed !important;
}
.item{
	text-decoration: none;
}
.ad{
	background-color: #FFFFFF;
	margin-top: 10px;
}
.adtop{
	background-color: #FFFFFF;
}
.post-preview{
	background-color: #FFFFFF;
	border: 1px solid #FEFBFA;
	margin: 10px;
	padding: 5px;
	box-sizing: border-box;
	box-shadow: 1px 1px 1px 0px;
}
.post-preview>a>.post-title{
	font-size: 30px;
	margin-left: 10px;
}
.post-preview>a>.post-subtitle {
    font-weight: 300;
    margin: 0 0 10px;
    font-size: 20px;
    margin-left: 10px;
}
.fa, .fas {
    font-weight: 900;
    margin-left: 10px;
}
a:not([href]):not([tabindex]) {
    color: inherit;
    text-decoration: none;
    background-color: #FF9900;
}
.small, small {
    font-size: 20px;
    font-weight: 400;
}

</style>
<script>
   $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
          $("#mainNav").css("background-color", "#FF9900");   // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
        } else {
          $("#mainNav").css("background-color", "transparent"); // if not, change it back to transparent
        }
      });
    });
</script>
@section('head')
   @show