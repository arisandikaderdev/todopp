<?php

use Faker\Provider\Base;
?>
<?= $this->extend('layout/main'); ?>

<!-- head title -->

<?= $this->section('head'); ?>

<?= view_cell('HeaderCell', ['title' => 'Dashboard | todo app']); ?>

<?= $this->endSection(); ?>



<!-- header -->
<?= $this->section('header'); ?>

<h1 class="main-title">
    Contact
</h1>


<?= $this->endSection(); ?>


<!-- main -->
<?= $this->section('main'); ?>

<form action="" class="grid gap-4 md:gap-6 grid-cols-1 md:grid-cols-2 justify-center   bg-dark-primary dark:bg-black px-4 py-8">
    <input type="text" placeholder="Name" class="input-form  h-10 ">
    <input type="email" placeholder="Email" class="input-form h-10">
    <textarea name="message" class="input-form h-44 md:col-span-2">
        Your message
    </textarea>
    <button class="primary-btn md:col-span-2 w-max m-auto">Send</button>

    <!-- social media -->
    <ul class="m-auto flex gap-4 mt-4 md:col-span-2 ">
        <li><a href="#"><img src="<?= base_url('asset/facebook.svg'); ?>" alt="facebbok" class="w-6"></a></li>
        <li><a href="#"><img src="<?= base_url('asset/github.svg'); ?>" alt="github" class="w-6"></a></li>
        <li><a href="#"><img src="<?= base_url('asset/instagram.svg'); ?>" alt="instagram" class="w-6"></a></li>
        <li><a href="#"><img src="<?= base_url('asset/twitter.svg'); ?>" alt="twitter" class="w-6"></a></li>
    </ul>
</form>

<?= $this->endSection(); ?>