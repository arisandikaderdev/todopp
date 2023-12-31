<?= $this->extend('layout/main'); ?>

<!-- head title -->

<?= $this->section('head'); ?>

<?= view_cell('HeaderCell', ['title' => 'todo | todo app']); ?>

<?= $this->endSection(); ?>

<!-- header -->
<?= $this->section('header'); ?>

<h1 class="main-title">
    My Todo
    <img src="<?= base_url('asset/todo.svg'); ?>" alt="todo" class="w-8">
</h1>


<?= $this->endSection(); ?>

<?= $this->section('main'); ?>
<div class="relative">
    <!-- option -->
    <div class="flex gap-4 justify-end items-center">
        <button id="trigger-delete">
            <img src="<?= base_url('asset/trash.svg'); ?>" alt="trash" class="w-6">
        </button>
        <button id="trigger-edit">
            <img src="<?= base_url('asset/write.svg'); ?>" alt="edit" class="w-6">
        </button>
    </div>
    <!-- todo -->
    <div class="bg-dark-primary dark:bg-black rounded-md font-roboto text-white py-6 px-4 my-4  ">
        <p class="text-xl md:text-2xl font-semibold py-4"><?= $todo['title']; ?></p>
        <p class="leading-6 text-justify">
            <?= $todo['todo']; ?>
        </p>
    </div>

    <!-- alert edit -->
    <div style="<?= !empty(session('errors')) ? 'transform: scale(1); display: block;' : ''; ?>" id="alert-edit" class="alert-bg hidden ">
        <div class=" bg-dark-primary dark:bg-black rounded-sm max-w-screen-sm w-11/12 m-auto mt-8 px-4 py-6 relative">

            <!-- error message -->
            <?php if (session('errors')) : ?>
                <div class="error-message mt-4">
                    <?php foreach (session('errors') as $error) : ?>
                        <p><?= $error; ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <!-- form edit -->
            <form action="<?= url_to('edit'); ?>" method="post" class="flex flex-col gap-4">
                <input type="text" name="id" value="<?= $todo['id']; ?>" hidden>
                <input type="text" name="title" class="input-form" placeholder="title" value="<?= $todo['title']; ?>">
                <textarea name="todo" class="input-form h-24"><?= $todo['todo']; ?></textarea>
                <button class="primary-btn">Save</button>

            </form>
            <!-- close btn -->
            <button id="close-edittodo" class="absolute -top-3 -right-3 - p-1 rounded-full bg-accent">
                <img src="<?= base_url('asset/x.svg'); ?>" alt="close add" class="w-5">
            </button>
        </div>


    </div>

    <!-- alert delete -->
    <div id="alert-delete" class="alert-bg hidden">
        <div class="alert">
            <p class="alert-title">Are you sure delete todo ?</p>
            <div class="flex gap-4 justify-evenly">
                <button id="delete-no" class="secondary-btn">No</button>
                <form action="<?= url_to('delete'); ?>" method="post">
                    <input type="text" name="todoId" value="<?= $todo['id']; ?> " hidden>
                    <button class="primary-btn" value="">Yes</button>
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
    const triggerEdit = document.querySelector('#trigger-edit');
    const alertEdit = document.querySelector('#alert-edit');
    const closeEdit = document.querySelector('#close-edittodo');

    const triggerDelete = document.querySelector('#trigger-delete');
    const alertDelete = document.querySelector('#alert-delete');
    const closeDelete = document.querySelector('#delete-no');

    triggerEdit.addEventListener('click', e => {
        alertEdit.classList.remove('hidden');
        alertEdit.style.transform = 'scale(1)';
    });

    closeEdit.addEventListener('click', () => {
        alertEdit.style.transform = 'scale(0)'
    })

    // delete logic
    triggerDelete.addEventListener('click', e => {
        alertDelete.classList.remove('hidden');
        alertDelete.style.transform = 'scale(1)';
    });

    closeDelete.addEventListener('click', (e) => {
        e.preventDefault();
        alertDelete.style.transform = 'scale(0)'
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