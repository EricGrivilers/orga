<?php

namespace Caravane\UIBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class DateTimePickerType extends AbstractType
{

	
     public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'widget' => 'single_text'
        ));
    }
	 /**
     * {@inheritdoc}
     */
	public function getParent() {
		return 'datetime';
	}

    /**
     * Returns the name of the type being extended.
     *
     * @return string The name of the type being extended
     */
    public function getName()
    {
        return 'CaravaneUIDateTimePicker';
    }


}

?>