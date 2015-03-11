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
 * @subpackage taskchain
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['modulename'] = 'Hot Potatoes Exercise v2';
$string['modulename_help'] = 'The HotPot module allows teachers to distribute interactive learning materials to their students via Moodle and view reports on the students\' responses and results. .

A single HotPot activity consists of an optional entry page, a chain of tasks and an optional exit page. Each task may be a static web page or an interactive web page which offers students text, audio and visual prompts and records their responses. The tasks are created on the teacher\'s computer using authoring software and then uploaded to Moodle.

The teacher can define learning paths through a chain by adding pre-conditions and post-conditions to the tasks. A task cannot be attempted until all the pre-conditions have been satisfied. After the task is finished, the post-conditions define what is displayed next to the student.

A HotPot activity can contain tasks created with the following authoring software:

* Hot Potatoes (version 6)
* Qedoc
* Xerte
* iSpring
* any HTML editor';
$string['modulenameplural'] = 'Hot Potatoes Exercises';
$string['pluginadministration'] = 'TaskChain administration';
$string['pluginname'] = 'TaskChain';
$string['taskchain:addinstance'] = 'Add a new HotPot activity';
$string['taskchain:attempt'] = 'Attempt a HotPot activity and submit results';
$string['taskchain:deleteallattempts'] = 'Delete any user\'s attempts at a HotPot activity';
$string['taskchain:deletemyattempts'] = 'Delete your own attempts at a HotPot activity';
$string['taskchain:ignoretimelimits'] = 'Ignores time limits on a HotPot activity';
$string['taskchain:manage'] = 'Change the settings of a HotPot activity';
$string['taskchain:preview'] = 'Preview a HotPot activity';
$string['taskchain:regrade'] = 'Regrade a HotPot activity';
$string['taskchain:reviewallattempts'] = 'View any user\'s attempts at a HotPot activity';
$string['taskchain:reviewmyattempts'] = 'View your own attempts at a HotPot activity';
$string['taskchain:view'] = 'View the entry page of a HotPot activity';
$string['configbodystyles'] = 'By default, Moodle theme styles will override HotPot activity styles. However, for any styles selected here, the HotPot activity styles, including any styles defined in task source files such as Hot Potatoes files, will be given priority over the Moodle theme styles.';
$string['configenablecache'] = 'Maintaining a cache of HotPot tasks can dramatically speed up the delivery of tasks to the students.';
$string['configenablecron'] = 'Specify the hours in your time zone at which the HotPot cron script may run';
$string['configenablemymoodle'] = 'This settings controls whether HotPots are listed on the MyMoodle page or not';
$string['configenableswf'] = 'Allow embedding of SWF files in HotPot activities. If enabled, this setting overrides filter_mediaplugin_enable_swf.';
$string['configmaxeventlength'] = 'If a HotPot has both an open and a close time specified, and the difference between the two times is greater than the number of days specified here, then two separate calendar events will be added to the course calendar. For shorter durations, or when just one time is specified, only one calendar event will be added. If neither time is specified, no calendar event will be added.';
$string['configstoredetails'] = 'If this setting is enabled, then the raw XML details of attempts at HotPot tasks will be stored in the taskchain_details table. This allows task attempts to be regraded in the future to reflect changes in the HotPot task scoring system. However, enabling this option on a busy site will cause the taskchain_details table to grow very quickly.';
$string['event_attempt_started'] = 'HotPot attempt started';
$string['event_attempt_started_explanation'] = 'A user has just started an attempt at a HotPot activity';
$string['event_attempt_submitted'] = 'HotPot attempt submitted';
$string['event_attempt_submitted_explanation'] = 'A user has just submitted an attempt at a HotPot activity';
$string['event_base_explanation'] = 'An event was  detected by the HotPot module';
$string['event_chains_edited'] = 'HotPot chains edited';
$string['event_chains_edited_description'] = 'The user with id "{$a->userid}" edited all HotPot chains on the course with id "{$a->courseid}"';
$string['event_chains_edited_explanation'] = 'A user has just edited all the HotPot chains on a course';
$string['event_columnlists_edited'] = 'HotPot column lists edited';
$string['event_columnlists_edited_explanation'] = 'A user has just edited the column lists for a HotPot activity';
$string['event_condition_edited'] = 'HotPot condition edited';
$string['event_condition_edited_explanation'] = 'A user has just edited a condition on a HotPot activity';
$string['event_report_viewed'] = 'HotPot report viewed';
$string['event_report_viewed_explanation'] = 'A user has just viewed a report on attempts at a HotPot activity';
$string['event_task_edited'] = 'HotPot task edited';
$string['event_task_edited_explanation'] = 'A user has just edited a task on a HotPot activity';
$string['event_tasks_edited'] = 'HotPot tasks edited';
$string['event_tasks_edited_explanation'] = 'A user has just edited all tasks on a HotPot activity';
$string['activitycloses'] = 'HotPot activity closes';
$string['activityopens'] = 'HotPot activity opens';
$string['allowfreeaccess_help'] = 'This setting specifies whether or not students are given free access to the tasks in this HotPot.

