<?php

namespace Caravane\Bundle\OrganicBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;



class CommentEmbedType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('subject')
        ->add('content','textarea',array(
            'label'=>'Message',
            "attr"=>array(
                    'class'=>'span12'
                )
            ))
        ;

    }

     public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Caravane\Bundle\OrganicBundle\Entity\Comment'
        ));

    }

    public function getName()
    {
        return 'caravane_organicbundle_commenttype';
    }

}
?>
