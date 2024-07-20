<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Review extends \App\Entity\Review implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'comment' => [parent::class, 'comment', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'pseudo' => [parent::class, 'pseudo', null],
        "\0".parent::class."\0".'rating' => [parent::class, 'rating', null],
        "\0".parent::class."\0".'submittedAt' => [parent::class, 'submittedAt', null],
        "\0".parent::class."\0".'valid' => [parent::class, 'valid', null],
        'comment' => [parent::class, 'comment', null],
        'id' => [parent::class, 'id', null],
        'pseudo' => [parent::class, 'pseudo', null],
        'rating' => [parent::class, 'rating', null],
        'submittedAt' => [parent::class, 'submittedAt', null],
        'valid' => [parent::class, 'valid', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
