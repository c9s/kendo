<?php
namespace Kendo\Definition;

abstract class BaseDefinition
{
    public $identifier;

    public $label;

    public function __construct($identifier, $label = null)
    {
        $this->identifier = $identifier;
        $this->label = $label ?: $identifier;
    }

    public function getIdentifier()
    {
        return $this->identifier;
    }

    public function getLabel()
    {
        return $this->label;
    }
}



