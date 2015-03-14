<?php foreach ($categories as $category): ?>

  <div class="category_<?= Jobeet::slugify($category->getName()) ?>">
    <div class="category">
      <div class="feed">
        <a href="">Feed</a>
      </div>
      <h1><?= $category ?></h1>
    </div>


  </div>

  <table class="table">
    <thead>
      <tr>
        <th>Location</th>
        <th>Position</th>
        <th>Company</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($category->getActiveJobs(sfConfig::get('app_max_jobs_on_homepage')) as $job): ?>
      <tr>
        <td><?= $job->getLocation() ?></td>
        <td><?= link_to($job->getPosition(), 'job_show_user', $job) ?></td>
        <td><?= $job->getCompany() ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

<?php endforeach ?>

<a href="<?php echo url_for('job_new') ?>">Post a Job</a>
