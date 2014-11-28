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
 * Local language pack from https://moodle.kent.ac.uk/2014
 *
 * @package    block
 * @subpackage kent_rollover
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['in_block_edit_mode'] = 'Rollover block details hidden in edit mode. Turn editing off to use the rollover block. You can remove the rollover block by clicking the X in the panel above.';
$string['pluginname'] = 'Module Content Rollover';
$string['printhelp_help'] = 'View the options above to rollover content from another module.';
$string['rollover_status_complete_text'] = 'Your rollover is now complete. Click the x icon in editing mode to remove this block.';
$string['rollover_status_failed_text'] = 'Your rollover has failed. Please click the link below to try again and contact your FLT if the problem persists.';
$string['rollover_status_none_text'] = 'Your module is ready for rollover. Please click the link below.';
$string['rollover_status_processing_text'] = 'Your rollover is currently in progress. Please check back later.';
