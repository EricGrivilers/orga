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
                    "source_route"=>"client_autocomplete",
                    "label_field"=>"name",
                    "updater"=>"fillClient",
                    'target_field'=>"#clientid",
                    "sub_form"=>'#offre_client'
                )
            ))
            ->add('lastname',"CaravaneUIBootstrapTypeahead",array(
                'label'=>"Lastname",
                "attr"=>array(
                    "source_route"=>"client_autocomplete",
                    "label_field"=>"lastname",
                    "updater"=>"fillClient",
                    'target_field'=>"#clientid",
                    "sub_form"=>'#offre_client'
                )
            ))
            ->add('firstname',"text",array(
                'required'=>false,
                "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))

            ->add('clienttitle','choice',array(
                'required'=>false,
                "choices"=>array("M."=>"M.","Mme"=>"Mme"),
                "label"=>"Title",
                "attr"=>array(
                    "class"=>"col-md-4"
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
                "label"=>"Company type",
                'attr'=>array(
                    'class'=>'col-md-12'
                )
            ))
            ->add('vat',"text",array(
                "label"=>"Company VAT",
                'attr'=>array(
                    'class'=>'col-md-12'
                )
            ))
            ->add('address',"text",array(
                'required'=>false,
                "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))
            ->add('number',"text",array(
                'required'=>false,
                "label"=>"Number/Box",
                "attr"=>array(
                    "class"=>"col-md-4"
                )
            ))
            ->add('zip',"text",array(
                'required'=>false,
                "attr"=>array(
                    "class"=>"col-md-4"
                )
            ))
            ->add('city',"text",array(
                'required'=>false,
                "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))
            ->add('country','country',array(
                'required'=>false,
                'attr'=>array(
                    'class'=>'col-md-12'
                )
            ))
            ->add('phone',"text",array(
                'required'=>false,
                "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))
            ->add('phone2',"text",array(
                'required'=>false,
                "attr"=>array(
                    "class"=>"col-md-12"
                ),
                "label"=>"Other"
            ))
            ->add('mobile',"text",array(
                'required'=>false,
                "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))
            ->add('fax',"text",array(
                'required'=>false,
                "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))
            ->add('email',"text",array(
                'required'=>false,
                "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))
            ->add('url',"text",array(
                'required'=>false,
                "label"=>"Website",
                "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))
            ->add('language','choice',array(
                "choices"=>array('en'=>'en','fr'=>'fr','nl'=>'nl'),
                "attr"=>array(
                    "class"=>"col-md-6"
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
