<?php
/*

	Stemm_es a stemming class for spanish / Un lexemador para español
    Copyright (C) 2007-2016  Paolo Ragone

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

	You may contact me at pragone@gmail.com

*/

require_once 'stemm_es.php';

$lines = file('stemm_test_corpus.txt');

$now = time();
foreach ($lines as $line) {
	$part = split(' ', $linea);
	$st = stemm_es::stemm($part[0]);
	if ($st != $part[1]) {
		print "Word: " . $part[0] . ", stem: " . $st . ", ";
		print "expected: " . $part[1];
		print " -- BAD<HR>";
	}
}

print "<BR>Stemmed: " . count($lines) . " words in " . (time() - $now) . " secs";

?>
