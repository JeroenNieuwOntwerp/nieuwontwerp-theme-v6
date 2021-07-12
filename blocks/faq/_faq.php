<?php
defined( 'ABSPATH' ) || exit;

$_faq_repeater = get_sub_field_object('faq--repeater')["ID"];
$_options__margin_top = get_sub_field('margin-top');
$_options__margin_bottom = get_sub_field('margin-bottom');

echo '<section class="faq faq-id-'. $_faq_repeater .'" style="margin-top: '. $_options__margin_top .'px !important; margin-bottom: '. $_options__margin_bottom .'px !important;">';
  while( have_rows('faq--repeater'))
  {
    the_row();
    echo '<article class="faq-row is-closed">
      <span class="faq-question">
        ' . get_sub_field('question') .'
      </span>
      <span class="faq-answer">
        ' . get_sub_field('answer') .'
      </span>
    </article>';
  }
echo '<script>
  $(document).ready(function(){
    $(".faq-id-'. $_faq_repeater .' .faq-row").click(function()
    {
      if( $(this).hasClass("is-closed") )
      {
        $(".faq-id-'. $_faq_repeater .' .faq-row").addClass("is-closed");
        $(this).removeClass("is-closed");
      } else {
        $(".faq-id-'. $_faq_repeater .' .faq-row").addClass("is-closed");
      }
    });
  });
</script>
</section>';

?>
