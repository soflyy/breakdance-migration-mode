<?php

namespace Breakdance\MigrationMode;

use function Breakdance\Util\is_post_request;

if (!isBreakdanceEnabledForRequest()) {
    return;
}

add_action('breakdance_register_admin_settings_page_register_tabs', '\Breakdance\MigrationMode\register');

function register()
{
    \Breakdance\Admin\SettingsPage\addTab(
        'Migration Mode',
        'migration-mode',
        '\Breakdance\MigrationMode\tab',
        1
    );
}

function tab()
{
    $nonce_action = 'breakdance_admin_migration-mode_tab';
    if (is_post_request() && check_admin_referer($nonce_action)) {

        $enabled_ips = (string) filter_input(INPUT_POST, 'enabled_ips');
        update_option('breakdance_migration_mode_enabled_ips', $enabled_ips);
    }
    $enabled_ips = (string) get_option('breakdance_migration_mode_enabled_ips', '');

?>

    <form action="" method="post">
        <?php wp_nonce_field('breakdance_admin_migration-mode_tab'); ?>

        <h2>Migration Mode</h2>

        <div class="notice notice-warning inline padded-notice">
            <p>
                Migration Mode is active, and Breakdance is only running for the IPs specified below. Otherwise, the website will behave as if Breakdance is disabled. To disable Migration Mode, disable the <strong>Breakdance Migration Mode</strong> plugin from the <a href='plugins.php'>Plugins</a> screen.
            </p>
        </div>

        <table class="form-table" role="presentation">
            <tbody>
                <tr>
                    <th class='valign-th-middle' scope="row">Enable by IP</th>
                    <td>
                        <textarea name="enabled_ips" cols='50' rows='4'><?php echo htmlspecialchars($enabled_ips); ?></textarea>
                        <p class='description'>Enable Breakdance for the above IP addresses (one per line).</p>
                    </td>
                </tr>
            </tbody>
        </table>

        <p class="submit">
            <input type="submit" name="breakdance-migration-mode-submit" id="submit" class="button button-primary" value="Save Changes" />
        </p>
    </form>

<?php

}
