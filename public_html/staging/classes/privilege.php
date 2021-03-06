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
 * $Id: privilege.php,v 1.1.1.1 2005/03/27 19:54:23 bps7j Exp $
 */

include_once("database_object.php");

class privilege extends database_object {
    // {{{declarations
    var $c_what_granted_to = null;
    var $c_who_granted_to = null;
    var $c_action = null;
    var $c_what_relates_to = null;
    var $c_related_table = null;
    var $c_related_uid = null;
    // }}}

    /* {{{constructor
     */
    function privilege() {
        $this->database_object();
    } //}}}
    
    /* {{{getWhatGrantedTo
     *
     */
    function getWhatGrantedTo() {
        return $this->c_what_granted_to;
    } //}}}

    /* {{{setWhatGrantedTo
     *
     */
    function setWhatGrantedTo($value) {
        $this->c_what_granted_to = $value;
    } //}}}

    /* {{{getWhoGrantedTo
     *
     */
    function getWhoGrantedTo() {
        return $this->c_who_granted_to;
    } //}}}

    /* {{{setWhoGrantedTo
     *
     */
    function setWhoGrantedTo($value) {
        $this->c_who_granted_to = $value;
    } //}}}

    /* {{{getAction
     *
     */
    function getAction() {
        return $this->c_action;
    } //}}}

    /* {{{setAction
     *
     */
    function setAction($value) {
        $this->c_action = $value;
    } //}}}

    /* {{{getWhatRelatesTo
     *
     */
    function getWhatRelatesTo() {
        return $this->c_what_relates_to;
    } //}}}

    /* {{{setWhatRelatesTo
     *
     */
    function setWhatRelatesTo($value) {
        $this->c_what_relates_to = $value;
    } //}}}

    /* {{{getRelatedTable
     *
     */
    function getRelatedTable() {
        return $this->c_related_table;
    } //}}}

    /* {{{setRelatedTable
     *
     */
    function setRelatedTable($value) {
        $this->c_related_table = $value;
    } //}}}

    /* {{{getRelatedUID
     *
     */
    function getRelatedUID() {
        return $this->c_related_uid;
    } //}}}

    /* {{{setRelatedUID
     *
     */
    function setRelatedUID($value) {
        $this->c_related_uid = $value;
    } //}}}

    /* {{{setUpDatabaseDefaults
     */
    function setUpDatabaseDefaults() {
        global $root_uid;
        $this->c_owner = $root_uid;
        parent::setUpDatabaseDefaults();
    } //}}}

}
?>
