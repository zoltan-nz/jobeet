<h1>Jobeet jobs List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Category</th>
      <th>Type</th>
      <th>Company</th>
      <th>Logo</th>
      <th>Url</th>
      <th>Position</th>
      <th>Location</th>
      <th>Description</th>
      <th>How to apply</th>
      <th>Token</th>
      <th>Is public</th>
      <th>Is activated</th>
      <th>Email</th>
      <th>Expires at</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($jobeet_jobs as $jobeet_job): ?>
    <tr>
      <td><a href="<?php echo url_for('job/show?
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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1329    4824304  13. sfModelGenerator->getPrimaryKeyUrlParams() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:19
    0.1329    4824712  14. sfDoctrineGenerator->getColumnGetter() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:173
    0.1329    4824712  15. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.1329    4825200  16. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1329    4826688  17. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1329    4824304  13. sfModelGenerator->getPrimaryKeyUrlParams() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:19
    0.1329    4824712  14. sfDoctrineGenerator->getColumnGetter() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:173
    0.1329    4824712  15. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.1329    4825200  16. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1335    4826984  17. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

id='.$jobeet_job->get()) ?>"><?php echo $jobeet_job->get
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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1341    4824304  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:19
    0.1341    4824792  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1341    4826280  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1341    4824304  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:19
    0.1341    4824792  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1346    4826576  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></a></td>
      <td><?php echo $jobeet_job->get
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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1351    4824304  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1351    4824792  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1351    4826280  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1351    4824304  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1351    4824792  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1357    4826576  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1362    4840688  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1362    4841176  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1362    4842664  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1362    4840688  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1362    4841176  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1366    4842960  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1371    4840688  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1371    4841176  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1371    4842664  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1371    4840688  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1371    4841176  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1375    4842960  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1380    4840688  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1380    4841176  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1380    4842664  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1380    4840688  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1380    4841176  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1384    4842960  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1389    4840688  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1389    4841176  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1389    4842664  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1389    4840688  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1389    4841176  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1393    4859344  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1398    4857072  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1398    4857560  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1398    4859048  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1398    4857072  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1398    4857560  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1405    4859344  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1410    4857072  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1410    4857560  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1410    4859048  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1410    4857072  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1410    4857560  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1414    4859344  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1419    4857072  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1420    4857560  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1420    4859048  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1419    4857072  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1420    4857560  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1426    4875728  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1431    4873456  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1431    4873944  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1432    4875432  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1431    4873456  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1431    4873944  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1436    4875728  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1441    4873456  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1441    4873944  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1441    4875432  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1441    4873456  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1441    4873944  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1446    4875728  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1452    4873456  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1452    4873944  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1452    4875432  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1452    4873456  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1452    4873944  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1457    4892112  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1462    4889840  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1462    4890328  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1462    4891816  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1462    4889840  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1462    4890328  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1467    4892112  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1472    4889840  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1473    4890328  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1473    4891816  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1472    4889840  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1473    4890328  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1478    4892112  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1483    4889840  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1483    4890328  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1483    4891816  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1483    4889840  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1483    4890328  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1615    4892112  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1624    4906224  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1624    4906712  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1624    4908200  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1624    4906224  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1624    4906712  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1630    4908496  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
      <td><?php echo $jobeet_job->get
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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1635    4906224  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1635    4906712  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1635    4908200  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373


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
    0.1317    4801056  11. sfGenerator->evalTemplate() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.1322    4819456  12. require('/Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.1635    4906224  13. sfInflector::camelize() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.1635    4906712  14. sfToolkit::pregtr() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.1641    4908496  15. preg_replace_callback() /Users/szines/Projects/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:373

() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('job/new') ?>">New</a>
