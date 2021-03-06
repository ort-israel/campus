<?php
/**
 * Created by PhpStorm.
 * User: lcohen
 * Date: 21/02/2018
 * Time: 15:36
 */

namespace theme_aviv2020\output;

defined('MOODLE_INTERNAL') || die;

class mod_hvp_renderer extends \mod_hvp_renderer {

    public function hvp_alter_styles(&$styles, $libraries, $embedType) {
        global $CFG;

        $styles[] = (object)array(
            'path' => $CFG->httpswwwroot . '/theme/aviv2020/style/h5p_cp_overrides.css',
            'version' => '?ver=0.0.1',
        );

    }

}