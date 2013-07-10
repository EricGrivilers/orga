<?php

	
namespace Caravane\Bundle\OrganicBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Doctrine\Common\Persistence\ObjectManager;
use Caravane\Bundle\OrganicBundle\Entity\ProductCategory;

class CategoryToNameTransformer implements DataTransformerInterface
{
    /**
     * @var ObjectManager
     */
    private $om;

    /**
     * @param ObjectManager $om
     */
    public function __construct(ObjectManager $om)
    {
        $this->om = $om;
    }

    /**
     * Transforms an object (category) to a string (number).
     *
     * @param  Issue|null $category
     * @return string
     */
    public function transform($category)
    {
        if (null === $category) {
            return "";
        }

        return $category->getName();
    }

    /**
     * Transforms a string (number) to an object (category).
     *
     * @param  string $number
     * @return Issue|null
     * @throws TransformationFailedException if object (category) is not found.
     */
    public function reverseTransform($name)
    {
        if (!$name) {
            return null;
        }

        $category = $this->om
            ->getRepository('CaravaneOrganicBundle:ProductCategory')
            ->findOneBy(array('name' => $name))
        ;

        if (null === $category) {
            throw new TransformationFailedException(sprintf(
                'An category with name "%s" does not exist!',
                $name
            ));
        }

        return $category;
    }
}

?>