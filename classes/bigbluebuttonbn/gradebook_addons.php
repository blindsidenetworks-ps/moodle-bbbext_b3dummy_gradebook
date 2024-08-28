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

namespace bbbext_b3dummy_gradebook\bigbluebuttonbn;

use stdClass;
use mod_bigbluebuttonbn\instance;

/**
 * A ....
 * When meeting_events callback is implemented by BigBlueButton, Moodle receives a POST request
 * which is processed in the function using super globals.
 *
 * @package   bbbext_b3dummy_gradebook
 * @copyright 2024 onwards, Blindside Networks Inc
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Jesus Federico  (jesus [at] blindsidenetworks [dt] com)
 */
class gradebook_addons extends \mod_bigbluebuttonbn\local\extension\gradebook_addons {

    /**
     * Constructor
     *
     * @param stdClass|null $modinstance BigBlueButton instance if any
     */
    public function __construct(?stdClass $modinstance = null) {
        parent::__construct($modinstance);
    }

    /**
     * Update the grade item for a given activity
     */
    public function grade_item_update($grades=NULL){
        $bigbluebuttonbn = $this->modinstance;

        // Since the grade item is not updated by any extension, we update it here.
        $params = array('itemname' => $bigbluebuttonbn->name);
        if ($bigbluebuttonbn->grade > 0) {
            $params['gradetype'] = GRADE_TYPE_VALUE;
            $params['grademax']  = $bigbluebuttonbn->grade;
            $params['grademin']  = 0;

        } else {
            $params['gradetype'] = GRADE_TYPE_NONE;
        }

        return grade_update('mod/bigbluebuttonbn', $bigbluebuttonbn->course, 'mod', 'bigbluebuttonbn', $bigbluebuttonbn->id, 0, $grades, $params);
    }

    /**
     * Update the grade(s) for the supplied user
     */
    public function update_grades($userid=0, $nullifnone=true) {
        error_log('[bbbext_b3dummy_gradebook] update_grades' . $this->modinstance, DEBUG_DEVELOPER);
    }
}
