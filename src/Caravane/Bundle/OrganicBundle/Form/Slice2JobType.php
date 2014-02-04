<?php

namespace Caravane\Bundle\OrganicBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Slice2JobType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
          // ->add('sliceid')
           ->add('slice','text',array(
            'attr'=>array(
                'class'=>'slice'
                )
            ))
           ->add('priceht','text',array(
            'attr'=>array(
            'class'=>'span12 price')
            ))
           ->add('comments','text',array(
            'attr'=>array(
            'class'=>'span12')
            ))
        //   ->add('status')

        ;
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {

        $resolver->setDefaults(array(
            'data_class' => "Caravane\Bundle\OrganicBundle\Entity\Slice2job"
        ));
    }

    public function getName()
    {
        return 'caravane_bundle_organicbundle_slice2jobtype';
    }
}
