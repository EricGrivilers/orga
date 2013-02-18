<?php

namespace Caravane\Bundle\OrganicBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InvoiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('reference')
            ->add('year')
            ->add('offretype')
            ->add('slice')
            ->add('cslice')
            ->add('nbslices')
            ->add('insertdate')
            ->add('paymentdate')
            ->add('priceht')
            ->add('pricetype')
            ->add('creditnote')
            ->add('comments')
            ->add('conditions')
            ->add('conditions1')
            ->add('conditions2')
            ->add('content')
            ->add('cietype')
            ->add('clienttype')
            ->add('clienttitle')
            ->add('name')
            ->add('lastname')
            ->add('firstname')
            ->add('vat')
            ->add('address')
            ->add('number')
            ->add('zip')
            ->add('city')
            ->add('country')
            ->add('status')
            ->add('r1')
            ->add('r1date')
            ->add('r2')
            ->add('r2date')
            ->add('med')
            ->add('meddate')
            ->add('language')
            ->add('jobid')
            ->add('clientid')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Caravane\Bundle\OrganicBundle\Entity\Invoice'
        ));
    }

    public function getName()
    {
        return 'caravane_bundle_organicbundle_invoicetype';
    }
}
