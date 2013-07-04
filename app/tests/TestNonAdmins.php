<?php

class NonAdminsTest extends TestCase {


	public function testRootUrl()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

	public function testNonAdminShowMethod()
	{
		$crawler = $this->client->request('GET', '/page/home');

		$this->assertTrue($this->client->getResponse()->isOk());
	}


}

?>
