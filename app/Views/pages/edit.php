<?= $this->extend('layout/main'); ?>

<!-- head title -->

<?= $this->section('head'); ?>

<?= view_cell('HeaderCell', ['title' => 'Edit  | todo app']); ?>

<?= $this->endSection(); ?>

<!-- header -->
<?= $this->section('header'); ?>

<h1 class="main-title">
    Edit Profile
</h1>

<?= $this->endSection(); ?>

<!-- main -->

<?= $this->section('main'); ?>
<div class="relative">
    <!-- error -->
    <?php if (session('errors')) : ?>
        <div class="error-message md:w-full">
            <?php foreach (session('errors') as $error) : ?>
                <p><?= $error; ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>


    <form id="form-edit" action="<?= current_url(); ?>" method="post" enctype="multipart/form-data" class="flex  flex-col md:flex-row gap-4 md:items-center">
        <label for="profile_pic_input" class="flex justify-center relative cursor-pointer">
            <img id="profile_pic" src="<?= $user['profile_pic']; ?>" alt="profile img" class=" w-36 md:w-56 aspect-square object-cover rounded-full">
            <input type="file" name="profile_pic" id="profile_pic_input" hidden>
            <div class="absolute right-3 bottom-3 grid place-content-center p-2 bg-white rounded-full w-max">
                <img src="<?= base_url('asset/upload.svg'); ?>" alt="upload pic" class="w-4 mx-auto">
            </div>
        </label>
        <div class="flex-1 flex flex-col gap-4  ">
            <label for="username">
                <p class="text-white">Username</p>
                <input id="username" type="text" placeholder="username" name="username" value="<?= $user['username']; ?>" class="input-form">
            </label>

            <label for="email">
                <p class="text-white">Email</p>
                <input id="email" type="email" placeholder="email" name="email" value="<?= $user['email']; ?>" class="input-form ">
            </label>

            <button id="btn-submit" type="submit" class="primary-btn w-max">
                Change
            </button>
        </div>
    </form>

    <!-- message -->
    <?php if (session('message')) : ?>
        <div id="message" class=" bg-accent text-white px-3 py-2 fixed top-1 right-1 animate-slide-down transition-all duration-300 font-semibold">
            <p><?= session('message') ?></p>
            <div class="h-1 w-full  bg-white absolute left-0 bottom-0 animate-load origin-left"></div>
        </div>
    <?php endif; ?>

</div>

<script>
    const profilePic = document.querySelector('#profile_pic');
    const profilePicInput = document.querySelector('#profile_pic_input');

    profilePicInput.addEventListener('change', (e) => {
        const img = e.target.files[0];

        const reader = new FileReader();

        reader.onload = (e) => {
            profilePic.src = e.target.result;
        }

        reader.readAsDataURL(img);
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

    // input change

    const formEdit = document.querySelector('#form-edit');
    const buttonSubmit = document.querySelector('#btn-submit');
    const inputForm = document.querySelectorAll('.input-form');
    const inputChange = false;
    let inputChangeEl = [];
</script>

<?= $this->endSection(); ?>