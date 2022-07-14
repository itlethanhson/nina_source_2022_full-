window.fbAsyncInit = function() {
    FB.init({
      appId      : '855519368677569', // Set YOUR APP ID
      channelUrl : 'https://photro.net/api/ajax_facebook.php', // duong dan file xu ly dang nhap.
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });
  };

  function Login_fb()
  {
  FB.login(function(response) {
   if (response.authResponse) 
   {
    getUserInfo_dn();
    return false;
  } else
  {
   console.log('User cancelled login or did not fully authorize.');
 }
},{scope: 'email'});
}

function getUserInfo_dn() {
         FB.api('/me?fields=id,name,email,picture{url}', function(response) {
          response.type= "submit";
        $.post("api/ajax_facebook.php",response,function(data){//dien ten file chay ung dung 
            //alert('scsacsasac');                     
            window.location.href='https://photro.net/account/thong-tin';
          });
      });
       }
       function Logout()
       {
        FB.logout(function(){document.location.reload();});
      }

  (function(d){
   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement('script'); js.id = id; js.async = true;
   js.src = "//connect.facebook.net/en_US/all.js";
   ref.parentNode.insertBefore(js, ref);
 }(document));