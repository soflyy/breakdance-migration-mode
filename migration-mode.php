<?php

namespace Breakdance\MigrationMode;

function isBreakdanceEnabledForRequest()
{
    $enabledIps = explode("\n", get_option('breakdance_migration_mode_enabled_ips', ''));
    $enabledIps = array_map('trim', $enabledIps);

    $requesterIp = $_SERVER['REMOTE_ADDR'];
    if (in_array($requesterIp, $enabledIps)) {
        return true;
    }

    return false;
}
