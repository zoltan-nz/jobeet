<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('job/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?
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
    0.1036    3742752  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1042    3760960  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/_form.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1279    4818024  13. sfModelGenerator->getPrimaryKeyUrlParams() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/_form.php:8
    0.1280    4818336  14. sfDoctrineGenerator->getColumnGetter() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:169
    0.1280    4818384  15. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.1280    4818872  16. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1280    4820360  17. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


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
    0.1036    3742752  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1042    3760960  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/_form.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1279    4818024  13. sfModelGenerator->getPrimaryKeyUrlParams() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/_form.php:8
    0.1280    4818336  14. sfDoctrineGenerator->getColumnGetter() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:169
    0.1280    4818384  15. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.1280    4818872  16. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1288    4820656  17. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

id='.$form->getObject()->get() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('job/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'job/delete?
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
    0.1036    3742752  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1042    3760960  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/_form.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1295    4818024  13. sfModelGenerator->getPrimaryKeyUrlParams() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/_form.php:29
    0.1295    4818336  14. sfDoctrineGenerator->getColumnGetter() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:169
    0.1295    4818384  15. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.1295    4818872  16. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1295    4820360  17. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


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
    0.1036    3742752  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1042    3760960  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/_form.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1295    4818024  13. sfModelGenerator->getPrimaryKeyUrlParams() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/_form.php:29
    0.1295    4818336  14. sfDoctrineGenerator->getColumnGetter() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:169
    0.1295    4818384  15. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.1295    4818872  16. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1302    4820656  17. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

id='.$form->getObject()->get(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
