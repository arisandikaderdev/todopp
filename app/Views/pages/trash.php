<?= $this->extend('layout/main'); ?>

<!-- head title -->

<?= $this->section('head'); ?>

<?= view_cell('HeaderCell', ['title' => 'Trash | todo app']); ?>

<?= $this->endSection(); ?>



<!-- header -->
<?= $this->section('header'); ?>

<h1 class="main-title">
    Trash
    <img src="<?= base_url('asset/trash.svg'); ?>" alt="trash" class="w-8">
</h1>


<?= $this->endSection(); ?>


<!-- main -->

<?= $this->section('main'); ?>
<div method="post" action="<?= base_url('delete'); ?>" class="relative">
    <!-- option -->
    <div class="flex gap-3 justify-end">
        <button>
            <img id="restore" src="<?= base_url('asset/restore.svg'); ?>" alt="restore" class="w-6 hidden">
        </button>
        <button form="selectForm" type="submit">
            <img id="trash" src="<?= base_url('asset/trash.svg'); ?>" alt="trash" class="w-6 hidden">
        </button>


        <label for="select-all">
            <input type="checkbox" name="select-ala" id="select-all" class="w-6 accent-accent indeterminate:accent-accent">
            <span class="text-sm font-semibold text-secondary">Check all</span>
        </label>
    </div>




    <?php if (!$todos) : ?>
        <!-- empty todo -->
        <div class="h-[80vh] flex justify-center items-center">
            <p class="text-base md:text-lg text-secondary font-semibold">You dont have todo !</p>
        </div>

    <?php else : ?>

        <!-- todo -->
        <div class=" grid grid-cols-2  justify-evenly  gap-4 my-4">

            <?php foreach ($todos as $todo) : ?>
                <div class="todo ">
                    <a href="">
                        <h3 class="todo-title"><?= $todo['title']; ?></h3>
                        <p id='todo-body' class="todo-body"><?= $todo['todo']; ?> </p>
                    </a>

                    <input type="checkbox" name="<?= $todo['id']; ?>" class="todo-select hidden">

                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>


    <!-- alert delete -->
    <div id="alert-delete" class="hidden alert-bg">
        <div class=" alert ">
            <p class="alert-title">Permanent delete todo ?</p>
            <div class="flex items-center justify-evenly">
                <button id="trash-no" class="secondary-btn">No</button>
                <button form="selectForm" type="submit" id="trash-yes" class="primary-btn">Yes</button>
            </div>
        </div>
    </div>

    <!-- alert restore -->

    <div id="alert-restore" class="hidden alert-bg">
        <div class="alert ">
            <p class="alert-title">Restore selected Todo ? </p>

            <div class="flex gap-4 justify-evenly mt-4">
                <button id="restore-no" class="secondary-btn">No</button>
                <button id="restore-yes" class="primary-btn">Yes</button>
            </div>
        </div>
    </div>

    <!-- forms -->
    <form action="<?= base_url('permanentdelete'); ?>" method="post" id="selectForm"></form>
    <form action="<?= base_url('restore');  ?>" method="post" id="restoreForm"></form>

    <!-- message -->
    <?php if (session('message')) : ?>
        <div id="message" class=" bg-accent text-white px-3 py-2 fixed top-1 right-1 animate-slide-down transition-all duration-300 font-semibold">
            <p><?= session('message') ?></p>
            <div class="h-1 w-full  bg-white absolute left-0 bottom-0 animate-load origin-left"></div>
        </div>
    <?php endif; ?>
</div>


<script src="<?= base_url('script/clamp.js'); ?>"></script>
<!-- <script type="module" src=""></script> -->
<script>
    const todoBody = document.querySelectorAll('.todo-body');
    const parentCheck = document.querySelector('#select-all');
    const todosCheck = document.querySelectorAll('.todo-select');
    let countChecked = 0;

    // delete variable 
    const trash = document.querySelector('#trash');
    const alertDelete = document.querySelector('#alert-delete');
    const trashNo = document.querySelector('#trash-no');


    // restore todo

    const triggerRestore = document.querySelector('#restore');
    const alertRestore = document.querySelector('#alert-restore');
    const restoreNo = document.querySelector('#restore-no');



    // clamp todo body
    for (const body of todoBody) {
        $clamp(body, {
            clamp: 5
        });

    }

    // todo select all
    parentCheck.addEventListener("change", (e) => {
        for (const todo of todosCheck) {
            if (e.target.checked) {
                todo.checked = true;
                todo.classList.remove("hidden");
                trash.classList.remove("hidden");
                restore ? restore.classList.remove("hidden") : "";
            } else {
                todo.checked = false;
                todo.classList.add("hidden");
                trash.classList.add("hidden");
                restore ? restore.classList.add("hidden") : "";
            }
        }
    });

    // todo each selec
    for (const todoCheck of todosCheck) {
        todoCheck.addEventListener("click", () => {
            countChecked = 0;
            for (const todoCheck of todosCheck) {
                if (todoCheck.checked) {
                    countChecked++;
                }
            }
            if (countChecked == 0) {
                parentCheck.checked = false;
                parentCheck.indeterminate = false;
                trash.classList.add("hidden");
                restore ? restore.classList.add("hidden") : "";
            } else if (countChecked == todosCheck.length) {
                parentCheck.checked = true;
                parentCheck.indeterminate = false;
                trash.classList.remove("hidden");
                restore ? restore.classList.remove("hidden") : "";
            } else {
                parentCheck.checked = false;
                parentCheck.indeterminate = true;
                trash.classList.remove("hidden");
                restore ? restore.classList.remove("hidden") : "";
            }
        });
    }


    // delete todo logic

    trash.addEventListener('click', e => {
        e.preventDefault();
        alertDelete.classList.remove('hidden');
        alertDelete.style.transform = 'scale(1)'

    })

    trashNo.addEventListener('click', e => {
        e.preventDefault();
        alertDelete.style.transform = 'scale(0)';
    })


    // restore todo logic

    triggerRestore.addEventListener('click', e => {
        e.preventDefault();
        console.log('df');
        alertRestore.classList.remove('hidden');
        alertRestore.style.transform = 'scale(1)'
    });

    restoreNo.addEventListener('click', () => {
        alertRestore.style.transform = 'scale(0)';
    })

    // trash

    const trashYes = document.querySelector('#trash-yes');
    const selectForm = document.querySelector('#selectForm');

    trashYes.addEventListener('click', e => {
        e.preventDefault();
        console.log('okk')
        for (const check of todosCheck) {
            check.setAttribute('form', 'selectForm');
        }
        selectForm.submit();
    })

    // restore

    const restoreYes = document.querySelector('#restore-yes');
    const restoreForm = document.querySelector('#restoreForm');

    restoreYes.addEventListener('click', e => {
        e.preventDefault();
        for (const check of todosCheck) {
            check.setAttribute('form', 'restoreForm');
        }
        restoreForm.submit();
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