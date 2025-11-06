<?php
// Add Theme Support for Featured Image and Title Tag
function coalition_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'coalition_theme_setup');

// Register and Display Theme Settings Page
function coalition_add_admin_menu() {
    add_menu_page(
        'Coalition Theme Settings',
        'Coalition Theme Settings',
        'manage_options',
        'coalition-theme-settings',
        'coalition_settings_page',
        'dashicons-admin-generic',
        20
    );
}
add_action('admin_menu', 'coalition_add_admin_menu');

function coalition_register_settings() {
    register_setting('coalition_options_group', 'coalition_logo');
    register_setting('coalition_options_group', 'coalition_phone');
    register_setting('coalition_options_group', 'coalition_address');
    register_setting('coalition_options_group', 'coalition_fax');
    register_setting('coalition_options_group', 'coalition_social');
}
add_action('admin_init', 'coalition_register_settings');

// Enqueue WordPress Media Uploader
function coalition_admin_scripts($hook) {
    if ($hook != 'toplevel_page_coalition-theme-settings') {
        return;
    }
    wp_enqueue_media();
    wp_enqueue_script('coalition-admin-script', get_template_directory_uri() . '/js/admin-script.js', array('jquery'), null, true);
}
add_action('admin_enqueue_scripts', 'coalition_admin_scripts');

// Settings Page HTML
function coalition_settings_page() { ?>
    <div class="wrap">
        <h1>Coalition Theme Settings</h1>
        <form method="post" action="options.php">
            <?php settings_fields('coalition_options_group'); ?>
            <?php do_settings_sections('coalition_options_group'); ?>

            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Logo</th>
                    <td>
                        <input type="text" id="coalition_logo" name="coalition_logo" value="<?php echo esc_attr(get_option('coalition_logo')); ?>" style="width:70%;" />
                        <input type="button" class="button" id="upload_logo_button" value="Upload Logo" />
                        <br><br>
                        <?php if (get_option('coalition_logo')) : ?>
                            <img src="<?php echo esc_url(get_option('coalition_logo')); ?>" alt="Logo Preview" style="max-width:150px;">
                        <?php endif; ?>
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row">Phone Number</th>
                    <td><input type="text" name="coalition_phone" value="<?php echo esc_attr(get_option('coalition_phone')); ?>" /></td>
                </tr>

                <tr valign="top">
                    <th scope="row">Address</th>
                    <td><textarea name="coalition_address"><?php echo esc_textarea(get_option('coalition_address')); ?></textarea></td>
                </tr>

                <tr valign="top">
                    <th scope="row">Fax Number</th>
                    <td><input type="text" name="coalition_fax" value="<?php echo esc_attr(get_option('coalition_fax')); ?>" /></td>
                </tr>

                <tr valign="top">
                    <th scope="row">Social Media Links</th>
                    <td><textarea name="coalition_social"><?php echo esc_textarea(get_option('coalition_social')); ?></textarea></td>
                </tr>
            </table>

            <?php submit_button(); ?>
        </form>
    </div>
<?php }
