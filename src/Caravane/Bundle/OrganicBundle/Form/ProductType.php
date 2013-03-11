<?php

namespace Caravane\Bundle\OrganicBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
    private $productType;

    public function __construct($productType) {
        $this->productType=$productType;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            //->add('reference')
            ->add('description','textarea',array(
               "attr"=>array(
                    "class"=>"span12"
                ) 
            ))
            ->add('price','number',array(
                'precision' => 2,
                "attr"=>array(
                    "class"=>"span12"
                ) 
            ))
        ;
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $class="Caravane\Bundle\OrganicBundle\Entity\Product2" . $this->productType;
        $resolver->setDefaults(array(
            'data_class' => $class
        ));
    }

    public function getName()
    {
        return 'caravane_bundle_organicbundle_producttype';
    }
}
