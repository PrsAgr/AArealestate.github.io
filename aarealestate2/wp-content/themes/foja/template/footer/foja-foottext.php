<div class="foot-col-item clearfix">
<?php 
$options = get_option('foja_framework');
$foja_foot_address = $options['foot_address'];

echo wp_specialchars_decode( $foja_foot_address ); ?>
</div>