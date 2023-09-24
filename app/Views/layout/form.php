<?= $this->renderSection('header'); ?>

<main class="bg-primary min-h-screen pb-6">
    <header class="p-4 mb-6">
        <h1 class="text-secondary font-semibold italic">Todo App</h1>
    </header>
    <?= $this->renderSection('form'); ?>
</main>

<?= $this->renderSection('script'); ?>

<?= view_cell("FooterCell"); ?>