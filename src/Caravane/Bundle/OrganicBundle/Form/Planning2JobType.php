<?php

namespace Caravane\Bundle\OrganicBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Doctrine\ORM\EntityRepository;

class Planning2JobType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('planningtype','hidden')
            ->add('startdate','datetime',array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy HH:mm:ss',
                'attr' => array('class' => 'startDate col-md-12')

            ))
             ->add('enddate','datetime',array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy HH:mm:ss',
                'attr' => array('class' => 'endDate col-md-12')

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
            ->add('etat','choice',array(
                'choices'=>array('TO DO','OK'),
                'attr'=>array(
                    'class'=>'col-md-12'
                    )
            ))
            ->add('userid','entity',array(
                'class'=>'Caravane\UserBundle\Entity\User',
                'required'=>false,
                 'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.enabled =1')
                        ->orderBy('u.firstname', 'ASC');
                },
            ))
            //->add('jobid')
            //->add('offreid')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Caravane\Bundle\OrganicBundle\Entity\Planning2job'
        ));
    }

    public function getName()
    {
        return 'caravane_bundle_organicbundle_planning2jobtype';
    }
}
