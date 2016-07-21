<div id="player" style="/* display:none; */ overflow: auto;">
    <video controls="true" id="video1" poster="http://acm.ut.ac.ir/panjare/poster-2016-2.jpg" style="width: 700px; max-height: 500px;">&nbsp;</video>
</div>

<p>&nbsp;</p>

<div class="alert alert-info">
    <p>بدینوسیله به اطلاع بازدیدکنندگان محترم سایت می&zwnj;رسد پخش زنده&zwnj;ی مراسم از طریق همین وب&zwnj;سایت و همزمان با مراسم اصلی انجام خواهد شد.</p>
</div>

<div class="alert alert-success" style="display:none;">
    <p style="text-align: justify;">پخش زنده&amp;zwnj;ی همایش هم&zwnj;اکنون در دسترس بازدیدکنندگان محترم قرار دارد.</p>
</div>
<script type="text/javascript" src="http://streaming.ut.ac.ir/hls.min.js">
</script><script type="text/javascript">

    //$(document).ready(function() {
    if(Hls.isSupported()) {
        var video = document.getElementById('video1'); //$('#video1');
        var hls = new Hls();
        hls.loadSource('http://streaming.ut.ac.ir/hls/{{ $account->stream_name }}.m3u8');
        hls.attachMedia(video);
        hls.on(Hls.Events.MANIFEST_PARSED,function() {
            video.play();
        });
    } else {
        var video=document.getElementById('video1');
        video.src = 'http://streaming.ut.ac.ir/hls/{{ $account->stream_name }}.m3u8';
        video.play();
    }
    //});
</script><script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-74363993-1', 'auto');
    ga('send', 'pageview');

</script>