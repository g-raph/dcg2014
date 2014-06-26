<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>
<div id="bg"></div>
<!-- content -->
<div id="content" class="outerbox">
  <div id="content-inner" class="inner">
    <div class="slidebox">
      <div class="slide time">
        <div class="slide-inner">
        </div>
      </div>
      <div class="slide location">
        <div class="slide-inner">
          <h2>Hogeschool Gent</h2>
          <p>With three faculties, one School of Arts and 13,000 students, University College Ghent is the largest university college in Flanders. Its establishment in 1995 is the outcome of two successful mergers that involved sixteen Belgian institutions of higher education. Many had been influential leaders in higher education for several decades. The current faculties are spread over the city center of Ghent and Aalst. <strong>Visit their website: <a href="http://www.hogent.be/">http://www.hogent.be/</a></strong></p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10034.495114562516!2d3.718724!3d51.041569!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc8aaf71d52c1a360!2sHogeschool+Gent!5e0!3m2!1snl!2sbe!4v1403700203608" frameborder="0" style="border:0"></iframe>
        </div>
      </div>
      <div class="slide sponsoring">
        <div class="slide-inner">
          <h2>Sponsoring</h2>
          <p>INTERESTED IN SPONSORING THE EVENT?<br>
            Please fill in the form below to contact us!</p>
          <ul>
            <li><img src="/sites/all/themes/dcg2014/images/cup-gold.svg"><br>Gold package</li>
            <li><img src="/sites/all/themes/dcg2014/images/cup-silver.svg"><br>Silver package</li>
            <li><img src="/sites/all/themes/dcg2014/images/cup-bronze.svg"><br>Bronze package</li>
            <li><img src="/sites/all/themes/dcg2014/images/cup-other.svg"><br>Other package</li>
          </ul>
          <?php print render($page['content']); ?>
        </div>
      </div>
      <div class="slide newsletter">
        <div class="slide-inner">
          <h2>newsletter</h2>
          <p>STAY INFORMED AND SUBSCRIBE TO OUR NEWSLETTER!</p>
          <!-- Begin MailChimp Signup Form -->
          <div id="mc_embed_signup">
          <form action="http://drupalcampleuven.us6.list-manage.com/subscribe/post?u=385fb6c8552983dc742af7470&amp;id=1babfa229c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div class="mc-field-group">
              <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
          </label>
              <input type="email" value="" name="EMAIL" class="required email form-text" id="mce-EMAIL">
          </div>
          <div class="mc-field-group">
              <label for="mce-FNAME">First Name </label>
              <input type="text" value="" name="FNAME" class="form-text" id="mce-FNAME">
          </div>
          <div class="mc-field-group">
              <label for="mce-LNAME">Last Name </label>
              <input type="text" value="" name="LNAME" class="form-text" id="mce-LNAME">
          </div>
              <div id="mce-responses" class="clear">
                  <div class="response" id="mce-error-response" style="display:none"></div>
                  <div class="response" id="mce-success-response" style="display:none"></div>
              </div>    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="form-submit"></div>
          </form>
          </div>
          <script type="text/javascript">
          var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';
          try {
              var jqueryLoaded=jQuery;
              jqueryLoaded=true;
          } catch(err) {
              var jqueryLoaded=false;
          }
          var head= document.getElementsByTagName('head')[0];
          if (!jqueryLoaded) {
              var script = document.createElement('script');
              script.type = 'text/javascript';
              script.src = 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
              head.appendChild(script);
              if (script.readyState && script.onload!==null){
                  script.onreadystatechange= function () {
                        if (this.readyState == 'complete') mce_preload_check();
                  }    
              }
          }
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
          head.appendChild(script);
          var err_style = '';
          try{
              err_style = mc_custom_error_style;
          } catch(e){
              err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
          }
          var head= document.getElementsByTagName('head')[0];
          var style= document.createElement('style');
          style.type= 'text/css';
          if (style.styleSheet) {
            style.styleSheet.cssText = err_style;
          } else {
            style.appendChild(document.createTextNode(err_style));
          }
          head.appendChild(style);
          setTimeout('mce_preload_check();', 250);

          var mce_preload_checks = 0;
          function mce_preload_check(){
              if (mce_preload_checks>40) return;
              mce_preload_checks++;
              try {
                  var jqueryLoaded=jQuery;
              } catch(err) {
                  setTimeout('mce_preload_check();', 250);
                  return;
              }
              try {
                  var validatorLoaded=jQuery("#fake-form").validate({});
              } catch(err) {
                  setTimeout('mce_preload_check();', 250);
                  return;
              }
              mce_init_form();
          }
          function mce_init_form(){
              jQuery(document).ready( function($) {
                var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
                var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
                $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
                options = { url: 'http://drupalcampleuven.us6.list-manage2.com/subscribe/post-json?u=385fb6c8552983dc742af7470&id=1babfa229c&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
                              beforeSubmit: function(){
                                  $('#mce_tmp_error_msg').remove();
                                  $('.datefield','#mc_embed_signup').each(
                                      function(){
                                          var txt = 'filled';
                                          var fields = new Array();
                                          var i = 0;
                                          $(':text', this).each(
                                              function(){
                                                  fields[i] = this;
                                                  i++;
                                              });
                                          $(':hidden', this).each(
                                              function(){
                                                  var bday = false;
                                                  if (fields.length == 2){
                                                      bday = true;
                                                      fields[2] = {'value':1970};//trick birthdays into having years
                                                  }
                                                  if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
                                                      this.value = '';
                                                  } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
                                                      this.value = '';
                                                  } else {
                                                      if (/\[day\]/.test(fields[0].name)){
                                                          this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;                                            
                                                      } else {
                                                          this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
                                                      }
                                                  }
                                              });
                                      });
                                  return mce_validator.form();
                              }, 
                              success: mce_success_cb
                          };
                $('#mc-embedded-subscribe-form').ajaxForm(options);
                /*
           * Translated default messages for the jQuery validation plugin.
           * Locale: NL
           */
          jQuery.extend(jQuery.validator.messages, {
                  required: "Dit is een verplicht veld.",
                  remote: "Controleer dit veld.",
                  email: "Vul hier een geldig e-mailadres in.",
                  url: "Vul hier een geldige URL in.",
                  date: "Vul hier een geldige datum in.",
                  dateISO: "Vul hier een geldige datum in (ISO-formaat).",
                  number: "Vul hier een geldig getal in.",
                  digits: "Vul hier alleen getallen in.",
                  creditcard: "Vul hier een geldig creditcardnummer in.",
                  equalTo: "Vul hier dezelfde waarde in.",
                  accept: "Vul hier een waarde in met een geldige extensie.",
                  maxlength: jQuery.validator.format("Vul hier maximaal {0} tekens in."),
                  minlength: jQuery.validator.format("Vul hier minimaal {0} tekens in."),
                  rangelength: jQuery.validator.format("Vul hier een waarde in van minimaal {0} en maximaal {1} tekens."),
                  range: jQuery.validator.format("Vul hier een waarde in van minimaal {0} en maximaal {1}."),
                  max: jQuery.validator.format("Vul hier een waarde in kleiner dan of gelijk aan {0}."),
                  min: jQuery.validator.format("Vul hier een waarde in groter dan of gelijk aan {0}.")
          });
                
              });
          }
          function mce_success_cb(resp){
              $('#mce-success-response').hide();
              $('#mce-error-response').hide();
              if (resp.result=="success"){
                  $('#mce-'+resp.result+'-response').show();
                  $('#mce-'+resp.result+'-response').html(resp.msg);
                  $('#mc-embedded-subscribe-form').each(function(){
                      this.reset();
                  });
              } else {
                  var index = -1;
                  var msg;
                  try {
                      var parts = resp.msg.split(' - ',2);
                      if (parts[1]==undefined){
                          msg = resp.msg;
                      } else {
                          i = parseInt(parts[0]);
                          if (i.toString() == parts[0]){
                              index = parts[0];
                              msg = parts[1];
                          } else {
                              index = -1;
                              msg = resp.msg;
                          }
                      }
                  } catch(e){
                      index = -1;
                      msg = resp.msg;
                  }
                  try{
                      if (index== -1){
                          $('#mce-'+resp.result+'-response').show();
                          $('#mce-'+resp.result+'-response').html(msg);            
                      } else {
                          err_id = 'mce_tmp_error_msg';
                          html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
                          
                          var input_id = '#mc_embed_signup';
                          var f = $(input_id);
                          if (ftypes[index]=='address'){
                              input_id = '#mce-'+fnames[index]+'-addr1';
                              f = $(input_id).parent().parent().get(0);
                          } else if (ftypes[index]=='date'){
                              input_id = '#mce-'+fnames[index]+'-month';
                              f = $(input_id).parent().parent().get(0);
                          } else {
                              input_id = '#mce-'+fnames[index];
                              f = $().parent(input_id).get(0);
                          }
                          if (f){
                              $(f).append(html);
                              $(input_id).focus();
                          } else {
                              $('#mce-'+resp.result+'-response').show();
                              $('#mce-'+resp.result+'-response').html(msg);
                          }
                      }
                  } catch(e){
                      $('#mce-'+resp.result+'-response').show();
                      $('#mce-'+resp.result+'-response').html(msg);
                  }
              }
          }

          </script>
          <!--End mc_embed_signup-->
        </div>
      </div>
    </div>
  </div>
</div>
<div class="inner logobox"><div class="frontlogo"><img src="/sites/all/themes/dcg2014/images/frontlogo.svg"></div></div>
<div class="twitter"><a href="https://twitter.com/drupalcampbe">twitter</a></div>