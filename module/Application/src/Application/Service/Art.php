<?php

namespace Application\Service;

use Application\Entity\Art as ArtEntity;
use Application\Form\ArtCreate;

class Art
{
    protected $createForm = null;
    protected $entity     = null;
    
    public function __construct(ArtCreate $createForm, ArtEntity $entity)
    {
        $this->setCreateForm($createForm);
        $this->setEntity($entity);
    }
    
    public function setCreateForm(ArtCreate $createForm)
    {
        $this->createForm = $createForm;
    }
    
    public function getCreateForm()
    {
        return $this->createForm;
    }

    public function setEntity(ArtEntity $entity)
    {
        $this->entity = $entity;
    }
    
    public function getEntity()
    {
        return $this->entity;
    }
}