<?php
/*
 * Copyright 2005-2016 OCSInventory-NG/OCSInventory-ocsreports contributors.
 * See the Contributors file for more details about them.
 *
 * This file is part of OCSInventory-NG/OCSInventory-ocsreports.
 *
 * OCSInventory-NG/OCSInventory-ocsreports is free software: you can redistribute
 * it and/or modify it under the terms of the GNU General Public License as
 * published by the Free Software Foundation, either version 2 of the License,
 * or (at your option) any later version.
 *
 * OCSInventory-NG/OCSInventory-ocsreports is distributed in the hope that it
 * will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty
 * of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OCSInventory-NG/OCSInventory-ocsreports. if not, write to the
 * Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 */

function plugin_version_oracle()
{
    return array(
        'name' => 'Oracle inventory',
        'version' => '1.0',
        'author'=> 'Gilles Dubois',
        'license' => 'GPLv2',
        'verMinOcs' => '2.3'
    );
}

function plugin_init_oracle()
{

    $object = new plugins;
    $object->add_cd_entry("oracle", "other");

    // Plugin Oracle
    $object -> sql_query(
        "CREATE TABLE IF NOT EXISTS `ORACLE` (
        `ID` INT(11) NOT NULL AUTO_INCREMENT,
        `HARDWARE_ID` INT(11) NOT NULL,
        `PUBLISHER` VARCHAR(255) DEFAULT NULL,
        `HOMENAME` VARCHAR(255) DEFAULT NULL,
        `VERSION` VARCHAR(255) DEFAULT NULL,
        `EDITION` VARCHAR(255) DEFAULT NULL,
        `INSTANCENAME` VARCHAR(255) DEFAULT NULL,
        PRIMARY KEY  (`ID`,`HARDWARE_ID`)
        ) ENGINE=INNODB;"
    );

}

function plugin_delete_oracle()
{

    $object = new plugins;
    $object -> del_cd_entry("oracle");
    // Plugin Oracle
    $object -> sql_query("DROP TABLE `ORACLE`;");

}
