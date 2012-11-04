<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Aphorism', 'doctrine');

/**
 * BaseAphorism
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $text
 * @property string $source
 * @property integer $sort
 * @property timestamp $created_at
 * 
 * @method integer   getId()         Returns the current record's "id" value
 * @method string    getText()       Returns the current record's "text" value
 * @method string    getSource()     Returns the current record's "source" value
 * @method integer   getSort()       Returns the current record's "sort" value
 * @method timestamp getCreatedAt()  Returns the current record's "created_at" value
 * @method Aphorism  setId()         Sets the current record's "id" value
 * @method Aphorism  setText()       Sets the current record's "text" value
 * @method Aphorism  setSource()     Sets the current record's "source" value
 * @method Aphorism  setSort()       Sets the current record's "sort" value
 * @method Aphorism  setCreatedAt()  Sets the current record's "created_at" value
 * 
 * @package    vogue
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAphorism extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('aphorism');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('text', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('source', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('sort', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}