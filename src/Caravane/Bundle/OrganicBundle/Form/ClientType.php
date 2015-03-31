<?php

namespace Caravane\Bundle\OrganicBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            //->add('reference')
             ->add('clienttype','CaravaneUIBootstrapRadioButton',array(
                "label"=>"Client type",
                'choices'=>array('cie'=>'Company','part'=>'Private')
            ))
           // ->add('isowner')

/*              ->add($builder->create('clientid', 'CaravaneUIBootstrapTypeahead',array(
                "label"=>"Client",
                "attr"=>array(
                    "class"=>"col-md-12",
                    //"data"=>$owner->getName(),
                    "source_route"=>"client_autocomplete",
                    "label_field"=>"name",
                    "updater"=>"fillClient2invoice"
                )
            ))
                ->addModelTransformer($transformer)
*/
            ->add('name',"CaravaneUIBootstrapTypeahead",array(
                'label'=>"Company name",
                "attr"=>array(
                    "class"=>"col-md-12",
                    "source_route"=>"client_autocomplete",
                    "label_field"=>"name",
                    "updater"=>"fillClient",
                    'target_field'=>"#clientid"
                )
            ))
            ->add('lastname',"CaravaneUIBootstrapTypeahead",array(
                'label'=>"Lastname",
                "attr"=>array(
                    "class"=>"col-md-12",
                    "source_route"=>"client_autocomplete",
                    "label_field"=>"lastname",
                    "updater"=>"fillClient",
                    'target_field'=>"#clientid"
                )
            ))



            /*->add('name',"text",array(
                'label'=>"Company name",
                "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))*/
            ->add('firstname',"text",array(
                "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))
          /*  ->add('lastname',"text",array(
                "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))*/
            ->add('clienttitle','choice',array(
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
                    'class'=>'col-md-12'
                )
            ))
            ->add('vat',"text",array(
                "label"=>"VAT",'attr'=>array(
                    'class'=>'col-md-12'
                )
            ))
            ->add('address',"text",array(
                "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))
            ->add('number',"text",array(
                "label"=>"Number/Box",
                "attr"=>array(
                    "class"=>"col-md-4"
                )
            ))
            ->add('zip',"text",array(
                "attr"=>array(
                    "class"=>"col-md-4"
                )
            ))
            ->add('city',"text",array(
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
                "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))
            ->add('phone2',"text",array(
                "attr"=>array(
                    "class"=>"col-md-12"
                ),
                "label"=>"Other"
            ))
            ->add('mobile',"text",array(
                "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))
            ->add('fax',"text",array(
                "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))
            ->add('email',"text",array(
                "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))
            ->add('url',"text",array(
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
            ->add('origin',"textarea",array(
                "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))
            //->add('insertdate')
            //->add('updatedate')
         //   ->add('public')
            //->add('jobid')
            ->add('userid','entity',array(
                "class"=>"CaravaneUserBundle:User",
                "label"=>"Account manager",
                "attr"=>array(
                    "class"=>"col-md-12"
                ),
                "required"=>false,
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.enabled =1')
                        ->orderBy('u.firstname', 'ASC');
                },
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
