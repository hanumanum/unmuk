<a href="https://github.com/hanumanum/unmuk"><img style="position: absolute; top: 0; right: 0; border: 0;"
                                                  src="https://camo.githubusercontent.com/e7bbb0521b397edbd5fe43e7f760759336b5e05f/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677265656e5f3030373230302e706e67"
                                                  alt="Fork me on GitHub"
                                                  data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png"></a>
<div class="container-fluid">
    <!--
    <ul class="list-group list-inline">
      <li class="list-group-item list-group-item-success">սկիզբ</li>

      <li class="list-group-item list-group-item-success"><span class="label label-success">&#8593;</span> <span class="label label-success">&#8592;</span> <span class="label label-success">&#8594;</span> <span class="label label-success">&#8595;</span></li>

      <li class="list-group-item list-group-item-success" ><span class="label label-success">Ctrl+&#8593;</span> <span class="label label-success">Ctrl+&#8592;</span> <span class="label label-success">Ctrl+&#8594;</span> <span class="label label-success">Ctrl+&#8595;</span></li>


      <li class="list-group-item list-group-item-success"> <span class="label label-success">PgUp</span> և <span class="label label-success">PgDn</span></li>

      <li class="list-group-item list-group-item-success"> <span class="label label-success">Home</span> և <span class="label label-success">End</span></li>


      <li class="list-group-item list-group-item-success"><span class="label label-success">Tab</span> և <span class="label label-success">Enter</span></li>

      <li class="list-group-item list-group-item-success"> <span class="label label-success">Whitespace</span></li>

      <li class="list-group-item list-group-item-success">Ֆորմայի լրացում միայն ստեղնաշարով</li>

      <li class="list-group-item list-group-item-success"><span class="label label-success">Ctrl+Tab</span> և <span class="label label-success">Alt+Tab</span></li>

      <li class="list-group-item list-group-item-success">
        <span class="label label-success">Ctrl+z</span>
      </li>

      <li class="list-group-item list-group-item-success">
        <span class="label label-success ">Ctrl+a</span>
      </li>

      <li class="list-group-item list-group-item-success">
        <span class="label label-success">Ctrl+c</span>
        <span class="label label-success">Ctrl+x</span>
        <span class="label label-success">Ctrl+v</span>
      </li>

      <li class="list-group-item">
        <span class="label label-success">Shift+&#8593;</span>
        <span class="label label-success">Shift+&#8592;</span>
        <span class="label label-success">Shift+&#8594;</span>
        <span class="label label-success">Shift+&#8595;</span>
      </li>

      <li class="list-group-item">
        <span class="label label-success">Ctrl+t</span>
        <span class="label label-success">Ctrl+w</span>
        <span class="label label-success">Ctrl+Shift+w</span>
      </li>

      <li class="list-group-item">
        <span class="label label-success">Ctrl+f</span>
        <span class="label label-success">F3</span>
      </li>

      <li class="list-group-item">
        <span class="label label-success">F5</span>
      </li>


      <li class="list-group-item">
        <span class="label label-success">F11</span>
      </li>

      <li class="list-group-item">
        Ուղեցույց և <span class="label label-success">Ctrl+s</span>
      </li>

      </ul> -->
</div>


<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                Ան֊Մուկ․ համակարգչի ստեղնաշարային կառավարման ինքուսույց։
            </div>
            <div class="col-md-3">
                <!-- <a href="contact.php">Կապ</a> -->
                <a href="/unmuk/">Սկիզբ</a> |
                Պատրաստեց` <a href="http://ablog.gratun.am/8373/unmuk/">hanuman</a>
            </div>

        </div>
    </div>
</footer>

<?php
/*
$files = scandir(".");
foreach ($files as $file) {
  if(is_file("/var/www/unmuk/".$file))
  {
   echo "<li><a href='$file'>$file</a></li>";
  }
}
 */
?>
<!-- Google Analitycs start -->
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-19637053-1']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
<!-- Google Analitycs end -->

<script type="text/javascript">

    Share = {
        vkontakte: function (purl, ptitle, pimg, text) {
            url = 'http://vkontakte.ru/share.php?';
            url += 'url=' + encodeURIComponent(purl);
            url += '&title=' + encodeURIComponent(ptitle);
            url += '&description=' + encodeURIComponent(text);
            url += '&image=' + encodeURIComponent(pimg);
            url += '&noparse=true';
            Share.popup(url);
        },
        odnoklassniki: function (purl, text) {
            url = 'http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1';
            url += '&st.comments=' + encodeURIComponent(text);
            url += '&st._surl=' + encodeURIComponent(purl);
            Share.popup(url);
        },
        facebook: function (purl, ptitle, pimg, text) {
            url = 'http://www.facebook.com/sharer.php?s=100';
            url += '&p[title]=' + encodeURIComponent(ptitle);
            url += '&p[summary]=' + encodeURIComponent(text);
            url += '&p[url]=' + encodeURIComponent(purl);
            url += '&p[images][0]=' + encodeURIComponent(pimg);
            Share.popup(url);
        },
        twitter: function (purl, ptitle) {
            url = 'http://twitter.com/share?';
            url += 'text=' + encodeURIComponent(ptitle);
            url += '&url=' + encodeURIComponent(purl);
            url += '&counturl=' + encodeURIComponent(purl);
            Share.popup(url);
        },
        mailru: function (purl, ptitle, pimg, text) {
            url = 'http://connect.mail.ru/share?';
            url += 'url=' + encodeURIComponent(purl);
            url += '&title=' + encodeURIComponent(ptitle);
            url += '&description=' + encodeURIComponent(text);
            url += '&imageurl=' + encodeURIComponent(pimg);
            Share.popup(url)
        },

        popup: function (url) {
            window.open(url, '', 'toolbar=0,status=0,width=626,height=436');
        }
    };
</script>