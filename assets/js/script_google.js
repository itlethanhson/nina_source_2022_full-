var googleUser = {};
var startApp = function() {
  gapi.load('auth2', function(){
  // Retrieve the singleton for the GoogleAuth library and set up the client.
  auth2 = gapi.auth2.init({
    client_id: '939082584010-dgiprh8egsts4f5cgfit1lg7odt3ig06.apps.googleusercontent.com',
    cookiepolicy: 'single_host_origin',
    // Request scopes in addition to 'profile' and 'email'
    //scope: 'additional_scope'
  });
  attachSignin(document.getElementById('login_gg'));
});
};
function attachSignin(element) {
    // console.log(element.id);
    auth2.attachClickHandler(element, {},
      function(googleUser) {
        var profile = googleUser.getBasicProfile();
        $gg_id = profile.getId();
        $gg_name = profile.getName();
        $gg_img = profile.getImageUrl();
        $gg_email = profile.getEmail();

        $.ajax({
          type: "POST",
          data: {'id':$gg_id,'name':$gg_name,'img':$gg_img,'email':$gg_email},
          url: 'https://photro.net/api/ajax_google.php',
          success: function(msg){
            if(msg.error== 1){
              alert('Something Went Wrong!');
            }else{
              window.location.href='https://photro.net/account/thong-tin';
              return false;
            }
          }
        });
      }, function(error) {
          // alert(JSON.stringify(error, undefined, 2));
        });
  }