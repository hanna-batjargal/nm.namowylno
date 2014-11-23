<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('CouponPrint', 'doctrine');

/**
 * BaseCouponPrint
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $coupon_id
 * @property string $code
 * @property string $ip
 * @property timestamp $created_at
 * 
 * @method integer     getId()         Returns the current record's "id" value
 * @method integer     getCouponId()   Returns the current record's "coupon_id" value
 * @method string      getCode()       Returns the current record's "code" value
 * @method string      getIp()         Returns the current record's "ip" value
 * @method timestamp   getCreatedAt()  Returns the current record's "created_at" value
 * @method CouponPrint setId()         Sets the current record's "id" value
 * @method CouponPrint setCouponId()   Sets the current record's "coupon_id" value
 * @method CouponPrint setCode()       Sets the current record's "code" value
 * @method CouponPrint setIp()         Sets the current record's "ip" value
 * @method CouponPrint setCreatedAt()  Sets the current record's "created_at" value
 * 
 * @package    vogue
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCouponPrint extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('coupon_print');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('coupon_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('code', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('ip', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
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