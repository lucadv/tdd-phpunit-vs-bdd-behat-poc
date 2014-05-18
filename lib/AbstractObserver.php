<?php
/**
 *
 * @author Luca Di Vincenzo
 *
 */

abstract class AbstractObserver {
	abstract function update(AbstractSubject $subject_in);
}
