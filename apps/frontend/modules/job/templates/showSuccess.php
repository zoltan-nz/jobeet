<?php
  use_helper('Text');
  slot('title', sprintf('%s is looking for a %s', $job->getCompany(), $job->getPosition()));
?>

<h1><?= $job->getCompany() ?></h1>
<h2><?= $job->getLocation() ?></h2>
<h3>
  <?= $job->getPosition() ?>
  <small>- <?= $job->getType() ?></small>
</h3>

<p><?= simple_format_text($job->getDescription()) ?></p>

<small>posted on <?= $job->getDateTimeObject('created_at')->format('m/d/Y') ?></small>

<a href="<?= url_for('job/edit?id=' . $job->getId()) ?>">Edit</a>
