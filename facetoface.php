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
 * @package    mod
 * @subpackage facetoface
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowoverbook_help'] = '<p>When "Allow overbooking" is checked, learners will be able to sign up for a session even if it is already full.</p> <p>When a learner signs up for a session that is already full, they will receive an email advising that they have been waitlisted for the session and will be notified when a booking becomes available.</p>';
$string['alreadysignedup'] = 'You have already signed-up for this Event.';
$string['approvalreqd_help'] = '<h1>Approval Required</h1> <p>When "Approval required" is checked, a learner will need approval from their manager to be permitted to attend a session.</p>';
$string['calendareventdescriptionbooking'] = 'You are booked for this <a href="{$a}">session</a>.';
$string['calendareventdescriptionsession'] = 'You have created this <a href="{$a}">session</a>.';
$string['cancellationinstrmngr_help'] = '<p>When <strong>Send notice to manager</strong> is checked, the text in the <strong>Notice for manager</strong> field is sent to a learner\'s manager advising that they have cancelled a booking.</p>';
$string['capacity_help'] = '<h1>Capacity</h1> <p><strong>Capacity</strong> is the number of seats available in a session.</p> <p>When a session reaches capacity the session details do not appear on the course page. The details will appear greyed out on the \'View all sessions\' page and the learner cannot enrol on the session.</p> <p>&nbsp;</p>';
$string['confirmationinstrmngr_help'] = '<p>When "Send notice to manager" is checked, the text in the "Notice for manager" field is sent to a manager advising that a staff member has signed up for a session.</p>';
$string['description_help'] = '<h1>Description</h1> <p><strong>Description</strong> is the course description that displays when a learner enrols on a session. </p> <p>The <strong>Description</strong> also displays in the training calendar.</p>';
$string['emailmanagercancellation_help'] = '<p>When "Send notice to manager" is checked, an email will be sent to the learner\'s manager advising them that the booking has been cancelled.</p>';
$string['emailmanagerconfirmation_help'] = '<p>When "Send notice to manager" is checked, a confirmation email will be sent to the learner\'s manager when the learner signs up for a session.</p>';
$string['emailmanagerreminder_help'] = '<p>When "Send notice to manager" is checked, a reminder message will be sent to the learner\'s manager a few days before the start date of the session.</p>';
$string['error:addalreadysignedupattendee'] = '{$a} is already signed-up for this Event.';
$string['error:couldnotupdatef2frecord'] = 'Could not update Event signup record in database';
$string['error:f2ffailedupdatestatus'] = 'Failed to update the user\'s status';
$string['error:incorrectcoursemodulesession'] = 'Module Event Session was incorrect';
$string['error:incorrectfacetofaceid'] = 'Event ID was incorrect';
$string['error:signedupinothersession'] = 'You are already signed up in another session for this activity. You can only sign up for one session per Event activity.';
$string['facetoface'] = 'Event';
$string['facetoface:addattendees'] = 'Add attendees to a session';
$string['facetoface:editsessions'] = 'Add, edit, copy and delete sessions';
$string['facetoface:removeattendees'] = 'Remove attendees from a session';
$string['facetoface:view'] = 'View Event activities and sessions';
$string['facetoface:viewemptyactivities'] = 'View empty Event activities';
$string['facetofacebooking'] = 'Event booking';
$string['facetofacename'] = 'Event Name';
$string['facetofacesession'] = 'Event Session';
$string['mods_help'] = '<h1>Event Activity</h1> <p>Event activities are used to keep track of in-person trainings which require advance booking.</p> <p>Each activity is offered in one or more identical sessions. These sessions can be given over multiple days.</p> <p>Reminder messages are sent to users and their managers a few days before the session is scheduled to start. Confirmation messages are sent when users sign-up for a session or cancel.</p>';
$string['modulename'] = 'Event';
$string['modulenameplural'] = 'Events';
$string['nofacetofaces'] = 'There are no Event activities';
$string['pluginname'] = 'Event';
$string['previoussessionslist'] = 'List of all past sessions for this Event';
$string['reminderinstrmngr_help'] = '<p>When <strong>Send notice to manager</strong> is checked, the text in the <strong>Notice for Manager</strong> field is sent to a learner\'s manager advising that they have signed up for a session.</p>';
$string['requestmessage_help'] = '<h1>Request Message</h1> <p>When <strong>Approval required</strong> is enabled, the <strong>Request message</strong> section is available.</p> <p>The <strong>Request message</strong> section displays the notices sent to the learner and their manager regarding the approval process for the learner to attend the session.</p> <p><strong>Subject:</strong> is the subject line that appears on the request approval emails sent to the manager and the learner.</p> <p><strong>Message:</strong> is the email text sent to the learner advising them that their request to attend the session has been sent to their manager for approval.</p> <p><strong>Notice for manager:</strong> is the email text sent to the learner\'s manager requesting approval to attend the session.</p>';
$string['sessiondatetimeknown_help'] = '<p><b>If a session\'s date/time is known</b></p> <p>If "Yes" is entered for this setting, the session date and time will be displayed on the course page (if the session is upcoming and available), the "View all sessions page", the session sign-up page, as well as all email notifications related to the session.</p> <p>When a staff member signs up for a session with a known date and time:</p> <ul> <li>The staff member and the staff member\'s manager will be sent a confirmation email (i.e., the one formatted per the "Confirmation message" section of the Event instance\'s settings).</li> <li>The staff member will be sent a reminder email message (i.e., the one formatted per the "Reminder message" section of the Event instance\'s settings). The reminder will be sent a number of days before the session, according to the "Days before message is sent" setting also found in the "Reminder message" section of the Event instance\'s settings.</li> </ul> <p><b>If a session\'s date/time is not known (or wait-listed)</b></p> <p>If "No" is entered for this setting, the text "wait-listed" will be displayed on the course page, the "View all sessions page", the session sign-up page, as well as all email notifications related to the session.</p> <p>When a staff member signs up for a wait-listed session:</p> <ul> <li>The staff member will be sent a confirmation email (i.e. the one formatted per the "Wait-listed message" section of the Event instance\'s settings).</li> <li>The staff member will not be sent a reminder email message.</li> <li>The staff member\'s manager will not be sent confirmation and cancellation email messages.</li> </ul>';
$string['sessionsoncoursepage_help'] = '<h1>Sessions on Course Page</h1> <p>This is the number of sessions for each Event activity that will be shown on the main course page.</p>';
$string['setting:sessionroles'] = 'Users assigned to the selected roles in a course can be tracked with each session';
$string['showoncalendar_help'] = '<h1>Show on the Calendar</h1> <p>When <strong>Show on the Calendar</strong> is enabled the Event activity sessions display on the site-wide calendar.</p> <p>Please only use this setting when your event is available to <strong>all students</strong></p>';
$string['signupforthissession'] = 'Sign-up for this session';
$string['suppressemail_help'] = '<h1>Suppress email notification</h1> <p>Use this option if you want to silently add/remove users from a session. When this option is toggled, the usual email confirmation is not sent to the selected users.</p>';
$string['upcomingsessionslist'] = 'List of all upcoming sessions for this Event activity';
