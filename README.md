# Breakdance Migration Mode Plugin

Easily transition your website to Breakdance from other builders or themes. This plugin allows you to rebuild and test your site with Breakdance without affecting your live site for visitors. Breakdance will only be active for specified IP addresses, enabling a smooth and secure setup process.

## Features

- **IP-Specific Activation:** Allows testing of Breakdance on your site without impacting visitors.
- **Easy Migration:** Simplify the process of rebuilding your site with Breakdance.
- **Seamless Go-Live:** Remove the plugin to make Breakdance live for all users.

## Installation

1. Download the plugin by clicking the green code button on this GitHub repo, then click 'Download ZIP'.
2. Navigate to the WordPress dashboard, go to 'Plugins' > 'Add New' > 'Upload Plugin', and select the downloaded ZIP file.
3. Install and activate the plugin.

## Configuration

After activation, the plugin automatically recognizes your IP address. To add or remove IPs:

1. Go to 'Breakdance' > 'Settings' in your WordPress dashboard.
2. Find the 'Migration Mode' tab.
3. Update the IP addresses as needed.

## FAQ

**How do I go live?**

To make Breakdance live for everyone, simply deactivate and delete the Migration Mode plugin.

**What if I get locked out?**

If you're locked out, disable and re-enable the Migration Mode plugin. It will redetect your IP address.

## Limitations

This plugin relies on `$_SERVER['REMOTE_ADDR']` to identify your IP address. If your server configuration does not expose your real IP address correctly through this variable, the plugin may not function as intended.

## Happy Migrations

We're excited to support your transition to Breakdance. Set up, test, and go live with confidence. Welcome to the future of your website with Breakdance!
