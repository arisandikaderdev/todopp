<?= $this->extend('layout/main'); ?>

<!-- head title -->

<?= $this->section('head'); ?>

<?= view_cell('HeaderCell', ['title' => 'Dashboard | todo app']); ?>

<?= $this->endSection(); ?>



<!-- header -->
<?= $this->section('header'); ?>

<h1 class="main-title">
    My Todo
    <img src="<?= base_url('asset/todo.svg'); ?>" alt="todo" class="w-8">
</h1>


<?= $this->endSection(); ?>


<!-- main -->

<?= $this->section('main'); ?>
<div class="relative">
    <!-- option -->
    <div class="flex gap-3 justify-end">
        <button form="selectForm" type="submit" name="form" value="deleteTodo">
            <img id="trash" src="<?= base_url('asset/trash.svg'); ?>" alt="trash" class="w-6 hidden">
        </button>


        <label for="select-all">
            <input type="checkbox" name="select-all" id="select-all" class="w-6 accent-accent indeterminate:accent-accent">
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
                    <a href="<?= base_url('todo/') . $todo['id']; ?>">
                        <h3 class="todo-title"><?= $todo['title']; ?></h3>
                        <p id='todo-body' class="todo-body"><?= $todo['todo']; ?></p>
                    </a>


                    <input type="checkbox" form="selectForm" name="<?= $todo['id']; ?>" class="todo-select hidden">

                </div>
            <?php endforeach; ?>

        </div>
    <?php endif; ?>


    <!-- add todo ++  -->

    <button id="trigger-addtodo" class="bg-accent rounded-full fixed bottom-12 right-8 px-3 py-3">
        <img src="<?= base_url('asset/plus.svg'); ?>" alt="pluc" class="w-10 md:w-12">
    </button>

    <!-- add todo form -->

    <div id="addtodo" style="height: <?= !empty(session('errors')) ? '100vh' : '0px';  ?>;" class="h-0 overflow-hidden fixed top-0 left-0 right-0 bottom-0 bg-background-transparent transition-all duration-300 ease-in-out">

        <!-- error message -->
        <?php if (session('errors')) : ?>
            <div class="error-message mt-4">
                <?php foreach (session('errors') as $error) : ?>
                    <p><?= $error; ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- form -->
        <div class="relative flex flex-col gap-4 mt-14  bg-dark-primary dark:bg-black  m-auto w-11/12 max-w-screen-sm  px-4 py-8">

            <button id="close-addtodo" class="absolute -top-3 -right-3 p-1 rounded-full bg-accent">
                <img src="<?= base_url('asset/x.svg'); ?>" alt="close add" class="w-5">
            </button>
            <form action="<?= current_url(); ?>" method="post" id="addForm" class="flex flex-col gap-4">
                <input type="text" name="title" placeholder="Title ..." class="input-form">
                <textarea name="todo" class="input-form h-48"></textarea>
                <input type="submit" class="primary-btn" name="form" value="addTodo">
            </form>

        </div>
    </div>

    <!-- alert delete -->
    <div id="alert-delete" class="hidden fixed top-0 left-0 right-0 bottom-0 bg-background-transparent transition-all duration-300 scale-0 origin-top">
        <div class=" absolute top-16 left-[50%] translate-x-[-50%]    py-3 px-4 w-80 md:w-96 m-auto bg-dark-primary dark:bg-black rounded-md z-20 shadow-accent shadow-md ">
            <p class="text-lg font-semibold text-white py-6 text-center">Are you sure deleted selected todo ?</p>
            <div class="flex items-center justify-evenly">
                <button id="trash-no" class="secondary-btn">No</button>
                <button form="selectForm" type="submit" id="trash-yes" class="primary-btn">Yes</button>
            </div>
        </div>
    </div>

    <!-- forms -->
    <form action="<?= url_to('delete'); ?>" method="post" id="selectForm"></form>

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

    // add varibale

    const addtodo = document.querySelector('#addtodo');
    const triggerAddTodo = document.querySelector('#trigger-addtodo');
    const closeAddtodo = document.querySelector('#close-addtodo');





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

            } else {
                todo.checked = false;
                todo.classList.add("hidden");
                trash.classList.add("hidden");

            }
        }
    });

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

            } else if (countChecked == todosCheck.length) {
                parentCheck.checked = true;
                parentCheck.indeterminate = false;
                trash.classList.remove("hidden");

            } else {
                parentCheck.checked = false;
                parentCheck.indeterminate = true;
                trash.classList.remove("hidden");

            }
        });
    }




    // delete

    trash.addEventListener('click', e => {
        e.preventDefault();
        alertDelete.classList.remove('hidden');
        alertDelete.style.transform = 'scale(1)'

    })

    trashNo.addEventListener('click', e => {
        e.preventDefault();
        alertDelete.style.transform = 'scale(0)';
    })

    // add todo

    triggerAddTodo.addEventListener('click', () => {
        addtodo.style.height = '100vh';
    })

    closeAddtodo.addEventListener('click', () => {
        addtodo.style.height = '0';
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