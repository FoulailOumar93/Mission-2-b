<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo e(app()->getLocale()); ?>">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
  </head>
  <body>
    <div id="page">
      <div id="entete">
        <img src="<?php echo e(asset('images/logo.jpg')); ?>" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" />
        <h1>Suivi du remboursement des frais</h1>
      </div>
      <?php echo $__env->yieldContent('menu'); ?> 
      <?php echo $__env->yieldContent('contenu1'); ?> 
      <?php echo $__env->yieldContent('contenu2'); ?> 
     </div>
        
    </body>
  </html>
<?php /**PATH F:\Mission2-b\laragon+\www\gsbLaravel\resources\views/modeles/visiteur.blade.php ENDPATH**/ ?>