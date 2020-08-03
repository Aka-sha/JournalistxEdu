<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>JournalistxEdu</title>
    <link href="<?php echo e(url('/css/style.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(url('/css/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <div class="flex-center position-ref full-height">
        <?php if(Route::has('login')): ?>
            <div class="top-right links">
                <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(url('/home')); ?>">Home</a>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>">Login</a>
                    <div id="apply">
                        <a class="button" href="">APPLY</a>
                    </div>

                    <?php if(Route::has('register')): ?>
                        <a href="<?php echo e(route('register')); ?>"> Register</a>
                        <div id="apply">
                            <a class="button" href="">APPLY</a>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <?php endif; ?>
    </div>

    <div id="login">
        <a class="button" href="">LOGIN</a>
    </div>
</head>
<body>
<div id="page-container">
    <div id="content-wrap">
        <div id="header">
            <h1>JournalistxEdu</h1>
            <div><img src="/frontend/brand.png" alt="JournalistxEdu" width=120px></div>
        </div>

        <div class = "menu-bar">
            <a class="active" href="/frontend/index.html">Home</a>
            <a href="/frontend/about.html">About</a>
            <a href="/frontend/students.html">Students</a>
            <a href="/frontend/journalists.html">Journalists</a>
            <a href="/frontend/published-works.html">Published Works</a>
        </div>

        <div id="apply">
            <a class="button" href="">APPLY</a>
        </div>
        <div id="login">
            <a class="button" href="">LOGIN</a>
        </div>

        <div id="description">
            <div><img src="/frontend/home-image.jpg" alt="" width="300" class="pr-5"></div>
            <p id="text"> <span id="fancy-name">JournalistxEdu</span> ... is a mentorship program designed to teach students practical <br>writing skills and introduce them to the field of journalism.
                We pair out-of-work <br>professionals with high school students in a four week program that involves <br>writing assignments, meaningful feedback, and a chance for <br>students to publish
                their work. </p>
        </div>

    </div>
    <div>
        <footer id="footer">
            <a href="https://www.instagram.com/journalistxedu/" class="fa fa-instagram fa-3x"></a>
            <a href="mailto:journalistxedu@gmail.com?" class="fa fa-envelope fa-3x"></a>
        </footer>
    </div>
</div>
</body>
</html>

<?php /**PATH C:\Users\13364\journalistxedu\resources\views/index.blade.php ENDPATH**/ ?>