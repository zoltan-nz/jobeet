<?php

/**
 * job actions.
 *
 * @package    jobeet
 * @subpackage job
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class jobActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->jobeet_jobs = Doctrine_Core::getTable('JobeetJob')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->jobeet_job = Doctrine_Core::getTable('JobeetJob')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->jobeet_job);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new JobeetJobForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new JobeetJobForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($jobeet_job = Doctrine_Core::getTable('JobeetJob')->find(array($request->getParameter('id'))), sprintf('Object jobeet_job does not exist (%s).', $request->getParameter('id')));
    $this->form = new JobeetJobForm($jobeet_job);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($jobeet_job = Doctrine_Core::getTable('JobeetJob')->find(array($request->getParameter('id'))), sprintf('Object jobeet_job does not exist (%s).', $request->getParameter('id')));
    $this->form = new JobeetJobForm($jobeet_job);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($jobeet_job = Doctrine_Core::getTable('JobeetJob')->find(array($request->getParameter('id'))), sprintf('Object jobeet_job does not exist (%s).', $request->getParameter('id')));
    $jobeet_job->delete();

    $this->redirect('job/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $jobeet_job = $form->save();

      $this->redirect('job/edit?
Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0004     229592   1. {main}() /Users/szines/Projects/jobeet/symfony:0
    0.0030     318112   2. include('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/command/cli.php') /Users/szines/Projects/jobeet/symfony:14
    0.0622    2575768   3. sfSymfonyCommandApplication->run() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0637    2584032   4. sfTask->runFromCLI() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0638    2586072   5. sfBaseTask->doRun() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0695    2735776   6. sfDoctrineGenerateModuleTask->execute() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0752    3008056   7. sfDoctrineGenerateModuleTask->executeGenerate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0755    3013992   8. sfGeneratorManager->generate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0786    3061416   9. sfModelGenerator->generate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.0963    3734768  10. sfGenerator->generatePhpFiles() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.0964    3735776  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.0969    3753824  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/actions/actions.class.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1014    3759976  13. include('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/parts/processFormAction.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/actions/actions.class.php:30
    0.1014    3760080  14. sfModelGenerator->getPrimaryKeyUrlParams() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/parts/processFormAction.php:11
    0.1015    3760544  15. sfDoctrineGenerator->getColumnGetter() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:173
    0.1015    3760576  16. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.1015    3761064  17. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1015    3762552  18. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


Warning: preg_replace_callback(): Modifier /e cannot be used with replacement callback in /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 373

Call Stack:
    0.0004     229592   1. {main}() /Users/szines/Projects/jobeet/symfony:0
    0.0030     318112   2. include('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/command/cli.php') /Users/szines/Projects/jobeet/symfony:14
    0.0622    2575768   3. sfSymfonyCommandApplication->run() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0637    2584032   4. sfTask->runFromCLI() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0638    2586072   5. sfBaseTask->doRun() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0695    2735776   6. sfDoctrineGenerateModuleTask->execute() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0752    3008056   7. sfDoctrineGenerateModuleTask->executeGenerate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0755    3013992   8. sfGeneratorManager->generate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0786    3061416   9. sfModelGenerator->generate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.0963    3734768  10. sfGenerator->generatePhpFiles() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.0964    3735776  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.0969    3753824  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/actions/actions.class.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1014    3759976  13. include('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/parts/processFormAction.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/actions/actions.class.php:30
    0.1014    3760080  14. sfModelGenerator->getPrimaryKeyUrlParams() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/parts/processFormAction.php:11
    0.1015    3760544  15. sfDoctrineGenerator->getColumnGetter() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:173
    0.1015    3760576  16. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.1015    3761064  17. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1025    3762848  18. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

id='.$jobeet_job->get());
    }
  }
}
