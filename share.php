 <div class="social-share-icons">
                                    <a href="javascript:void(0);" id="share_button<?php echo $key; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="javascript:void(0);" id="twitter_share<?php echo $key; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="https://plus.google.com/share?url=<?php echo base_url().'champions/champion/'.$champ['id']; ?>&hl=<?php echo $champ['name']; ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    
                                    <!--<a href="javascript:void(0);" id="share_button<?php echo $key; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>-->
                                </div>
<script>
                                $('#twitter_share<?php echo $key; ?>').click(function (e) {
                                    e.preventDefault();
                                    var loc = "<?php echo base_url(); ?>";
                                    var title  = "<?php echo $champ['name']; ?> raised <?php echo '$'.$champ['amount']; ?> for <?php echo $champ['charity_name']; ?> on Wish and give.";
                                    window.open('http://twitter.com/share?card=photo&image=<?php echo $pro_pic_path; ?>&text=' + title + '&url=' + loc + '&', 'twitterwindow', 'height=450, width=550, top='+($(window).height()/2 - 225) +', left='+$(window).width()/2 +', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
                                });

                                $('#share_button<?php echo $key; ?>').click(function(e){
                                    e.preventDefault(); 
                                    FB.ui({
                                    method: 'share_open_graph',
                                    action_type: 'og.shares',
                                    action_properties: JSON.stringify({
                                        object: {
                                            'og:url': '<?php echo base_url(); ?>',
                                            'og:title': "<?php echo $champ['name']; ?>",
                                            'og:description': "Raised <?php echo '$'.$champ['amount']; ?> for <?php echo $champ['charity_name']; ?> on Wish and Give.",
                                            'og:image': "<?php echo $pro_pic_path; ?>"
                                        }
                                    })
                                });   
                                });
                                
                                </script>
                                
                                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<!-- Place this tag after the last share tag. -->
                              
<script type="text/javascript">  
  
  window.fbAsyncInit = function() {
      window.FB.init({
//        appId            : '278320062658097',
        // live
        appId            : '125284058091075',
        autoLogAppEvents : true,
        xfbml            : true,
        version          : 'v2.10'
      });
      window.FB.AppEvents.logPageView();
    };

    (function(d, s, id){
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {return;}
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>