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
 * @package    core
 * @subpackage group
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enrolmentkey_help'] = 'An enrolment key enables access to the module to be restricted to only those who know the key. If a group enrolment key is specified, then not only will entering that key let the user into the module, but it will also automatically make them a member of this group.';
$string['groupingnameexists'] = 'The grouping name \'{$a}\' already exists in this module, please choose another one.';
$string['groupmodeforce_help'] = 'If group mode is forced, then the module group mode is applied to every activity in the module. Group mode settings in each activity are then ignored.';
$string['groupmode_help'] = 'This setting has 3 options: * No groups - There are no sub groups, everyone is part of one big community * Separate groups - Each group member can only see their own group, others are invisible * Visible groups - Each group member works in their own group, but can also see other groups The group mode defined at module level is the default mode for all activities within the module. Each activity that supports groups can also define its own group mode, though if the group mode is forced at module level, the group mode setting for each activity is ignored.';
$string['groupnameexists'] = 'The group name \'{$a}\' already exists in this module, please choose another one.';
$string['nogroups'] = 'There are no groups set up in this module yet';
