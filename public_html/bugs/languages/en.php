<?php

// en.php - English strings and titles
// ------------------------------------------------------------------------
// Copyright (c) 2001, 2002 The phpBugTracker Group
// ------------------------------------------------------------------------
// This file is part of phpBugTracker
//
// phpBugTracker is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your option) any later version.
//
// phpBugTracker is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with phpBugTracker; if not, write to the Free Software Foundation,
// Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
// ------------------------------------------------------------------------
// $Id: en.php,v 1.31.2.2 2002/11/05 17:51:39 bcurtis Exp $

$STRING = array(
	'lang_charset' => 'iso8859-1',
	'nouser' => 'That user does not exist',
	'dupeofself' => 'A bug can\'t be a duplicate of itself',
	'nobug' => 'That bug does not exist',
	'givesummary' => 'Please enter a summary',
	'givedesc' => 'Please enter a description',
	'noprojects' => 'No projects found',
	'totalbugs' => 'Total Bugs',
	'giveemail' => 'Please enter a valid email address',
	'givelogin' => 'Please enter a login',
	'loginused' => 'That login has already been used',
	'newacctsubject' => 'phpBugTracker Login',
	'newacctmessage' => "Your phpBugTracker password is %s",
	'nobugs' => 'No bugs found',
	'givename' => 'Please enter a name',
	'edit' => 'Edit',
	'addnew' => 'Add new',
	'nooses' => 'No OSes found',
	'giveinitversion' => 'Please enter an initial version for the project',
	'giveversion' => 'Please enter a version',
	'noversions' => 'No versions found',
	'nocomponents' => 'No components found',
	'nostatuses' => 'No statuses found',
	'noseverities' => 'No severities found',
	'givepassword' => 'Please enter a password',
	'nousers' => 'No users found',
	'bugbadperm' => 'You cannot change this bug',
	'bugbadnum' => 'That bug does not exist',
	'datecollision' => 'Someone has updated this bug since you viewed it.	The bug info has been reloaded with the latest changes.',
	'passwordmatch' => 'Those passwords don\'t match -- please try again',
	'nobughistory' => 'There is no history for that bug',
	'logintomodify' => 'You must be logged in to modify this bug',
	'dupe_attachment' => 'That attachment already exists for this bug',
	'give_attachment' => 'Please specify a file to upload',
	'no_attachment_save_path' => 'Couldn\'t find where to save the file!',
	'attachment_path_not_writeable' => 'Couldn\'t create a file in the save path',
	'attachment_move_error' => 'There was an error moving the uploaded file',
	'bad_attachment' => 'That attachment does not exist',
	'attachment_too_large' => 'The file you specified is larger than '.number_format(ATTACHMENT_MAX_SIZE).' bytes',
	'bad_permission' => 'You do not have the permissions required for that function',
	'project_only_all_groups' => 'You cannot choose specific groups when "All Groups" is chosen',
	'previous_bug' => 'Previous',
	'next_bug' => 'Next',
	'already_voted' => 'You have already voted for this bug',
	'too_many_votes' => 'You have reached the maximum number of votes per user',
	'no_votes' => 'There are no votes for this bug',
	'user_filter' => array(
		0 => 'All users',
		1 => 'Active users',
		2 => 'Inactive users'),
	'dupe_dependency' => 'That bug dependency has already been added',
	'image_path_not_writeable' => 'The subdirectory "jpgimages" is not writeable by the web process, so the summary image can not be rendered',
	'password_changed' => 'Your password has been changed',
	'prefs_changed' => 'Your preferences have been changed',
	'databaselist' => 'Database list',
	'database' => 'Database',
	'databases' => 'Databases',
	'name' => 'Name',
	'description' => 'Description',
	'sortorder' => 'Sort order',
	'suredeletedb' => 'Are you sure to delete this database?',
	'suredeletesite' => 'Are you sure to delete this site?',
	'delete' => 'Delete',
	'version' => 'Version',
	'addnewsite' => 'Add new Site',
	'sitelist' => 'Site list',
	'sites' => 'Sites',
	'QUERY' => array(
		'opt_All' => 'All',
		'Project' => 'Project',
		'Version' => 'Version',
		'Component' => 'Component',
		'Status' => 'Status',
		'Resolution' => 'Resolution',
		'OpSys' => 'OpSys',
		'Priority' => 'Priority',
		'Severity' => 'Severity',
		'Database' => 'Database',
		'ReportedOnSite' => 'Reported on Site',
		'Summary' => 'Summary',
		'DescriptionEntry' => 'A description entry',
		'SortBy' => 'Sort By',
		'SortBy_BugNumber' => 'Bug Number',
		'SortBy_Severity' => 'Severity',
		'SortBy_Reporter' => 'Reporter',
		'SortBy_Priority' => 'Priority',
		'SortBy_Status' => 'Status',
		'SortAsc' => 'Ascending',
		'SortDesc' => 'Descending',
		'SaveThisQueryAs' => 'Save this query as',
		'ResetBackToDefaultQuery' => 'Reset back to default query',
		'SubmitQuery' => 'Submit query',
		'SavedQueries' => 'Saved Queries',
		'GoToThe' => 'Go to the',
		'AdvancedQueryPage' => 'advanced query page',
		'SimpleQueryPage' => 'simple query page',
		'SureDeleteSavedQuery' => 'Are you sure you want to delete this saved query?',
		'MatchingAs' => 'matching as',
		'MatchingAs_Regexp' => 'regexp',
		'MatchingAs_NotRegexp' => 'not regexp',
		'MatchingAs_Substring' => 'substring',
		'MatchingAs_Exact' => 'exact',
		'eMail_Reporter' => 'Reporter',
		'eMail_AssignedTo' => 'Assigned To'
	),
	'WRAP' => array(
		'FindBug' => 'Find Bug',
		'Home' => 'Home',
		'AddNewBug' => 'Add a new Bug',
		'QueryBugs' => 'Query Bugs',
		'ViewReports' => 'View Reports',
		'Documentation' => 'Read Documentation',
		'AdminTools' => 'Admin Tools',
		'CreateNewAccount' => 'Create a new Account',
		'Email' => 'Email',
		'Login' => 'Login',
		'DoLogin' => 'Login',
		'BugsAssigned' => 'Bugs assigned to me',
		'BugsReported' => 'Bugs reported by me',
		'PersonalPage' => 'Personal Page',
		'Logout' => 'Logout',
		'EmailPassword' => 'Email Password',
		'RememberMe' => 'Remember me',
	),
    'BUGFORM' => array(
        'Project' => 'Project',
		'Version' => 'Version',
		'Summary' => 'Summary',
		'Description' => 'Description',
		'Severity' => 'Severity',
		'Priority' => 'Priority',
		'Site' => 'Site',
		'Database' => 'Database',
		'Component' => 'Component',
		'OS' => 'OS',
		'AddAnother' => 'Add another',
		'Submit' => 'Submit'
        ),
	'BUGDISPLAY' => array(
		'Reporter' => 'Reporter',
		'ReturnTo' => 'Return to',
		'BugList' => 'bug list',
		'Project' => 'Project',
		'Created' => 'Created',
		'Version' => 'Version',
		'ClosedInVersion' => 'Closed in Version',
		'ToBeClosedInVersion' => 'To be Closed in Version',
		'AssignedTo' => 'Assigned To',
		'AssignedToNobody' => 'Nobody',
		'BugDependency' => 'Dependencies',
		'AddDependency' => 'Add Dependency',
		'RemoveDependency' => 'Remove Dependency',
		'Summary' => 'Summary',
		'Status' => 'Status',
		'Description' => 'Description',
		'Severity' => 'Severity',
		'Priority' => 'Priority',
		'Component' => 'Component',
		'Resolution' => 'Resolution',
		'ResolutionNone' => 'None',
		'AddCC' => 'Add CC',
		'RemoveSelectedCC' => 'Remove selected CCs',
		'AdditionalComments' => 'Additional Comments',
		'Attachments' => 'Attachments',
		'CreateAttachment' => 'Create Attachment',
		'SureDeleteAttachment' => 'Are you sure you want to delete this attachment?',
		'Name' => 'Name',
		'Size' => 'Size',
		'Type' => 'Type',
		'Created' => 'Created',
		'VoteForThisBug' => 'Vote for this bug',
		'ViewVotes' => 'View votes',
		'ForThisBug' => 'for this bug',
		'ViewBugActivity' => 'View bug activity',
		'PrintableView' => 'Printable View',
		'NoAttachments' => 'No attachments',
		'Comments' => 'Comments',
		'PostedBy' => 'Posted By',
		'Date' => 'Date',
		'DateOn' => 'On',
		'Submit' => 'Submit',
		'Site' => 'Reported on Site',
		'Database' => 'Database',
		'OS' => 'OS',
		'ChooseOne' => 'Choose One'
	),
	'USER_PREF' => array(
		'ReceiveNotifications' => 'Receive notifications of bug changes via email',
		'ShowSavedQueries' => 'Show saved queries on the homepage',
		'ChangePassword' => 'Change password',
		'EnterNewPassword' => 'Please enter your new password twice below',
		'Password' => 'Password',
		'Verify' => 'Verify',
		'ChangePreferences' => 'ChangePreferences',
		'BugListColumns' => 'Bug List Columns',
		'ChooseFields' => 'Choose the fields you want to see in the bug list',
		'SureDeleteVote' => 'Are you sure you want to delete this vote?',
		'Votes' => 'Votes',
		'Bug' => 'Bug',
		'When' => 'When',
		'ColumnPreferencesSaved' => 'Your bug list column preferences have been saved'
	),
	'INDEX' => array(
		'FiveRecentlySubmitted' => 'Five most recently submitted bugs',
		'FiveRecentlyClosed' => 'Five most recently closed bugs',
		'QuickStats' => 'Quick stats',
		'Status' => 'Status',
		'NumberOfBugs' => '# bugs',
		'SavedQueries' => 'Saved Queries'
	)
);

