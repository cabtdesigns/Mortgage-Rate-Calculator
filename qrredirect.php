
<script type="text/javascript">
/* script to redirect with a countdown timer */
    var count = 6;
    var redirect = "http://www.google.com";
     
    function countDown(){
        var timer = document.getElementById("timer");
        if(count > 0){
            count--;
            timer.innerHTML = "This page will redirect in "+count+" seconds.";
            setTimeout("countDown()", 1000);
        }else{
            window.location.href = redirect;
        }
    }
    </script>
<!-- This is what runs the script -->
<span id="timer">
    <script type="text/javascript">countDown();</script>
    </span>