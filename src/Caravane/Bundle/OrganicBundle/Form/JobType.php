<?php

namespace Caravane\Bundle\OrganicBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

use Caravane\Bundle\OrganicBundle\Form\ClientType;
use Doctrine\ORM\EntityRepository;


class JobType extends AbstractType
{
    private $statusChoices;

    public function __construct() {
        $this->statusChoices=array("CONFIRMÉ"=>"","closed"=>"Closed","draft"=>"Draft","ok"=>"Ok");
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          //  ->add('insertdate')
          //  ->add('updatedate')
          //  ->add('reference')
         /*    ->add('offretype','choice',array(
                "label"=>"Type",
                'choices'=>array('sell'=>"Sell",'rent'=>"Rent",'winter'=>"Winter storage")
            ))
            */

          ->add('eventdate','datetime',array(
              'date_widget'=>'single_text',
              'time_widget'=>'single_text',
              'date_format' => 'dd/MM/yyyy',
              'label'=>"Event date",
              'attr'=>array(
                  'class'=>'datetimepicker'
              )
          ))

            ->add('planningcomments','ckeditor',array(
                'label'=>"Planning comments",
                'attr'=>array(
                    'class'=>'col-md-12'
                )
            ))
            ->add('offrecomments','ckeditor',array(
                'label'=>"Comments",
                'attr'=>array(
                    'class'=>'col-md-12'
                )
            ))
            ->add('surface','text',array(
                'label'=>"Wished area",
                'attr'=>array(
                    'class'=>"col-md-3"
                )
            ))
           // ->add('startbuild')
        //    ->add('endbuild')
            ->add('buildnotes','ckeditor',array(
                'label'=>"Building notes",
                'attr'=>array(
                    'class'=>'col-md-12'
                )
            ))
            ->add('unbuildnotes','ckeditor',array(
                'label'=>"Unbuilding notes",
                'attr'=>array(
                    'class'=>'col-md-12'
                )
            ))
         //   ->add('requestdate')
           /*  ->add('status','choice',array(
                'choices'=> $this->statusChoices,
                'attr'=>array(
                    'class='=>'status'
                )
            ))*/
             ->add('pricetype','choice',array(
                'choices'=>array('htva'=>"TVA (21%)",'intra'=>"Intracomm.")
            ))
           // ->add('price')
            ->add('pricecomments','textarea',array(
                'label'=>'Comments',
                'attr'=>array(
                    'class'=>"col-md-12"
                )
            ))
            ->add('conditions','ckeditor',array(
                'label'=>"Conditions comments",
                'attr'=>array(
                    'class'=>'col-md-12'
                )
            ))
          //  ->add('conditionsslices')
          //  ->add('tents')
            ->add('tentscomments','ckeditor',array(
                'label'=>"Stock/products comments",
                'attr'=>array(
                    'class'=>"col-md-12"
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
            ->add('country')
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
            ->add('comments','ckeditor',array(
                'label'=>"Notes",
                'attr'=>array(
                    'class'=>'col-md-12'
                )
            ))
           // ->add('public')
            //->add('issue')
            //->add('jobreference')
            //->add('language')
            //->add('copyid')
            ->add('userid','entity',array(
                'attr'=>array(
                    'class'=>'col-md-12'
                ),
                'required' => false,
                'label'=>"Account",

                'class'=>'Caravane\UserBundle\Entity\User',
                 'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.enabled =1')
                        ->orderBy('u.firstname', 'ASC');
                },
            ))
           // ->add('offreid')
            ->add('clientid',new ClientEmbededType(),array(
                'required'=>false
            ))

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

        $builder->add('previewdate','datetime',array(
            'date_widget'=>'single_text',
            'time_widget'=>'single_text',
            'date_format' => 'dd/MM/yyyy',
            'attr'=>array(
                'class'=>'datetimepicker'
            )
        ));
        $builder->add('builddate','datetime',array(
            'date_widget'=>'single_text',
            'time_widget'=>'single_text',
            'date_format' => 'dd/MM/yyyy',
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
                'type' => new Planning2JobType(),
                'allow_add'    => true,
                'allow_delete' => false,
                'by_reference' => false,
                'data_class'=> null
                )
            );
*/
        $builder->add('slices', 'collection', array(
                'type' => new Slice2JobType(),
                'allow_add'    => true,
                'allow_delete' => true,
                'by_reference' => false,
                'data_class'=> null
                )
            );
        $builder->add('products', 'collection', array(
                'type' => new Product2JobType(),
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
            'data_class' => 'Caravane\Bundle\OrganicBundle\Entity\Job'
        ));
    }

    public function getName()
    {
        return 'caravane_bundle_organicbundle_jobtype';
    }
}
