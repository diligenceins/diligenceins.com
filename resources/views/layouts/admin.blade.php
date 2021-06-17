<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
        />
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link rel="stylesheet" href="{{ asset('@fortawesome/fontawesome-free/css/all.min.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="text-gray-700 antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
      <nav
        class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6"
      >
        <div
          class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto"
        >
          <button
            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
            type="button"
            onclick="toggleNavbar('example-collapse-sidebar')"
          >
            <i class="fas fa-bars"></i>
          </button>
          <a
            class="block text-center text-gray-600 mx-auto p-2 px-0"
            href="/"
          >
            <img class="h-12" src="{{ asset('images/logo-sm.jpg') }}" alt="">
          </a>
          <ul class="md:hidden items-center flex flex-wrap list-none">
            <li class="inline-block relative">
              <a
                class="text-gray-500 block py-1 px-3"
                href="#pablo"
                onclick="openDropdown(event,'notification-dropdown')"
                ><i class="fas fa-bell"></i
              ></a>
              <div
                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                id="notification-dropdown"
              >
                <a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700"
                  >Action</a
                ><a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700"
                  >Another action</a
                ><a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700"
                  >Something else here</a
                >
                <div
                  class="h-0 my-2 border border-solid border-gray-100"
                ></div>
                <a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700"
                  >Seprated link</a
                >
              </div>
            </li>
            <li class="inline-block relative">
              <a
                class="text-gray-500 block"
                href="#pablo"
                onclick="openDropdown(event,'user-responsive-dropdown')"
                ><div class="items-center flex">
                  <span
                    class="w-12 h-12 text-sm text-white bg-gray-200 inline-flex items-center justify-center rounded-full"
                    ><img
                      alt="..."
                      class="w-full rounded-full align-middle border-none shadow-lg"
                      src="{{asset('images/admin/avatar.png')}}"
                  /></span></div
              ></a>
              <div
                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                id="user-responsive-dropdown"
              >
                <a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700"
                  >Action</a
                ><a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700"
                  >Another action</a
                ><a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700"
                  >Something else here</a
                >
                <div
                  class="h-0 my-2 border border-solid border-gray-100"
                ></div>
                <a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700"
                  >Seprated link</a
                >
              </div>
            </li>
          </ul>
          <div
            class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
            id="example-collapse-sidebar"
          >
            <div
              class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-gray-200"
            >
              <div class="flex flex-wrap">
                <div class="w-6/12">
                  <a
                    class="md:block text-left md:pb-2 text-gray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                    href="../../index.html"
                  >
                    Notus JS
                  </a>
                </div>
                <div class="w-6/12 flex justify-end">
                  <button
                    type="button"
                    class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                    onclick="toggleNavbar('example-collapse-sidebar')"
                  >
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </div>
            <form class="mt-6 mb-4 md:hidden">
              <div class="mb-3 pt-0">
                <input
                  type="text"
                  placeholder="Search"
                  class="border-0 px-3 py-2 h-12 border border-solid border-gray-500 placeholder-gray-300 text-gray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"
                />
              </div>
            </form>
            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6
              class="md:min-w-full text-gray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
            >
              Navigation
            </h6>
            <!-- Navigation -->

            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
              <li class="items-center">
                <a
                  href="{{ route('admin') }}"
                  class="text-xs uppercase py-3 font-bold block {{ request()->routeIs('admin') ? 'text-blue-500 hover:text-blue-600' : 'text-gray-700 hover:text-gray-500' }}"
                >
                  <i class="fas fa-tv mr-2 text-sm opacity-75"></i>
                  Dashboard
                </a>
              </li>
              <li class="items-center">
                <a
                  href="{{ route('admin.reports.index') }}"
                  class="text-xs uppercase py-3 font-bold block {{ request()->routeIs('admin.reports.index') ? 'text-blue-500 hover:text-blue-600' : 'text-gray-700 hover:text-gray-500' }}"
                >
                  <i class="fas fa-book mr-2 text-sm text-gray-300"></i>
                  Reports
                </a>
              </li>
              
              @if(Auth::user()->isAdmin())
                <li class="items-center">
                  <a
                    href="{{ route('admin.users.index') }}"
                    class="text-xs uppercase py-3 font-bold block {{ request()->routeIs('admin.users.index') ? 'text-blue-500 hover:text-blue-600' : 'text-gray-700 hover:text-gray-500' }}"
                  >
                    <i class="fas fa-user mr-2 text-sm text-gray-300"></i>
                    Users
                  </a>
                </li>
                <li class="items-center">
                  <a
                    href="{{ route('admin.categories.index') }}"
                    class="text-xs uppercase py-3 font-bold block {{ request()->routeIs('admin.categories.index') ? 'text-blue-500 hover:text-blue-600' : 'text-gray-700 hover:text-gray-500' }}"
                  >
                    <i
                      class="fas fa-list mr-2 text-sm text-gray-300"
                    ></i>
                    Categories
                  </a>
                </li>
                <li class="items-center">
                  <a
                    href="{{ route('admin.customers.index') }}"
                    class="text-xs uppercase py-3 font-bold block {{ request()->routeIs('admin.customers.index') ? 'text-blue-500 hover:text-blue-600' : 'text-gray-700 hover:text-gray-500' }}"
                  >
                    <i class="fas fa-user mr-2 text-sm text-gray-300"></i>
                    Customers
                  </a>
                </li>
              @endif

              <li class="items-center">
                <a
                  href="{{ route('admin.pages.index') }}"
                  class="text-xs uppercase py-3 font-bold block {{ request()->routeIs('admin.pages.index') ? 'text-blue-500 hover:text-blue-600' : 'text-gray-700 hover:text-gray-500' }}"
                >
                  <i
                    class="fas fa-file mr-2 text-sm text-gray-300"
                  ></i>
                  Pages
                </a>
              </li>
              <li class="items-center">
                <a
                  href="{{ route('admin.profile.edit', Auth::user()->id) }}"
                  class="text-xs uppercase py-3 font-bold block {{ request()->routeIs('admin.profile.edit', Auth::user()->id) ? 'text-blue-500 hover:text-blue-600' : 'text-gray-700 hover:text-gray-500' }}"
                >
                  <i
                    class="fas fa-user mr-2 text-sm text-gray-300"
                  ></i>
                  Profile
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="relative md:ml-64 bg-gray-50">
        <nav
          class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4"
        >
          <div
            class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4"
          >
            <a
              class="text-white text-sm uppercase hidden lg:inline-block font-semibold"
              href="{{ route('admin') }}"
              >Dashboard</a
            >
            
            <ul
              class="flex-col md:flex-row list-none items-center hidden md:flex"
            >
              <a
                class="text-gray-500 block"
                href="#pablo"
                onclick="openDropdown(event,'user-dropdown')"
              >
                <div class="items-center flex">
                  <span
                    class="w-12 h-12 text-sm text-white bg-gray-200 inline-flex items-center justify-center rounded-full"
                    ><img
                      alt="..."
                      class="w-full rounded-full align-middle border-none shadow-lg"
                      src="{{ asset('images/admin/avatar.png') }}"
                  /></span>
                </div>
              </a>
              <div
                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg w-44"
                id="user-dropdown"
              >
                <a href="{{ route('admin.profile.edit', Auth::user()->id) }}" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">Profile</a>
                <div class="h-0 my-2 border border-solid border-gray-100"></div>
                {!! Form::open(['route' => 'logout']) !!}
                  <button class="text-sm text-left py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">
                    Logout
                  </button>
                {!! Form::close() !!}
              </div>
            </ul>
          </div>
        </nav>
        <!-- Header -->
        <div class="relative bg-blue-600 bg-pattern md:pt-32 pb-32 pt-12">
          <div class="px-4 md:px-10 mx-auto w-full flex items-center justify-between">
                {{ $header }}
          </div>
        </div>
        <div class="px-4 md:px-10 mx-auto w-full -m-24">
          {{ $slot }}
        </div>
      </div>
    </div>
    <script src="https://cdn.tiny.cloud/1/lorwjp84xr5a4qnkvcnmevgdjamepa6bj45ypm0lha3fig9z/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      charset="utf-8"
    ></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script type="text/javascript">
      function onSlugTitleChange(el, t) {
        var slug = slugify(el.value);
        document.getElementById(t).value = slug;
      }
      function slugify(string) {
        const a = 'àáâäæãåāăąçćčđďèéêëēėęěğǵḧîïíīįìłḿñńǹňôöòóœøōõőṕŕřßśšşșťțûüùúūǘůűųẃẍÿýžźż·/_,:;'
        const b = 'aaaaaaaaaacccddeeeeeeeegghiiiiiilmnnnnoooooooooprrsssssttuuuuuuuuuwxyyzzz------'
        const p = new RegExp(a.split('').join('|'), 'g')

        return string.toString().toLowerCase()
          .replace(/\s+/g, '-') // Replace spaces with -
          .replace(p, c => b.charAt(a.indexOf(c))) // Replace special characters
          .replace(/&/g, '-and-') // Replace & with 'and'
          .replace(/[^\w\-]+/g, '') // Remove all non-word characters
          .replace(/\-\-+/g, '-') // Replace multiple - with single -
          .replace(/^-+/, '') // Trim - from start of text
          .replace(/-+$/, '') // Trim - from end of text
      }
      tinymce.init({
        selector: '.tinymce-editor',
        plugins: 'image autolink link preview anchor searchreplace code fullscreen imagetools paste',
        height: "300",
      });
      /* Make dynamic date appear */
      (function () {
        if (document.getElementById("get-current-year")) {
          document.getElementById(
            "get-current-year"
          ).innerHTML = new Date().getFullYear();
        }
      })();
      /* Sidebar - Side navigation menu on mobile/responsive mode */
      function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("bg-white");
        document.getElementById(collapseID).classList.toggle("m-2");
        document.getElementById(collapseID).classList.toggle("py-3");
        document.getElementById(collapseID).classList.toggle("px-6");
      }
      function closeAlert(event){
        let element = event.target;
        while(element.nodeName !== "BUTTON"){
          element = element.parentNode;
        }
        element.parentNode.parentNode.removeChild(element.parentNode);
      }
      /* Function for dropdowns */
      function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "A") {
          element = element.parentNode;
        }
        Popper.createPopper(element, document.getElementById(dropdownID), {
          placement: "bottom-start",
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
      }

      (function () {
        /* Chart initialisations */
        /* Line Chart */
        var config = {
          type: "line",
          data: {
            labels: [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July",
            ],
            datasets: [
              {
                label: new Date().getFullYear(),
                backgroundColor: "#4c51bf",
                borderColor: "#4c51bf",
                data: [65, 78, 66, 44, 56, 67, 75],
                fill: false,
              },
              {
                label: new Date().getFullYear() - 1,
                fill: false,
                backgroundColor: "#fff",
                borderColor: "#fff",
                data: [40, 68, 86, 74, 56, 60, 87],
              },
            ],
          },
          options: {
            maintainAspectRatio: false,
            responsive: true,
            title: {
              display: false,
              text: "Sales Charts",
              fontColor: "white",
            },
            legend: {
              labels: {
                fontColor: "white",
              },
              align: "end",
              position: "bottom",
            },
            tooltips: {
              mode: "index",
              intersect: false,
            },
            hover: {
              mode: "nearest",
              intersect: true,
            },
            scales: {
              xAxes: [
                {
                  ticks: {
                    fontColor: "rgba(255,255,255,.7)",
                  },
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Month",
                    fontColor: "white",
                  },
                  gridLines: {
                    display: false,
                    borderDash: [2],
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.3)",
                    zeroLineColor: "rgba(0, 0, 0, 0)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2],
                  },
                },
              ],
              yAxes: [
                {
                  ticks: {
                    fontColor: "rgba(255,255,255,.7)",
                  },
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Value",
                    fontColor: "white",
                  },
                  gridLines: {
                    borderDash: [3],
                    borderDashOffset: [3],
                    drawBorder: false,
                    color: "rgba(255, 255, 255, 0.15)",
                    zeroLineColor: "rgba(33, 37, 41, 0)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2],
                  },
                },
              ],
            },
          },
        };
        var ctx = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(ctx, config);

        /* Bar Chart */
        config = {
          type: "bar",
          data: {
            labels: [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July",
            ],
            datasets: [
              {
                label: new Date().getFullYear(),
                backgroundColor: "#ed64a6",
                borderColor: "#ed64a6",
                data: [30, 78, 56, 34, 100, 45, 13],
                fill: false,
                barThickness: 8,
              },
              {
                label: new Date().getFullYear() - 1,
                fill: false,
                backgroundColor: "#4c51bf",
                borderColor: "#4c51bf",
                data: [27, 68, 86, 74, 10, 4, 87],
                barThickness: 8,
              },
            ],
          },
          options: {
            maintainAspectRatio: false,
            responsive: true,
            title: {
              display: false,
              text: "Orders Chart",
            },
            tooltips: {
              mode: "index",
              intersect: false,
            },
            hover: {
              mode: "nearest",
              intersect: true,
            },
            legend: {
              labels: {
                fontColor: "rgba(0,0,0,.4)",
              },
              align: "end",
              position: "bottom",
            },
            scales: {
              xAxes: [
                {
                  display: false,
                  scaleLabel: {
                    display: true,
                    labelString: "Month",
                  },
                  gridLines: {
                    borderDash: [2],
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.3)",
                    zeroLineColor: "rgba(33, 37, 41, 0.3)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2],
                  },
                },
              ],
              yAxes: [
                {
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Value",
                  },
                  gridLines: {
                    borderDash: [2],
                    drawBorder: false,
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.2)",
                    zeroLineColor: "rgba(33, 37, 41, 0.15)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2],
                  },
                },
              ],
            },
          },
        };
        ctx = document.getElementById("bar-chart").getContext("2d");
        window.myBar = new Chart(ctx, config);
      })();
    </script>
    </body>
</html>
