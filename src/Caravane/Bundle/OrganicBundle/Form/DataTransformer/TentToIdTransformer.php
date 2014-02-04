<?php

	
namespace Caravane\Bundle\OrganicBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Doctrine\Common\Persistence\ObjectManager;
use Caravane\Bundle\OrganicBundle\Entity\Tent;

class TentToIdTransformer implements DataTransformerInterface
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
     * Transforms an object (tent) to a string (number).
     *
     * @param  Issue|null $tent
     * @return string
     */
    public function transform($tent)
    {
        if (null === $tent) {
            return "";
        }

        return $tent->getId();
    }

    /**
     * Transforms a string (number) to an object (tent).
     *
     * @param  string $number
     * @return Issue|null
     * @throws TransformationFailedException if object (tent) is not found.
     */
    public function reverseTransform($id)
    {
        if (!$id) {
            return null;
        }

        $tent = $this->om
            ->getRepository('CaravaneOrganicBundle:Tent')
            ->findOneBy(array('id' => $id))
        ;

        if (null === $tent) {
            throw new TransformationFailedException(sprintf(
                'An tent with id "%s" does not exist!',
                $name
            ));
        }

        return $tent;
    }
}

?>