<?php 
namespace Maaaathis\DiscordPermissionConverter\Tests;

use PHPUnit\Framework\TestCase;

/**
*  Corresponding Class to test PermissionConverter class
*
*  @author Mathis
*/
class PermissionConverterTest extends TestCase
{
	
  /**
  * Just check if the PermissionConverter has no syntax error 
  *
  *  Checks for general syntax errors.
  *
  */
  public function testIsThereAnySyntaxError()
  {
	$var = new \Maaaathis\DiscordPermissionConverter\PermissionConverter;
	$this->assertTrue(is_object($var));
	unset($var);
  }
  
  /**
  * Just check if the PermissionConverter has no syntax error 
  *
  * Checks a fix array of permissions.
  *
  */
  public function basicTest1()
  {
	$var = new \Maaaathis\DiscordPermissionConverter\PermissionConverter;
	$this->assertTrue(json_encode($var->convertPermission("1409084834386")) == '["KICK_MEMBERS","MANAGE_CHANNELS","ADD_REACTIONS","STREAM","EMBED_LINKS","CHANGE_NICKNAME","MANAGE_ROLES","CREATE_PUBLIC_THREADS","SEND_MESSAGES_IN_THREADS","MODERATE_MEMBERS"]');
	unset($var);
  }

  /**
  * Just check if the PermissionConverter has no syntax error 
  *
  * Checks a fix array of permissions.
  *
  */
  public function adminTest()
  {
	$var = new \Maaaathis\DiscordPermissionConverter\PermissionConverter;
	$this->assertTrue(json_encode($var->convertPermission("8")) == '["ADMINISTRATOR"]');
	unset($var);
  }
}