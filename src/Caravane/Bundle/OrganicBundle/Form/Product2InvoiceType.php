<?php

namespace Caravane\Bundle\OrganicBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Product2InvoiceType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            //->add('reference')
            ->add('description','textarea',array(
               "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))
            ->add('price','number',array(
                'precision' => 2,
                "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))
            //->add('invoiceid')

        ;
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {

        $resolver->setDefaults(array(
            'data_class' => "Caravane\Bundle\OrganicBundle\Entity\Product2invoice"
        ));
    }

    public function getName()
    {
        return 'caravane_bundle_organicbundle_producttype';
    }
}
