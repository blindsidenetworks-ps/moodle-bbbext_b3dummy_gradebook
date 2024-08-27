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
     * @param instance|null $instance BigBlueButton instance if any
     * @param string|null $data data to be processed
     */
    public function __construct(?instance $instance = null, ?string $data = null) {
        parent::__construct($instance, $data);
    }

    /**
     * Update the grade item for a given activity
     */
    public function grade_item_update($grades=NULL){
        error_log('[bbbext_b3dummy_gradebook] grade_item_update' . $this->modinstance, DEBUG_DEVELOPER);
    }

    /**
     * Update the grade(s) for the supplied user
     */
    public function update_grades($userid=0, $nullifnone=true) {
        error_log('[bbbext_b3dummy_gradebook] update_grades' . $this->modinstance, DEBUG_DEVELOPER);
    }
}
