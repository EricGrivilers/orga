<?php

namespace Caravane\Bundle\OrganicBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Caravane\Bundle\OrganicBundle\Entity\TentRepository;
use Caravane\Bundle\OrganicBundle\Form\DataTransformer\ClientToNameTransformer;
use Caravane\Bundle\OrganicBundle\Form\DataTransformer\CategoryToNameTransformer;

class TentType extends AbstractType
{

    private $etats=array();
    private $categories=array("1"=>"bbb");

    public function __construct($etats,$categories) {
        $this->etats=$etats;
        $this->categories=$categories;

    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $entityManager = $options['em'];
        $transformer = new ClientToNameTransformer($entityManager);
        $categoryTransformer = new CategoryToNameTransformer($entityManager);

        $builder
            ->add('name','text',array(
                "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))
            ->add('reference')
            ->add('kit')
         /*   ->add('owner','CaravaneUIBootstrapTypeahead',array(
                "attr"=>array(
                    "class"=>"col-md-12",
                    //"data"=>$owner->getName(),
                    "source_route"=>"client_autocomplete"
                )
            ))*/
            /*
            ->add($builder->create('ownerid', 'CaravaneUIBootstrapTypeahead',array(
                "label"=>"Owner",
                "attr"=>array(
                    "class"=>"col-md-12",
                    //"data"=>$owner->getName(),
                    "source_route"=>"client_autocomplete",
                    "label_field"=>"ownerid",
                    "updater"=>"fillClient2invoice"
                )
            ))
                ->addModelTransformer($transformer)
            )
            */
->add('ownerid',new ClientEmbededType())
            ->add('color','text',array(
                "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))
            ->add('length','text',array(
                "attr"=>array(
                    "class"=>"col-md-4"
                )
            ))
            ->add('width','text',array(
                "attr"=>array(
                    "class"=>"col-md-4"
                )
            ))
            ->add('height','text',array(
                "attr"=>array(
                    "class"=>"col-md-4"
                )
            ))
            ->add('m2','text',array(
                "label"=>"Surface",
                "attr"=>array(
                    "class"=>"col-md-4"
                )
            ))
            ->add('weight','text',array(
                "attr"=>array(
                    "class"=>"col-md-4"
                )
            ))
            ->add('piquets')
            //->add('status')
            ->add('etat','CaravaneUIFueluxComboBox',array(
                "label"=>"Status",
                "attr"=>array(
                    'class'=>"col-md-12",
                    'choices'=>$this->etats
                )
            ))

            ->add('comments','ckeditor',array(
                "attr"=>array(
                    "class"=>"col-md-12"
                )
            ))
            ->add('winter')
           // ->add('issue')
            //->add('insertdate')
            //->add('updatedate')
           // ->add('public')
            ->add('winteroffreid')
           /* ->add('productCategory','CaravaneUIFueluxComboBox',array(
                'data_class'=>'Caravane\Bundle\OrganicBundle\Entity\ProductCategory',
                "label"=>"Category",
                "attr"=>array(
                    'class'=>"col-md-12",
                    'choices'=>$this->categories
                )
            ))
*/
             ->add('productCategory','entity',array(
                'label'=>'Category',
                'class'=>'CaravaneOrganicBundle:ProductCategory',
                'attr'=>array(
                    'style'=>'display:none'
                )
                ))
          //  ->add('ownerid')

            ->add('files','file',array(
                    'data_class'=>null
                ))

              ->add('document','collection',array(
                'required'=>false,
                'allow_add'    => false,
                'by_reference' => true,
                'type'=>new DocumentEmbedType()
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Caravane\Bundle\OrganicBundle\Entity\Tent'
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
        return 'caravane_bundle_organicbundle_tenttype';
    }
}