Once students have free access, they can access any task in the HotPot, regardless of the tasks\' pre-conditions and post-conditions.

**No**
: The students will not be given free access to tasks in the HotPot. In other words, access to the tasks will always be controlled by the tasks\' pre-conditions and post-conditions.

**Yes: Grades**
: The students will be given free access to the tasks in the HotPot, once they have achieved the required grade

**Yes: Attempts**
: The students will be given free access to the tasks in the HotPot, once they have completed the required number of attempts.';
$string['assessment_help'] = 'The assessment settings for HotPot chains and tasks define the following:

<ul>
<li>how the task attempts are combined to form a single task score</li>
<li>the contribution of the task score toward the grade for a single chain attempt</li>
<li>how the chain attempt grades are combined to get a single chain grade</li>
</ul>

**Task attempt scores**
The task attempt scores are normalized using the following calculation:

<table border="0"><tbody><tr>
<td align="center" valign="middle">
<tt>(attempt score - minimum score)</tt>
<tt>------------------------------</tt><br \>
<tt>maximum score</tt>
</td>
<td align="center" valign="middle"><big><big> &nbsp; X &nbsp; </big></big></td>
<td align="center" valign="middle">
<tt>score limit</tt>
<tt>-----------</tt><br \>
<tt>100</tt>
</td>
</tr></tbody></table>

**Task score**
Depending on the task\'s scoring method setting, the score for the task is set to the first, last, highest or average of the normalized task attempt scores.

The task scores are then weighted using the following calculation:

<table border="0"><tbody><tr>
<td align="center" valign="middle">
<tt>task score</tt>
</td>
<td align="center" valign="middle"><big><big> &nbsp; X &nbsp; </big></big></td>
<td align="center" valign="middle">
<tt>score weighting</tt>
<tt>--------------</tt><br \>
<tt>100</tt>
</td>
</tr></tbody></table>

**Chain attempt grade**
The chain attempt grade is set to the total, highest or last of the weighted task scores, depending on the chain\'s attempt grade method setting.

**Chain grade**
The grade for the chain is set to the first, last, highest or average chain attempt grade, depending on the chain\'s grade method setting.

Finally, the grade is weighted according to the following calculation:

<table border="0"><tbody><tr>
<td align="center" valign="middle">
<tt>chain grade</tt>
</td>
<td align="center" valign="middle"><big><big> &nbsp; X &nbsp; </big></big></td>
<td align="center" valign="middle">
<tt>grade weighting</tt>
<tt>-----------</tt><br \>
<tt>100</tt>
</td>
</tr></tbody></table>';
$string['attemptgrademethod_help'] = 'This setting defines how the grade for a single attempt at this HotPot activity is calculated.

**Total**
: The attempt grade will be set to the sum of the weighted task scores.

**Highest**
: The attempt grade will be set to highest weighted task score.

**Last**
: The attempt grade will be set to the weighted score of the most recently attempted task.

**Last (completed)**
: The attempt grade will be set to the weighted score of the most recently attempted task whose status is "completed". Other task scores will be ignored.

