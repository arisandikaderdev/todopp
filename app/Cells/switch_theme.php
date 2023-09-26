<div class="bg-dark-primary h-max w-16 rounded-full">
    <div data-mode='light' id="mode-bg" class="w-max p-1 rounded-full bg-blue-sky cursor-pointer transition-all duration-700 ease-in-out">
        <img id="mode-img" src="<?= base_url('asset/sun.svg'); ?>" alt="sun/moon" class="w-4  transition-all duration-700">
    </div>
</div>

<script>
    const modeBg = document.querySelector("#mode-bg");
    const modeImg = document.querySelector("#mode-img");
    const htmlBase = document.documentElement;

    !localStorage.theme && (localStorage.theme = "light");

    if (
        localStorage.theme == "dark" &&
        window.matchMedia('(prefers-color-scheme : "dark").match')
    ) {
        document.documentElement.classList.add("dark");
        darkMode();

    } else {
        document.documentElement.classList.remove("dark");
        lightMode();
    }

    modeBg.addEventListener("click", (e) => {

        if (localStorage.theme == "light") {
            darkMode();
            localStorage.theme = "dark";
        } else if (localStorage.theme == "dark") {
            lightMode();
            localStorage.theme = "light";
        }

        checkMode();
    });

    function checkMode() {
        if (
            localStorage.theme == "dark" &&
            window.matchMedia('(prefers-color-scheme : "dark").match')
        ) {
            htmlBase.classList.add("dark");
        } else {
            htmlBase.classList.remove("dark");
        }
    }

    function darkMode() {
        modeBg.style.background = "black";
        modeImg.src = "./asset/moon.svg";

        modeImg.style.transform = "rotate(360deg)";
        modeBg.style.transform = "translateX(2.5rem)";

        modeBg.dataset.mode = "dark";
        document.documentElement.classList.add("dark");
    }

    function lightMode() {
        modeBg.style.background = "#31CFF6";
        modeImg.src = "./asset/sun.svg";

        modeImg.style.transform = "rotate(0deg)";
        modeBg.style.transform = "translateX(0)";

        modeBg.dataset.mode = "light";
        document.documentElement.classList.remove("dark");
    }
</script>