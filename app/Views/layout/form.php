<?= $this->renderSection('header'); ?>

<main class=" bg-primary dark:bg-grey-dark min-h-screen pb-6">
    <header class="flex justify-between p-4 mb-6">
        <h1 class="text-secondary font-semibold italic">Todo App</h1>
        <?= view_cell('SwitchThemeCell'); ?>
    </header>
    <?= $this->renderSection('form'); ?>
</main>

<?= $this->renderSection('script'); ?>

<script type="module">
    import {
        toggleTheme
    } from './script/toggleTheme.mjs';

    toggleTheme()
</script>

<?= view_cell("FooterCell"); ?>