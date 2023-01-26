<?php 
namespace Maaaathis\DiscordPermissionConverter\Tests;

use Maaaathis\DiscordPermissionConverter\PermissionConverter;

use PHPUnit\Framework\TestCase;

/**
*  Corresponding Class to test PermissionConverter class
*
*  @author Mathis
*/
class PermissionConverterTest extends TestCase {

  protected $PermissionConverter;

  public function setUp(): void {
    $this->PermissionConverter = new PermissionConverter();
  }
	
  /**
  * Just check if the PermissionConverter has no syntax error 
  *
  *  Checks for general syntax errors.
  *
  */
  public function testIsThereAnySyntaxError() {
    $this->assertTrue(is_object($this->PermissionConverter));
  }
  
  /**
  * Just check if the PermissionConverter has no syntax error 
  *
  * Checks a fix array of permissions.
  *
  */
  public function testGeneralPermissionListJsonOutput() {
    $this->assertTrue($this->PermissionConverter->convertPermission("1409084834386", true) == '["KICK_MEMBERS","MANAGE_CHANNELS","ADD_REACTIONS","STREAM","EMBED_LINKS","CHANGE_NICKNAME","MANAGE_ROLES","CREATE_PUBLIC_THREADS","SEND_MESSAGES_IN_THREADS","MODERATE_MEMBERS"]');
  }

  /**
  * Just check if the PermissionConverter has no syntax error 
  *
  * Checks a fix array of permissions.
  *
  */
  public function testAdminPermission() {
    $this->assertTrue(json_encode($this->PermissionConverter->convertPermission("8")) == '["ADMINISTRATOR"]');
  }

  /**
  * Just check for an empty hash
  *
  */
  public function testEmptyRequest()
  {
	$var = new \Maaaathis\DiscordPermissionConverter\PermissionConverter;
	$this->assertTrue($var->convertPermission("", true) == '[]');
	unset($var);
  }
}