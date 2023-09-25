<?= $this->extend('layout/main'); ?>

<!-- head title -->

<?= $this->section('head'); ?>

<?= view_cell('HeaderCell', ['title' => 'Dashboard | todo app']); ?>

<?= $this->endSection(); ?>



<!-- header -->
<?= $this->section('header'); ?>

<h1 class="main-title">
    About
</h1>


<?= $this->endSection(); ?>


<!-- main -->

<?= $this->section('main'); ?>
<div class="min-h-[70vh] flex flex-col gap-2 justify-center items-center">
    <h1 class="text-4xl text-secondary text-center font-bold">Todo list app</h1>
    <p class="max-w-screen-md text-secondary text-center font-semibold">todo list app like the name in this app you can create, and menage your todo ,
        so you will not forget about what you need to do in future </p>
</div>
<?= $this->endSection(); ?>