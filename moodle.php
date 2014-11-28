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
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activities_help'] = 'Activities, such as forums, quizzes and wikis, enable interactive content to be added to the module.';
$string['activitymodule'] = 'Activity plugin';
$string['activitymodules'] = 'Activity plugins';
$string['addcreator'] = 'Add module creator';
$string['addedtogroupnotenrolled'] = 'Not added to group "{$a}", because not enrolled in module';
$string['addnewcourse'] = 'Add a new module';
$string['adminhelpassigncreators'] = 'Module creators can create new modules';
$string['adminhelpassignstudents'] = 'Go into a module and add students from the admin menu';
$string['adminhelpcourses'] = 'Define modules and categories and assign people to them, edit pending modules';
$string['adminhelpmanagemodules'] = 'Manage installed plugins and their settings';
$string['administratordescription'] = 'Administrators can usually do anything on the site, in all modules.';
$string['areyousuretorestorethisinfo'] = 'Later in this process you will have a choice of adding this backup to an existing module or creating a completely new module.';
$string['availablecourses'] = 'Available modules';
$string['backtocourselisting'] = 'Back to module listing';
$string['backupcoursefileshelp'] = 'If enabled then module files will be included in automated backups';
$string['backupfailed'] = 'Some of your modules weren\'t saved!';
$string['backupincludemoduleshelp'] = 'Choose whether you want to include module plugins, with or without user data, in automated backups';
$string['backupincludemoduleuserdatahelp'] = 'Choose whether you want to include plugin user data in automated backups.';
$string['backupkeephelp'] = 'How many recent backups for each module do you want to keep? (older ones will be deleted automatically)';
$string['backupmissinguserinfoperms'] = 'Note: This backup contains no user data. Exercise and Workshop activities will not be included in the backup, since these activity plugins are not compatible with this type of backup.';
$string['backupsitefileshelp'] = 'If enabled then site files used in modules will be included in automated backups';
$string['bycourseorder'] = 'By module order';
$string['categories'] = 'Module categories';
$string['categorycontents'] = 'Subcategories and modules';
$string['checkingcourse'] = 'Checking module';
$string['childcoursenotfound'] = 'Child module not found!';
$string['childcourses'] = 'Child modules';
$string['choosecourse'] = 'Choose a module';
$string['continuetocourse'] = 'Click here to enter your module';
$string['copyingcoursefiles'] = 'Copying module files';
$string['copyingsitefiles'] = 'Copying site files used in module';
$string['course'] = 'Module';
$string['courseadministration'] = 'Module administration';
$string['courseapprovedemail'] = 'Your requested module, {$a->name}, has been approved and you have been made a {$a->teacher}. To access your new module, go to {$a->url}';
$string['courseapprovedemail2'] = 'Your requested module, {$a->name}, has been approved. To access your new module, go to {$a->url}';
$string['courseapprovedfailed'] = 'Failed to save the module as approved!';
$string['courseapprovedsubject'] = 'Your module has been approved!';
$string['courseavailable'] = 'This module is available to students';
$string['courseavailablenot'] = 'This module has not been made available yet by the teaching staff. Please contact the lecturer or convenor if you think you should have access.';
$string['coursebackup'] = 'Module backup';
$string['coursecategories'] = 'Module categories';
$string['coursecategory'] = 'Module category';
$string['coursecategorydeleted'] = 'Deleted module category {$a}';
$string['coursecompletion'] = 'Module completion';
$string['coursecompletions'] = 'Module completions';
$string['coursecreators'] = 'Module creator';
$string['coursecreatorsdescription'] = 'Module creators can create new modules.';
$string['coursedeleted'] = 'Deleted module {$a}';
$string['courseextendednamedisplay'] = '{$a->shortname}: {$a->fullname}';
$string['coursefiles'] = 'Legacy module files';
$string['coursefilesedit'] = 'Edit legacy module files';
$string['coursefileswarning'] = 'Modules files are deprecated';
$string['coursefileswarning_help'] = 'Module files are deprecated since Moodle 2.0, please use external repositories instead as much as possible.';
$string['courseformatdata'] = 'Module format data';
$string['courseformats'] = 'Module formats';
$string['coursegrades'] = 'Module grades';
$string['coursehelpcategory'] = 'Position the module on the module listing and may make it easier for students to find it.';
$string['coursehelpforce'] = 'Force the module group mode to every activity in the module.';
$string['coursehelpformat'] = 'The module main page will be displayed in this format.';
$string['coursehelphiddensections'] = 'How the hidden sections in the module are displayed to students.';
$string['coursehelpmaximumupload'] = 'Define the largest size of file that can be uploaded in this module, limited by the site-wide setting.';
$string['coursehelpnewsitemsnumber'] = 'Number of recent items appearing on the module home page, in a news box down the right-hand side (0 means the news box won\'t appear).';
$string['coursehelpnumberweeks'] = 'Number of weeks/topics displayed on the module main page.';
$string['coursehidden'] = 'This module is currently unavailable to students';
$string['courseinfo'] = 'Module info';
$string['courselegacyfiles'] = 'Legacy module files';
$string['coursemessage'] = 'Message module users';
$string['coursenotaccessible'] = 'This module does not allow public access';
$string['courseoverview'] = 'Module overview';
$string['courseoverviewgraph'] = 'Module overview graph';
$string['courseprofiles'] = 'Module profiles';
$string['coursereject'] = 'Reject a module request';
$string['courserejected'] = 'Module has been rejected and the requester has been notified.';
$string['courserejectemail'] = 'Sorry, but the new module you requested has been rejected. Here is the reason provided: {$a}';
$string['courserejectreason'] = 'Outline your reasons for rejecting this module <br />(this will be emailed to the requester)';
$string['courserejectsubject'] = 'Your module has been rejected';
$string['coursereport'] = 'Module report';
$string['coursereports'] = 'Module reports';
$string['courserequest'] = 'Module requests';
$string['courserequestdetails'] = 'Details of the module you are requesting';
$string['courserequestfailed'] = 'For some reason, your module request could not be saved';
$string['courserequestintro'] = 'Use this form to request a new module to be created for you.<br />Try and fill in as much information as you can to allow<br />the administrators to understand your reasons for wanting this module.';
$string['courserequestreason'] = 'Reasons for wanting this module';
$string['courserequestsuccess'] = 'Successfully submitted your module request. Expect an email within a few days with the outcome';
$string['courserestore'] = 'Module restore';
$string['courses'] = 'Modules';
$string['coursesectionsummaries'] = 'Module section summaries';
$string['coursesettings'] = 'Module default settings';
$string['coursesmovedout'] = 'Modules moved out from {$a}';
$string['coursespending'] = 'Modules pending approval';
$string['coursestart'] = 'Module start';
$string['coursesummary'] = 'Module summary';
$string['coursesummary_help'] = 'The module summary is displayed in the list of modules. A module-search searches module summary text in addition to module names.';
$string['courseupdates'] = 'Module updates';
$string['creatingcoursemodules'] = 'Creating module plugins';
$string['creatingcourseroles'] = 'Creating module-level role assignments and overrides';
$string['creatingmodroles'] = 'Creating plugin-level role assignments and overrides';
$string['creatingnewcourse'] = 'Creating new module';
$string['currentcourseadding'] = 'Current module, adding data to it';
$string['currentcoursedeleting'] = 'Current module, deleting it first';
$string['defaultcoursestudentdescription'] = 'Students generally have fewer privileges within a module.';
$string['defaultcoursesummary'] = 'Write a concise and interesting paragraph here that explains what this module is about';
$string['defaultcourseteacherdescription'] = 'Teachers can do anything within a module, including changing the activities and grading students.';
$string['deletecategorycheck'] = 'Are you absolutely sure you want to completely delete this category <b>\'{$a}\'</b>?<br />This will move all modules into the parent category if there is one, or into Miscellaneous.';
$string['deletecategorycheck2'] = 'If you delete this category, you need to choose what to do with the modules and subcategories it contains.';
$string['deletecourse'] = 'Delete a module';
$string['deletecoursecheck'] = 'Are you absolutely sure you want to completely delete this module and all the data it contains?';
$string['deletingexistingcoursedata'] = 'Deleting existing module data';
$string['duplicatecontcourse'] = 'Return to the module';
$string['editcoursesettings'] = 'Edit module settings';
$string['emaildisplaycourse'] = 'Allow only other module members to see my email address';
$string['entercourse'] = 'Click to enter this module';
$string['existingcourse'] = 'Existing module';
$string['existingcourseadding'] = 'Existing module, adding data to it';
$string['existingcoursedeleting'] = 'Existing module, deleting it first';
$string['existingcreators'] = 'Existing module creators';
$string['findmorecourses'] = 'Find more modules...';
$string['format_help'] = 'The module format determines the layout of the module page. * SCORM format - For displaying a SCORM package in the first section of the module page (as an alternative to using the SCORM/AICC plugin) * Social format - A forum is displayed on the module page * Topics format - The module page is organised into topic sections * Weekly format - The module page is organised into weekly sections, with the first week starting on the module start date';
$string['frontpagecourselist'] = 'List of modules';
$string['fulllistofcourses'] = 'All modules';
$string['fullnamecourse'] = 'Module title';
$string['fullnamecourse_help'] = 'The full name of the module is displayed at the top of each page in the module and in the list of modules.';
$string['guestuserinfo'] = 'This user is a special user that allows read-only access to some module.';
$string['hiddensections_help'] = 'This setting determines whether hidden sections are displayed to students in collapsed form (perhaps for a module in weekly format to indicate holidays) or are completely hidden.';
$string['idnumbercourse'] = 'Module ID number';
$string['idnumbercoursecategory_help'] = 'The ID number of a module category is only used when matching the category against external systems and is not displayed anywhere on the site. If the category has an official code name it may be entered, otherwise the field can be left blank.';
$string['idnumbercourse_help'] = 'The ID number of a module is only used when matching the module against external systems and is not displayed anywhere on the site. If the module has an official code name it may be entered, otherwise the field can be left blank.';
$string['importdata'] = 'Import module data';
$string['importdataexported'] = 'Exported data from source module successfully.<br /> Continue to import into your target module.';
$string['importdatafinished'] = 'Import complete! Continue to your module.';
$string['importdatafrom'] = 'Find a module to import data from:';
$string['includecoursefiles'] = 'Include module files';
$string['includecourseusers'] = 'Include module users';
$string['includemodules'] = 'Include plugins';
$string['includemoduleuserdata'] = 'Include plugin user data';
$string['includesitefiles'] = 'Include site files used in this module';
$string['managecourses'] = 'Manage modules';
$string['managemodules'] = 'Plugins';
$string['maximumupload_help'] = 'This setting determines the largest size of file that can be uploaded to the course, limited by the site-wide setting set by an administrator. Activity plugins also include a maximum upload size setting for further restricting the file size.';
$string['maxnumberweeks'] = 'Maximum for number of sections';
$string['maxnumberweeks_desc'] = 'This controls the maximum options that appears in the "Number of weeks/topics" setting for modules.';
$string['maxnumcoursesincombo'] = 'Browse <a href="{$a->link}">{$a->numberofcourses} modules</a>.';
$string['memberincourse'] = 'People in the module';
$string['messageprovider:courserequestapproved'] = 'Module creation request approval notification';
$string['messageprovider:courserequested'] = 'Module creation request notification';
$string['messageprovider:courserequestrejected'] = 'Module creation request rejection notification';
$string['modchooserdisable'] = 'Turn activity chooser off';
$string['modchooserenable'] = 'Turn activity chooser on';
$string['modulesetup'] = 'Setting up plugin tables';
$string['movecourseto'] = 'Move module to:';
$string['moveleft'] = 'Decrease indent';
$string['moveright'] = 'Increase indent';
$string['moveselectedcoursesto'] = 'Move selected modules to...';
$string['mycourses'] = 'My modules';
$string['myfilesmanage'] = 'Manage private files';
$string['myhome'] = 'Home';
$string['newcourse'] = 'New Module';
$string['newsitemsnumber_help'] = 'This setting determines how many recent items appear in the latest news block on the module page. If set to "0 news items" then the latest news block will not be displayed.';
$string['nocourses'] = 'No modules';
$string['nocoursesfound'] = 'No modules were found with the words \'{$a}\'';
$string['nocoursesyet'] = 'No modules in this category';
$string['nofilesyet'] = 'No files have been uploaded to your module yet';
$string['noimagesyet'] = 'No images have been uploaded to your module yet';
$string['nomorecourses'] = 'No more matching modules could be found';
$string['noneditingteacherdescription'] = 'Non-editing teachers can teach in modules and grade students, but may not alter activities.';
$string['nopendingcourses'] = 'There are no modules pending approval';
$string['nopotentialcreators'] = 'No potential module creators';
$string['nosite'] = 'Could not find site-level module';
$string['nostudentsyet'] = 'No students enrolled in this module yet';
$string['noteachersyet'] = 'No teachers in this module yet';
$string['notenrolled'] = '{$a} is not enrolled in this module.';
$string['notenrolledprofile'] = 'This profile is not available because this user is not enrolled in this module.';
$string['noteuserschangednonetocourse'] = '<strong>Note:</strong> Module users need to be restored when restoring user data (in activities, files or messages). This setting has been changed for you.';
$string['novalidcourses'] = 'No valid modules to be shown';
$string['numberofcourses'] = 'Number of modules';
$string['numberweeks'] = 'Number of sections (weeks/topics)';
$string['parentcoursenotfound'] = 'Parent module not found!';
$string['potentialcreators'] = 'Potential module creators';
$string['profilenotshown'] = 'This profile description will not be shown until this person is enrolled in at least one module.';
$string['removecreator'] = 'Remove module creator';
$string['requestcourse'] = 'Create a module';
$string['requestedcourses'] = 'Requested modules';
$string['requestreason'] = 'Reason for module request';
$string['resetcourse'] = 'Reset module';
$string['resetinfo'] = 'This page allows you to empty a module of user data, while retaining the activities and other settings. Please be warned that by choosing items below and submitting this page you will delete your chosen user data from this module forever!<br />
<strong>This action should not be taken on an SDS-linked module!</strong>';
$string['resources_help'] = 'Resource types enable almost any kind of web content to be inserted into the module.';
$string['restorecoursenow'] = 'Restore this module now!';
$string['rolerenaming_help'] = 'This setting allows the displayed names for roles used in the module to be changed, e.g. "Teacher" could be renamed "Lecturer". Only the displayed name is changed - role permissions are not affected. <strong>Please note:</strong> this is not the place to enrol staff or students into the module.To manually enrol any user please use "Assign Roles" in the module administration menu.';
$string['savechangesandreturntocourse'] = 'Save and return to module';
$string['scalestandard_help'] = 'A standard scale is available site-wide, for all modules.';
$string['scalestip'] = 'To create custom scales, use the \'Scales...\' link in your module administration menu.';
$string['scalestip2'] = 'To create custom scales, click the Grades link in the module administration menu, then choose Edit, Scales.';
$string['searchcourses'] = 'Search modules';
$string['selectamodule'] = 'Please select an activity plugin';
$string['shortnamecollisionwarning'] = '[*] = This shortname is already in use by a module and will need to be changed upon approval';
$string['shortnamecourse'] = 'Module short name';
$string['shortnamecourse_help'] = 'The module short name is displayed in the navigation and is used in the subject line of module email messages. In SDS-linked modules the short name includes the module code and academic year.';
$string['shortnametaken'] = 'Short name is already used for another module ({$a}). Please contact your FLT for help.';
$string['showallcourses'] = 'Show all modules';
$string['showblockcourse'] = 'Show list of modules containing block';
$string['showdescription'] = 'Display description on main module page';
$string['showdescription_help'] = 'If enabled, the introduction / description above will be displayed on the main module page just below the link to the activity / resource. If you plan to use this option widely then please keep the description as short as possible.';
$string['showgrades_help'] = 'Many activities allow grades to be given within Moodle. This setting determines whether a student can view a list of all their grades for the module via a grades link in the course administration block.';
$string['showlistofcourses'] = 'Show list of modules';
$string['showmodulecourse'] = 'Show list of modules containing activity';
$string['showreports'] = 'Show activity reports to students';
$string['showreports_help'] = 'Activity reports are available for each participant that show their activity in the module. As well as listings of their contributions, such as forum posts or assignment submissions, these reports also include access logs. This setting determines whether a student can view their own activity reports via their profile page.';
$string['sitefilesused'] = 'Site files used in this module';
$string['sitehome'] = 'News & Support';
$string['someallowguest'] = 'Some modules may allow guest access';
$string['starpending'] = '([*] = module pending approval)';
$string['startdate'] = 'Module start date';
$string['startdate_help'] = 'This setting determines the start of the first week for a module in weekly format. It also determines the earliest date that logs of module activities are available for. For SDS-linked modules the start date is set as the module\'s actual start date.';
$string['statsnodata'] = 'There is no available data for that combination of module and time period.';
$string['statsnodatauser'] = 'There is no available data for that combination of module, user and time period.';
$string['statsreport11'] = 'Most active modules';
$string['statsreport12'] = 'Most active modules (weighted)';
$string['statsreport13'] = 'Most participatory modules (enrolments)';
$string['statsreport14'] = 'Most participatory modules (views/posts)';
$string['statsreport9'] = 'Logins (site module)';
$string['studentnotallowed'] = 'Sorry, but you can not enter this module as \'{$a}\'';
$string['summary_help'] = 'The idea of a summary is a short text to prepare students for the activities within the section. The text is shown on the main module page under the section name.';
$string['thereareno'] = 'There are no {$a} in this module';
$string['updatethiscourse'] = 'Update this module';
$string['usingexistingcourse'] = 'Using existing module';
$string['viewallcourses'] = 'View all modules';
$string['viewallcoursescategories'] = 'View all modules and categories';
$string['virusfoundlater'] = 'A file you uploaded on {$a->date} with the filename {$a->filename} for the module {$a->course} has since been found to contain a virus. Here is a summary of what has happened to your file: {$a->action} If this was submitted work, you may want to resubmit it so that your tutor can see it.';
$string['withselectedusers_help'] = '* Send message - For sending a message to one or more participants * Add a new note - For adding a note to a selected participant * Add a common note - For adding the same note to more than one participant * Extend enrolment (individual) - For extending a selected student\'s access to the module, even when an enrolment period is set * Extend enrolment (common) - For extending more than one student\'s access to the module by the same amount';
$string['writingcoursedata'] = 'Writing module data';
$string['writingmoduleinfo'] = 'Writing plugin info';
$string['youneedtoenrol'] = 'To perform that action you need to enrol in this module.';
