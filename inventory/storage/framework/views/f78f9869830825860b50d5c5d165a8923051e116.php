<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('partials._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Inventory System</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <?php echo $__env->make('partials._profile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php echo $__env->make('partials._siderbars', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
              <?php if(auth()->guard()->guest()): ?>
                <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
              <?php else: ?>
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""> <?php echo e(Auth::user()->name); ?>

                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo e(route('user.profile')); ?>"> Profile</a></li>
                    <li><a href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                  </li>
                    

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
                  </ul>
                </li>
                <?php endif; ?>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
        <?php echo $__env->make('partials._alerts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      
        <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php echo $__env->make('partials._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- /footer content -->
      </div>
    </div>

    <?php echo $__env->make('partials._script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('js'); ?>
  </body>
</html>
