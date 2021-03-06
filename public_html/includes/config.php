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
 * $Id: config.php,v 1.4 2005/08/02 02:38:19 bps7j Exp $
 *
 * Create the variables and stuff the individual pages need, including
 * setting up error handling and global variables.
 */

# Where the system should log error messages.  Leave blank if you don't want to
# log any messages to that particular source.
$cfg['error_log'] = "/usr/home/outdoorsatuva/public_html/.hterror";
$cfg['error_email'] = "outdoors-webmaster@virginia.edu";

# The prefix for database table names.
$cfg['table_prefix'] = "m_";

# How to connect to the database.
$cfg['db'] = array(
    'type' => 'MySqlConnection',
    'persistent' => true,
    'user' => 'at_w',
    'pass' => 'At_w_12pass',
    'db' => 'at_main1',
    'host' => 'db57b.pair.com',
    'debug' => false,
    'dump' => false,
    'errlevel' => E_USER_ERROR,
    'prefix' => $cfg['table_prefix']);

?>
