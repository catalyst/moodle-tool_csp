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
 * @package   local_csp
 * @author    Suan Kan <suankan@catalyst-au.net>
 * @copyright Catalyst IT
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_csp\table;

defined('MOODLE_INTERNAL') || die;

require_once($CFG->libdir . '/tablelib.php');

/**
 * Class table_sql_time_pretty implements formatting unix timestamps columns to human time.
 * @package local_csp\table
 */
class table_sql_time_pretty extends \table_sql {
    protected function col_timecreated($local_csp_rec){
        if ($local_csp_rec->timecreated) {
            $timecreated = userdate($local_csp_rec->timecreated);
            return $timecreated;
        } else {
            return  '-';
        }
    }

    protected function col_timeupdated($local_csp_rec){
        if ($local_csp_rec->timeupdated) {
            $timeupdated = userdate($local_csp_rec->timeupdated);
            return $timeupdated;
        } else {
            return  '-';
        }
    }
}
