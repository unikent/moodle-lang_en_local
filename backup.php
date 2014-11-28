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
 * @subpackage backup
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backupcourse'] = 'Backup module: {$a}';
$string['backupcoursedetails'] = 'Module details';
$string['backupcoursesections'] = 'Module sections';
$string['backupsection'] = 'Backup module section: {$a}';
$string['backuptypecourse'] = 'Module';
$string['choosefilefromcoursebackup'] = 'Module backup area';
$string['choosefilefromcoursebackup_help'] = 'When backing-up modules using default settings, backup files will be stored here';
$string['choosefilefromuserbackup_help'] = 'When backing-up modules with "Anonymize user information" option ticked, backup files will be stored here';
$string['confirmnewcoursecontinue'] = 'New module warning';
$string['confirmnewcoursecontinuequestion'] = 'A temporary (hidden) module will be created by the restoration process. To abort restoration click cancel. Do not close the browser while restoring.';
$string['coursecategory'] = 'Category into which the module will be restored';
$string['coursesettings'] = 'Module settings';
$string['error_block_for_module_not_found'] = 'Orphan block instance (id: {$a->bid}) for module item (id: {$a->mid}) found. This block will not be backed up';
$string['error_course_module_not_found'] = 'Orphan module item (id: {$a}) found. This item will not be backed up.';
$string['importcurrentstage0'] = 'Module selection';
$string['importsuccess'] = 'Import complete. Click continue to return to the module.';
$string['nomatchingcourses'] = 'There are no modules to display';
$string['norestoreoptions'] = 'There are no categories or existing modules you can restore to.';
$string['restorecourse'] = 'Restore module';
$string['restorecoursesettings'] = 'Module settings';
$string['restoreexecutionsuccess'] = 'The module was restored successfully, clicking the continue button below will take you to view the module you restored.';
$string['restorenewcoursefullname'] = 'New module name';
$string['restorenewcourseshortname'] = 'New module short name';
$string['restoretocourse'] = 'Restore to module:';
$string['restoretocurrentcourse'] = 'Restore into this module';
$string['restoretocurrentcourseadding'] = 'Merge the backup module into this module';
$string['restoretocurrentcoursedeleting'] = 'Delete the contents of this module and then restore';
$string['restoretoexistingcourse'] = 'Restore into an existing module';
$string['restoretoexistingcourseadding'] = 'Merge the backup module into the existing module';
$string['restoretoexistingcoursedeleting'] = 'Delete the contents of the existing module and then restore';
$string['restoretonewcourse'] = 'Restore as a new module';
$string['restoringcourse'] = 'Module restoration in progress';
$string['rootsettinglogs'] = 'Include module logs';
$string['selectacourse'] = 'Select a module';
$string['setting_course_fullname'] = 'Module name';
$string['setting_course_shortname'] = 'Module short name';
$string['setting_course_startdate'] = 'Module startdate';
$string['setting_overwriteconf'] = 'Overwrite module configuration';
$string['storagecourseandexternal'] = 'Module backup filearea and the specified directory';
$string['storagecourseonly'] = 'Module backup filearea';
$string['totalcoursesearchresults'] = 'Total modules: {$a}';
