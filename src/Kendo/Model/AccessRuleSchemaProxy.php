<?php
/**
 * THIS FILE IS AUTO-GENERATED BY LAZYRECORD,
 * PLEASE DO NOT MODIFY THIS FILE DIRECTLY.
 * 
 * Last Modified: September 22nd at 11:56am
 */
namespace Kendo\Model;


use LazyRecord;
use LazyRecord\Schema\RuntimeSchema;
use LazyRecord\Schema\Relationship;

class AccessRuleSchemaProxy extends RuntimeSchema
{

    public static $column_names = array (
  0 => 'actor_id',
  1 => 'role_id',
  2 => 'resource_id',
  3 => 'resource_group_id',
  4 => 'actor_record_id',
  5 => 'resource_record_id',
  6 => 'allow',
  7 => 'operation',
  8 => 'operation_id',
  9 => 'id',
);
    public static $column_hash = array (
  'actor_id' => 1,
  'role_id' => 1,
  'resource_id' => 1,
  'resource_group_id' => 1,
  'actor_record_id' => 1,
  'resource_record_id' => 1,
  'allow' => 1,
  'operation' => 1,
  'operation_id' => 1,
  'id' => 1,
);
    public static $mixin_classes = array (
);
    public static $column_names_include_virtual = array (
  0 => 'actor_id',
  1 => 'role_id',
  2 => 'resource_id',
  3 => 'resource_group_id',
  4 => 'actor_record_id',
  5 => 'resource_record_id',
  6 => 'allow',
  7 => 'operation',
  8 => 'operation_id',
  9 => 'id',
);

    const schema_class = 'Kendo\\Model\\AccessRuleSchema';
    const collection_class = 'Kendo\\Model\\AccessRuleCollection';
    const model_class = 'Kendo\\Model\\AccessRule';
    const model_name = 'AccessRule';
    const model_namespace = 'Kendo\\Model';
    const primary_key = 'id';
    const table = 'access_rules';
    const label = 'AccessRule';

