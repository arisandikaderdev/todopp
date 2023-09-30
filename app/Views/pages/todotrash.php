<?= $this->extend('layout/main'); ?>

<!-- head title -->

<?= $this->section('head'); ?>

<?= view_cell('HeaderCell', ['title' => 'todo trash | todo app']); ?>

<?= $this->endSection(); ?>

<!-- header -->
<?= $this->section('header'); ?>

<h1 class="main-title">
    trash
    <img src="<?= base_url('asset/trash.svg'); ?>" alt="todo" class="w-8">
</h1>


<?= $this->endSection(); ?>

<?= $this->section('main'); ?>
<div class="relative">
    <!-- option -->
    <div class="flex gap-4 justify-end items-center">
        <button id="trigger-delete">
            <img src="<?= base_url('asset/trash.svg'); ?>" alt="trash" class="w-6">
        </button>
        <button id="trigger-restore">
            <img src="<?= base_url('asset/restore.svg'); ?>" alt="restore" class="w-6">
        </button>
    </div>
    <!-- todo -->
    <div class="bg-dark-primary dark:bg-black rounded-md font-roboto text-white py-6 px-4 my-4  ">
        <p class="text-xl md:text-2xl font-semibold py-4"><?= $todo['title']; ?></p>
        <p class="leading-6 text-justify">
            <?= $todo['todo']; ?>
        </p>
    </div>



    <!-- alert delete -->
    <div id="alert-delete" class="alert-bg hidden">
        <div class="alert">
            <p class="alert-title">Are you sure Permanent delete todo ?</p>
            <div class="flex gap-4 justify-evenly">
                <button id="delete-no" class="secondary-btn">No</button>
                <form action="<?= url_to('permanentdeleteone'); ?>" method="post">
                    <input type="text" name="id" value="<?= $todo['id']; ?> " hidden>
                    <button class="primary-btn" value="">Yes</button>
                </form>
            </div>
        </div>

    </div>

    <!-- alert restore -->

    <div id="alert-restore" class="hidden alert-bg">
        <div class="alert ">
            <p class="alert-title">Restore Todo ? </p>

            <div class="flex gap-4 justify-evenly mt-4">
                <button id="restore-no" class="secondary-btn">No</button>

                <form action="<?= url_to('restore/trash'); ?>" method="post">
                    <input type="text" name="id" value="<?= $todo['id']; ?>" hidden>
                    <button id="restore-yes" class="primary-btn">Yes</button>
                </form>
            </div>
        </div>
    </div>

    <!-- message -->
    <?php if (session('message')) : ?>
        <div id="message" class=" bg-accent text-white px-3 py-2 fixed top-1 right-1 animate-slide-down transition-all duration-300 font-semibold">
            <p><?= session('message') ?></p>
            <div class="h-1 w-full  bg-white absolute left-0 bottom-0 animate-load origin-left"></div>
        </div>
    <?php endif; ?>
</div>

<script>
    const triggerDelete = document.querySelector('#trigger-delete');
    const alertDelete = document.querySelector('#alert-delete');
    const closeDelete = document.querySelector('#delete-no');



    // delete logic
    triggerDelete.addEventListener('click', e => {
        alertDelete.classList.remove('hidden');
        alertDelete.style.transform = 'scale(1)';
    });

    closeDelete.addEventListener('click', (e) => {
        e.preventDefault();
        alertDelete.style.transform = 'scale(0)'
    })

    // restore todo

    const triggerRestore = document.querySelector('#trigger-restore');
    const restoreNo = document.querySelector('#restoreNo');
    const alertRestore = document.querySelector('#alert-restore')


    triggerRestore.addEventListener('click', e => {
        e.preventDefault();
        console.log('df');
        alertRestore.classList.remove('hidden');
        alertRestore.style.transform = 'scale(1)'
    });

    restoreNo.addEventListener('click', () => {
        alertRestore.style.transform = 'scale(0)';
    })


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