<?php
namespace Ayou\Multichain\Tests;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use GrahamCampbell\TestBench\AbstractPackageTestCase;
use Ayou\Multichain\MultichainClient;
use Ayou\Multichain\MultiChainServiceProvider;

/**
* Service provider test class.
*/

class ServiceProviderTest extends AbstractTestCase
{
	use ServiceProviderTrait;
	
	public function testMultichainIsInjectable()
	{
		$this->assertIsInjectable(MultichainClient::class);
	}
}