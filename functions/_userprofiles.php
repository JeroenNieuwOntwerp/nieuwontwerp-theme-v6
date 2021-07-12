<?php
add_filter('user_contactmethods', 'no_modify_contact_methods');
add_action('admin_head','no_hide_personal_options');

function no_modify_contact_methods($profile_fields) {
  unset($profile_fields['user-url-wrap']);
  unset($profile_fields['facebook']);
  unset($profile_fields['linkedin']);
  unset($profile_fields['soundcloud']);
  unset($profile_fields['instagram']);
  unset($profile_fields['pinterest']);
  unset($profile_fields['myspace']);
  unset($profile_fields['tumblr']);
  unset($profile_fields['youtube']);
  unset($profile_fields['wikipedia']);
  unset($profile_fields['twitter']);
  unset($profile_fields['myspace']);
  return $profile_fields;
}

function no_hide_personal_options()
{ ?>
  <script type="text/javascript">
  jQuery(document).ready(function($) {
    $('#your-profile > h3').hide(); // removes all headers
    $('#your-profile > table:first').hide(); // remove the entire Personal Options table
    $("#description,#url").parent().parent().remove();  // remove nickname, display name, username, website fields, etc.
  });
  </script>
<?php }

?>
