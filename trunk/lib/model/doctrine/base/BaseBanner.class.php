<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Banner', 'doctrine');

/**
 * BaseBanner
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $path
 * @property string $ext
 * @property string $link
 * @property string $route
 * @property boolean $target
 * @property string $position
 * @property date $start_date
 * @property date $end_date
 * @property integer $sort
 * @property boolean $is_active
 * @property timestamp $created_at
 * @property integer $nb_love
 * 
 * @method integer   getId()         Returns the current record's "id" value
 * @method string    getPath()       Returns the current record's "path" value
 * @method string    getExt()        Returns the current record's "ext" value
 * @method string    getLink()       Returns the current record's "link" value
 * @method string    getRoute()      Returns the current record's "route" value
 * @method boolean   getTarget()     Returns the current record's "target" value
 * @method string    getPosition()   Returns the current record's "position" value
 * @method date      getStartDate()  Returns the current record's "start_date" value
 * @method date      getEndDate()    Returns the current record's "end_date" value
 * @method integer   getSort()       Returns the current record's "sort" value
 * @method boolean   getIsActive()   Returns the current record's "is_active" value
 * @method timestamp getCreatedAt()  Returns the current record's "created_at" value
 * @method integer   getNbLove()     Returns the current record's "nb_love" value
 * @method Banner    setId()         Sets the current record's "id" value
 * @method Banner    setPath()       Sets the current record's "path" value
 * @method Banner    setExt()        Sets the current record's "ext" value
 * @method Banner    setLink()       Sets the current record's "link" value
 * @method Banner    setRoute()      Sets the current record's "route" value
 * @method Banner    setTarget()     Sets the current record's "target" value
 * @method Banner    setPosition()   Sets the current record's "position" value
 * @method Banner    setStartDate()  Sets the current record's "start_date" value
 * @method Banner    setEndDate()    Sets the current record's "end_date" value
 * @method Banner    setSort()       Sets the current record's "sort" value
 * @method Banner    setIsActive()   Sets the current record's "is_active" value
 * @method Banner    setCreatedAt()  Sets the current record's "created_at" value
 * @method Banner    setNbLove()     Sets the current record's "nb_love" value
 * 
 * @package    vogue
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBanner extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('banner');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('path', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('ext', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('link', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('route', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('target', 'boolean', null, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('position', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('start_date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('end_date', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('sort', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '1',
             'notnull' => true,
             'autoincrement' => false,
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
        $this->hasColumn('nb_love', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}