**Last (timed out)**
: The attempt grade will be set to the weighted score of the most recently attempted task whose status is "completed" or "timed out". Other task scores will be ignored.

**Last (abandoned)**
: The attempt grade will be set to the weighted score of the most recently attempted task whose status is "completed" or "timed out" or "abandoned". Tasks whose status is "in progress" will be ignored.';
$string['attemptlimit_help'] = 'The maximum number of attempts a student may have at this HotPot activity';
$string['cacherecords'] = 'HotPot cache records';
$string['chain'] = 'HotPot activity';
$string['chainname_help'] = 'The name of this HotPot activity that will be displayed on the course page';
$string['clearcache'] = 'Clear HotPot cache';
$string['cleardetails'] = 'Clear HotPot details';
$string['clearedcache'] = 'The HotPot cache has been cleared';
$string['cleareddetails'] = 'The HotPot details have been cleared';
$string['detailsrecords'] = 'HotPot details records';
$string['editcolumnlistschain'] = 'Edit columns for HotPot Chains';
$string['editcolumnliststask'] = 'Edit columns for HotPot Tasks';
$string['enablecache'] = 'Enable HotPot cache';
$string['enablecron'] = 'Enable HotPot cron';
$string['enablemymoodle'] = 'Show HotPots on MyMoodle';
$string['enableswf'] = 'Allow embedding of SWF files in HotPot activities';
$string['entrycm_help'] = 'This setting specifies a Moodle activity and a minimum grade for that activity which must be achieved before this HotPot activity can be attempted.

The teacher can select a specific activity,
or one of the following general purpose settings:

* Previous activity in this course
* Previous activity in this section
* Previous graded activity in this course
* Previous graded activity in this section
* Previous HotPot in this course
* Previous HotPot in this section';
$string['entryoptions_help'] = 'These check boxes enable and disable the display of items on the HotPot\'s entry page.

**Chain name as title**
: if checked, the chain name will be displayed as the title of the entry page.

**Grading**
: if checked, the HotPot\'s grading information will be displayed on the entry page.

**Dates**
: if checked, the HotPot\'s open and close dates will be displayed on the entry page.

**Attempts**
: if checked, a table showing details of a user\'s previous attempts at this HotPot will be displayed on the entry page. Attempts that may be resumed will have a resume button displayed in the rightmost column.';
$string['entrypage_help'] = 'Should the students be shown an initial page before starting the HotPot activity?

**Yes**
: the students will be shown an entry page before starting the HotPot. The contents of the entry page are determined by the HotPot\'s entry page options.

**No**
: the students will not be shown an entry page, and will start the HotPot immediately.

An entry page is always shown to the teacher, in order to provide access to the reports and edit tasks page';
$string['entrytaskchaincourse'] = 'Previous HotPot in this course';
$string['entrytaskchainsection'] = 'Previous HotPot in this course section';
$string['error_unrecognizedpageid'] = 'HotPot pageid not recognized: {$a}';
$string['exit_feedback_help'] = 'These options enable and disable the display of feedback items on a HotPot\'s exit page.

**Chain name as title**
: if checked, the chain name will be displayed as the title of the exit page.

**Encouragement**
: if checked, some encouragement will displayed on the exit page. The encouragement depends on the HotPot grade:
: **> 90%**: Excellent!
: **> 60%**: Well done
: **> 0%**: Good try
: **= 0%**: Are you OK?

**Chain attempt grade**
: if checked, the grade for the chain attempt that has just been completed will be displayed on the exit page.

**Chain grade**
: if checked the HotPot grade will be displayed on the exit page.

In addition, if the chain grading method is highest a message to tell the user if the most recent attempt was equal to or better than their previous will be displayed.';
$string['exit_links_help'] = 'These options enable and disable the display of certain navigation links on a HotPot\'s exit page.

**Retry**
: if multiple attempts are allowed at this HotPot and the student still has some attempts left, a link to allow the student to retry the HotPot will be displayed

**Index**
: if checked, a link to the HotPot index page will be displayed.

**Course**
: if checked, a link to the Moodle course page will be displayed.

