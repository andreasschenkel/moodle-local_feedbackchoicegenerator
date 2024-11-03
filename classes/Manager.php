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

namespace local_feedbackchoicegenerator;

use moodle_database;
use local_feedbackchoicegenerator\local\Database\Factory as DatabaseFactory;
use local_feedbackchoicegenerator\Security;

/**
 * Manager
 *
 * @package    local_feedbackchoicegenerator
 * @copyright  2021 Andreas Schenkel
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class Manager {
    /**
     * @var moodle_database
     */
    private $dbm;

    /**
     * Manager constructor.
     * @param moodle_database $dbm
     */
    public function __construct(moodle_database $dbm) {
        $this->dbm = $dbm;
    }

    /**
     * Databasefactory
     *
     * @return DatabaseFactory
     */
    public function database(): DatabaseFactory {
        return new DatabaseFactory($this->dbm);
    }

    /**
     * Security
     *
     * @return Security
     */
    public function security(): Security {
        return new Security($this->dbm);
    }
}
