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
        <button form="selectForm" type="submit">
            <img id="trash" src="<?= base_url('asset/trash.svg'); ?>" alt="trash" class="w-6 hidden">
        </button>


        <label for="select-all">
            <input type="checkbox" name="select-ala" id="select-all" class="w-6 accent-accent indeterminate:accent-accent">
            <span class="text-sm font-semibold text-secondary">Check all</span>
        </label>
    </div>




    <!-- empty todo -->
    <!-- <div class="h-[80vh] flex justify-center items-center">
        <p class="text-base md:text-lg text-secondary font-semibold">You dont have todo !</p>
    </div> -->

    <!-- todo -->
    <div class=" grid grid-cols-2  justify-evenly  gap-4 my-4">

        <div class="todo ">
            <a href="">
                <h3 class="todo-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                <p id='todo-body' class="todo-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur optio recusandae Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga perferendis deleniti, alias cum debitis nisi distinctio voluptatibus beatae quis incidunt. Eius quis sed dolorem ipsam omnis, non rerum quibusdam dolore. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa, tempora sed, expedita nesciunt ut sequi, praesentium aut tempore pariatur veritatis id distinctio itaque nihil ad nisi nemo quae ea repellendus! </p>
            </a>

            <input type="checkbox" form="selectForm" name="todo" class="todo-select hidden">

        </div>
        <div class="todo">
            <a href="">
                <h3 class="todo-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                <p id='todo-body' class="todo-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur optio recusandae </p>

            </a>
            <input type="checkbox" name="todo" class="todo-select hidden">
        </div>
        <div class="todo">
            <a href="">
                <h3 class="todo-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                <p class="todo-body">
                </p>

            </a>
            <input type="checkbox" name="todo" class="todo-select hidden">
        </div>
        <div class="todo">
            <a href="">
                <h3 class="todo-title"></h3>
                <p class="todo-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolor maxime et sunt? Alias distinctio repellendus ipsum quis et illum enim eum obcaecati facilis adipisci, sed magni ipsa tenetur consequatur!
                </p>

            </a>
            <input type="checkbox" name="todo" class="todo-select hidden">
        </div>
        <div class="todo">
            <a href="">
                <h3 class="todo-title"></h3>
                <p class="todo-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolor maxime et sunt? Alias distinctio repellendus ipsum quis et illum enim eum obcaecati facilis adipisci, sed magni ipsa tenetur consequatur!
                </p>

            </a>
            <input type="checkbox" name="todo" class="todo-select hidden">
        </div>
        <div class="todo">
            <a href="">
                <h3 class="todo-title"></h3>
                <p class="todo-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolor maxime et sunt? Alias distinctio repellendus ipsum quis et illum enim eum obcaecati facilis adipisci, sed magni ipsa tenetur consequatur!
                </p>

            </a>
            <input type="checkbox" name="todo" class="todo-select hidden">
        </div>
        <div class="todo">
            <a href="">
                <h3 class="todo-title"></h3>
                <p class="todo-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolor maxime et sunt? Alias distinctio repellendus ipsum quis et illum enim eum obcaecati facilis adipisci, sed magni ipsa tenetur consequatur!
                </p>

            </a>
            <input type="checkbox" name="todo" class="todo-select hidden">
        </div>
        <div class="todo">
            <a href="">
                <h3 class="todo-title"></h3>
                <p class="todo-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolor maxime et sunt? Alias distinctio repellendus ipsum quis et illum enim eum obcaecati facilis adipisci, sed magni ipsa tenetur consequatur!
                </p>

            </a>
            <input type="checkbox" name="todo" class="todo-select hidden">
        </div>
        <div class="todo">
            <a href="">
                <h3 class="todo-title"></h3>
                <p class="todo-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolor maxime et sunt? Alias distinctio repellendus ipsum quis et illum enim eum obcaecati facilis adipisci, sed magni ipsa tenetur consequatur!
                </p>

            </a>
            <input type="checkbox" name="todo" class="todo-select hidden">
        </div>
        <div class="todo">
            <a href="">
                <h3 class="todo-title"></h3>
                <p class="todo-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolor maxime et sunt? Alias distinctio repellendus ipsum quis et illum enim eum obcaecati facilis adipisci, sed magni ipsa tenetur consequatur!
                </p>

            </a>
            <input type="checkbox" name="todo" class="todo-select hidden">
        </div>
        <div class="todo">
            <a href="">
                <h3 class="todo-title"></h3>
                <p class="todo-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolor maxime et sunt? Alias distinctio repellendus ipsum quis et illum enim eum obcaecati facilis adipisci, sed magni ipsa tenetur consequatur!
                </p>

            </a>
            <input type="checkbox" name="todo" class="todo-select hidden">
        </div>
        <div class="todo">
            <a href="">
                <h3 class="todo-title"></h3>
                <p class="todo-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolor maxime et sunt? Alias distinctio repellendus ipsum quis et illum enim eum obcaecati facilis adipisci, sed magni ipsa tenetur consequatur!
                </p>

            </a>
            <input type="checkbox" name="todo" class="todo-select hidden">
        </div>
        <div class="todo">
            <a href="">
                <h3 class="todo-title"></h3>
                <p class="todo-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolor maxime et sunt? Alias distinctio repellendus ipsum quis et illum enim eum obcaecati facilis adipisci, sed magni ipsa tenetur consequatur!
                </p>

            </a>
            <input type="checkbox" name="todo" class="todo-select hidden">
        </div>

    </div>

    <!-- add todo ++  -->

    <button id="trigger-addtodo" class="bg-accent rounded-full fixed bottom-12 right-8 px-3 py-3">
        <img src="<?= base_url('asset/plus.svg'); ?>" alt="pluc" class="w-10 md:w-12">
    </button>

    <!-- add todo form -->

    <div id="addtodo" class="h-0 overflow-hidden fixed top-0 left-0 right-0 bottom-0 bg-background-transparent transition-all duration-300 ease-in-out">
        <div class="relative flex flex-col gap-4 mt-14  bg-dark-primary  m-auto w-11/12 max-w-screen-sm  px-4 py-8">

            <button id="close-addtodo" class="absolute -top-3 -right-3 p-1 rounded-full bg-accent">
                <img src="<?= base_url('asset/x.svg'); ?>" alt="close add" class="w-5">
            </button>

            <input type="text" form="addForm" name="title" placeholder="Title ..." class="input-form">
            <textarea name="todo" class="input-form h-48"></textarea>
            <button form="addForm" type="submit" class="primary-btn">Save</button>
        </div>
    </div>

    <!-- alert delete -->
    <div id="alert-delete" class="hidden fixed top-0 left-0 right-0 bottom-0 bg-background-transparent transition-all duration-300 scale-0 origin-top">
        <div class=" absolute top-16 left-[50%] translate-x-[-50%]    py-3 px-4 w-80 md:w-96 m-auto bg-dark-primary rounded-md z-20 shadow-accent shadow-md ">
            <p class="text-lg font-semibold text-white py-6 text-center">Are you sure deleted selected todo ?</p>
            <div class="flex items-center justify-evenly">
                <button id="trash-no" class="secondary-btn">No</button>
                <button form="selectForm" type="submit" id="trash-yes" class="primary-btn">Yes</button>
            </div>
        </div>
    </div>

    <!-- forms -->
    <form action="<?= base_url('delete'); ?>" method="post" id="selectForm"></form>
    <form action="<?= base_url('addtodo'); ?>" method="post" id="addForm"></form>
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
</script>

<?= $this->endSection(); ?>