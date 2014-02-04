<?php

	
namespace Caravane\Bundle\OrganicBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Doctrine\Common\Persistence\ObjectManager;
use Caravane\Bundle\OrganicBundle\Entity\Client;

class ClientToIdTransformer implements DataTransformerInterface
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
     * Transforms an object (client) to a string (number).
     *
     * @param  Issue|null $client
     * @return string
     */
    public function transform($client)
    {
        if (null === $client) {
            return "";
        }

        return $client->getId();
    }

    /**
     * Transforms a string (number) to an object (client).
     *
     * @param  string $number
     * @return Issue|null
     * @throws TransformationFailedException if object (client) is not found.
     */
    public function reverseTransform($id)
    {
        if (!$id) {
            return null;
        }

        $client = $this->om
            ->getRepository('CaravaneOrganicBundle:Client')
            ->findOneBy(array('id' => $id))
        ;

        if (null === $client) {
            throw new TransformationFailedException(sprintf(
                'An client with id "%s" does not exist!',
                $name
            ));
        }

        return $client;
    }
}

?>