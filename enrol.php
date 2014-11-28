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
 * @subpackage enrol
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Available module enrolment plugins';
$string['assignnotpermitted'] = 'You do not have permission or can not assign roles in this module.';
$string['defaultenrol'] = 'Add instance to new modules';
$string['defaultenrol_desc'] = 'It is possible to add this plugin to all new modules by default.';
$string['enrolme'] = 'Enrol me in this module';
$string['enrolmentnewuser'] = '{$a->user} has enrolled in module "{$a->course}"';
$string['enrolnotpermitted'] = 'You do not have permission or are not allowed to enrol someone in this module';
$string['errorenrolcohort'] = 'Error creating cohort sync enrolment instance in this module.';
$string['errorenrolcohortusers'] = 'Error enrolling cohort members in this module.';
$string['extremovedaction_help'] = 'Select action to carry out when user enrolment disappears from external enrolment source. Please note that some user data and settings are purged from module during module unenrolment.';
$string['extremovedsuspend'] = 'Disable module enrolment';
$string['extremovedsuspendnoroles'] = 'Disable module enrolment and remove roles';
$string['extremovedunenrol'] = 'Unenrol user from module';
$string['noguestaccess'] = 'Guests can not access this module, please try to log in.';
$string['notenrollable'] = 'You can not enrol yourself in this module.';
$string['otheruserdesc'] = 'The following users are not enrolled in this module but do have roles, inherited or assigned within it.';
$string['rolefromcategory'] = '{$a->role} (Inherited from category)';
$string['rolefrommetacourse'] = '{$a->role} (Inherited from parent module)';
$string['rolefromthiscourse'] = '{$a->role} (Assigned in this module)';
$string['unassignnotpermitted'] = 'You do not have permission to unassign roles in this module';
$string['unenrolnotpermitted'] = 'You do not have permission or can not unenrol this user from this module.';
