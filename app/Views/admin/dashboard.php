<?php $session = session(); ?>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
  <!-- sidenav  -->
  <aside class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
    <div class="h-19.5">
      <!-- <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i> -->
      <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;" target="_blank">
        <img src="<?= base_url() ?>assets/img/logo-ct.png" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
        <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Stockist</span>
      </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

    <div class="items-center block w-auto max-h-screen overflow-auto h-sidebar grow basis-full">
      <ul class="flex flex-col pl-0 mb-0">
        <li class="mt-0.5 w-full">
          <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors" href="<?= base_url() ?>">
            <div class="bg-gradient-to-tl from-sky-700 to-indigo-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="white" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8z" />
              </svg>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors hover:bg-slate-50" href="<?= base_url() ?>produk">
            <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <title>box-variant</title>
                <path fill="currentColor" d="M2 10.96a.985.985 0 0 1-.37-1.37L3.13 7c.11-.2.28-.34.47-.42l7.83-4.4c.16-.12.36-.18.57-.18s.41.06.57.18l7.9 4.44c.19.1.35.26.44.46l1.45 2.52c.28.48.11 1.09-.36 1.36l-1 .58v4.96c0 .38-.21.71-.53.88l-7.9 4.44c-.16.12-.36.18-.57.18s-.41-.06-.57-.18l-7.9-4.44A.99.99 0 0 1 3 16.5v-5.54c-.3.17-.68.18-1 0m10-6.81v6.7l5.96-3.35zM5 15.91l6 3.38v-6.71L5 9.21zm14 0v-3.22l-5 2.9c-.33.18-.7.17-1 .01v3.69zm-5.15-2.55l6.28-3.63l-.58-1.01l-6.28 3.63z" />
              </svg>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Produk</span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors hover:bg-slate-50" href="<?= base_url() ?>bahan">
            <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" d="m2.53 19.65l1.34.56v-9.03l-2.43 5.86c-.41 1.02.06 2.19 1.09 2.61m19.5-3.7L17.07 4a2 2 0 0 0-1.81-1.25c-.26 0-.53.04-.79.15L7.1 5.95a2.02 2.02 0 0 0-1.23 1.8c-.01.25.04.54.13.8l5 11.95c.29.78 1.03 1.24 1.81 1.25c.26 0 .52-.05.77-.15l7.36-3.05a1.994 1.994 0 0 0 1.09-2.6M7.88 8.75a1 1 0 0 1-1-1a1 1 0 0 1 1-1c.55 0 1 .45 1 1s-.45 1-1 1m-2 11a2 2 0 0 0 2 2h1.45l-3.45-8.34z" />
              </svg>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Bahan</span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors hover:bg-slate-50" href="<?= base_url() ?>admin">
            <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12c5.16-1.26 9-6.45 9-12V5zm0 4a3 3 0 0 1 3 3a3 3 0 0 1-3 3a3 3 0 0 1-3-3a3 3 0 0 1 3-3m5.13 12A9.7 9.7 0 0 1 12 20.92A9.7 9.7 0 0 1 6.87 17c-.34-.5-.63-1-.87-1.53c0-1.65 2.71-3 6-3s6 1.32 6 3c-.24.53-.53 1.03-.87 1.53" />
              </svg>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Admin</span>
          </a>
        </li>

        <li class="w-full mt-4">
          <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Account pages</h6>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors hover:bg-slate-50" href="<?= base_url() ?>profile">
            <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>customer-support</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(1.000000, 0.000000)">
                        <path class="" fill="currentColor" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                        <path class="" fill="currentColor" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                        <path class="" fill="currentColor" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Profile</span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors hover:bg-slate-50" href="<?= base_url() ?>logout">
            <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" d="m17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5M4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4z" />
              </svg>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Logout</span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <div class="py-2.7 ease-nav-brand my-0 mx-4 items-center whitespace-nowrap px-4 text-center text-xs">
            <script>
              let date = new Date();
              document.write(date.getDate() + '/' + (date.getMonth() + 1) + '/' + date.getFullYear());
            </script>
          </div>
        </li>
      </ul>
    </div>
  </aside>

  <!-- end sidenav -->

  <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
    <!-- Navbar -->
    <nav class="relative flex flex-wrap items-center justify-between px-6 py-2 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
      <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
          <!-- breadcrumb -->
          <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="leading-normal text-sm">
              <a class="opacity-50 text-slate-700" href="javascript:;">Halaman</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="mb-0 font-bold capitalize">Dashboard</h6>
        </nav>

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
          <div class="flex items-center md:ml-auto md:pr-4">
            <!-- <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                  <i class="fas fa-search"></i>
                </span>
                <input type="text" class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Type here..." />
              </div> -->
          </div>
          <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
            <!-- online builder btn  -->
            <!-- <li class="flex items-center">
                <a class="inline-block px-8 py-2 mb-0 mr-4 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro border-fuchsia-500 ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs text-fuchsia-500 hover:border-fuchsia-500 active:bg-fuchsia-500 active:hover:text-fuchsia-500 hover:text-fuchsia-500 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
              </li> -->
            <li class="flex items-center">
              <a href="#" class="block pl-4 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500">
                <i class="fa fa-user sm:mr-1"></i>
                <span class="hidden sm:inline"><?= $session->get('user_name') ?></span>
              </a>
            </li>
            <li class="flex items-center px-4 xl:hidden">
              <a href="javascript:" class="block p-0 transition-all ease-nav-brand text-sm text-slate-500" sidenav-trigger>
                <div class="w-4.5 overflow-hidden">
                  <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                  <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                  <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                </div>
              </a>
            </li>

            <!-- notifications -->

            <li class="relative flex items-center pl-2 sm:px-4 lg:px-2">
              <p class="hidden transform-dropdown-show"></p>
              <a href="javascript:;" class="block p-0 transition-all text-sm ease-nav-brand text-slate-500" dropdown-trigger aria-expanded="false">
                <i class="cursor-pointer fa fa-bell"></i>
              </a>

              <ul dropdown-menu class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                <!-- add show class on dropdown open js -->
                <li class="relative mb-2">
                  <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
                    <div class="flex py-1">
                      <div class="my-auto">
                        <img src="<?= base_url() ?>assets/img/team-2.jpg" class="inline-flex items-center justify-center mr-4 text-white text-sm h-9 w-9 max-w-none rounded-xl" />
                      </div>
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-1 font-normal leading-normal text-sm"><span class="font-semibold">New message</span> from Laur</h6>
                        <p class="mb-0 leading-tight text-xs text-slate-400">
                          <i class="mr-1 fa fa-clock"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="relative mb-2">
                  <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700" href="javascript:;">
                    <div class="flex py-1">
                      <div class="my-auto">
                        <img src="<?= base_url() ?>assets/img/small-logos/logo-spotify.svg" class="inline-flex items-center justify-center mr-4 text-white text-sm bg-gradient-to-tl from-gray-900 to-slate-800 h-9 w-9 max-w-none rounded-xl" />
                      </div>
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-1 font-normal leading-normal text-sm"><span class="font-semibold">New album</span> by Travis Scott</h6>
                        <p class="mb-0 leading-tight text-xs text-slate-400">
                          <i class="mr-1 fa fa-clock"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="relative">
                  <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700" href="javascript:;">
                    <div class="flex py-1">
                      <div class="inline-flex items-center justify-center my-auto mr-4 text-white transition-all duration-200 ease-nav-brand text-sm bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-1 font-normal leading-normal text-sm">Payment successfully completed</h6>
                        <p class="mb-0 leading-tight text-xs text-slate-400">
                          <i class="mr-1 fa fa-clock"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- end Navbar -->

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 px-0 py-2 mx-6">

      <!-- Card 1 -->
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Aktif</p>
                <h5 class="mb-0 font-bold">
                  <?= $banyak ?>
                  <span class="leading-normal text-sm font-weight-bolder text-indigo-500">Produk</span>
                </h5>
              </div>
            </div>
            <div class="w-4/12 max-w-full px-3 ml-auto text-right flex-0">
              <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-sky-700 to-indigo-500 shadow-soft-2xl">
                <i class="mdi--check text-xl relative top-3.5 text-white" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Stok Sedikit</p>
                <h5 class="mb-0 font-bold">
                  <?= $dikit ?>
                  <span class="leading-normal text-sm font-weight-bolder text-indigo-500">Produk</span>
                </h5>
              </div>
            </div>
            <div class="w-4/12 max-w-full px-3 ml-auto text-right flex-0">
              <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-sky-700 to-indigo-500 shadow-soft-2xl">
                <i class="mdi--warning-circle text-xl relative top-3.5 text-white" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans font-semibold leading-normal text-sm">Stok Habis</p>
                <h5 class="mb-0 font-bold">
                  <?= $non ?>
                  <span class="leading-normal text-sm font-weight-bolder text-indigo-500">Produk</span>
                </h5>
              </div>
            </div>
            <div class="w-4/12 max-w-full px-3 ml-auto text-right flex-0">
              <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-sky-700 to-indigo-500 shadow-soft-2xl">
                <i class="mdi--cube-off-outline text-xl relative top-3.5 text-white" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Produk Low Stock -->
    <div class="px-10 py-2">
      <div class="flex flex-row items-center justify-between mb-2">
        <h2 class="pb-2">Produk Stok Rendah</h2>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

        <div class="w-full max-w-full mb-6 md:w-fit md:flex-none xl:mb-0 xl:w-fit">
          <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="relative">
              <a class="block shadow-xl rounded-2xl">
                <img src="<?= $dikitproduct[0]["image"]?>" alt="img-blur-shadow" class="object-cover max-h-36 sm:max-h-48 w-full shadow-soft-2xl rounded-2xl" />
              </a>
            </div>
            <div class="flex-auto px-1 pt-6 mx-4 mb-4">
              <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text"><?= $dikitproduct[0]['category'] ?></p>
              <a href="javascript:;">
                <h5><?= $dikitproduct[0]["name"]?></h5>
              </a>
              <p class="mb-6 leading-normal text-sm"><?= $dikitproduct[0]["description"] ?></p>
            </div>
          </div>
        </div>

        <div class="w-full max-w-full mb-6 md:w-fit md:flex-none xl:mb-0 xl:w-fit">
          <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="relative">
              <a class="block shadow-xl rounded-2xl">
                <img src="<?= $dikitproduct[1]["image"]?>" alt="img-blur-shadow" class="object-cover max-h-36 sm:max-h-48 w-full shadow-soft-2xl rounded-2xl" />
              </a>
            </div>
            <div class="flex-auto px-1 pt-6 mx-4 mb-4">
              <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text"><?= $dikitproduct[1]["category"]?></p>
              <a href="javascript:;">
                <h5><?= $dikitproduct[1]["name"]?></h5>
              </a>
              <p class="mb-6 leading-normal text-sm"><?= $dikitproduct[1]["description"]?></p>
            </div>
          </div>
        </div>

        <div class="w-full max-w-full mb-6 md:w-fit md:flex-none xl:mb-0 xl:w-fit">
          <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="relative">
              <a class="block shadow-xl rounded-2xl">
                <img src="<?= $dikitproduct[2]["image"]?>" alt="img-blur-shadow" class="object-cover max-h-36 sm:max-h-48 w-full shadow-soft-2xl rounded-2xl" />
              </a>
            </div>
            <div class="flex-auto px-1 pt-6 mx-4 mb-4">
              <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text"><?= $dikitproduct[2]["category"]?></p>
              <a href="javascript:;">
                <h5><?= $dikitproduct[2]["name"]?></h5>
              </a>
              <p class="mb-6 leading-normal text-sm"><?= $dikitproduct[2]["description"]?></p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Footer -->
    <footer class="pt-4">
      <div class="w-full px-6 mx-auto">
        <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
          <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
            <div class="leading-normal text-center text-sm text-slate-500 lg:text-left">
              ©
              <script>
                document.write(new Date().getFullYear() + ",");
              </script>
              made with <i class="fa fa-heart"></i> by
              <a href="#" class="font-semibold text-slate-700" target="_blank">Tim Stockist</a>
            </div>
          </div>
          <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
            <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">Stockist</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </main>
  <!-- Akhir Main -->
</body>
<!-- plugin for charts  -->
<script src="../assets/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="../assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>

</html>