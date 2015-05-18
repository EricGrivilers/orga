<?php

namespace Caravane\Bundle\OrganicBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

use Caravane\Bundle\OrganicBundle\Form\ClientType;
use Doctrine\ORM\EntityRepository;

class OffreType extends AbstractType
{
    private $statusChoices;

    public function __construct() {
        $this->statusChoices=array("draft"=>"Draft","ok"=>"Sent to client","CONFIRMÉ"=>"Confirmed","cancel"=>"Canceled");
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $date = new \Datetime('now');
        $date->setTime(0,0,0);
        $builder
           // ->add('insertdate')
            //->add('updatedate')
           // ->add('reference')
            ->add('eventdate','datetime',array(
               'date_widget'=>'single_text',
               'time_widget'=>'single_text',
               'date_format' => 'dd/MM/yyyy',
               //'empty_data'=>$date,
               'attr'=>array(
                   'class'=>'datetimepicker'
               ),
               "label"=>"Event date"
            ))
            ->add('validity','choice',array(
                'choices'=>array('14'=>'14 days','21'=>'21 days','30'=>'1 month')
            ))
             ->add('offretype','choice',array(
                "label"=>"Type",
                'choices'=>array('rent'=>"Rent",'sell'=>"Sell",'winter'=>"Winter storage"),
                'attr'=>array(
                    'class'=>'col-md-12'
                )
            ))
            ->add('planningcomments','ckeditor',array(
                'label'=>"Planning comments"
            ))
            ->add('offrecomments','ckeditor',array(
                'label'=>"Comments"
            ))
            ->add('surface','text',array(
                'label'=>"Wished surface"
            ))
           // ->add('startbuild')
           // ->add('endbuild')
           // ->add('requestdate')
            ->add('status','choice',array(
                'choices'=> $this->statusChoices,
                'attr'=>array(
                    'class'=>'col-md-12 status'
                )
            ))
             ->add('pricetype','choice',array(
                'choices'=>array('htva'=>"TVA (21%)",'intra'=>"Intracomm.")
            ))
        /*    ->add('price','number',array(
                'precision' => 2,
                "attr"=>array(
                    "class"=>"col-md-12 price"
                )
            ))*/
            ->add('pricecomments','textarea',array(
                'label'=>'Comments'
            ))
            ->add('conditions','ckeditor',array(
                'label'=>"Conditions comments"
            ))
         //   ->add('conditionsslices')
          //  ->add('tents')
            ->add('tentscomments','ckeditor',array(
                'label'=>"Stock/products comments"
            ))
            ->add('address',"text",array(

            ))
            ->add('number',"text",array(
                "label"=>"Number/Box"
            ))
            ->add('zip',"text",array(

            ))
            ->add('city',"text",array(

            ))
            ->add('country')
            ->add('phone',"text",array(

            ))
            ->add('phone2',"text",array(

                "label"=>"Other"
            ))
            ->add('mobile',"text",array(

            ))
            ->add('fax',"text",array(

            ))
            ->add('email',"text",array(

            ))
            ->add('url',"text",array(
                "label"=>"Website"
            ))
            ->add('comments','ckeditor',array(
                'label'=>"Notes"
            ))
            ->add('introtext','ckeditor',array(
                'label'=>"Offre introducting text"
            ))
            //->add('issue')
           // ->add('deleted')
           // ->add('public')
           /*  ->add('language','choice',array(
                "choices"=>array('en'=>'en','fr'=>'fr','nl'=>'nl'),
                "attr"=>array(
                    "class"=>"col-md-6"
                )
            ))
            */
         //   ->add('copyid')
            ->add('userid','entity',array(
                'required' => false,
                'label'=>"Account",

                'class'=>'Caravane\UserBundle\Entity\User',

                 'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.enabled =1')
                        ->orderBy('u.firstname', 'ASC');
                },
            ))
            ->add('clientid',new ClientEmbededType())

            /*->add('files','filesupload',array(
                    'data_class'=>null
                ))*/
            ->add('files','file',array(
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

        $date=new \Datetime('now');
        $date->setTime(null,null);

        $builder->add('previewdate','datetime',array(
            'date_widget'=>'single_text',
            'time_widget'=>'single_text',
            'date_format' => 'dd/MM/yyyy',
            //'empty_data'=>$date,
            'attr'=>array(
                'class'=>'datetimepicker'
            )
        ));
        $builder->add('builddate','datetime',array(
            'date_widget'=>'single_text',
            'time_widget'=>'single_text',
            'date_format' => 'dd/MM/yyyy',
            //'empty_data'=>$date,
            'attr'=>array(
                'class'=>'datetimepicker builddate start d1'
            )
        ));
        $builder->add('endbuilddate','datetime',array(
            'required' => false,
            'date_widget'=>'single_text',
            'time_widget'=>'single_text',
            'date_format' => 'dd/MM/yyyy',
            'attr'=>array(
                'class'=>'datetimepicker builddate end d2'
            )
        ));
        $builder->add('startunbuilddate','datetime',array(
            'date_widget'=>'single_text',
            'time_widget'=>'single_text',
            'date_format' => 'dd/MM/yyyy',
            //'empty_data'=>$date,
            'attr'=>array(
                'class'=>'datetimepicker unbuilddate start d3'
            )
        ));

        $builder->add('unbuilddate','datetime',array(
            'date_widget'=>'single_text',
            'time_widget'=>'single_text',
            'date_format' => 'dd/MM/yyyy',
            'attr'=>array(
                'class'=>'datetimepicker unbuilddate end d4'
            )
        ));

        $builder->add('previewUser');
        $builder->add('buildUser');
        $builder->add('unbuildUser');
/*
        $builder->add('plannings', 'collection', array(
                'type' => new Planning2offreType(),
                'allow_add'    => true,
                'allow_delete' => false,
                'by_reference' => false,
                'data_class'=> null
                )
            );
*/
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

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $data = $event->getData();
            if($data->getUnbuilddate()=='') {
                $data->setUnbuilddate($data->getStartunbuilddate());
            }

            if($data->getEndbuilddate()=='') {
                $data->setEndbuilddate($data->getBuilddate());
            }
            $event->setData($data);
        });
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