**Grades**
: if checked, a link to the Moodle gradebook will be displayed.';
$string['exitcm_help'] = 'This setting specifies a Moodle activity to be done after this HotPot activity is completed. The optional grade is the minimum grade for this HotPot that is required for the next activity to be shown.

The teacher can select a specific activity, or a one of the following general purpose settings:

* Next activity in this course
* Next activity in this section
* Next graded activity in this course
* Next graded activity in this section
* Next HotPot in this course
* Next HotPot in this section

If other exit page options are disabled and the student has achieved the required grade on this HotPot activity, the next activity will be shown straight away. Otherwise, the student will be shown a link to the next activity, which they can click when they are ready.';
$string['exitpage_help'] = 'Should a exit page displayed after the HotPot task has been completed?

**Yes**
: the students will be shown an exit page when the HotPot is completed. The contents of the exit page are determined by the settings for the HotPot\'s exit page feedback and links.

**No**
: the students will not be shown an exit page. Instead, they will either go immediately to the next activity or return to the Moodle course page.';
$string['exittaskchaincourse'] = 'Next HotPot in this course';
$string['exittaskchainsection'] = 'Next HotPot in this course section';
$string['filteredchains'] = 'HotPots matching the following filters:';
$string['gradeignore_help'] = 'This setting specifies whether void attempts, i.e. abandoned attempts with a grade of 0%, are ignored or included when students\' grades for this HotPot are calculated.

**Yes**
: Void attempts are *ignored* during the calculation of grades for this HotPot activity.

**No**
: Void attempts are *not ignored*, that is to say they are *included* in the calculation of grades for this HotPot activity.

Void attempts occur when a student starts a HotPot activity, but then does not attempt to answer an questions in any tasks, before leaving. Such attempts can have a significant impact on the grade when the grading method is Average, First or Last. In such situations, the teacher may decide that it is better to ignore the void attempts when the grade is calculated.';
$string['gradelimit_help'] = 'The grades for chain attempts are scaled to fit in the range 0 to grade limit.

The maximum grade for a HotPot activity in the Moodle gradebook is calculated as follows:

: maximum grade x (grade weighting / 100)';
$string['grademethod_help'] = 'This setting defines how the HotPot activity grade is calculated from the attempt grades.

**Highest score**
: the activity grade will be set to the highest grade for an attempt at this HotPot activity.

**Average scsore**
: the grade will be set to the average grade for attempts at this HotPot activity.

**First attempt**
: the grade will be set to the grade of the first attempt at this HotPot activity.

**Last attempt**
: the grade will be set to the grade of the most recent attempt at this HotPot activity.';
$string['gradeweighting_help'] = 'Grades for this HotPot activity will be scaled to this number in the Moodle gradebook.';
$string['guestsno'] = 'Sorry, guests cannot see or attempt HotPot activities';
$string['mediafilter_taskchain'] = 'HotPot media filter';
$string['migratingfiles'] = 'Migrating HotPot task files';
$string['migratinglogs'] = 'Migrating HotPot logs';
$string['missingsourcetype'] = 'HotPot record is missing sourcetype';
$string['mods_help'] = '<img src="http://localhost/24/mod/taskchain/icon.gif" alt="" /> **HotPot**

The HotPot module allows teachers to distribute interactive learning materials via Moodle and view details of the students\' responses.
The materials are created on the teacher\'s computer using authoring software such as
<a href="http://web.uvic.ca/hrd/halfbaked/" target="_blank">Hot Potatoes</a> and
<a href="http://www.qedoc.org/" target="_blank">Qedoc</a>, and then uploaded to the Moodle course.

After students have attempted the tasks, a number of reports are available which show how individual questions were answered and some statistical trends in the scores.';
$string['nosourcefilesettings'] = 'HotPot record is missing source file information';
$string['notaskchains'] = 'No HotPots found';
$string['notasksinchain'] = 'There are no tasks in this HotPot chain';
$string['previewchainnow'] = 'Preview HotPot activity now';
$string['removegradeitem_help'] = 'Should the grade item for this activity be removed?

