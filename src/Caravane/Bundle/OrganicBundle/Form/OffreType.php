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
            ->add('eventdate','CaravaneUIDateTimePicker',array(
                'widget'=>'single_text',
                'format' => 'dd/MM/yyyy hh:mm:ss',
                'label'=>"Event date",
                'attr'=>array(
                    'class'=>'span3 datepicker'
                )
            ))
            ->add('validity','choice',array(
                'choices'=>array('14'=>'14 days','21'=>'21 days','30'=>'1 month'),
                'attr'=>array(
                    'class'=>'span12'
                )
            ))
             ->add('offretype','choice',array(
                "label"=>"Type",
                'choices'=>array('sell'=>"Sell",'rent'=>"Rent",'winter'=>"Winter storage"),
                'attr'=>array(
                    'class'=>'span12'
                )
            ))
            ->add('planningcomments','ckeditor',array(
                'label'=>"Planning comments",
                'attr'=>array(
                    'class'=>'span12'
                )
            ))
            ->add('offrecomments','ckeditor',array(
                'label'=>"Comments",
                'attr'=>array(
                    'class'=>'span12'
                )
            ))
            ->add('surface','text',array(
                'label'=>"Wished area",
                'attr'=>array(
                    'class'=>"span3"
                )
            ))
           // ->add('startbuild')
           // ->add('endbuild')
           // ->add('requestdate')
            ->add('status','choice',array(
                'choices'=> $this->statusChoices,
                'attr'=>array(
                    'class'=>'span12 status'
                )
            ))
             ->add('pricetype','choice',array(
                'choices'=>array('intra'=>"Intracomm.",'htva'=>"TVA (21%)")
            ))
        /*    ->add('price','number',array(
                'precision' => 2,
                "attr"=>array(
                    "class"=>"span12 price"
                )
            ))*/
            ->add('pricecomments','textarea',array(
                'label'=>'Comments',
                'attr'=>array(
                    'class'=>"span12"
                )
            ))
            ->add('conditions','ckeditor',array(
                'label'=>"Conditions comments",
                'attr'=>array(
                    'class'=>'span12'
                )
            ))
         //   ->add('conditionsslices')
          //  ->add('tents')
            ->add('tentscomments','ckeditor',array(
                'label'=>"Stock/products comments",
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
            ->add('comments','ckeditor',array(
                'label'=>"Notes",
                'attr'=>array(
                    'class'=>'span12'
                )
            ))
            ->add('introtext','ckeditor',array(
                'label'=>"Offre introducting text",
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
                'required' => false,
                'label'=>"Account",

                'class'=>'Caravane\UserBundle\Entity\User',
                'attr'=>array(
                    'class'=>'span12'
                )
            ))
            ->add('clientid',new ClientEmbededType())

            ->add('files','filesupload',array(
                    'data_class'=>null
                ))

              ->add('document','collection',array(
                'required'=>false,
                'allow_add'    => false,
                'by_reference' => true,
                'type'=>new DocumentEmbedType()
            ))

               ->add('comment','collection',array(
                'type'=>new CommentEmbedType(),
                'allow_add'    => true,
                'by_reference' => false,
                'data_class'=> null,
                'attr'=>array(
                    'class'=>'comment_field'
                )
            ))
        ;





        $builder->add('plannings', 'collection', array(
                'type' => new Planning2offreType(),
                'allow_add'    => true,
                'allow_delete' => false,
                'by_reference' => false,
                'data_class'=> null
                )
            );

        $builder->add('slices', 'collection', array(
                'type' => new Slice2OffreType(),
                'allow_add'    => true,
                'allow_delete' => true,
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
            'data_class' => 'Caravane\Bundle\OrganicBundle\Entity\Offre',
            'cascade_validation' => true,
        ));
    }

    public function getName()
    {
        return 'caravane_bundle_organicbundle_offretype';
    }
}
