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
 * A two column layout for the boost theme.
 *
 * @package   theme_boost
 * @copyright 2016 Damyon Wiese
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

user_preference_allow_ajax_update('drawer-open-nav', PARAM_ALPHA);
global $OUTPUT, $SITE, $PAGE, $CFG;

require_once($CFG->libdir . '/behat/lib.php');

if (isloggedin() && !behat_is_test_site()) {
    $navdraweropen = (get_user_preferences('drawer-open-nav', 'true') == 'true');
} else {
    $navdraweropen = false;
}
$extraclasses = [];
if ($navdraweropen) {
    $extraclasses[] = 'drawer-open-left';
}

$bodyattributes = $OUTPUT->body_attributes($extraclasses);
$blockshtml = $OUTPUT->blocks('side-pre');
$blocksabovecontent = $OUTPUT->blocks('above-content');
$hasblocks = strpos($blockshtml, 'data-block=') !== false;
$hasabovecontentblocks = strpos($blocksabovecontent, 'data-block=') !== false;
$regionmainsettingsmenu = $OUTPUT->region_main_settings_menu();
$templatecontext = [
    'sitename' => format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID))),
    'output' => $OUTPUT,
    'sidepreblocks' => $blockshtml,
    'hasblocks' => $hasblocks,
    'abovecontentblocks' => $blocksabovecontent,
    'hasabovecontentblocks' => $hasabovecontentblocks,
    'bodyattributes' => $bodyattributes,
    'navdraweropen' => $navdraweropen,
    'regionmainsettingsmenu' => $regionmainsettingsmenu,
    'hasregionmainsettingsmenu' => !empty($regionmainsettingsmenu),
];

// Lea 2018 - we don't have a toggledrawermenu setting
growth_pedagogy_boostnavigation_extend_navigation($PAGE->navigation);
growth_pedagogy_local_navigation_extend_navigation($PAGE->navigation);

//Tsofiya 2018: add scroll to top link
$PAGE->requires->jquery();
$PAGE->requires->js('/theme/growth_pedagogy/javascript/scrolltotop.js');


$templatecontext['flatnavigation'] = $PAGE->flatnav;
echo $OUTPUT->render_from_template('theme_growth_pedagogy/frontpage', $templatecontext);