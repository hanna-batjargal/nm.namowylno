<?php

/**
 * Image
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    vogue
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Image extends BaseImage
{
  public function __toString()
  {
      return $this->getTitle();
  }
    

  // not used yet
  public function getOrg() {
      return $this->getFolder().'/'.$this->getFilename();
  }
  
  public function get600t() {
      if(file_exists(sfConfig::get('sf_upload_dir').'/'.$this->getFolder().'/600t-'.$this->getFilename()))
          return $this->getFolder().'/600t-'.$this->getFilename();
      else 
          return false;
  }
  
  public function get50q() {
      if(file_exists(sfConfig::get('sf_upload_dir').'/'.$this->getFolder().'/50q-'.$this->getFilename()))
          return $this->getFolder().'/50q-'.$this->getFilename();
      else 
          return false;
  }
  
  
  

  
  // not used yet
  public function getFullPathOld($prefix="")
  {
      $folder = $this->getFolder();
      $upload_dir = sfConfig::get('sf_upload_dir').'/'.$folder.'/';

      // main image
      $filename = $folder.'/'.$this->getFilename();

      // check thumb or quility & get it
      if($prefix && file_exists($upload_dir.$prefix.'-'.$this->getFilename())) 
          $filename = $folder.'/'.$prefix.'-'.$this->getFilename();
      
      // main image not exists
      if(!file_exists($upload_dir.$this->getFilename()))
          $filename = 'image_default/default.gif';

      return $filename;
  }
  
}