// Page titles
$TITLE = array(
	'enterbug' => 'Enter a Bug',
	'editbug' => 'Edit Bug',
	'newaccount' => 'Create a new account',
	'bugquery' => 'Bug Query',
	'buglist' => 'Bug List',
	'addcomponent' => 'Add Component',
	'editcomponent' => 'Edit Component',
	'addproject' => 'Add Project',
	'editproject' => 'Edit Project',
	'addversion' => 'Add Version',
	'editversion' => 'Edit Version',
	'addsite' => 'Add Site',
	'editsite' => 'Edit Site',
	'project' => 'Projects',
	'os' => 'Operating Systems',
	'resolution' => 'Resolutions',
	'status' => 'Statuses',
	'severity' => 'Severities',
	'user' => 'Users',
	'home' => 'Home',
	'reporting' => 'Reporting',
	'group' => 'Groups',
	'bugvotes' => 'Bug Votes',
	'bughistory' => 'Bug History',
	'viewbug' => 'View Bug',
	'addattachment' => 'Add Attachment',
	'accountcreated' => 'Account Created',
	'changessaved' => 'Changes Saved',
	'preferences' => 'User Preferences',
	'usertools' => 'User Tools',
	'edituser' => 'Edit User',
	'adduser' => 'Add User',
	'editstatus' => 'Edit Status',
	'addstatus' => 'Add Status',
	'editseverity' => 'Edit Severity',
	'addseverity' => 'Add Severity',
	'editresolution' => 'Edit Resolution',
	'addresolution' => 'Add Resolution',
	'editos' => 'Edit Operating System',
	'addos' => 'Add Operating System',
	'editgroup' => 'Edit Group',
	'addgroup' => 'Add Group',
	'configuration' => 'Configuration',
	'adddatabase' => 'Add Database',
	'editdatabase' => 'Edit Database',
	'database' => 'Databases',
	'site' => 'Sites'
);

?>
