<?php if (!defined('ABSPATH')) {
die('No direct access.');
} ?>
<div class="row has-right-field">
    <label>
        <?php esc_html_e("Crop Position", "ml-slider"); ?>
        <span class="dashicons dashicons-info tipsy-tooltip-top" title="<?php esc_attr_e('Choose how images are cropped if their size doesn\'t exactly match the size of your slideshow. This works if "Smart Crop" is selected in the "Image Crop" settings.', 'ml-slider') ?>" style="line-height: 1.2em;"></span>
    </label>
    <select class="crop_position" name="attachment[<?php echo esc_attr($slide_id); ?>][crop_position]">
        <option value="left-top" <?php echo selected($crop_position, 'left-top', false); ?>> <?php esc_html_e("Top Left", "ml-slider"); ?></option>
        <option value="center-top" <?php echo selected($crop_position, 'center-top', false); ?>> <?php esc_html_e("Top Center", "ml-slider"); ?></option>
        <option value="right-top" <?php echo selected($crop_position, 'right-top', false); ?>> <?php esc_html_e("Top Right", "ml-slider"); ?></option>
        <option value="left-center" <?php echo selected($crop_position, 'left-center', false); ?>> <?php esc_html_e("Center Left", "ml-slider"); ?></option>
        <option value="center-center" <?php echo selected($crop_position, 'center-center', false); ?>> <?php esc_html_e("Center Center", "ml-slider"); ?></option>
        <option value="right-center" <?php echo selected($crop_position, 'right-center', false); ?>> <?php esc_html_e("Center Right", "ml-slider"); ?></option>
        <option value="left-bottom" <?php echo selected($crop_position, 'left-bottom', false); ?>> <?php esc_html_e("Bottom Left", "ml-slider"); ?></option>
        <option value="center-bottom" <?php echo selected($crop_position, 'center-bottom', false); ?>> <?php esc_html_e("Bottom Center", "ml-slider"); ?></option>
        <option value="right-bottom" <?php echo selected($crop_position, 'right-bottom', false); ?>> <?php esc_html_e("Bottom Right", "ml-slider"); ?></option>
    </select>
</div>
