<?php
/*
 * This file is part of SocialClub (http://socialclub.sourceforge.net)
 * Copyright (C) 2004 Baron Schwartz <baron at sequent dot org>
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307  USA
 * 
 * $Id: read.php,v 1.1.1.1 2005/03/27 19:53:30 bps7j Exp $
 */

include_once("attendee.php");
include_once("adventure.php");

# Create templates
$template = file_get_contents("templates/absence/read.php");

# Create the member and adventure for the absence
$attendee =& new attendee();
$attendee->select($object->getAttendee());
$member =& new member();
$member->select($attendee->getMember());
$adventure =& new adventure();
$adventure->select($attendee->getAdventure());

$template = $adventure->insertIntoTemplate($template);
$template = $attendee->insertIntoTemplate($template);
$template = $member->insertIntoTemplate($template);

$res['content'] = $object->insertIntoTemplate($template);
$res['title'] = "Absence: " . $member->getFullName();

?>
