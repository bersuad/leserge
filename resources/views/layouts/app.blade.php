<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="We believe this Website will deliver productive idea &#38; information to help BRIDES to plan memorable, happy and succssesfull wedding in ETHIOPIA.">
    <meta name="keyword" content="We believe this Website will deliver productive idea and information to help BRIDES to plan memorable, happy and succssesfull wedding in ETHIOPIA.">
    <meta name="generator" content="www.leserge.me - Ethiopia's #1 Wedding Website" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
    <meta url="http://www.leserge.me/">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Leserge.me') }}- Ethiopian The First &#38; Only Wedding Website.</title>

    <!-- icon of the website -->
    <link rel="icon" type="image/ico" href="/storage/icon.ico">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        .read-more{
            border-bottom: 1px solid #000;
        }

        .read-more-link, .show-less-link{
            color: green;
        }
    </style>
    <style type="text/css">
        #app{
            display: none;
        }
         #loading{
            width: 40px;
            height: 40px;
            border: 6px solid #1e90ff;
            border-top-color: #000000;
            border-radius: 100%;
            /*centering the spiner*/
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            /*rotating the spiner*/
            animation: round 1.5s linear infinite;
         }
         #loading2{
            width: 30px;
            height: 30px;
            border: 6px solid #000000;
            border-top-color: #1e90ff;
            border-radius: 100%;
            /*centering the spiner*/
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            /*rotating the spiner*/
            animation: anticlockwisespin 1.5s linear infinite;
         }
         @keyframes round{
                from{transform: rotate(0deg);}
                to{transform: rotate(360deg);}
            }
        @keyframes anticlockwisespin{
                from{transform: rotate(0deg);}
                to{transform: rotate(-360deg);}
            }
    </style>

	<style type="text/css">
        .back-to-top{
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 8px;
            color: #fff;
            border-radius: 10%;
        }
    	</style>
    
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4173211937826016",
    enable_page_level_ads: true
  });
</script>
</head>
<body style="background-color: #fffff0;" onload="spinner()">
    
    <div id="loading"></div>
    <div id="loading2"></div>
    <div id="app">
        
        @include('inc.navbar')

        <div class="container">

            @include('inc.messages')
            @yield('content')

        </div>
        @include('inc.footer')
    </div>

    <!-- Scripts -->
    <script type="text/javascript">
        function spinner(){
            document.getElementById("loading").style.display = "none";
            document.getElementById("loading2").style.display = "none";
            document.getElementById("app").style.display = "block";
        }
    </script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/custom.js') }}"></script>
    <!-- <script src="{{ asset('/js/jquery.js') }}"></script> -->
    <script type="text/javascript">
        $('#comment').on('click', function(){
            alert('Please Log-In First.');
        })
    </script>
    <script type="text/javascript">
        $('#sendmessage').on('keyup', function(){
            alert('Please Log-In First.');
        })
    </script>
    <script type="text/javascript">
        function likeIt(postId,elem){
            var csrfToken='{{ csrf_token()}}';

            $.post('{{route('toggleLike')}}', {postId: postId, _token:csrfToken}, function(data){
                console.log(data); 
                if (data.message==='liked') {
                    // $(elem).css({color:'red'});
                    $(elem).addClass('liked');
                }else{
                    // $(elem).css({color:'#696'});
                    $(elem).removeClass('liked');
                }
            });

        }
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            var btt = $('.back-to-top');

            btt.on('click', function(e){
                $('html, body').animate({
                    scrollTop: 0
                }, 500);

                e.preventDefault();
            });

            $(window).on('scroll', function() {
                var self = $(this),
                    height = self.height(),
                    top = self.scrollTop();

                if(top > height){
                    if(!btt.is(':visible')){
                        btt.show();
                    }
                } else {
                    btt.hide();
                }
            });
        });
    </script>
</body>
</html>
