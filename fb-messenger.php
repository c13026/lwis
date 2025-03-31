<!-- Messenger 洽談外掛程式 Code -->
<div id="fb-root animate__animated animate__fadeInRight"></div>

<!-- Your 洽談外掛程式 code -->
<div id="fb-customer-chat" class="fb-customerchat" >
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "656998288023147");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v14.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<!-- <script>
  $(function(){
    $('.fb_dialog_content iframe .svg#facebook svg').parent.css({
      "background-color":"unset",
      "background":"repeating-linear-gradient(45deg, #09F, #93F, #F36) !important"
    });
  });
</script> -->