    public function __construct()
    {
        /** columns might have closure, so it can not be const */
        $this->columnData      = array( 
  'actor_id' => array( 
      'name' => 'actor_id',
      'attributes' => array( 
          'locales' => NULL,
          'attributes' => array( 
              'refer' => 'Kendo\\Model\\ActorSchema',
            ),
          'name' => 'actor_id',
          'primary' => NULL,
          'unsigned' => NULL,
          'type' => 'int',
          'isa' => 'int',
          'notNull' => NULL,
          'enum' => NULL,
          'set' => NULL,
          'attributeTypes' => array( 
              'primary' => 6,
              'size' => 3,
              'autoIncrement' => 6,
              'immutable' => 6,
              'unique' => 6,
              'null' => 6,
              'notNull' => 6,
              'typeConstraint' => 6,
              'timezone' => 6,
              'renderable' => 6,
              'label' => 0,
              'desc' => 2,
              'comment' => 2,
              'refer' => 2,
              'default' => 0,
              'validator' => 0,
              'validatorArgs' => 0,
              'validValues' => 0,
              'validValueBuilder' => 5,
              'optionValues' => 0,
              'validPairs' => 0,
              'canonicalizer' => 5,
              'virtual' => 6,
              'filter' => 5,
              'inflator' => 5,
              'deflator' => 5,
              'renderAs' => 2,
              'widgetAttributes' => 1,
              'contentType' => 2,
              'primaryField' => 6,
              'length' => 3,
              'decimals' => 3,
            ),
          'refer' => 'Kendo\\Model\\ActorSchema',
        ),
    ),
  'role_id' => array( 
      'name' => 'role_id',
      'attributes' => array( 
          'locales' => NULL,
          'attributes' => array( 
              'refer' => 'Kendo\\Model\\RoleSchema',
            ),
          'name' => 'role_id',
          'primary' => NULL,
          'unsigned' => NULL,
          'type' => 'int',
          'isa' => 'int',
          'notNull' => false,
          'enum' => NULL,
          'set' => NULL,
          'attributeTypes' => array( 
              'primary' => 6,
              'size' => 3,
              'autoIncrement' => 6,
              'immutable' => 6,
              'unique' => 6,
              'null' => 6,
              'notNull' => 6,
              'typeConstraint' => 6,
              'timezone' => 6,
              'renderable' => 6,
              'label' => 0,
              'desc' => 2,
              'comment' => 2,
              'refer' => 2,
              'default' => 0,
              'validator' => 0,
              'validatorArgs' => 0,
              'validValues' => 0,
              'validValueBuilder' => 5,
              'optionValues' => 0,
              'validPairs' => 0,
              'canonicalizer' => 5,
              'virtual' => 6,
              'filter' => 5,
              'inflator' => 5,
              'deflator' => 5,
              'renderAs' => 2,
              'widgetAttributes' => 1,
              'contentType' => 2,
              'primaryField' => 6,
              'length' => 3,
              'decimals' => 3,
            ),
          'refer' => 'Kendo\\Model\\RoleSchema',
        ),
    ),
  'resource_id' => array( 
      'name' => 'resource_id',
      'attributes' => array( 
          'locales' => NULL,
          'attributes' => array( 
            ),
          'name' => 'resource_id',
          'primary' => NULL,
          'unsigned' => NULL,
          'type' => 'int',
          'isa' => 'int',
          'notNull' => true,
          'enum' => NULL,
          'set' => NULL,
          'attributeTypes' => array( 
              'primary' => 6,
              'size' => 3,
              'autoIncrement' => 6,
              'immutable' => 6,
              'unique' => 6,
              'null' => 6,
              'notNull' => 6,
              'typeConstraint' => 6,
              'timezone' => 6,
              'renderable' => 6,
              'label' => 0,
              'desc' => 2,
              'comment' => 2,
              'refer' => 2,
              'default' => 0,
              'validator' => 0,
              'validatorArgs' => 0,
              'validValues' => 0,
              'validValueBuilder' => 5,
              'optionValues' => 0,
              'validPairs' => 0,
              'canonicalizer' => 5,
              'virtual' => 6,
              'filter' => 5,
              'inflator' => 5,
              'deflator' => 5,
              'renderAs' => 2,
              'widgetAttributes' => 1,
              'contentType' => 2,
              'primaryField' => 6,
              'length' => 3,
              'decimals' => 3,
            ),
        ),
    ),
  'resource_group_id' => array( 
      'name' => 'resource_group_id',
      'attributes' => array( 
          'locales' => NULL,
          'attributes' => array( 
            ),
          'name' => 'resource_group_id',
          'primary' => NULL,
          'unsigned' => NULL,
          'type' => 'int',
          'isa' => 'int',
          'notNull' => false,
          'enum' => NULL,
          'set' => NULL,
          'attributeTypes' => array( 
              'primary' => 6,
              'size' => 3,
              'autoIncrement' => 6,
              'immutable' => 6,
              'unique' => 6,
              'null' => 6,
              'notNull' => 6,
              'typeConstraint' => 6,
              'timezone' => 6,
              'renderable' => 6,
              'label' => 0,
              'desc' => 2,
              'comment' => 2,
              'refer' => 2,
              'default' => 0,
              'validator' => 0,
              'validatorArgs' => 0,
              'validValues' => 0,
              'validValueBuilder' => 5,
              'optionValues' => 0,
              'validPairs' => 0,
              'canonicalizer' => 5,
              'virtual' => 6,
              'filter' => 5,
              'inflator' => 5,
              'deflator' => 5,
              'renderAs' => 2,
              'widgetAttributes' => 1,
              'contentType' => 2,
              'primaryField' => 6,
              'length' => 3,
              'decimals' => 3,
            ),
        ),
    ),
  'actor_record_id' => array( 
      'name' => 'actor_record_id',
      'attributes' => array( 
          'locales' => NULL,
          'attributes' => array( 
            ),
          'name' => 'actor_record_id',
          'primary' => NULL,
          'unsigned' => NULL,
          'type' => 'int',
          'isa' => 'int',
          'notNull' => NULL,
          'enum' => NULL,
          'set' => NULL,
          'attributeTypes' => array( 
              'primary' => 6,
              'size' => 3,
              'autoIncrement' => 6,
              'immutable' => 6,
              'unique' => 6,
              'null' => 6,
              'notNull' => 6,
              'typeConstraint' => 6,
              'timezone' => 6,
              'renderable' => 6,
              'label' => 0,
              'desc' => 2,
              'comment' => 2,
              'refer' => 2,
              'default' => 0,
              'validator' => 0,
              'validatorArgs' => 0,
              'validValues' => 0,
              'validValueBuilder' => 5,
              'optionValues' => 0,
              'validPairs' => 0,
              'canonicalizer' => 5,
              'virtual' => 6,
              'filter' => 5,
              'inflator' => 5,
              'deflator' => 5,
              'renderAs' => 2,
              'widgetAttributes' => 1,
              'contentType' => 2,
              'primaryField' => 6,
              'length' => 3,
              'decimals' => 3,
            ),
        ),
    ),
  'resource_record_id' => array( 
      'name' => 'resource_record_id',
      'attributes' => array( 
          'locales' => NULL,
          'attributes' => array( 
            ),
          'name' => 'resource_record_id',
          'primary' => NULL,
          'unsigned' => NULL,
          'type' => 'int',
          'isa' => 'int',
          'notNull' => false,
          'enum' => NULL,
          'set' => NULL,
          'attributeTypes' => array( 
              'primary' => 6,
              'size' => 3,
              'autoIncrement' => 6,
              'immutable' => 6,
              'unique' => 6,
              'null' => 6,
              'notNull' => 6,
              'typeConstraint' => 6,
              'timezone' => 6,
              'renderable' => 6,
              'label' => 0,
              'desc' => 2,
              'comment' => 2,
              'refer' => 2,
              'default' => 0,
              'validator' => 0,
              'validatorArgs' => 0,
              'validValues' => 0,
              'validValueBuilder' => 5,
              'optionValues' => 0,
              'validPairs' => 0,
              'canonicalizer' => 5,
              'virtual' => 6,
              'filter' => 5,
              'inflator' => 5,
              'deflator' => 5,
              'renderAs' => 2,
              'widgetAttributes' => 1,
              'contentType' => 2,
              'primaryField' => 6,
              'length' => 3,
              'decimals' => 3,
            ),
        ),
    ),
  'allow' => array( 
      'name' => 'allow',
      'attributes' => array( 
          'locales' => NULL,
          'attributes' => array( 
            ),
          'name' => 'allow',
          'primary' => NULL,
          'unsigned' => NULL,
          'type' => 'boolean',
          'isa' => 'bool',
          'notNull' => true,
          'enum' => NULL,
          'set' => NULL,
          'attributeTypes' => array( 
              'primary' => 6,
              'size' => 3,
              'autoIncrement' => 6,
              'immutable' => 6,
              'unique' => 6,
              'null' => 6,
              'notNull' => 6,
              'typeConstraint' => 6,
              'timezone' => 6,
              'renderable' => 6,
              'label' => 0,
              'desc' => 2,
              'comment' => 2,
              'refer' => 2,
              'default' => 0,
              'validator' => 0,
              'validatorArgs' => 0,
              'validValues' => 0,
              'validValueBuilder' => 5,
              'optionValues' => 0,
              'validPairs' => 0,
              'canonicalizer' => 5,
              'virtual' => 6,
              'filter' => 5,
              'inflator' => 5,
              'deflator' => 5,
              'renderAs' => 2,
              'widgetAttributes' => 1,
              'contentType' => 2,
              'primaryField' => 6,
              'length' => 3,
              'decimals' => 3,
            ),
        ),
    ),
  'operation' => array( 
      'name' => 'operation',
      'attributes' => array( 
          'locales' => NULL,
          'attributes' => array( 
              'length' => 30,
            ),
          'name' => 'operation',
          'primary' => NULL,
          'unsigned' => NULL,
          'type' => 'varchar',
          'isa' => 'str',
          'notNull' => true,
          'enum' => NULL,
          'set' => NULL,
          'attributeTypes' => array( 
              'primary' => 6,
              'size' => 3,
              'autoIncrement' => 6,
              'immutable' => 6,
              'unique' => 6,
              'null' => 6,
              'notNull' => 6,
              'typeConstraint' => 6,
              'timezone' => 6,
              'renderable' => 6,
              'label' => 0,
              'desc' => 2,
              'comment' => 2,
              'refer' => 2,
              'default' => 0,
              'validator' => 0,
              'validatorArgs' => 0,
              'validValues' => 0,
              'validValueBuilder' => 5,
              'optionValues' => 0,
              'validPairs' => 0,
              'canonicalizer' => 5,
              'virtual' => 6,
              'filter' => 5,
              'inflator' => 5,
              'deflator' => 5,
              'renderAs' => 2,
              'widgetAttributes' => 1,
              'contentType' => 2,
              'primaryField' => 6,
              'length' => 3,
              'decimals' => 3,
            ),
          'length' => 30,
        ),
    ),
  'operation_id' => array( 
      'name' => 'operation_id',
      'attributes' => array( 
          'locales' => NULL,
          'attributes' => array( 
            ),
          'name' => 'operation_id',
          'primary' => NULL,
          'unsigned' => NULL,
          'type' => 'int',
          'isa' => 'int',
          'notNull' => true,
          'enum' => NULL,
          'set' => NULL,
          'attributeTypes' => array( 
              'primary' => 6,
              'size' => 3,
              'autoIncrement' => 6,
              'immutable' => 6,
              'unique' => 6,
              'null' => 6,
              'notNull' => 6,
              'typeConstraint' => 6,
              'timezone' => 6,
              'renderable' => 6,
              'label' => 0,
              'desc' => 2,
              'comment' => 2,
              'refer' => 2,
              'default' => 0,
              'validator' => 0,
              'validatorArgs' => 0,
              'validValues' => 0,
              'validValueBuilder' => 5,
              'optionValues' => 0,
              'validPairs' => 0,
              'canonicalizer' => 5,
              'virtual' => 6,
              'filter' => 5,
              'inflator' => 5,
              'deflator' => 5,
              'renderAs' => 2,
              'widgetAttributes' => 1,
              'contentType' => 2,
              'primaryField' => 6,
              'length' => 3,
              'decimals' => 3,
            ),
        ),
    ),
  'id' => array( 
      'name' => 'id',
      'attributes' => array( 
          'locales' => NULL,
          'attributes' => array( 
              'autoIncrement' => true,
            ),
          'name' => 'id',
          'primary' => true,
          'unsigned' => NULL,
          'type' => 'int',
          'isa' => 'int',
          'notNull' => true,
          'enum' => NULL,
          'set' => NULL,
          'attributeTypes' => array( 
              'primary' => 6,
              'size' => 3,
              'autoIncrement' => 6,
              'immutable' => 6,
              'unique' => 6,
              'null' => 6,
              'notNull' => 6,
              'typeConstraint' => 6,
              'timezone' => 6,
              'renderable' => 6,
              'label' => 0,
              'desc' => 2,
              'comment' => 2,
              'refer' => 2,
              'default' => 0,
              'validator' => 0,
              'validatorArgs' => 0,
              'validValues' => 0,
              'validValueBuilder' => 5,
              'optionValues' => 0,
              'validPairs' => 0,
              'canonicalizer' => 5,
              'virtual' => 6,
              'filter' => 5,
              'inflator' => 5,
              'deflator' => 5,
              'renderAs' => 2,
              'widgetAttributes' => 1,
              'contentType' => 2,
              'primaryField' => 6,
              'length' => 3,
              'decimals' => 3,
            ),
          'autoIncrement' => true,
        ),
    ),
);
        $this->columnNames     = array( 
  'id',
  'actor_id',
  'role_id',
  'resource_id',
  'resource_group_id',
  'actor_record_id',
  'resource_record_id',
  'allow',
  'operation',
  'operation_id',
);
        $this->primaryKey      = 'id';
        $this->table           = 'access_rules';
        $this->modelClass      = 'Kendo\\Model\\AccessRule';
        $this->collectionClass = 'Kendo\\Model\\AccessRuleCollection';
        $this->label           = 'AccessRule';
        $this->relations       = array( 
  'resource' => \LazyRecord\Schema\Relationship::__set_state(array( 
  'data' => array( 
      'type' => 3,
      'self_schema' => 'Kendo\\Model\\AccessRuleSchema',
      'self_column' => 'resource_id',
      'foreign_schema' => 'Kendo\\Model\\ResourceSchema',
      'foreign_column' => 'id',
    ),
  'accessor' => 'resource',
  'where' => NULL,
  'orderBy' => array( 
    ),
)),
  'resource_group' => \LazyRecord\Schema\Relationship::__set_state(array( 
  'data' => array( 
      'type' => 3,
      'self_schema' => 'Kendo\\Model\\AccessRuleSchema',
      'self_column' => 'resource_group_id',
      'foreign_schema' => 'Kendo\\Model\\ResourceGroupSchema',
      'foreign_column' => 'id',
    ),
  'accessor' => 'resource_group',
  'where' => NULL,
  'orderBy' => array( 
    ),
)),
  'operation' => \LazyRecord\Schema\Relationship::__set_state(array( 
  'data' => array( 
      'type' => 3,
      'self_schema' => 'Kendo\\Model\\AccessRuleSchema',
      'self_column' => 'operation_id',
      'foreign_schema' => 'Kendo\\Model\\OperationSchema',
      'foreign_column' => 'id',
    ),
  'accessor' => 'operation',
  'where' => NULL,
  'orderBy' => array( 
    ),
)),
  'actor' => \LazyRecord\Schema\Relationship::__set_state(array( 
  'data' => array( 
      'type' => 3,
      'self_schema' => 'Kendo\\Model\\AccessRuleSchema',
      'self_column' => 'actor_id',
      'foreign_schema' => 'Kendo\\Model\\ActorSchema',
      'foreign_column' => 'id',
    ),
  'accessor' => 'actor',
  'where' => NULL,
  'orderBy' => array( 
    ),
)),
  'controls' => \LazyRecord\Schema\Relationship::__set_state(array( 
  'data' => array( 
      'type' => 1,
      'self_column' => 'id',
      'self_schema' => 'Kendo\\Model\\AccessRuleSchema',
      'foreign_column' => 'rule_id',
      'foreign_schema' => 'Kendo\\Model\\AccessControlSchema',
    ),
  'accessor' => 'controls',
  'where' => NULL,
  'orderBy' => array( 
    ),
)),
  'role' => \LazyRecord\Schema\Relationship::__set_state(array( 
  'data' => array( 
      'type' => 3,
      'self_schema' => 'Kendo\\Model\\AccessRuleSchema',
      'self_column' => 'role_id',
      'foreign_schema' => 'Kendo\\Model\\RoleSchema',
      'foreign_column' => 'id',
    ),
  'accessor' => 'role',
  'where' => NULL,
  'orderBy' => array( 
    ),
)),
);
        $this->readSourceId    = 'default';
        $this->writeSourceId    = 'default';
        parent::__construct();
    }


    /**
     * Code block for message id parser.
     */
    private function __() {
        _('AccessRule');
    }

}
