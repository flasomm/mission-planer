<?php

/**
 * Job
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    Physalix_Backend
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Job extends BaseJob
{
	// public function save(Doctrine_Connection $conn = null)
	// {
	//   $ret = parent::save($conn);
	//   $this->updateLuceneIndex();
	//   return $ret;
	// }	
	// 
	// public function delete(Doctrine_Connection $conn = null)
	// {
	//   $index = JobTable::getLuceneIndex();
	// 
	//   foreach ($index->find('pk:'.$this->getId()) as $hit)
	//   {
	//     $index->delete($hit->id);
	//   }
	// 
	//   return parent::delete($conn);
	// }
	// 
	// public function updateLuceneIndex()
	// {
	//   $index = JobTable::getLuceneIndex();
	// 
	//   // remove existing entries
	//   foreach ($index->find('pk:'.$this->getId()) as $hit)
	//   {
	//     $index->delete($hit->id);
	//   }
	// 
	//   $doc = new Zend_Search_Lucene_Document();
	// 
	//   // store job primary key to identify it in the search results
	//   $doc->addField(Zend_Search_Lucene_Field::Keyword('pk', $this->getId()));
	// 
	//   // index job fields
	//   $doc->addField(Zend_Search_Lucene_Field::UnStored('date_presentation', $this->getDatePresentation(), 'utf-8'));
	//   $doc->addField(Zend_Search_Lucene_Field::UnStored('tjm', $this->getTjm(), 'utf-8'));
	//   $doc->addField(Zend_Search_Lucene_Field::UnStored('commentaire', $this->getCommentaire(), 'utf-8'));
	// 
	//   // add job to the index
	//   $index->addDocument($doc);
	//   $index->commit();
	// }	
}
