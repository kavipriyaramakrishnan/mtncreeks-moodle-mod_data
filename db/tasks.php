<?php
/**
 * Mtncreeks tasks to archive the completed jobs from Maintenance DB
 * to Archived DB
 *
 * Scheduled task Definition
 *
 * @package   mod_data
 * @author    Priya Ramakrishnan <priya@pukunui.com>, Pukunui
 * @copyright 2018 onwards, Pukunui
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

$tasks = array(
        array(
            'classname' => 'mod_data\task\completedjobs',
            'blocking'  => 0,
            'minute'    => '15',
            'hour'      => '0',
            'day'       => '*',
            'dayofweek' => '*',
            'month'     => '*'
            )
        );

