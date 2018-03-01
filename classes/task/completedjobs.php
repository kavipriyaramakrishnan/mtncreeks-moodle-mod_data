<?php
/**
 * Mtncreeks tasks to archive the completed jobs from Maintenance DB
 * to Archived DB
 *
 * Class definition for scheduled task
 *
 * @package   mod_data
 * @author    Priya Ramakrishnan <priya@pukunui.com>, Pukunui
 * @copyright 2018 onwards, Pukunui
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_data\task;

require_once($CFG->dirroot.'/mod/data/locallib.php');

/**
 * Extend core scheduled task
 */
class completedjobs extends \core\task\scheduled_task {
    /**
     * Return name of the Task
     * 
     * @return string
     */
    public function get_name() {
        return get_string('taskname', 'mod_data');
    }

    /**
     * Perform the task
     */
    public function execute() {
        mod_data_completedjobs('auto');
    }
}

