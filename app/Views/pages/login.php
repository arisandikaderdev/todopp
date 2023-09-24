<?= $this->extend('layout/form'); ?>

<?= $this->section('header'); ?>
<?= view_cell("HeaderCell", ['title' => 'Login | Todo App']); ?>
<?= $this->endSection(); ?>

<?= $this->section('form'); ?>
<form action="" method="post" class="form-page">
    <h2 class="text-secondary font-semibold text-center text-2xl mb-5">Login To Your Account</h2>
    <input type="text" name="username" placeholder="Username" id="username" class="input-form">
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