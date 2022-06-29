<div id="applyFor" style="text-align: center; width: 500px; margin: 100px auto;">
      Welcome {{ $uname }},Congratulations,{{ $message }},The page will jump to<a href="{{ $url }}" style="color: red">check-in page</a>in<span class="loginTime" style="color: red">{{ $jump_time }}</span>seconds
  </div>
  
  
  <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
  <script type="text/javascript">
      $(function(){
          var url = "{{$url}}";
         var loginTime = parseInt($('.loginTime').text());
         var time = setInterval(function(){
             loginTime = loginTime-1;
             $('.loginTime').text(loginTime);
             if(loginTime==0){
                 clearInterval(time);
                 window.location.href=url;
             }
         },1000);
     })
 </script>