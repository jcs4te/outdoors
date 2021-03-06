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
 * $Id: create.php,v 1.3 2009/03/12 03:15:59 pctainto Exp $
 */

# Create templates
$template = file_get_contents("templates/item_type/create.php");

# Create and validate the form.
$formT = file_get_contents("forms/item_type/create.xml");
$cmd = $obj['conn']->createCommand();
$cmd->loadQuery("sql/generic-select.sql");
$cmd->addParameter("table", "[_]item_category");
$cmd->addParameter("orderby", "c_title");
$result = $cmd->executeReader();
while ($row = $result->fetchRow()) {
    $formT = Template::block($formT, "CAT",
        array_change_key_case($row, 1));
}
$form = new XMLForm(Template::finalize($formT), true);

$form->snatch();
$form->validate();

if ($form->isValid()) {
    $object = new item_type();
    $object->setTitle($form->getValue("title"));
    $object->setCategory($form->getValue("category"));
    $object->insert();
    redirect("$cfg[base_url]/members/item_type/edit_features/$object->c_uid");
}
else {
    # Plug the form into the template
    $res['content'] = Template::replace($template, array(
        "FORM" => $form->toString()));

}

$res['title'] = "Create a New Item Type";

?>
