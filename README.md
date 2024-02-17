# Breakdance Migration Mode Plugin

Easily transition your website to Breakdance from other builders or themes. This plugin allows you to rebuild and test your site with Breakdance without affecting your live site for visitors. Breakdance will only be active for specified IP addresses, enabling a smooth and secure setup process.

## How It Works

The Breakdance Migration Mode Plugin operates by identifying your IP address and optionally, any other IP addresses you specify within the plugin's settings. Here's the process:

1. **Automatic IP Recognition:** Upon plugin activation, your current IP address is automatically saved as authorized for Breakdance access.
2. **Manual IP Configuration:** You can add or remove IP addresses through the plugin settings, allowing other people to also view the site as it will appear with Breakdance enabled.
3. **Testing in Isolation:** Only users with authorized IP addresses can see the Breakdance version of the site. All other visitors continue to see the site as it was before, ensuring no disruption to your live site.
4. **Going Live:** When you're satisfied with the setup and ready to launch your site with Breakdance for all users, simply deactivate and delete the Migration Mode plugin.

This approach ensures a secure and controlled environment for site rebuilds and testing, providing a seamless transition to Breakdance without affecting your site's current visitors.

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

**How does it work on live WooCommerce stores?**

The Breakdance Migration Mode Plugin is designed to work seamlessly with live WooCommerce stores, allowing you to test Breakdance on your store without impacting the shopping experience for your customers. When activated and configured with your IP address, you can view and interact with the WooCommerce elements of your site as they will appear with Breakdance, while all other visitors see the store's current state. This setup is ideal for testing new layouts, product pages, and checkout flows in a live environment without any risk to sales or customer experience. Remember to thoroughly test all store functionalities, including product browsing, cart management, and checkout processes, to ensure a smooth transition for all users once you go live with Breakdance.

## Limitations

This plugin relies on `$_SERVER['REMOTE_ADDR']` to identify your IP address. If your server configuration does not expose your real IP address correctly through this variable, the plugin may not function as intended.

While the Breakdance Migration Mode Plugin enables Breakdance features for specific IP addresses, it's important to note that it does not automatically disable other plugins like Elementor or Divi for those users. This means that while you can view and interact with your site through the lens of Breakdance, remnants of styles or scripts from your existing theme or page builders may still be present. However, Breakdance is designed to take precedence in most cases, allowing you to work around any minor issues caused by your existing setup.

This approach is not without its imperfections, but it offers a practical solution that gets you 99% of the way there. It's significantly easier and more efficient than duplicating your site to a staging environment, especially for dynamic websites like WooCommerce stores, where accepting live orders and data is crucial. Staging and rebuilding are viable for static websites, but dynamic sites often face a data transfer and migration nightmare. This plugin circumvents that issue entirely, providing a straightforward path to migrate to Breakdance while your site remains live and functional. Dealing with the minor inconvenience of other page builders still being active is a small price to pay compared to the complexities of data migration and synchronization between live and staging environments.

## Happy Migrations

We're excited to support your transition to Breakdance. Set up, test, and go live with confidence. Welcome to the future of your website with Breakdance!
