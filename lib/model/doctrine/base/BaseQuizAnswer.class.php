<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('QuizAnswer', 'doctrine');

/**
 * BaseQuizAnswer
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $quiz_id
 * @property string $title
 * @property string $route
 * @property string $image
 * @property string $body
 * @property float $point_start
 * @property float $point_end
 * @property boolean $is_active
 * @property integer $sort
 * @property integer $nb_love
 * @property timestamp $created_at
 * 
 * @method integer    getId()          Returns the current record's "id" value
 * @method integer    getQuizId()      Returns the current record's "quiz_id" value
 * @method string     getTitle()       Returns the current record's "title" value
 * @method string     getRoute()       Returns the current record's "route" value
 * @method string     getImage()       Returns the current record's "image" value
 * @method string     getBody()        Returns the current record's "body" value
 * @method float      getPointStart()  Returns the current record's "point_start" value
 * @method float      getPointEnd()    Returns the current record's "point_end" value
 * @method boolean    getIsActive()    Returns the current record's "is_active" value
 * @method integer    getSort()        Returns the current record's "sort" value
 * @method integer    getNbLove()      Returns the current record's "nb_love" value
 * @method timestamp  getCreatedAt()   Returns the current record's "created_at" value
 * @method QuizAnswer setId()          Sets the current record's "id" value
 * @method QuizAnswer setQuizId()      Sets the current record's "quiz_id" value
 * @method QuizAnswer setTitle()       Sets the current record's "title" value
 * @method QuizAnswer setRoute()       Sets the current record's "route" value
 * @method QuizAnswer setImage()       Sets the current record's "image" value
 * @method QuizAnswer setBody()        Sets the current record's "body" value
 * @method QuizAnswer setPointStart()  Sets the current record's "point_start" value
 * @method QuizAnswer setPointEnd()    Sets the current record's "point_end" value
 * @method QuizAnswer setIsActive()    Sets the current record's "is_active" value
 * @method QuizAnswer setSort()        Sets the current record's "sort" value
 * @method QuizAnswer setNbLove()      Sets the current record's "nb_love" value
 * @method QuizAnswer setCreatedAt()   Sets the current record's "created_at" value
 * 
 * @package    vogue
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseQuizAnswer extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('quiz_answer');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('quiz_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('title', 'string', 255, array(
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
        $this->hasColumn('image', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('body', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('point_start', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('point_end', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
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