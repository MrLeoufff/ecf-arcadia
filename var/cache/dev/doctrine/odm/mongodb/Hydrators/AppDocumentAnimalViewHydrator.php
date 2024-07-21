<?php

namespace Hydrators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Hydrator\HydratorException;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\Query\Query;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class AppDocumentAnimalViewHydrator implements HydratorInterface
{
    private $dm;
    private $class;

    public function __construct(DocumentManager $dm, ClassMetadata $class)
    {
        $this->dm = $dm;
        $this->class = $class;
    }

    public function hydrate(object $document, array $data, array $hints = array()): array
    {
        $hydratedData = array();

        /** @Field(type="id") */
        if (isset($data['_id']) || (! empty($this->class->fieldMappings['id']['nullable']) && array_key_exists('_id', $data))) {
            $value = $data['_id'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['id']['type'];
                $return = $value instanceof \MongoDB\BSON\ObjectId ? (string) $value : $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['id']->setValue($document, $return);
            $hydratedData['id'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['animalName']) || (! empty($this->class->fieldMappings['animalName']['nullable']) && array_key_exists('animalName', $data))) {
            $value = $data['animalName'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['animalName']['type'];
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['animalName']->setValue($document, $return);
            $hydratedData['animalName'] = $return;
        }

        /** @Field(type="int") */
        if (isset($data['animalId']) || (! empty($this->class->fieldMappings['animalId']['nullable']) && array_key_exists('animalId', $data))) {
            $value = $data['animalId'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['animalId']['type'];
                $return = (int) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['animalId']->setValue($document, $return);
            $hydratedData['animalId'] = $return;
        }

        /** @Field(type="int") */
        if (isset($data['views']) || (! empty($this->class->fieldMappings['views']['nullable']) && array_key_exists('views', $data))) {
            $value = $data['views'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['views']['type'];
                $return = (int) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['views']->setValue($document, $return);
            $hydratedData['views'] = $return;
        }
        return $hydratedData;
    }
}