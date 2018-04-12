<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://www.linkedin.com/in/mohammad-abu-sufian/
 * @since      1.0.0
 *
 * @package    Fawry_Payment_Gateway
 * @subpackage Fawry_Payment_Gateway/admin/partials
 */
?>

<div class="wrap">
    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
    <form method="post" name="cleanup_options" action="options.php">
        <!-- remove some meta and generators from the <head> -->
        <fieldset>
            <p><?php _e('Marchent', $this->plugin_name); ?></p>
            <legend class="screen-reader-text">
                <span>
                    <?php _e('Marchent', $this->plugin_name); ?>
                </span>
            </legend>
            <input type="text" class="regular-text" id="<?php echo $this->plugin_name; ?>-marchent" name="<?php echo $this->plugin_name; ?>marchent" value=""/>
        </fieldset>
        <fieldset>
            <p> <?php _e('Order Description', $this->plugin_name); ?></p>
            <legend class="screen-reader-text">
                <span>
                    <?php _e('Order Description', $this->plugin_name); ?>
                </span>
            </legend>
            <textarea  class="regular-text" id="<?php echo $this->plugin_name; ?>-description" name="<?php echo $this->plugin_name; ?>-description">
            </textarea>
        </fieldset>
        <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>
    </form>
</div>
