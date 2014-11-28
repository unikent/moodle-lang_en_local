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
 * @subpackage question
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['changepublishstatuscat'] = '<a href="{$a->caturl}">Category "{$a->name}"</a> in module "{$a->coursename}" will have it\'s sharing status changed from <strong>{$a->changefrom} to {$a->changeto}</strong>.';
$string['deletecoursecategorywithquestions'] = 'There are questions in the question bank associated with this module category. If you proceed, they will be deleted. You may wish to move them first, using the question bank interface.';
$string['editcategories_help'] = 'Rather than keeping everything in one big list, questions may be arranged into categories and subcategories. Each category has a context which determines where the questions in the category can be used: * Activity context - Questions only available in the activity item * Module context - Questions available in all activity items in the module * Module category context - Questions available in all activity items and modules in the module category * System context - Questions available in all modules and activities on the site Categories are also used for random questions, as questions are selected from a particular category.';
$string['filesareacourse'] = 'the module files area';
$string['importfromcoursefiles'] = '... or choose a module file to import.';
$string['questionaffected'] = '<a href="{$a->qurl}">Question "{$a->name}" ({$a->qtype})</a> is in this question category but is also being used in <a href="{$a->qurl}">quiz "{$a->quizname}"</a> in another module "{$a->coursename}".';
$string['questionsmovedto'] = 'Questions still in use moved to "{$a}" in the parent module category.';
