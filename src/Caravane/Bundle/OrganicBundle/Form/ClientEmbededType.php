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
            ->add('name',"CaravaneUIBootstrapTypeahead",array(
                'label'=>"Company name",
                "attr"=>array(
                    "class"=>"span12",
                    "source_route"=>"client_autocomplete",
                    "label_field"=>"name",
                    "updater"=>"fillClient",
                    'target_field'=>"#clientid"
                )
            ))
            ->add('lastname',"CaravaneUIBootstrapTypeahead",array(
                'label'=>"Lastname",
                "attr"=>array(
                    "class"=>"span12",
                    "source_route"=>"client_autocomplete",
                    "label_field"=>"name",
                    "updater"=>"fillClient",
                    'target_field'=>"#clientid"
                )
            ))
            ->add('firstname',"text",array(
                'required'=>false,
                "attr"=>array(
                    "class"=>"span12"
                )
            ))

            ->add('clienttitle','choice',array(
                'required'=>false,
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
                    "SPRL"=>"SPRL",
                    "SA"=>"SA",
                    "SARL"=>"SARL",
                    "SCRL"=>"SCRL",
                    "SCS"=>"SCS",
                    "Sprl"=>"Sprl",
                    "VOF"=>"VOF",
                    "VZW"=>"VZW",
                    "privé"=>"privé"
                ),
                'required'=>false,
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
                'required'=>false,
                "attr"=>array(
                    "class"=>"span12"
                )
            ))
            ->add('number',"text",array(
                'required'=>false,
                "label"=>"Number/Box",
                "attr"=>array(
                    "class"=>"span4"
                )
            ))
            ->add('zip',"text",array(
                'required'=>false,
                "attr"=>array(
                    "class"=>"span4"
                )
            ))
            ->add('city',"text",array(
                'required'=>false,
                "attr"=>array(
                    "class"=>"span12"
                )
            ))
            ->add('country','country',array(
                'required'=>false,
                'attr'=>array(
                    'class'=>'span12'
                )
            ))
            ->add('phone',"text",array(
                'required'=>false,
                "attr"=>array(
                    "class"=>"span12"
                )
            ))
            ->add('phone2',"text",array(
                'required'=>false,
                "attr"=>array(
                    "class"=>"span12"
                ),
                "label"=>"Other"
            ))
            ->add('mobile',"text",array(
                'required'=>false,
                "attr"=>array(
                    "class"=>"span12"
                )
            ))
            ->add('fax',"text",array(
                'required'=>false,
                "attr"=>array(
                    "class"=>"span12"
                )
            ))
            ->add('email',"text",array(
                'required'=>false,
                "attr"=>array(
                    "class"=>"span12"
                )
            ))
            ->add('url',"text",array(
                'required'=>false,
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
