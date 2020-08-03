<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>JournalistxEdu</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="flex-center position-ref full-height">
    <?php if(Route::has('login')): ?>
        <div class="top-right links">
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/home')); ?>">Home</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>">Login</a>

                <?php if(Route::has('register')): ?>
                    <a href="<?php echo e(route('register')); ?>">Register</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\Users\13364\journalistxedu\resources\views/layouts/app2.blade.php ENDPATH**/ ?>