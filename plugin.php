<?php

/**
 * Plugin Name: Breakdance Migration Mode
 * Plugin URI: https://breakdance.com/features/migration-mode
 * Description: Run Breakdance for specified IP addresses, leaving the site behaving for normal visitors as if Breakdance was not installed. Accidentally locked yourself out or IP address changed? Deactivate and then reactivate this plugin. Ready to go live with Breakdance? Remove this plugin.
 * Author: Breakdance
 * Version: 1.0
 * Author URI: https://breakdance.com/features/migration-mode
 */

namespace Breakdance\MigrationMode;

require_once __DIR__ . "/migration-mode.php";
require_once __DIR__ . "/migration-mode-tab.php";

register_activation_hook(__FILE__, 'Breakdance\MigrationMode\saveActivatingUserIp');

function saveActivatingUserIp()
{
    $userIp = $_SERVER['REMOTE_ADDR'];

    update_option('breakdance_migration_mode_enabled_ips', $userIp);
}

function addPluginActionLinks($links)
{
    $settingsLink = '<a href="' . admin_url('admin.php?page=breakdance_settings&tab=migration-mode') . '">Settings</a>';

    array_unshift($links, $settingsLink);

    return $links;
}

add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'Breakdance\MigrationMode\addPluginActionLinks');
