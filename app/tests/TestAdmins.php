<?php

class AdminsTest extends TestCase {


	public function testAdminLoginUrl()
	{
		$crawler = $this->client->request('GET', '/admins');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

	public function testLoginMethod()
	{
		$crawler = $this->client->request('GET', '/admins');
		$form 	 = $crawler->selectButton('Login')->form(array(
		    'username' => 'administrator',
		    'password' => 'password',
		));

		$crawler = $this->client->submit($form);

		$this->assertRedirectedTo('/posts');
	}

	public function testAdminLogout()
	{
		$crawler = $this->client->request('GET', '/admins');
		$form 	 = $crawler->selectButton('Login')->form(array(
		    'username' => 'administrator',
		    'password' => 'password',
		));

		$crawler = $this->client->submit($form);

		$crawler = $this->client->request('GET', '/admins/logout');

		$this->assertRedirectedTo('/admins');
	}

}

?>