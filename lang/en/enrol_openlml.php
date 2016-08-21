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
 * Strings for component 'enrol_openlml', language 'en'
 *
 * @package    enrol
 * @subpackage openlml
 * @copyright  Frank Schütte <fschuett@gymnasium-himmelsthuer.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['attic_description'] = 'Deleted teachers category';
$string['attribute'] = 'group name attribute usual cn';
$string['attribute_key'] = 'group name attribute';
$string['class_settings'] = 'class settings';
$string['class_settings_desc'] = '<p>These settings provide a class category, where classes with specified prefixes are created as moodle courses and teachers, students are enroled with different roles.</p><p>The category can be autocreated and also the classes. Classes can be autoremoved. All this is done in a scheduled task named <b>openlml_sync_classes_task</b></p>';
$string['classes_enabled'] = 'classes enabled';
$string['classes_enabled_desc'] = 'Activate automatic classes';
$string['class_category_description'] = 'All classes';
$string['class_category'] = 'classes category';
$string['class_category_desc'] = 'classes are created below this category';
$string['class_category_autocreate'] = 'autocreate class category';
$string['class_category_autocreate_desc'] = 'check to let class category be autocreated';
$string['class_autocreate'] = 'autocreate classes';
$string['class_autocreate_desc'] = 'check to let classes be autocreated';
$string['class_autoremove'] = 'autoremove classes';
$string['class_autoremove_desc'] = 'check to remove classes automatically';
$string['class_localname'] = 'class';
$string['class_template'] = 'class template name';
$string['class_template_desc'] = 'name of the (invisible) class course template to use in creation of new classes';
$string['class_prefixes'] = 'class prefixes';
$string['class_prefixes_desc'] = 'ldap groups with this prefixes are used to autocreate / autoremove classes in moodle';
$string['class_teachers_role'] = 'class teachers role';
$string['class_teachers_role_desc'] = 'teachers are enroled into classes using this role';
$string['class_students_role'] = 'class students role';
$string['class_students_role_desc'] = 'students are enroled into classes using this role';
$string['common_settings'] = 'LDAP settings';
$string['common_settings_desc'] = 'these settings affect how the plugin accesses data in the LDAP tree';
$string['contexts'] = 'one or more LDAP contexts separated by semicolon(;)';
$string['contexts_key'] = 'contexts';
$string['course_description'] = 'course category for teacher ';
$string['enrolname'] = 'openlml';
$string['member_attribute'] = 'LDAP group member attribute, usually memberuid';
$string['member_attribute_key'] = 'group attribute';
$string['object'] = 'LDAP object class, usually posixGroup';
$string['object_key'] = 'object class';
$string['openlmlsync'] = 'openlml enrolment sync';
$string['openlmlclasssync'] = 'openlml classes enrolment sync';
$string['pluginname_desc'] = '<p>This plugin is supposed to be used with german <strong>Open LML</strong> school server and is tailored to it\'s LDAP structure.</p><p>This plugin enrols users into courses based on the course <strong>idnumber</strong> (note: idnumber is a unique field, so make it unique by prepending course "shortname:")</p>';
$string['pluginname'] = 'Open LML Enrolment';
$string['pluginnotenabled'] = 'Plugin not enabled!';
$string['prefix_teacher_members'] = 'In courses with this prefix teachers can be enroled as members, comma(,) separated list';
$string['prefix_teacher_members_key'] = 'teacher course prefix';
$string['student_class_numbers'] = 'grade numbers, usually 5,6,...,12';
$string['student_class_numbers_key'] = 'grade numbers';
$string['student_groups'] = 'additional specific groups separated by colon(,)';
$string['student_groups_key'] = 'other groups';
$string['student_project_prefix'] = 'Projects on the Open LML server usually start with a prefix of p_';
$string['student_project_prefix_key'] = 'project prefix';
$string['student_role'] = 'Default student enrolment role, usually student';
$string['student_role_key'] = 'student role';
$string['students_settings'] = 'Students settings';
$string['students_settings_desc'] = 'These settings affect student enrolment.';
$string['sync_description'] = 'Synchronized with Open LML server';
$string['teacher_context_desc'] = 'Automatic teacher courses category';
$string['teachers_category_autocreate'] = 'The course category for a teacher is created automatically';
$string['teachers_category_autocreate_key'] = 'autocreate';
$string['teachers_category_autoremove'] = 'The course category for a teacher is removed automatically';
$string['teachers_category_autoremove_key'] = 'autoremove';
$string['teachers_context_settings'] = 'teachers categories settings';
$string['teachers_context_settings_desc'] = 'settings affecting the category, where teachers categories are placed';
$string['teachers_course_context'] = 'teachers category, usually Lehrer';
$string['teachers_course_context_key'] = 'teacher category';
$string['teachers_course_role'] = 'teachers role in his/her own category, usually coursecreator';
$string['teachers_course_role_key'] = 'teachers category role';
$string['teacher_settings'] = 'teachers settings';
$string['teacher_settings_desc'] = 'special groups with teachers as members are affected from this settings';
$string['teachers_group_name'] = 'teachers group name, usually teachers';
$string['teachers_group_name_key'] = 'teachers group';
$string['teachers_ignore'] = 'teachers to be ignored (no autocreate/autoremove)';
$string['teachers_ignore_key'] = 'ignored teachers';
$string['teachers_removed'] = 'category for course categories of removed teachers, usually attic';
$string['teachers_removed_key'] = 'removed courses category';
$string['teachers_role'] = 'teachers role in teacher courses, usually student';
$string['teachers_role_key'] = 'teachers course role';
$string['eventcohort_created'] = 'cohort created';
$string['eventcohort_removed'] = 'cohort removed';
$string['eventcohort_enroled'] = 'cohort enroled in course';
$string['eventcohort_unenroled'] = 'cohort unenroled from course';
$string['eventcohort_member_added'] = 'member added to cohohrt';
$string['eventcohort_member_removed'] = 'member removed from cohort';
$string['eventcohort_members_removed'] = 'members removed from cohort';
$string['eventteacher_role_assigned'] = 'teacher role assigned in course';
$string['eventteacher_role_unassigned'] = 'teacher role unassigned from course';
$string['eventteacher_category_created'] = 'teacher category created';
$string['eventteacher_category_removed'] = 'teacher category removed';
$string['eventteacher_category_moved'] = 'teacher category moved';
$string['eventteachers_category_created'] = 'teachers category created';
$string['eventattic_category_created'] = 'attic cytegory created';
