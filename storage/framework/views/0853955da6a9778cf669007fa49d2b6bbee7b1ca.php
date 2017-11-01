
<?php $__env->startSection('content'); ?>
<section id="main">
<div class="container">
  <div class="row">
    <article class="content pull-right col-sm-12 col-md-9">
      <?php if(session('status')): ?>
     <div class="alert alert-success">
        <?php echo e(session('status')); ?>

     </div>
      <?php endif; ?>

    <table class="table">
      <thead>
        <th>Contact persoon</th>
        <th>Email</th>
        <th>Datum</th>
      </thead>
      <tbody>
       <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
         <td><?php echo e($user->name); ?></td>
         <td><?php echo e($user->email); ?></td>
         <td><?php echo e($user->created_at); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </tbody>
     </table>
    </article><!-- .content -->

    <div id="sidebar" class="sidebar col-sm-12 col-md-3">
  <aside class="widget menu">
    <header>
    <h3 class="title">Administratie</h3>
    </header>
    <nav>
    <ul>
      <li><a href="#">Gebruikers</a></li>
      <li><a href="#">Reservaties</a></li>
      <li><a href="#">Donec faucibus fringilla</a></li>
    </ul>
    </nav>
  </aside><!-- .menu-->
  </div><!-- .sidebar -->
  </div>
</div><!-- .container -->
</section><!-- #main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>