<?= $this->renderSection('head') ?>


<div class="grid grid-rows-[max-content,1fr] md:grid-cols-[.2fr,1fr]  bg-primary min-h-screen">
    <header class="h-max md:col-start-2 px-4 py-8 flex justify-between">

        <?= $this->renderSection('header'); ?>

        <!-- account section -->

        <div class="relative h-max ">
            <img id="profile-pic" src="<?= base_url('asset/bg.png'); ?>" alt="avatar pic" class="w-10 h-10 aspect-square rounded-full object-cover bg-black">
            <div id="overlay" class="h-0 overflow-hidden absolute bg-primary top-[120%] right-0 transition-all duration-300 z-50">
                <div class=" bg-dark-primary rounded-lg w-56 px-4 py-6 ">
                    <div class="flex flex-col gap-4 items-center ">
                        <img src="<?= base_url('asset/bg.png'); ?>" alt="avatar pic" class="w-14 h-14 aspect-square rounded-full object-cover bg-black">

                        <div class="text-center  ">
                            <p class="text-lg text-secondary font-semibold">Username</p>
                            <small class="text-secondary font-thin italic">Email.com</small>
                        </div>

                        <button class="primary-btn">
                            <a href="#profile">Edit</a>
                        </button>
                    </div>
                    <ul class="flex flex-col gap-4 text-dark-secondary font-semibold mt-6">
                        <li class="hover:text-secondary"><a href="#">My Todo</a></li>
                        <li class="hover:text-secondary"><a href="#">Trash</a></li>
                        <li class="hover:text-secondary"><a href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </header>

    <!-- adie destop -->
    <aside class="hidden md:flex flex-col gap-8 row-start-1  row-span-3 col-start-1 col-end-1 bg-dark-primary sticky top-0 h-screen py-6 ">
        <h2 class="text-xl text-secondary font-semibold italic text-center">Todo List App</h2>

        <ul class="flex flex-col gap-4 items-center text-left text-dark-secondary font-semibold ">
            <li class="hover:text-secondary"><a href="#">Home</a></li>
            <li class="hover:text-secondary"><a href="">Contact Us</a></li>
            <li class="hover:text-secondary"><a href="">About</a></li>
        </ul>
    </aside>

    <!-- aside mobile -->

    <aside id="aside-mobile" class="md:hidden  bg-dark-primary  fixed top-0 left-0  h-screen z-20 py-8  ">
        <nav class="w-0 overflow-hidden flex flex-col gap-8 transition-all duration-300 ease-in-out">
            <h2 class="text-lg text-secondary font-semibold italic text-center">Todo List App</h2>

            <ul class="flex flex-col gap-4 items-center text-left text-dark-secondary font-semibold text-sm">
                <li class="hover:text-secondary"><a href="#">Home</a></li>
                <li class="hover:text-secondary"><a href="">Contact Us</a></li>
                <li class="hover:text-secondary"><a href="">About</a></li>
            </ul>
        </nav>

        <div id="aside-mobile-trigger" class=" w-max px-1 py-1 rounded-tr-xl rounded-br-xl absolute left-[100%] top-20 bg-dark-primary cursor-pointer">
            <img id="open-sidebar" src="<?= base_url('asset/list.svg'); ?>" alt="list" class="w-6">
            <img id="close-sidebar" src="<?= base_url('asset/x.svg'); ?>" alt="list" class="hidden w-6">

        </div>
    </aside>

    <main class="px-4">
        <?= $this->renderSection('main'); ?>
    </main>


</div>


<script>
    const proflePic = document.querySelector('#profile-pic');
    const overylay = document.querySelector('#overlay');

    proflePic.onclick = (e) => {
        if (overylay.classList.contains('h-0')) {
            overylay.style.height = "max-content";
            overylay.classList.remove('h-0')
            return;
        }
        overylay.style.height = '0px';
        overylay.classList.add('h-0')
    }

    const asideMobile = document.querySelector('#aside-mobile > nav');
    const openSidebar = document.querySelector('#open-sidebar')
    const closeSidebar = document.querySelector('#close-sidebar')

    openSidebar.onclick = e => {
        console.log(e.target);
        e.target.classList.add('hidden');
        closeSidebar.classList.remove('hidden');
        asideMobile.style.width = '50vw';
    }

    closeSidebar.onclick = e => {
        e.target.classList.add('hidden');
        openSidebar.classList.remove('hidden');
        asideMobile.style.width = '0';
    }
</script>



<?= view_cell("FooterCell"); ?>