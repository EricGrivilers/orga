<?php

namespace Caravane\Bundle\OrganicBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Caravane\Bundle\OrganicBundle\Form\DataTransformer\ClientToNameTransformer;

class InvoiceType extends AbstractType
{
    private $status;

    public function __construct() {

    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $entityManager = $options['em'];
        $transformer = new ClientToNameTransformer($entityManager);

        $builder
           // ->add('reference')
           // ->add('year')
            ->add('offretype','choice',array(
                'choices'=>array('sell'=>"Sell",'rent'=>"Rent",'winter'=>"Winter storage")
            ))
            ->add('slice')
            ->add('cslice')
            ->add('nbslices')
            //->add('insertdate')
            ->add('paymentdate','CaravaneUIDatePicker',array(
                'widget' => 'single_text',
                "label"=>"Payment date"
            ))
            ->add('priceht')
            ->add('pricetype')
            ->add('creditnote')
            ->add('comments')
            ->add('conditions')
            ->add('conditions1')
            ->add('conditions2')
            ->add('content')
            ->add('cietype')
             ->add('clienttype',"hidden")
            ->add('clienttitle')
            ->add('name')
            ->add('lastname')
            ->add('firstname')
            ->add('vat')
            ->add('address')
            ->add('number')
            ->add('zip')
            ->add('city')
            ->add('country')
            ->add('status','choice',array(
                'choices'=>array('draft'=>"Draft",'ok'=>"Sent to client",'paid'=>"Paid")
            ))
            ->add('r1')
            ->add('r1date')
            ->add('r2')
            ->add('r2date')
            ->add('med')
            ->add('meddate')
              ->add('language','choice',array(
                "choices"=>array('en'=>'en','fr'=>'fr','nl'=>'nl'),
                "attr"=>array(
                    "class"=>"span6"
                )
            ))
            ->add('jobid')
            ->add($builder->create('clientid', 'CaravaneUIBootstrapTypeahead',array(
                "label"=>"Client",
                "attr"=>array(
                    "class"=>"span12",
                    //"data"=>$owner->getName(),
                    "source_route"=>"client_autocomplete"
                )
            ))
                ->addModelTransformer($transformer)
            )
        ;
            $builder->add('products', 'collection', array(
                'type' => new ProductType('invoice'),
                'allow_add'    => true,
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
