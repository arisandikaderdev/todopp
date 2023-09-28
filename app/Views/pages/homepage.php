<?= view_cell("HeaderCell", ['title' => 'todo']); ?>

<main style="background-image: url(<?= base_url(); ?>asset/bg.png);" class=" grid place-items-center content-center gap-4 w-full min-h-screen bg-cover bg-center font-opens text-center">
    <h1 class="text-white font-semibold text-base md:text-2xl lg:text-6xl ">Do You <span class="text-secondary">Tash</span> Everything Everywhere</h1>
    <p class="text-secondary  text-xs lg:text-base">Write Todo Anywhare and Do You Task</p>
    <button class="primary-btn-lg mt-4">
        <a href="<?= base_url('dashboard'); ?>">Bring Me In</a>
    </button>
</main>

<?= view_cell("FooterCell"); ?>