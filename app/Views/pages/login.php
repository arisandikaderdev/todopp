<?= $this->extend('layout/form'); ?>

<?= $this->section('header'); ?>
<?= view_cell("HeaderCell", ['title' => 'Login | Todo App']); ?>
<?= $this->endSection(); ?>





<?= $this->section('form'); ?>

<!-- error message -->
<?php if (session('error') || session('errors')) : ?>
    <div class="error-message">
        <?php if (session('errors')) : ?>
            <?php foreach (session('errors') as $error) : ?>
                <p><?= $error; ?></p>
            <?php endforeach; ?>
        <?php else : ?>
            <p><?= session('error'); ?></p>
        <?php endif; ?>
    </div>
<?php endif; ?>

<!-- form -->
<form action="<?= url_to('login'); ?>" method="post" class="form-page">
    <h2 class="text-secondary font-semibold text-center text-2xl mb-5">Login To Your Account</h2>
    <input type="text" name="login" placeholder="Username" id="username" class="input-form">
    <input type="password" name="password" placeholder="password" id="password" class="input-form">

    <label for="remember">
        <input type="checkbox" name="remember" id="remember" class="accent-secondary">
        <span>Remember Me</span>
    </label>

    <button class="primary-btn w-full">Login</button>
    <p><a href="<?= base_url('singup'); ?>" class="hover:text-dark-secondary">Create Account </a></p>
    <p><a href="<?= base_url('forgotpassword'); ?>" class="hover:text-dark-secondary">Forgot Password</a></p>
</form>

<!-- message -->
<?php if (session('message')) : ?>
    <div id="message" class=" bg-accent text-white px-3 py-2 fixed top-1 right-1 animate-slide-down transition-all duration-300 font-semibold">
        <p><?= session('message') ?></p>
        <div class="h-1 w-full  bg-white absolute left-0 bottom-0 animate-load origin-left"></div>
    </div>
<?php endif; ?>

<script>
    // message 

    const message = document.querySelector('#message') ?? false;

    message ? countDown(message) : '';

    function countDown(message) {
        setTimeout(() => {
            // message.style.transform = 'translateY(-2rem)';
            message.classList.add('hidden');
        }, 2000);

    }
</script>
<?= $this->endSection(); ?>