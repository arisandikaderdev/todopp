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
        <p class="text-xl md:text-2xl font-semibold py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum laboriosam deleniti ea! Id corporis consectetur</p>
        <p class="leading-6 text-justify">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. At ab voluptatem cumque illum mollitia distinctio quos accusamus nesciunt, ad autem nostrum tempora dolore, quibusdam molestiae neque expedita minus a saepe iste impedit, debitis sunt laudantium! Maxime nostrum at repellendus sapiente velit eius autem commodi, est nulla aliquid odio corrupti in? Adipisci fuga reprehenderit nisi odio? Eos facere illum, quam reprehenderit, necessitatibus magni provident fugit culpa ea nesciunt vitae. Illum quae quos natus libero velit aspernatur blanditiis repellendus harum, fuga aliquid eaque laborum qui quis soluta. Deserunt error autem, at cupiditate facere non nemo quisquam provident inventore nisi quam quasi dolorum.
        </p>
    </div>

    <!-- alert edit -->
    <div id="alert-edit" class="alert-bg hidden ">
        <div class=" bg-dark-primary dark:bg-black rounded-sm max-w-screen-sm w-11/12 m-auto mt-8 px-4 py-6 relative">
            <!-- form edit -->
            <form action="" method="post" class="flex flex-col gap-4">
                <input type="text" name="todo-title" class="input-form" placeholder="title">
                <textarea name="todobody" class="input-form h-24"></textarea>
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
                <form action="" method="post">
                    <button class="primary-btn" value="">Yes</button>
                </form>
            </div>
        </div>

    </div>
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
</script>


<?= $this->endSection(); ?>