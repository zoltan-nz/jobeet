<?php

/**
 * Base project form.
 * 
 * @package    jobeet
 * @subpackage form
 * @author     Your name here 
 * @version    SVN: $Id$
 */
class BaseForm extends sfFormSymfony
{
  public function configure() {
    $this->useFields(array('category_id', 'type', 'company', 'logo', 'url', 'position', 'location', 'description', 'how_to_apply', 'token', 'is_public', 'email'));
    $this->validatorSchema['email'] = new sfValidatorAnd(array(
      $this->validatorSchema['email'],
      new sfValidatorEmail(),
    ));
  }
}
