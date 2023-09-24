<?= $this->extend('layout/form'); ?>

<?= $this->section('header'); ?>
<?= view_cell("HeaderCell", ['title' => 'Sing up | Todo App']); ?>
<?= $this->endSection(); ?>

<?= $this->section('form'); ?>
<form action="" method="post" class="form-page ">
    <h2 class="text-secondary font-semibold text-center text-2xl mb-5">Create Your Account</h2>
    <input type="text" name="username" placeholder="username" class="input-form">
    <input type="email" name="email" placeholder="email" class="input-form">
    <input type="password" name="password" placeholder="password" class="input-form">
    <input type="password" name="passwordconfirm" placeholder="password confirm" class="input-form">

    <label for="profile">
        <input type="file" name="profile" id="profile" hidden>
        <div id="previewWrapper" class="grid place-items-center content-center bg-white rounded-sm h-28 cursor-pointer">
            <div>
                <img src="<?= base_url('asset/upload pic.svg'); ?>" alt="profile pic" class="w-9 md:w-11 mx-auto block">
                <p class="text-light-grey font-semibold text-center">Upload Your Pic</p>
            </div>

            <img src="#" alt="preview" class="hidden w-16 rounded-full aspect-square object-cover" id="preview">
        </div>
        <div class="flex  items-center mt-4 cursor-pointer">
            <p class="text-white bg-accent px-2 py-1">File : </p>
            <p id="filename" class="bg-white px-2 py-1 flex-1">file name</p>
        </div>
    </label>

    <button class="primary-btn w-full">Create Account</button>

    <p class="text-center">
        <a href="<?= base_url('login'); ?>">Already have account ? </a>
    </p>

</form>

<script>
    const ProfilePic = document.querySelector('#profile');
    const preview = document.querySelector('#preview');
    const fileName = document.querySelector('#filename');
    const previewWrapper = document.querySelector('#previewWrapper');

    ProfilePic.addEventListener('change', (e) => {
        const file = e.target.files[0];
        const reader = new FileReader();

        reader.onload = (e) => {
            previewWrapper.firstElementChild.classList.add('hidden');
            preview.classList.remove('hidden');
            preview.src = e.target.result;
            fileName.textContent = file.name;

        }

        reader.readAsDataURL(file);
    })
</script>

<?= $this->endSection(); ?>