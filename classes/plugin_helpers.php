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

defined('MOODLE_INTERNAL') || die();

/**
 * Utility classes
 */
class plugin_helpers {

    /**
     *
     * @return true if paypal is installed and configured
     *
     */
    public static function is_installed_paypal() {
        
        $client = \core\update\api::client(); 
        $client->find_plugin('enrol_paypal');
        if ($client) {
        	// Check if configured with paypal account
        	print_r($client);
            return true;
        }
        return false;
   }
}
