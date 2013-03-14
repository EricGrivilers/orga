<?php

namespace Caravane\Bundle\OrganicBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Planning2offreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           // ->add('planningtype')
            ->add('startdate','datetime',array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy HH:mm:ss',
                'attr' => array('class' => 'startDate')

            ))
             ->add('enddate','datetime',array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy HH:mm:ss',
                'attr' => array('class' => 'endDate')

            ))
            //->add('enddate')
            /* ->add('startdate','CaravaneUIDatePicker',array(
                "label"=>"From",
                'attr'=>array(
                    'class'=>'startDate'
                )
            ))
             ->add('enddate','CaravaneUIDatePicker',array(
                "label"=>"To",
                'attr'=>array(
                    'class'=>'endDate'
                )
            ))
            */
            //->add('etat')
            ->add('userid')
            //->add('jobid')
            //->add('offreid')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Caravane\Bundle\OrganicBundle\Entity\Planning2offre'
        ));
    }

    public function getName()
    {
        return 'caravane_bundle_organicbundle_planningtype';
    }
}
