<?php

namespace Caravane\Bundle\OrganicBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Caravane\Bundle\OrganicBundle\Form\DataTransformer\ClientToIdTransformer;

class InvoiceType extends AbstractType
{
    private $statusChoices;

    public function __construct($statusChoices) {
        $this->statusChoices=$statusChoices;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $entityManager = $options['em'];
        $transformer = new ClientToIdTransformer($entityManager);

        $builder
           // ->add('reference')
           // ->add('year')
            ->add('offretype','choice',array(
                "label"=>"Type",
                'choices'=>array('sell'=>"Sell",'rent'=>"Rent",'winter'=>"Winter storage")
            ))
            ->add('slice','number',array(
                "attr"=>array(
                    'class'=>'slice'
                )
            ))
            ->add('sliceDescription','textarea',array(
                "attr"=>array(
                    'class'=>'span12'
                )
            ))
            //->add('cslice')
            //->add('nbslices')
            //->add('insertdate')
            ->add('paymentdate','CaravaneUIDatePicker',array(
                "label"=>"Payment date"
            ))
           ->add('priceht','number',array(
                'precision' => 2,
                "attr"=>array(
                    "class"=>"span12 price"
                )
            ))
            ->add('pricetype','choice',array(
                'choices'=>array('intra'=>"Intracomm.",'htva'=>"TVA (21%)")
            ))
         //   ->add('creditnote')
            ->add('comments','ckeditor')
            ->add('conditions','ckeditor')
            //->add('conditions1')
           // ->add('conditions2')
         //   ->add('content')
        /*    ->add('cietype')
            ->add('clienttype','CaravaneUIBootstrapRadioButton',array(
                "label"=>"Client type",
                'choices'=>array('cie'=>'Company','part'=>'Private')
            ))
             ->add('clienttitle','choice',array(
                "choices"=>array("M."=>"M.","Mme"=>"Mme"),
                "label"=>"Title",
                "attr"=>array(
                    "class"=>"span4"
                )
            ))
           
            
     /*       ->add('r1')
            ->add('r1date')
            ->add('r2')
            ->add('r2date')
            ->add('med')
            ->add('meddate')
            */
      /*        ->add('language','choice',array(
                "choices"=>array('en'=>'en','fr'=>'fr','nl'=>'nl'),
                "attr"=>array(
                    "class"=>"span6"
                )
            ))
            */
/*
->add('name','hidden')
            ->add('lastname','hidden')
            ->add('firstname','hidden')
            ->add('vat','hidden')
            ->add('address','hidden')
            ->add('number','hidden')
            ->add('zip','hidden')
            ->add('city','hidden')
            ->add('country','hidden')

            */




->add('status','choice',array(
                'choices'=> $this->statusChoices,
                'attr'=>array(
                    'class='=>'status'
                )
            ))
            //->add('jobid')
              ->add('clientid',new ClientEmbededType())
              /*
            ->add($builder->create('clientid', 'CaravaneUIBootstrapTypeahead',array(
                "label"=>"Client",
                "attr"=>array(
                    "class"=>"span12",
                    //"data"=>$owner->getName(),
                    "source_route"=>"client_autocomplete",
                    "label_field"=>"name",
                    "updater"=>"fillClient2invoice"
                )
            ))
                ->addModelTransformer($transformer)
            )*/

        ;
            $builder->add('products', 'collection', array(
                'type' => new Product2InvoiceType(),
                'allow_add'    => true,
                'allow_delete' => true,
                'by_reference' => false,
                'data_class'=> null
                )
            );

          //  $builder->add('products');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Caravane\Bundle\OrganicBundle\Entity\Invoice'
        ));

         $resolver->setRequired(array(
            'em',
        ));

        $resolver->setAllowedTypes(array(
            'em' => 'Doctrine\Common\Persistence\ObjectManager',
        ));
    }

    public function getName()
    {
        return 'caravane_bundle_organicbundle_invoicetype';
    }
}
