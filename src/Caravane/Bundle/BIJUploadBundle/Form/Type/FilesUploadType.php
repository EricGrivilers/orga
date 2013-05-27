<?php
namespace Caravane\Bundle\BIJUploadBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Files upload type
 *
 * @author Eric Grivilers <eric@caravanemedia.com>
 */
class FilesUploadType extends AbstractType
{
	 /**
     * {@inheritdoc}
     */
	public function buildForm(FormBuilderInterface $builder, array $options) {

		$builder -> setAttribute('dataType', $options['dataType']);
	}

	 /**
     * {@inheritdoc}
     */
	public function buildView(FormView $view, FormInterface $form, array $options) {
		$view -> set('dataType', $form -> getAttribute('dataType'));
	}

	 /**
     * {@inheritdoc}
     */
	public function getDefaultOptions(array $options) {
		return array('required' => false,'dataType'=>'text');
	}


	/**
     * Returns the allowed option values for each option (if any).
     *
     * @param array $options
     *
     * @return array The allowed option values
     */
    public function getAllowedOptionValues(array $options)
    {
        return array('required' => array(false));
    }

	 /**
     * {@inheritdoc}
     */
	public function getParent() {
		return 'file';
	}

	 /**
     * {@inheritdoc}
     */
	public function getName() {
		return 'filesupload';
	}


}