**No**
: the grade item for this activity in the Moodle gradebook will not be removed

**Yes**
: If the maximum grade for this HotPot is set to &quot;No grade&quot; or the grade weighting is set to &quot;No weighting&quot;, then the grade item for this activity will be removed from the Moodle gradebook';
$string['selectedchains'] = 'Selected HotPots in this course';
$string['selectedtasks'] = 'Selected tasks in this HotPot';
$string['showerrormessage'] = 'HotPot error: {$a}';
$string['showpopup_help'] = '**Same window**
The HotPot activity will be shown in the same window as the Moodle course page.

**New window**
The HotPot activity will be shown in a popup window.
Several features of the popup window can be enabled or disabled with check boxes.
The required width and height of the popup window are specified as a number of pixels.';
$string['storedetails'] = 'Store the raw XML details of HotPot task attempts';
$string['taskaction_help'] = 'These options specify what action will be taken when the "Go" button is clicked.

**Reorder tasks**
: The tasks will be reordered according to the new sort numbers.

**Add (more) tasks**
: A new web page will be displayed from where you can add one or more new tasks to this HotPot activity.

**Move tasks**
: The selected tasks will be moved to a different place in this HotPot activity, or to another HotPot activity.

**Apply selected default values**
: The selected default values will be applied to the selected tasks.

**Delete tasks**
: The selected tasks will be deleted from the HotPot activity.';
$string['taskchainname'] = 'HotPot name';
$string['timelimit_help'] = 'This setting specifies the maximum duration of a single attempt.

**Use settings in source/template file**
: the time limit will be taken from the source file or the template files for this output format

**Use specific time**
: the time limit specified on the HotPot task settings page will be used as the time limit for an attempt at this task. This setting overrides time limits in the source file, configuration file, or template files for this output format.

**Disable**
: no time limit will be set for attempts at this task.

Note that if an attempt is resumed, the timer continues from where the attempt was previously paused.';
$string['title_help'] = 'This setting specifies the title to be displayed on the web page.

**HotPot activity name**
: the name of this HotPot activity will be displayed as the web page title.

**Get from source file**
: the title, if any, defined in the source file will be used as the web page title.

**Use source file name**
: the source file name, excluding any folder names, will be used as the web page title.

**Use source file path**
: the source file path, including any folder names, will be used as the web page title.';
$string['toolsindex'] = 'HotPot Tools index';
$string['updatinggrades'] = 'Updating HotPot grades';
$string['usemediafilter_help'] = 'This setting specifies the media filter to be used.

**None**
: the content will not be passed through any media filters.

**Moodle\'s standard media filters**
: the content will be passed through Moodle\'s standard media filters. These filters search for links to common types of sound and movie file, and convert those links to suitable media players.

**HotPot media filter**
: the content will be passed through filters which detect links, images, sounds and movies to be specified using a square bracket notation.

The square-bracket notation has the following syntax:
<code>[url player width height options]</code>

**url**
: the relative or absolute url of the media file

**player** (optional)
: the name of the player to be inserted. The default value for this setting is "moodle". The standard version of the HotPot module also offers the following players:
: **dew**: an mp3 player
: **dyer**: mp3 player by Bernard Dyer
: **hbs**: mp3 player from Half-Baked Software
: **image**: insert an image into the web page
: **link**: insert a link to another web page

**width** (optional)
: the required width of the player

**height** (optional)
: the required height of the player. If omitted this value will be set to the same as the width setting.

**options** (optional)
: a comma-separated list options to be passed to the player. Each option can be a simple on/off switch, or a name value pair.
: *name*
: *name=value*
: *name="some value with spaces"*';
$string['window_help'] = 'Show the activity in the main Moodle window, or in a popup window.

**Same window**
: The HotPot activity will be shown in the same window as the Moodle course page.

**New window**
: The HotPot activity will be shown in a popup window. Several features of the popup window can be enabled or disabled with check boxes. The required width and height of the popup window are specified as a number of pixels.';
$string['youneedtoenrol'] = 'You need to enrol in this course before you can attempt this HotPot activity';
