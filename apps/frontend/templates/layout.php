<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <?php include_http_metas() ?>
  <?php include_metas() ?>
  <title><?php include_slot('title', 'Jobeet - Your best job board') ?></title>
  <?php include_stylesheets() ?>
  <?php include_javascripts() ?>
</head>
<body>
<div class="container">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
          <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= url_for('homepage') ?>">Jobeet</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="<?= url_for('homepage') ?>">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="jumbotron">
    <div class="search">
      <h2>Ask for a job</h2>

      <form action="" method="get">
        <input type="text" name="keywords" id="search_keywords"/>
        <input type="submit" value="search"/>
        <div class="help">
          Enter some keywords (city, country, position, ...)
        </div>
      </form>
    </div>
  </div>

  <?php if ($sf_user->hasFlash('notice')): ?>
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <?= $sf_user->getFlash('notice') ?>
    </div>
  <?php endif ?>

  <?php if ($sf_user->hasFlash('error')): ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <?= $sf_user->getFlash('error') ?>
    </div>
  <?php endif ?>

  <div class="panel panel-default">
    <div class="panel-heading">Something...</div>
    <div class="panel-body">
      <?= $sf_content ?>
    </div>
  </div>

</div>
</body>
</html>
