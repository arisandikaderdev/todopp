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
                <button class="primary-btn">Yes</button>
            </div>
        </div>
    </div>

    <!-- forms -->
    <form action="<?= base_url('permanentdelete'); ?>" method="post" id="selectForm"></form>
    <form action="<?= base_url('restore');  ?>" method="post" id="restoreForm"></form>

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
</script>

<?= $this->endSection(); ?>