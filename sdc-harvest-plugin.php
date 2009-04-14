<?php
/*
Plugin Name: SDC Harvest Plugin
Plugin URI: http://www.snapdragonconsultants.com/building/wordpress-plugin-for-harvest-time-tracking-application/
Version: 1.0
Author: SnapDragon Consultants
Author URI: http://www.snapdragonconsultants.com
Description: Adds easy access to the Harvest time tracking app from within a WordPress installation. Inspired by <a href="http://code.danalog.nl">danalog's basecamp plugin</a> by <a href="http://daankortenbach.nl">Daan Kortenbach</a>.
Tags: harvest
*/
function harvplug_add_pages() {
	add_menu_page('harvest', 'Harvest', 0, 'harvest.php', 'harvplug_harvest_page');
}
function harvplug_harvest_page() {
	echo "<div class=\"wrap\">\n";
	echo "<iframe src=\"http://[YOUR-HARVEST-SUBDOMAIN.harvestapp.com\" height=\"700\" width=\"100%\" frameborder=\"0\"></iframe>\n";
	echo "</div>";
}
add_action('admin_menu', 'harvplug_add_pages');
?>