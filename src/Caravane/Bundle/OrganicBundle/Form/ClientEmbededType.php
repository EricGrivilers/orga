<?php

namespace Caravane\Bundle\OrganicBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientEmbededType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            
             ->add('clienttype','CaravaneUIBootstrapRadioButton',array(
                "label"=>"Client type",
                'choices'=>array('cie'=>'Company','part'=>'Private')
            ))
           // ->add('isowner')
            ->add('name',"text",array(
                'label'=>"Company name",
                "attr"=>array(
                    "class"=>"span12"
                )
            ))
            ->add('firstname',"text",array(
                "attr"=>array(
                    "class"=>"span12"
                )
            ))
            ->add('lastname',"text",array(
                "attr"=>array(
                    "class"=>"span12"
                )
            ))
            ->add('clienttitle','choice',array(
                "choices"=>array("M."=>"M.","Mme"=>"Mme"),
                "label"=>"Title",
                "attr"=>array(
                    "class"=>"span4"
                )
            ))
            ->add('cietype','choice',array(
                "choices"=>array(
                    "/"=>"/",
                    "ASBL"=>"ASBL",
                    "BVBA"=>"BVBA",
                    "Comm. V"=>"Comm. V",
                    "EBVBA"=>"EBVBA",
                    "INC"=>"INC",
                    "NV"=>"NV",
                    "S.P.R.L. "=>"S.P.R.L. ",
                    "SA"=>"SA",
                    "SARL"=>"SARL",
                    "SCRL"=>"SCRL",
                    "SCS"=>"SCS",
                    "Sprl"=>"Sprl",
                    "VOF"=>"VOF",
                    "VZW"=>"VZW",
                    "privé"=>"privé"
                ),
                "label"=>"Type",
                'attr'=>array(
                    'class'=>'span12'
                )
            ))
            ->add('vat',"text",array(
                "label"=>"VAT",
                'attr'=>array(
                    'class'=>'span12'
                )
            ))
            ->add('address',"text",array(
                "attr"=>array(
                    "class"=>"span12"
                )
            ))
            ->add('number',"text",array(
                "label"=>"Number/Box",
                "attr"=>array(
                    "class"=>"span4"
                )
            ))
            ->add('zip',"text",array(
                "attr"=>array(
                    "class"=>"span4"
                )
            ))
            ->add('city',"text",array(
                "attr"=>array(
                    "class"=>"span12"
                )
            ))
            ->add('country','country',array(
                'attr'=>array(
                    'class'=>'span12'
                )
            ))
            ->add('phone',"text",array(
                "attr"=>array(
                    "class"=>"span12"
                )
            ))
            ->add('phone2',"text",array(
                "attr"=>array(
                    "class"=>"span12"
                ),
                "label"=>"Other"
            ))
            ->add('mobile',"text",array(
                "attr"=>array(
                    "class"=>"span12"
                )
            ))
            ->add('fax',"text",array(
                "attr"=>array(
                    "class"=>"span12"
                )
            ))
            ->add('email',"text",array(
                "attr"=>array(
                    "class"=>"span12"
                )
            ))
            ->add('url',"text",array(
                "label"=>"Website",
                "attr"=>array(
                    "class"=>"span12"
                )
            ))
            ->add('language','choice',array(
                "choices"=>array('en'=>'en','fr'=>'fr','nl'=>'nl'),
                "attr"=>array(
                    "class"=>"span6"
                )
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Caravane\Bundle\OrganicBundle\Entity\Client'
        ));
    }

    public function getName()
    {
        return 'caravane_bundle_organicbundle_clienttype';
    }
}
