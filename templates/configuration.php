<?php
namespace BuddyIntegration;
?>

<div class="buddy-wrapper">
	<h1><?php _e( 'Settings', Config::get( 'language_slug' ) ); ?></h1>

	<?php if ( capabilities_helper( 'edit_options' ) ): ?>
		<div class="notice notice-info">
			<p>If some of your options are missing it means that they are decalared in your <code>wp-config.php</code>. Remove them from there to have a possibility to change them via this panel.</p>
		</div>

		<?php
			echo $this->cmb_form;
		?>
	<?php else: ?>
		<?php _e( '<p>Automatic deployments are <strong>disabled</strong>.</p>', Config::get( 'language_slug' ) ); ?>
	<?php endif; ?>
</div>

