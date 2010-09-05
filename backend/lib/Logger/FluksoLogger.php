<?php
/**
 * @copyright Copyright (c) 2010, The volkszaehler.org project
 * @package default
 * @license http://www.opensource.org/licenses/gpl-license.php GNU Public License
 */
/*
 * This file is part of volkzaehler.org
 *
 * volkzaehler.org is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * volkzaehler.org is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with volkszaehler.org. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Volkszaehler\Logger;

/**
 * Logger for the Flukso.net API
 *
 * @package default
 * @link http://www.flukso.net
 * @link http://github.com/icarus75/flukso
 * @author Steffen Vogel <info@steffenvogel.de>
 * @todo to be implemented
 */
class FluksoLogger extends Logger {
	/**
	 * @return array of Model\Data
	 */
	public function getData();

	public function getVersion();

}

?>