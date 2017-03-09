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
 * Settings for component 'enrol_cart'
 *
 * @package     enrol_cart
 * @author      Richard Jones <richard@hrdnz.com> - based on code by Eugene Ventner, Martin Dougiamas and others
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

     require_once($CFG->dirroot.'/enrol/cart/lib.php');
    //--- settings ------------------------------------------------------------------------------------------
    $settings->add(new admin_setting_heading('enrol_cart_settings', '', get_string('description', 'enrol_cart')));

    $mods = \enrol_cart\list_plugins::get_plugins_list();
    $viewmods = array();
    foreach ($mods as $modname) {
        $viewmods[$modname] = get_string('pluginname', $modname->name);
    }
    $settings->add(new admin_setting_configmulticheckbox('enrol_cart/viewplugins',
        new lang_string('viewplugins', 'enrol_cart'),
        new lang_string('viewplugins_desc', 'enrol_cart'), array(), $viewmods));
}
        