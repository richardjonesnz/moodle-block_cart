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
 * Event observers used in this plugin
 *
 * @package    enrol_cart
 * @copyright  Richard Jones <richard@hrdnz.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace enrol_cart;
use core\plugininfo\base, core_plugin_manager;

defined('MOODLE_INTERNAL') || die();

/**
 * Find courses with a paypal enrolment option
 */
class list_plugins {

    /**
     *
     * @return array of plugins of type enrol
     */
    public static function get_plugins_list() {
        global $DB;
        $plugins = core_plugin_manager::instance()->get_plugins_of_type('enrol');
        return $plugins;
   }
}
