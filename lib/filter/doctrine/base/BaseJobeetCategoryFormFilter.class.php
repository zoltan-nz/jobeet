<?php

/**
 * JobeetCategory filter form base class.
 *
 * @package    jobeet
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJobeetCategoryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'jobeet_affiliates_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'JobeetAffiliate')),
    ));

    $this->setValidators(array(
      'name'                   => new sfValidatorPass(array('required' => false)),
      'created_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'jobeet_affiliates_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'JobeetAffiliate', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jobeet_category_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function add
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 374

Call Stack:
    0.0002     236304   1. {main}() /home/szines/Projects/jobeet/symfony:0
    0.0035     468560   2. include('/home/szines/Projects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/szines/Projects/jobeet/symfony:14
    0.0759    5643216   3. sfSymfonyCommandApplication->run() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0778    5650296   4. sfTask->runFromCLI() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0779    5652464   5. sfBaseTask->doRun() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0848    6183464   6. sfDoctrineBuildTask->execute() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    1.0182   11419208   7. sfTask->run() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineBuildTask.class.php:182
    1.0183   11422480   8. sfBaseTask->doRun() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:173
    1.0187   11424936   9. sfDoctrineBuildFiltersTask->execute() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    1.0190   11429024  10. sfGeneratorManager->generate() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineBuildFiltersTask.class.php:64
    1.0199   11514480  11. sfDoctrineFormFilterGenerator->generate() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    1.0239   11520592  12. sfGenerator->evalTemplate() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineFormFilterGenerator.class.php:92
    1.0241   11571016  13. require('/home/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineFormFilter/default/template/sfDoctrineFormFilterGeneratedTemplate.php') /home/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    1.0255   11572816  14. sfInflector::camelize() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineFormFilter/default/template/sfDoctrineFormFilterGeneratedTemplate.php:45
    1.0255   11573304  15. sfToolkit::pregtr() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    1.0255   11574808  16. preg_replace_callback() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:374


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /home/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 374

Call Stack:
    0.0002     236304   1. {main}() /home/szines/Projects/jobeet/symfony:0
    0.0035     468560   2. include('/home/szines/Projects/jobeet/lib/vendor/symfony/lib/command/cli.php') /home/szines/Projects/jobeet/symfony:14
    0.0759    5643216   3. sfSymfonyCommandApplication->run() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0778    5650296   4. sfTask->runFromCLI() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0779    5652464   5. sfBaseTask->doRun() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0848    6183464   6. sfDoctrineBuildTask->execute() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    1.0182   11419208   7. sfTask->run() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineBuildTask.class.php:182
    1.0183   11422480   8. sfBaseTask->doRun() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:173
    1.0187   11424936   9. sfDoctrineBuildFiltersTask->execute() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    1.0190   11429024  10. sfGeneratorManager->generate() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineBuildFiltersTask.class.php:64
    1.0199   11514480  11. sfDoctrineFormFilterGenerator->generate() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    1.0239   11520592  12. sfGenerator->evalTemplate() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineFormFilterGenerator.class.php:92
    1.0241   11571016  13. require('/home/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineFormFilter/default/template/sfDoctrineFormFilterGeneratedTemplate.php') /home/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    1.0255   11572816  14. sfInflector::camelize() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineFormFilter/default/template/sfDoctrineFormFilterGeneratedTemplate.php:45
    1.0255   11573304  15. sfToolkit::pregtr() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    1.0259   11575104  16. preg_replace_callback() /home/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:374

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
      ->andWhereIn('JobeetCategoryAffiliate.affiliate_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'JobeetCategory';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'name'                   => 'Text',
      'created_at'             => 'Date',
      'updated_at'             => 'Date',
      'jobeet_affiliates_list' => 'ManyKey',
    );
  }
}
