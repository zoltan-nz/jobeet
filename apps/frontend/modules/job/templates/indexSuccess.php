<?php
/**
 * @var $jobeet_jobs JobeetJob
 */
?>



<table class="table">
  <thead>
    <tr>
      <th>Location</th>
      <th>Position</th>
      <th>Company</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($jobeet_jobs as $job): ?>
    <tr>
      <td><?= $job->getLocation() ?></td>
      <td><a href="<?= url_for('job/show?id='.$job->getId()) ?>"><?= $job->getPosition() ?></a></td>
      <td><?= $job->getCompany() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('job/new') ?>">New</a>
