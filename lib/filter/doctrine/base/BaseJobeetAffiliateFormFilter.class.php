<?php

/**
 * JobeetAffiliate filter form base class.
 *
 * @package    jobeet
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJobeetAffiliateFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'url'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'token'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_active'              => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'jobeet_categories_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'JobeetCategory')),
    ));

    $this->setValidators(array(
      'url'                    => new sfValidatorPass(array('required' => false)),
      'email'                  => new sfValidatorPass(array('required' => false)),
      'token'                  => new sfValidatorPass(array('required' => false)),
      'is_active'              => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'jobeet_categories_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'JobeetCategory', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jobeet_affiliate_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function add
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0003     229064   1. {main}() /Users/szines/Projects/jobeet/symfony:0
    0.0026     317552   2. include('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/command/cli.php') /Users/szines/Projects/jobeet/symfony:14
    0.0616    2575088   3. sfSymfonyCommandApplication->run() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0630    2582176   4. sfTask->runFromCLI() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0631    2584344   5. sfBaseTask->doRun() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0690    2738232   6. sfDoctrineBuildTask->execute() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    2.6684    4908400   7. sfTask->run() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineBuildTask.class.php:182
    2.6685    4911672   8. sfBaseTask->doRun() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:173
    2.6686    4914136   9. sfDoctrineBuildFiltersTask->execute() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    2.6689    4918232  10. sfGeneratorManager->generate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineBuildFiltersTask.class.php:64
    2.6703    4937048  11. sfDoctrineFormFilterGenerator->generate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    2.6745    4941576  12. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineFormFilterGenerator.class.php:92
    2.6749    4961144  13. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineFormFilter/default/template/sfDoctrineFormFilterGeneratedTemplate.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    2.6777    4962944  14. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineFormFilter/default/template/sfDoctrineFormFilterGeneratedTemplate.php:45
    2.6777    4963432  15. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    2.6777    4964920  16. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0003     229064   1. {main}() /Users/szines/Projects/jobeet/symfony:0
    0.0026     317552   2. include('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/command/cli.php') /Users/szines/Projects/jobeet/symfony:14
    0.0616    2575088   3. sfSymfonyCommandApplication->run() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0630    2582176   4. sfTask->runFromCLI() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0631    2584344   5. sfBaseTask->doRun() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0690    2738232   6. sfDoctrineBuildTask->execute() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    2.6684    4908400   7. sfTask->run() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineBuildTask.class.php:182
    2.6685    4911672   8. sfBaseTask->doRun() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:173
    2.6686    4914136   9. sfDoctrineBuildFiltersTask->execute() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    2.6689    4918232  10. sfGeneratorManager->generate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineBuildFiltersTask.class.php:64
    2.6703    4937048  11. sfDoctrineFormFilterGenerator->generate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    2.6745    4941576  12. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineFormFilterGenerator.class.php:92
    2.6749    4961144  13. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineFormFilter/default/template/sfDoctrineFormFilterGeneratedTemplate.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    2.6777    4962944  14. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineFormFilter/default/template/sfDoctrineFormFilterGeneratedTemplate.php:45
    2.6777    4963432  15. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    2.6781    4965216  16. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

ListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.JobeetCategoryAffiliate JobeetCategoryAffiliate')
      ->andWhereIn('JobeetCategoryAffiliate.category_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'JobeetAffiliate';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'url'                    => 'Text',
      'email'                  => 'Text',
      'token'                  => 'Text',
      'is_active'              => 'Boolean',
      'created_at'             => 'Date',
      'updated_at'             => 'Date',
      'jobeet_categories_list' => 'ManyKey',
    );
  }
}
