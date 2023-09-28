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
<?= $this->endSection(); ?>