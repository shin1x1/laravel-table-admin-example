<?php

class TableAdminIndexTest extends TestCase
{
    /**
     * @setUp
     */
    public function setUp()
    {
        parent::setUp();
        Artisan::call('migrate');
        Artisan::call('db:seed');
    }

    /**
     * @test
     */
    public function index()
    {
        $this->client->request('GET', '/');
        $this->assertTrue($this->client->getResponse()->isRedirect());
        $this->assertEquals('http://localhost/crud/classes', $this->client->getResponse()->headers->get('Location'));
    }
}