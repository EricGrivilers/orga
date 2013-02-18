<?php

namespace Caravane\Bundle\OrganicBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class JobType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          //  ->add('insertdate')
          //  ->add('updatedate')
            ->add('reference')
            ->add('offretype')
            ->add('planningcomments')
            ->add('offrecomments')
            ->add('surface')
           // ->add('startbuild')
        //    ->add('endbuild')
            ->add('buildnotes')
            ->add('unbuildnotes')
         //   ->add('requestdate')
            ->add('status')
            ->add('pricetype')
            ->add('price')
            ->add('pricecomments')
            ->add('conditions')
            ->add('conditionsslices')
            ->add('tents')
            ->add('tentscomments')
            ->add('address')
            ->add('number')
            ->add('zip')
            ->add('city')
            ->add('country')
            ->add('contact')
            ->add('phone')
            ->add('phone2')
            ->add('mobile')
            ->add('fax')
            ->add('email')
            ->add('url')
            ->add('comments')
            ->add('public')
            ->add('issue')
            ->add('jobreference')
            ->add('language')
            ->add('copyid')
            ->add('userid')
            ->add('offreid')
            ->add('clientid')
        ;
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
