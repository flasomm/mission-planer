<?php

/**
 * BasePosition
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $titre
 * @property string $commentaire
 * @property Doctrine_Collection $Contact
 * @property Doctrine_Collection $Job
 * 
 * @method string              getTitre()       Returns the current record's "titre" value
 * @method string              getCommentaire() Returns the current record's "commentaire" value
 * @method Doctrine_Collection getContact()     Returns the current record's "Contact" collection
 * @method Doctrine_Collection getJob()         Returns the current record's "Job" collection
 * @method Position            setTitre()       Sets the current record's "titre" value
 * @method Position            setCommentaire() Sets the current record's "commentaire" value
 * @method Position            setContact()     Sets the current record's "Contact" collection
 * @method Position            setJob()         Sets the current record's "Job" collection
 * 
 * @package    Physalix_Backend
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePosition extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('position');
        $this->hasColumn('titre', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
        $this->hasColumn('commentaire', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Contact', array(
             'local' => 'id',
             'foreign' => 'position_id'));

        $this->hasMany('Job', array(
             'local' => 'id',
             'foreign' => 'position_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}