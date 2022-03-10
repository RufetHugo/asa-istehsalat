<?php include 'header.php' ?>
<div class="container-fluid padding-top-header px-lg-5 z-index-9 position-relative">
    <div class="breadcrumb radius-10 mt-2 py-3 py-lg-5">

        <div class="container-xl">
            <div class="font-weight-bold mb-3 font-32 text-white">
                İstehsal bazaları
            </div>

            <div class="border rounded text-white d-inline-block px-3 py-2">
                <a href="#" class="font-17 text-white">Əsas Səhifə</a>
                <img src="assets/images/Vector (2).svg" width="5" height="10" class="mx-2 mb-1" alt="">
                <span class="font-17">İstehsal bazaları</span>
            </div>
        </div>

    </div>
</div>

<div class="bg-lg-body mx-lg-4 radius-14 py-lg-5 my-lg-n5 position-relative">
    <div class="container-xl pt-3 pt-lg-5 production">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="p-2 py-3 rounded bg-white mb-2 d-none d-md-block">
                    <div class="list-group rounded-0 d-flex d-md-block" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action border-none text-special font-17 active" onclick="asd('1')"
                           id="list-home-list" data-toggle="list" href="#list-home" role="tab"
                           aria-controls="home">Home</a>
                        <a class="list-group-item list-group-item-action border-none text-special font-17" onclick="asd('2')"
                           id="list-profile-list"
                           data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                        <a class="list-group-item list-group-item-action border-none text-special font-17" onclick="asd('3')"
                           id="list-messages-list"
                           data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                        <a class="list-group-item list-group-item-action border-none text-special font-17" onclick="asd('4')"
                           id="list-settings-list"
                           data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                    </div>
                </div>

                <div class="dropdown-el z-index-9 position-relative d-md-none">
                    <input type="checkbox" class="dropdown-el__switch" id="filter-switch" hidden/>
                    <label for="filter-switch" class="dropdown-el__options-filter">
                        <ul class="dropdown-el__filter" role="listbox" tabindex="-1">
                            <li class="dropdown-el__filter-selected font-17 text-special" aria-selected="true">
                                Home
                            </li>
                            <li>
                                <ul class="dropdown-el__select">
                                    <li class="dropdown-el__select-option" role="option">
                                        <a id="list-home-list" data-toggle="list" href="#list-home" class="text-special"
                                           aria-controls="home">Home</a>
                                    </li>
                                    <li class="dropdown-el__select-option" role="option">
                                        <a id="list-profile-list" class="text-special font-17"
                                           data-toggle="list"
                                           href="#list-profile" aria-controls="profile">Profile</a>
                                    </li>
                                    <li class="dropdown-el__select-option" role="option">
                                        <a id="list-messages-list" class="text-special font-17"
                                           data-toggle="list"
                                           href="#list-messages" aria-controls="messages">Messages</a>
                                    </li>
                                    <li class="dropdown-el__select-option" role="option">
                                        <a id="list-settings-list" class="text-special font-17"
                                           data-toggle="list"
                                           href="#list-settings" aria-controls="settings">Settings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </label>
                </div>

                <button onclick="download()" class="btn bg-yellow text-white w-100 py-2 mb-2">
                    <span class="font-14 ">Daha Ətraflı (PDF) </span> <i class="mdi mdi-24px mdi-tray-arrow-down"></i>
                </button>
            </div>
            <div class="col-12 col-md-8 col-lg-9">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                         aria-labelledby="list-home-list">

                        <div class="embed-responsive embed-responsive-21by9 mb-3">
                            <img src="assets/images/AS%20Insaat/jeriden-villegas-VLPUm5wP5Z0-unsplash.jpg"
                                 class="embed-responsive-item object-cover" alt="">
                        </div>

                        <p class="font-17">
                            1969-cu ildən fəaliyyət göstərən Yevlax dəmir-beton zavodu AS İstehsal şirkəti tərəfindən
                            qoyulmuş investisiya sayəsində müasir avadanlıqlarla təchiz edildi, istehsal prosesi EN
                            standartlarına uyğunlaşdırılmışdır. Yevlax İstehsalat Bazası Əmtəə betonu istehsalı,
                            Xırdaqəlibli beton məmulatları (Poyatos) və dəmir-beton məmulatları (Yevlax DBMZ)
                            zavodlarından
                            ibarətdir.
                        </p>

                        <div class="row mb-3">

                            <div class="col-12 col-md-6 col-lg-4 mb-3">
                                <div class="border-special-all p-3">
                                    <div class="font-weight-bold font-20 font-lg-24 mb-3">
                                        Yevlax Beton
                                    </div>

                                    <p class="font-17">
                                        Yevlax şəhərində yerləşən beton zavod saatda 100 m3 beton istehsal etmək gücünə
                                        malikdir ki, bu da şirkətə istənilən layihəni fasiləsiz əmtəə betonu ilə təchiz
                                        etməyə imkan verir.
                                    </p>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 mb-3">
                                <div class="border-special-all p-3">
                                    <div class="font-weight-bold font-20 font-lg-24 mb-3">
                                        Yevlax Beton
                                    </div>

                                    <p class="font-17">
                                        Yevlax şəhərində yerləşən beton zavod saatda 100 m3 beton istehsal etmək gücünə
                                        malikdir ki, bu da şirkətə istənilən layihəni fasiləsiz əmtəə betonu ilə təchiz
                                        etməyə imkan verir.
                                    </p>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 mb-3">
                                <div class="border-special-all p-3">
                                    <div class="font-weight-bold font-20 font-lg-24 mb-3">
                                        Yevlax Beton
                                    </div>

                                    <p class="font-17">
                                        Yevlax şəhərində yerləşən beton zavod saatda 100 m3 beton istehsal etmək gücünə
                                        malikdir ki, bu da şirkətə istənilən layihəni fasiləsiz əmtəə betonu ilə təchiz
                                        etməyə imkan verir.
                                    </p>
                                </div>
                            </div>

                        </div>


                        <div class="partners-carousel mb-3">
                            <div class="chart-discount-carousel-two" id="animated-thumbnials">

                                <a href="assets/images/AS%20Insaat/worm-s-eye-view-photo-of-high-rise-building-1102846-1.png"
                                   class="item">
                                    <div class="item">
                                        <div class="projects-card radius-8 position-relative d-block">

                                            <div class="embed-responsive embed-responsive-16by9 radius-8">
                                                <img src="assets/images/AS%20Insaat/worm-s-eye-view-photo-of-high-rise-building-1102846-1.png"
                                                     data-original-width="600" data-original-height="500"
                                                     class="embed-responsive-item object-cover" alt="">
                                                <div class="bg-before-opacity-two"></div>
                                                <div class="w-100 projects-card-btn">
                                                    <div class="position-absolute top-0 left-0 w-100 h-100 d-flex align-items-center justify-content-center">
                                                        <i class="mdi mdi-48px mdi-play-circle text-white"></i>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </a>

                                <a href="assets/images/AS%20Insaat/worm-s-eye-view-photo-of-high-rise-building-1102846-1.png"
                                   class="item">
                                    <div class="item">
                                        <div class="projects-card radius-8 position-relative d-block">

                                            <div class="embed-responsive embed-responsive-16by9 radius-8">
                                                <img src="assets/images/AS%20Insaat/worm-s-eye-view-photo-of-high-rise-building-1102846-1.png"
                                                     data-original-width="600" data-original-height="500"
                                                     class="embed-responsive-item object-cover" alt="">
                                                <div class="bg-before-opacity-two"></div>
                                                <div class="w-100 projects-card-btn">
                                                    <div class="position-absolute top-0 left-0 w-100 h-100 d-flex align-items-center justify-content-center">
                                                        <i class="mdi mdi-48px mdi-play-circle text-white"></i>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </a>

                                <a href="assets/images/AS%20Insaat/worm-s-eye-view-photo-of-high-rise-building-1102846-1.png"
                                   class="item">
                                    <div class="item">
                                        <div class="projects-card radius-8 position-relative d-block">

                                            <div class="embed-responsive embed-responsive-16by9 radius-8">
                                                <img src="assets/images/AS%20Insaat/worm-s-eye-view-photo-of-high-rise-building-1102846-1.png"
                                                     data-original-width="600" data-original-height="500"
                                                     class="embed-responsive-item object-cover" alt="">
                                                <div class="bg-before-opacity-two"></div>
                                                <div class="w-100 projects-card-btn">
                                                    <div class="position-absolute top-0 left-0 w-100 h-100 d-flex align-items-center justify-content-center">
                                                        <i class="mdi mdi-48px mdi-play-circle text-white"></i>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </a>

                                <a href="assets/images/AS%20Insaat/worm-s-eye-view-photo-of-high-rise-building-1102846-1.png"
                                   class="item">
                                    <div class="item">
                                        <div class="projects-card radius-8 position-relative d-block">

                                            <div class="embed-responsive embed-responsive-16by9 radius-8">
                                                <img src="assets/images/AS%20Insaat/worm-s-eye-view-photo-of-high-rise-building-1102846-1.png"
                                                     data-original-width="600" data-original-height="500"
                                                     class="embed-responsive-item object-cover" alt="">
                                                <div class="bg-before-opacity-two"></div>
                                                <div class="w-100 projects-card-btn">
                                                    <div class="position-absolute top-0 left-0 w-100 h-100 d-flex align-items-center justify-content-center">
                                                        <i class="mdi mdi-48px mdi-play-circle text-white"></i>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <!--<div class="partners-carousel mb-3">
                            <div class="chart-discount-carousel">

                                <div class="item">
                                    <a href="" class="radius-8 position-relative d-block">

                                        <div class="embed-responsive embed-responsive-16by9 radius-8">
                                            <img src="assets/images/AS%20Insaat/worm-s-eye-view-photo-of-high-rise-building-1102846-1.png"
                                                 class="embed-responsive-item object-cover" alt="">
                                        </div>

                                    </a>
                                </div>

                                <div class="item">
                                    <a href="" class="radius-8 position-relative d-block">

                                        <div class="embed-responsive embed-responsive-16by9 radius-8">
                                            <img src="assets/images/AS%20Insaat/worm-s-eye-view-photo-of-high-rise-building-1102846-1.png"
                                                 class="embed-responsive-item object-cover" alt="">
                                        </div>

                                    </a>
                                </div>

                                <div class="item">
                                    <a href="" class="radius-8 position-relative d-block">

                                        <div class="embed-responsive embed-responsive-16by9 radius-8">
                                            <img src="assets/images/AS%20Insaat/worm-s-eye-view-photo-of-high-rise-building-1102846-1.png"
                                                 class="embed-responsive-item object-cover" alt="">
                                        </div>

                                    </a>
                                </div>

                                <div class="item">
                                    <a href="" class="radius-8 position-relative d-block">

                                        <div class="embed-responsive embed-responsive-16by9 radius-8">
                                            <img src="assets/images/AS%20Insaat/worm-s-eye-view-photo-of-high-rise-building-1102846-1.png"
                                                 class="embed-responsive-item object-cover" alt="">
                                        </div>

                                    </a>
                                </div>

                            </div>
                        </div>-->

                    </div>

                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">...
                    </div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        ...
                    </div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                        ...
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="#" id="abc"></a>
<script>

    let data

    function asd(e) {
        if(e) data = e;
        console.log(data);
    }

    function download() {
        if (!data) {
            data = '2'
        }
        const href = document.getElementById("abc").href="http://bura.az" + data;
        window.open(href)
    }

    // Change option selected
    const label = document.querySelector('.dropdown-el__filter-selected')
    const options = Array.from(document.querySelectorAll('.dropdown-el__select-option'))

    options.forEach((option) => {
        option.addEventListener('click', () => {
            label.textContent = option.textContent;
        })
    })

    // Close dropdown onclick outside
    document.addEventListener('click', (e) => {
        const toggle = document.querySelector('.dropdown-el__switch')
        const element = e.target

        if (element == toggle) return;

        const isDropdownChild = element.closest('.dropdown-el__filter')

        if (!isDropdownChild) {
            toggle.checked = false
        }
    })
</script>

<?php include 'footer.php' ?>
