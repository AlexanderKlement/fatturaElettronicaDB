<?php

namespace FattEleDB;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Doctrine\ODM\MongoDB\PersistentCollection;
use Exception;
use RuntimeException;

/**
 * @ODM\Document
 * @ODM\InheritanceType("COLLECTION_PER_CLASS")
 */
abstract class Fattura
{

    /** @ODM\Id */
    private ?string $id = NULL;

    /** @ODM\Field(type="string") */
    private ?string $number = NULL;

    /** @ODM\Field(type="string") */
    private ?string $date = NULL;

    /** @ODM\Field(type="float") */
    private ?float $amount = NULL;

    /** @ODM\ReferenceOne(targetDocument=Client::class, inversedBy="fatturas") */
    private ?Client $client = NULL;

    /** @ODM\ReferenceOne(targetDocument=Cloud::class, inversedBy="fatturas") */
    private ?Cloud $cloud = NULL;

    /** @ODM\Field(type="boolean") */
    private ?bool $deleted = NULL;

    /** @ODM\Field(type="string") */
    private ?string $paid = NULL;

    /** @ODM\Field(type="string") */
    private ?string $id_sdi = NULL;

    /** @ODM\Field(type="string") */
    private ?string $data_pagamento = NULL;

    /** @ODM\Field(type="string") */
    private ?string $fattura_path = NULL;

    /** @ODM\Field(type="string") */
    private ?string $type = NULL;

    /** @ODM\ReferenceMany(targetDocument=Response::class, mappedBy="fattura") */
    private ?PersistentCollection $responses = NULL;

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @param Client $client
     */
    public function setClient(Client $client): void
    {
        $this->client = $client;
    }

    /**
     * @return bool
     */
    public function isDeleted(): bool
    {
        return $this->deleted;
    }

    /**
     * @param bool $deleted
     */
    public function setDeleted(bool $deleted): void
    {
        $this->deleted = $deleted;
    }

    /**
     * @return string|null
     */
    public function getPaid(): ?string
    {
        return $this->paid;
    }

    /**
     * @param string|null $paid
     */
    public function setPaid(?string $paid): void
    {
        $this->paid = $paid;
    }

    /**
     * @return string|null
     */
    public function getIdSdi(): ?string
    {
        return $this->id_sdi;
    }

    /**
     * @param string|null $id_sdi
     */
    public function setIdSdi(?string $id_sdi): void
    {
        $this->id_sdi = $id_sdi;
    }

    /**
     * @return string|null
     */
    public function getDataPagamento(): ?string
    {
        return $this->data_pagamento;
    }

    /**
     * @param string|null $data_pagamento
     */
    public function setDataPagamento(?string $data_pagamento): void
    {
        $this->data_pagamento = $data_pagamento;
    }

    /**
     * @return string|null
     */
    public function getFatturaPath(): ?string
    {
        return $this->fattura_path;
    }

    /**
     * @param string|null $fattura_path
     */
    public function setFatturaPath(?string $fattura_path): void
    {
        $this->fattura_path = $fattura_path;
    }

    /**
     * @return Response
     */
    public function getResponse(): Response
    {
        return $this->response;
    }

    /**
     * @param Response $response
     */
    public function setResponse(Response $response): void
    {
        $this->response = $response;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return Cloud
     */
    public function getCloud(): Cloud
    {
        return $this->cloud;
    }

    /**
     * @param Cloud $cloud
     */
    public function setCloud(Cloud $cloud): void
    {
        $this->cloud = $cloud;
    }

}