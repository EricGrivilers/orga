<?php

namespace Caravane\Bundle\OrganicBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class InvoiceControllerTest extends WebTestCase
{

    public function testCompleteScenario()
    {
        // Create a new client to browse the application
        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'eric@caravanemedia.com',
            'PHP_AUTH_PW'   => 'absco8645',
        ));

        // Create a new entry in the database
        $crawler = $client->request('GET', '/invoice/');
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());
        print "eeeeeee";

        $crawler = $client->click($crawler->selectLink('New invoice')->link());

        // Fill in the form and submit it
        print "eeeeeee";
        $form = $crawler->selectButton('Create')->form(array(
            'caravane_bundle_organicbundle_invoicetype[field_name]'  => 'Test',
            // ... other fields to fill
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check data in the show view
        $this->assertTrue($crawler->filter('td:contains("Test")')->count() > 0);

        // Edit the entity
        $crawler = $client->click($crawler->selectLink('Edit')->link());

        $form = $crawler->selectButton('Edit')->form(array(
            'caravane_bundle_organicbundle_invoicetype[field_name]'  => 'Foo',
            // ... other fields to fill
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check the element contains an attribute with value equals "Foo"
        $this->assertTrue($crawler->filter('[value="Foo"]')->count() > 0);

        // Delete the entity
        $client->submit($crawler->selectButton('Delete')->form());
        $crawler = $client->followRedirect();

        // Check the entity has been delete on the list
        $this->assertNotRegExp('/Foo/', $client->getResponse()->getContent());
    }


}