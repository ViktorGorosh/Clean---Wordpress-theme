<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<span class="fw-icon">
	<?php if ( isset($atts['url']) && $atts['url'] ): ?><a href="<?php echo esc_attr($atts['url']); ?>" target="_blank"><?php endif; ?>
	<i class="<?php echo esc_attr($atts['icon']); ?>"></i>
	<?php if (!empty($atts['title'])): ?>
		<br/>
		<span class="list-title"><?php echo $atts['title'] ?></span>
	<?php endif; ?>
	<?php if ( isset($atts['url']) && $atts['url'] ): ?></a><?php endif; ?>
</span>