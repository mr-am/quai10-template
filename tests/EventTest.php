<?php
/**
 * EventTest class
 *
 * PHP version 5
 *
 * @category Template
 * @package  Quai10
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @author   Damien Senger <hi@hiwelo.co>
 * @license  GPL http://www.gnu.org/licenses/gpl.html
 * @link     https://quai10.org/
 */
namespace Quai10;

/**
 * Unit tests for Event class
 *
 * PHP version 5
 *
 * @category Template
 * @package  Quai10
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @author   Damien Senger <hi@hiwelo.co>
 * @license  GPL http://www.gnu.org/licenses/gpl.html
 * @link     https://quai10.org/
 */
class EventTest extends \PHPUnit_Framework_TestCase
{
  /**
   * Unit tests for events functions
   * @return void
   */
  public function testGetEvents()
  {
    $this->assertStringStartsWith('<ul><li>', Event::getFutureEvents());
    $this->assertStringStartsWith('<ul><li>', Event::getPastEvents());
  }
}
