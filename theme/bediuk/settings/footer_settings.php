<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Footer settings page file.
 *
 * @package    theme_bediuk
 * @copyright  2016 Chris Kenniburg
 * @credits    theme_boost - MoodleHQ
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/* Footer Heading Settings */
$page = new admin_settingpage('theme_bediuk_footer', get_string('footerheading', 'theme_bediuk'));
$page->add(new admin_setting_heading('theme_bediuk_footer', get_string('footerheadingsub', 'theme_bediuk'),
    format_text(get_string('footerdesc', 'theme_bediuk'), FORMAT_MARKDOWN)));

// Footnote About setting.
$name = 'theme_bediuk/footnote_about';
$title = get_string('footnoteabout', 'theme_bediuk');
$description = get_string('footnoteaboutdesc', 'theme_bediuk');
$default = '';
$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Details
$name = 'theme_bediuk/details';
$heading = get_string('footerdetails', 'theme_bediuk');
$information = get_string('footerdetailsdesc', 'theme_bediuk');
$setting = new admin_setting_heading($name, $heading, $information);
$page->add($setting);

// Address
$name = 'theme_bediuk/address';
$heading = get_string('footeraddress', 'theme_bediuk');
$information = get_string('footeraddressdesc', 'theme_bediuk');
$default = '';
$setting = new admin_setting_configtext($name, $heading, $information, $default);
$page->add($setting);

// Website url setting.
$name = 'theme_bediuk/email';
$title = get_string('footeremail', 'theme_bediuk');
$description = get_string('footeremaildesc', 'theme_bediuk');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Blog url setting.
$name = 'theme_bediuk/phone';
$title = get_string('footerphone', 'theme_bediuk');
$description = get_string('footerphonedesc', 'theme_bediuk');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Facebook url setting.
$name = 'theme_bediuk/tutorials';
$title = get_string('footertutorials', 'theme_bediuk');
$description = get_string('footertutorialsdesc', 'theme_bediuk');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Flickr url setting.
$name = 'theme_bediuk/facebook';
$title = get_string('footerfacebook', 'theme_bediuk');
$description = get_string('footerfacebookdesc', 'theme_bediuk');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);
