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
      <td><?= link_to($job->getPosition(), 'job_show_user', $job) ?></td>
      <td><?= $job->getCompany() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('job/new') ?>">New</a>
