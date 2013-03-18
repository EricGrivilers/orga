<?php

namespace Caravane\Bundle\OrganicBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Caravane\Bundle\OrganicBundle\Form\ClientType;

class OffreType extends AbstractType
{
    private $statusChoices;

    public function __construct() {
        $this->statusChoices=array("draft"=>"Draft","ok"=>"Sent to client","CONFIRMÉ"=>"Confirmed","cancel"=>"Canceled");
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           // ->add('insertdate')
            //->add('updatedate')
           // ->add('reference')
             ->add('offretype','choice',array(
                "label"=>"Type",
                'choices'=>array('sell'=>"Sell",'rent'=>"Rent",'winter'=>"Winter storage")
            ))
            ->add('planningcomments','ckeditor',array(
                'label'=>"comments",
                'attr'=>array(
                    'class'=>'span12'
                )
            ))
            ->add('offrecomments','ckeditor',array(
                'label'=>"comments",
                'attr'=>array(
                    'class'=>'span12'
                )
            ))
            ->add('surface')
           // ->add('startbuild')
           // ->add('endbuild')
           // ->add('requestdate')
            ->add('status','choice',array(
                'choices'=> $this->statusChoices,
                'attr'=>array(
                    'class='=>'status'
                )
            ))
             ->add('pricetype','choice',array(
                'choices'=>array('intra'=>"Intracomm.",'htva'=>"TVA (21%)")
            ))
            ->add('price','number',array(
                'precision' => 2,
                "attr"=>array(
                    "class"=>"span12 price"
                )
            ))
            ->add('pricecomments','textarea',array(
                'attr'=>array(
                    'class'=>"span12"
                )
            ))
            ->add('conditions')
            ->add('conditionsslices')
          //  ->add('tents')
            ->add('tentscomments','ckeditor',array(
                'label'=>"Additionnal comments",
                'attr'=>array(
                    'class'=>"span12"
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
            ->add('country')
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
            ->add('comments')
            ->add('introtext','ckeditor',array(
                'label'=>"Quotre introducting text",
                'attr'=>array(
                    'class'=>"span12"
                )
            ))
            //->add('issue')
           // ->add('deleted')
           // ->add('public')
           /*  ->add('language','choice',array(
                "choices"=>array('en'=>'en','fr'=>'fr','nl'=>'nl'),
                "attr"=>array(
                    "class"=>"span6"
                )
            ))
            */
         //   ->add('copyid')
            ->add('userid','entity',array(
                'label'=>"Account",
                'class'=>'Caravane\Bundle\OrganicBundle\Entity\User'
            ))
            ->add('clientid',new ClientEmbededType())
        ;
        $builder->add('plannings', 'collection', array(
                'type' => new Planning2offreType(),
                'allow_add'    => false,
                'allow_delete' => false,
                'by_reference' => false,
                'data_class'=> null
                )
            );

        $builder->add('products', 'collection', array(
                'type' => new Product2OffreType(),
                'allow_add'    => true,
                'allow_delete' => true,
                'by_reference' => false,
                'data_class'=> null
                )
            );
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Caravane\Bundle\OrganicBundle\Entity\Offre'
        ));
    }

    public function getName()
    {
        return 'caravane_bundle_organicbundle_offretype';
    }
}
