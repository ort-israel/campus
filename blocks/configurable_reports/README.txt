Configurable Reports Block

Installation, Documentation, Tutorials....
See http://docs.moodle.org/en/blocks/configurable_reports/
Also http://moodle.org/mod/data/view.php?d=13&rid=4283

Author: Juan Leyva
<http://moodle.org/user/profile.php?id=49568>
<http://twitter.com/jleyvadelgado>
<http://sites.google.com/site/mooconsole/>
<http://moodle-es.blogspot.com>
<http://openlearningtech.blogspot.com>

Thanks to:
Nadav Kavalerchik for developing amazing new features
Ivan Breziansky for translating the block to slovak language
Iñaki Arenaza for translating the block documentation to spanish
Luis de Vasconcelos for testing the block
Adam Olley and Netspot Moodle Partner for improving some parts of the Moodle2 version

Some functionalities of this plugin uses code from:

Admin Report: Custom SQL queries
http://moodle.org/mod/data/view.php?d=13&rid=2884
By Tim Hunt


Versions history

Major updateds in version 3.5
* Updated CodeMirror and DataTables libs
* Report page display in "report" layout
* Migrate cron to task scheduler (classes/task)
* Migrate legacy log to event2 (classes/event)
* Support external JS charts and script, on report view page (d3.js, and more...)
* New export as JSON (to support JS charts)
* New virtual report columns: sendemail, addtogroup


Major updates:

* Enable adding expernal JS Charing libraries, that can interact with report data.
* Add JSON support (to support JS Charts, see above feature)
* Reports can run on a different DB and user then the current (production) DB.
* Reports can run on a CRON scheduler.
* Several filter plugins added (list).
* Several inline "SQL" special variable added (%%USERID%%, %%COURSEID%%, ...)
* Site level report can be shared in all courses.
* New Counterpart "report" plugin that enables a teacher to run reports from Administration->Reports block (no need to add CB block).
* Share reports between Moodle systems - using GITHUB as a repository to distribute and manage sharable SQL queries.
* Control report row limit
* Move report from course level to system level ( add "&adminmode=1" to report setting page's URL and change report's courseid at the bottom of the form)
* %%COURSEID%% can be overridden be using "&courseid=XXX" on the report's URL.
* Hide sub-reports from the list.
* Enable unique aliases to each report, so they can be invoked by other reports persistently across Moodle systems.

New JavaScript libraries
========================
CodeMirror - Display highlighted SQL queries.
DataTables - Display paged reports, enable global search on any field, Sticky headers, control row count display, more...

New Filters & SQL syntax
========================
%%COURSEID%% and %%USERID%% and %%FILTER_VAR%%

%%DEBUG%% (Add to the first line of the SQL) - Display the fully processed SQL query

And Special filters (if available!):
%%FILTER_SEARCHTEXT:table.field:('=', '<', '>', '<=', '>=', '~')%%
%%FILTER_SEMESTER:table.field%%
%%FILTER_YEARNUMERIC:table.field%%
%%FILTER_YEARHEBREW:table.field%%
%%FILTER_COURSES:mdl_course.id%%
%%FILTER_MYCOURSE:table.field%%
%%FILTER_CATEGORIES:mdl_course.category%%
%%FILTER_SUBCATEGORIES:mdl_course_category.path%%
%%FILTER_FLSUBCATEGORIES:mdl_course_category.path%%
%%FILTER_ROLE:table.field%%
%%FILTER_STARTTIME:l.time:>%% %%FILTER_ENDTIME:l.time:<%% ('<', '>', '<=', '>=', '~')
%%FILTER_COURSEMODULEID%% , %%FILTER_COURSEMODULEFIELDS%% , %%FILTER_COURSEMODULE%%
%%FILTER_USERS:table.field%%
%%FILTER_SYSTEMUSER:table.field%%
%%FILTER_COURSEUSER:table.field%%
%%FILTER_MODULE:mdl_moduels.id%%

Added support for Moodle 2.7

Added new user column plugin (final grade in current course)

Added options for limit the max number of records in SQL queries (previously the limit was hard coded to 5000)

2.3.4 (2011040114)Moodle 2.2, 2.3, 2.4, 2.5, 2.6, 2.7
Release date: Thursday, 26 June 2014, 18:16

New fullname user field column
Several bug fixes

2.3.3 (2011040113)Moodle 2.2, 2.3, 2.4, 2.5, 2.6, 2.7
Release date: Friday, 13 June 2014, 18:16

Fixed layout and notice/warnings problems

2.3.2 (2011040110)Moodle 2.2, 2.3, 2.4, 2.5, 2.6
Release date: Friday, 14 February 2014, 11:14 AM

Several bug fixes

2.3.2 (2011040109)Moodle 2.2, 2.3, 2.4, 2.5, 2.6
Release date: Thursday, 30 January 2014, 10:33 AM

Fixed invalid table reference in cron

2.3.2 (2011040108) for Moodle  2.2, 2.3, 2.4, 2.5m 2.6
Release date Thursday, 16 January 2014, 15:25 AM
Some bug fixes
New CSV export

2.3.1 (2011040107) for Moodle 2.0, 2.1, 2.2, 2.3, 2.4, 2.5m 2.6
Release date Monday, 16 December 2013, 10:25 AM
Some minor bug fixes
SQL syntax by default is disabled
New block instance settings (change name and also show/hide global reports)
New users cohorts condition


2.3 (2011040106) for Moodle 2.0, 2.1, 2.2, 2.3, 2.4, 2.5m 2.6
Release date Friday, 13 December 2013, 4:35 PM

Support for Moodle 2.6
Multiple bugs fixed
Global report that can be shared in all courses
Public reports repository with multiple sample reports available
Ppublic SQL queries repository
Reports can run on a different DB that the current (production) DB
Reports can run on a CRON scheduler
Several filter plugins added
Integrated DataTables.js for the report table
Integrated CodeMirror.js for highlighting SQL query code, while editing.
New security settings

Thanks to Nadav Kavalerchik for providing most of the new features


2.2 (2011040105) for Moodle 2.0, 2.1, 2.2, 2.3, 2.4, 2.5
Release date Wednesday, 27 February 2013, 9:35 AM

Support for Moodle 2.4 and 2.5
Bugs fixed


2.1 (2011040103) for Moodle 2.0, 2.1, 2.2, 2.3
Release date Friday, 6 July 2012, 1:29 PM

Support for Moodle 2.3
Bugs fixed


2.0.2 (2011040102) for Moodle 2.0, 2.1, 2.2
Release date Monday, 9 January 2012, 11:41 AM

Support for Moodle 2.2
Bugs fixed


2.0.1 (2011040101) for Moodle 2.0, 2.1
Release date Thursday, 13 October 2011, 12:55 AM


2.0 (2011040100) for Moodle 2.0, 2.1
Release date Thursday, 29 September 2011, 10:47 AM


1.0 (2010090100) for Moodle 1.9
Release date Thursday, 29 September 2011, 10:38 AM