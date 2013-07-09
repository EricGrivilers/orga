<?php

namespace Caravane\Bundle\OrganicBundle\Managers;

use Caravane\Bundle\OrganicBundle\Entity\Invoice;

class InvoiceManager
{
    protected $em;
    protected $invoice;

    public function __construct(Invoice $invoice,$em)
    {
        $this->em=$em;
    	$this->invoice = $invoice;

    }


    public function fillClient() {


        $invoice=$this->invoice;

        if($client=$invoice->getClientid()) {


            $invoice->setCietype($client->getCietype());
            $invoice->setClienttype($client->getClienttype());

            $invoice->setClienttitle($client->getClienttitle());
            $invoice->setName($client->getName());
            $invoice->setLastname($client->getLastname());
            $invoice->setFirstname($client->getFirstname());

            $invoice->setVat($client->getVat());

            $invoice->setAddress($client->getAddress());
            $invoice->setNumber($client->getNumber());
            $invoice->setZip($client->getZip());
            $invoice->setCity($client->getCity());
            $invoice->setCountry($client->getCountry());

            $invoice->setLanguage($client->getLanguage());
        }
/*
        if(!$invoice->getId()) {
            $this->em->persist($invoice);
            $this->em->flush();
        }
        */
        return $invoice;
    }

    public function prePersist() {
        $this->fillClient();
    }

    public function persist() {

        $invoice=$this->invoice;
        $invoice=$this->fillClient();


        $priceHt=0;
        foreach($invoice->getProducts() as $product) {
            $product->setInvoiceid($invoice);
            $priceHt+=$product->getPrice();
            $this->em->persist($product);
        }
        if($invoice->getDiscount()>0) {
            $priceHt=$priceHt-($priceHt*$invoice->getDiscount()/100);
            //$invoice->setPriceht($priceHt);
        }
        if($invoice->getJobid()) {
            if($invoice->getPriceht()==0 && $invoice->getSlice()>0) {
                $invoice->setPriceht($priceHt*$invoice->getSlice()/100);
            }
            else if($invoice->getPriceht()>0 && $invoice->getSlice()==0) {
                $invoice->setSlice($invoice->getPriceht()*100/$priceHt);
            }
        }
        else if($invoice->getPriceht()==0) {
            $invoice->setPriceht($priceHt);
            $invoice->setSlice(100);
        }


        $this->em->persist($invoice);
        $this->em->flush();
        return $invoice;
    }

    public function setReference() {


        $invoice=$this->invoice;
        $reference=$this->em->getRepository('CaravaneOrganicBundle:Invoice')->getNewReference($invoice->getYear());
        $invoice->setReference($reference);

        return $invoice->getReference();
    }

    public function setPaymentdate() {


        $invoice=$this->invoice;
        if(is_null($invoice->getPaymentdate())) {
            $invoice->setPaymentDate(new \Datetime('now'));
        }


        return $invoice->getPaymentdate();
    }


}


?>
