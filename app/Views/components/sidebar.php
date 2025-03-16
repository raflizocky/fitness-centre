<?php 
$baseUrl = base_url('tailadmin/build/');
?>

<aside
  :class="sidebarToggle ? 'translate-x-0 lg:w-[90px]' : '-translate-x-full'"
  class="sidebar fixed left-0 top-0 z-9999 flex h-screen w-[290px] flex-col overflow-y-hidden border-r border-gray-200 bg-white px-5 dark:border-gray-800 dark:bg-black lg:static lg:translate-x-0"
>
  <!-- SIDEBAR HEADER -->
  <div
    :class="sidebarToggle ? 'justify-center' : 'justify-between'"
    class="flex items-center gap-2 pt-8 sidebar-header pb-7"
  >
    <a href="/">
      <span class="logo" :class="sidebarToggle ? 'hidden' : ''">
        <img class="dark:hidden" src="<?= $baseUrl ?>src/images/logo/fitness.png" alt="Logo" />
        <img
          class="hidden dark:block"
          src="<?= $baseUrl ?>src/images/logo/fitness.png"
          alt="Logo"
        />
      </span>

      <img
        class="logo-icon"
        :class="sidebarToggle ? 'lg:block' : 'hidden'"
        src="<?= $baseUrl ?>src/images/logo/fitness.png"
        alt="Logo"
      />
    </a>
  </div>
  <!-- SIDEBAR HEADER -->

  <div
    class="flex flex-col overflow-y-auto duration-300 ease-linear no-scrollbar"
  >
    <!-- Sidebar Menu -->
    <nav x-data="{selected: $persist('Dashboard')}">
      <!-- Menu Group -->
      <div>
        <h3 class="mb-4 text-xs uppercase leading-[20px] text-gray-400">
          <span
            class="menu-group-title"
            :class="sidebarToggle ? 'lg:hidden' : ''"
          >
            MENU
          </span>

          <svg
            :class="sidebarToggle ? 'lg:block hidden' : 'hidden'"
            class="mx-auto fill-current menu-group-icon"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M5.99915 10.2451C6.96564 10.2451 7.74915 11.0286 7.74915 11.9951V12.0051C7.74915 12.9716 6.96564 13.7551 5.99915 13.7551C5.03265 13.7551 4.24915 12.9716 4.24915 12.0051V11.9951C4.24915 11.0286 5.03265 10.2451 5.99915 10.2451ZM17.9991 10.2451C18.9656 10.2451 19.7491 11.0286 19.7491 11.9951V12.0051C19.7491 12.9716 18.9656 13.7551 17.9991 13.7551C17.0326 13.7551 16.2491 12.9716 16.2491 12.0051V11.9951C16.2491 11.0286 17.0326 10.2451 17.9991 10.2451ZM13.7491 11.9951C13.7491 11.0286 12.9656 10.2451 11.9991 10.2451C11.0326 10.2451 10.2491 11.0286 10.2491 11.9951V12.0051C10.2491 12.9716 11.0326 13.7551 11.9991 13.7551C12.9656 13.7551 13.7491 12.9716 13.7491 12.0051V11.9951Z"
              fill=""
            />
          </svg>
        </h3>

        <ul class="flex flex-col gap-4 mb-6">
          <!-- Menu Item Dashboard -->
          <li>
            <a
              href="/"
              class="menu-item group"
              :class=" (selected === 'Dashboard') || (page === 'ecommerce' || page === 'analytics' || page === 'marketing' || page === 'crm' || page === 'stocks') ? 'menu-item-active' : 'menu-item-inactive'"
            >
              <svg
                :class="(selected === 'Dashboard') || (page === 'ecommerce' || page === 'analytics' || page === 'marketing' || page === 'crm' || page === 'stocks') ? 'menu-item-icon-active'  :'menu-item-icon-inactive'"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M5.5 3.25C4.25736 3.25 3.25 4.25736 3.25 5.5V8.99998C3.25 10.2426 4.25736 11.25 5.5 11.25H9C10.2426 11.25 11.25 10.2426 11.25 8.99998V5.5C11.25 4.25736 10.2426 3.25 9 3.25H5.5ZM4.75 5.5C4.75 5.08579 5.08579 4.75 5.5 4.75H9C9.41421 4.75 9.75 5.08579 9.75 5.5V8.99998C9.75 9.41419 9.41421 9.74998 9 9.74998H5.5C5.08579 9.74998 4.75 9.41419 4.75 8.99998V5.5ZM5.5 12.75C4.25736 12.75 3.25 13.7574 3.25 15V18.5C3.25 19.7426 4.25736 20.75 5.5 20.75H9C10.2426 20.75 11.25 19.7427 11.25 18.5V15C11.25 13.7574 10.2426 12.75 9 12.75H5.5ZM4.75 15C4.75 14.5858 5.08579 14.25 5.5 14.25H9C9.41421 14.25 9.75 14.5858 9.75 15V18.5C9.75 18.9142 9.41421 19.25 9 19.25H5.5C5.08579 19.25 4.75 18.9142 4.75 18.5V15ZM12.75 5.5C12.75 4.25736 13.7574 3.25 15 3.25H18.5C19.7426 3.25 20.75 4.25736 20.75 5.5V8.99998C20.75 10.2426 19.7426 11.25 18.5 11.25H15C13.7574 11.25 12.75 10.2426 12.75 8.99998V5.5ZM15 4.75C14.5858 4.75 14.25 5.08579 14.25 5.5V8.99998C14.25 9.41419 14.5858 9.74998 15 9.74998H18.5C18.9142 9.74998 19.25 9.41419 19.25 8.99998V5.5C19.25 5.08579 18.9142 4.75 18.5 4.75H15ZM15 12.75C13.7574 12.75 12.75 13.7574 12.75 15V18.5C12.75 19.7426 13.7574 20.75 15 20.75H18.5C19.7426 20.75 20.75 19.7427 20.75 18.5V15C20.75 13.7574 19.7426 12.75 18.5 12.75H15ZM14.25 15C14.25 14.5858 14.5858 14.25 15 14.25H18.5C18.9142 14.25 19.25 14.5858 19.25 15V18.5C19.25 18.9142 18.9142 19.25 18.5 19.25H15C14.5858 19.25 14.25 18.9142 14.25 18.5V15Z"
                  fill=""
                />
              </svg>

              <span
                class="menu-item-text"
                :class="sidebarToggle ? 'lg:hidden' : ''"
              >
                Dashboard
              </span>

            </a>
          </li>
          <!-- Menu Item Dashboard -->

          <!-- Menu Item Registrations -->
<li>
  <a
    href="#"
    @click.prevent="selected = (selected === 'Forms' ? '':'Forms')"
    class="menu-item group"
    :class=" (selected === 'Forms') || (page === 'formElements' || page === 'formLayout' || page === 'proFormElements' || page === 'proFormLayout') ? 'menu-item-active' : 'menu-item-inactive'"
  >
    <!-- Registration Icon (User/Profile) -->
    <svg
      :class="(selected === 'Forms') || (page === 'formElements' || page === 'formLayout' || page === 'proFormElements' || page === 'proFormLayout') ? 'menu-item-icon-active' :'menu-item-icon-inactive'"
      width="24"
      height="24"
      viewBox="0 0 24 24"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M12 3.75C9.37665 3.75 7.25 5.87665 7.25 8.5C7.25 11.1234 9.37665 13.25 12 13.25C14.6234 13.25 16.75 11.1234 16.75 8.5C16.75 5.87665 14.6234 3.75 12 3.75ZM8.75 8.5C8.75 6.70507 10.2051 5.25 12 5.25C13.7949 5.25 15.25 6.70507 15.25 8.5C15.25 10.2949 13.7949 11.75 12 11.75C10.2051 11.75 8.75 10.2949 8.75 8.5Z"
        fill=""
      />
      <path
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M12 14.25C9.85495 14.25 7.91228 14.7761 6.52197 15.6473C5.15616 16.5004 4.25 17.7191 4.25 19.25C4.25 19.6642 4.58579 20 5 20C5.41421 20 5.75 19.6642 5.75 19.25C5.75 18.4366 6.26384 17.5746 7.35303 16.8777C8.42772 16.1989 9.97505 15.75 12 15.75C14.0249 15.75 15.5723 16.1989 16.647 16.8777C17.7362 17.5746 18.25 18.4366 18.25 19.25C18.25 19.6642 18.5858 20 19 20C19.4142 20 19.75 19.6642 19.75 19.25C19.75 17.7191 18.8438 16.5004 17.478 15.6473C16.0877 14.7761 14.145 14.25 12 14.25Z"
        fill=""
      />
    </svg>

    <span
      class="menu-item-text"
      :class="sidebarToggle ? 'lg:hidden' : ''"
    >
      Registration
    </span>

    <svg
      class="menu-item-arrow absolute right-2.5 top-1/2 -translate-y-1/2 stroke-current"
      :class="[(selected === 'Forms') ? 'menu-item-arrow-active' : 'menu-item-arrow-inactive', sidebarToggle ? 'lg:hidden' : '' ]"
      width="20"
      height="20"
      viewBox="0 0 20 20"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M4.79175 7.39584L10.0001 12.6042L15.2084 7.39585"
        stroke=""
        stroke-width="1.5"
        stroke-linecap="round"
        stroke-linejoin="round"
      />
    </svg>
  </a>

  <!-- Dropdown Menu Start -->
  <div
    class="overflow-hidden transform translate"
    :class="(selected === 'Forms') ? 'block' :'hidden'"
  >
    <ul
      :class="sidebarToggle ? 'lg:hidden' : 'flex'"
      class="flex flex-col gap-1 mt-2 menu-dropdown pl-9"
    >
      <li>
        <a
          href="/registration/member"
          class="menu-dropdown-item group"
          :class="page === 'formElements' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
        >
          Member
        </a>
        <a
          href="/registration/member-attendance"
          class="menu-dropdown-item group"
          :class="page === 'formElements' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
        >
          Member Attendance
        </a>
        <a
          href="/registration/payment-method"
          class="menu-dropdown-item group"
          :class="page === 'formElements' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
        >
          Payment Method
        </a>
        <a
          href="/registration/package"
          class="menu-dropdown-item group"
          :class="page === 'formElements' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
        >
          Package
        </a>
      </li>
    </ul>
  </div>
  <!-- Dropdown Menu End -->
</li>
<!-- Menu Item Registrations -->

<!-- Menu Item Transactions -->
<li>
  <a
    href="#"
    @click.prevent="selected = (selected === 'Transactions' ? '':'Transactions')"
    class="menu-item group"
    :class=" (selected === 'Transactions') || (page === 'formElements' || page === 'formLayout' || page === 'proFormElements' || page === 'proFormLayout') ? 'menu-item-active' : 'menu-item-inactive'"
  >
    <!-- Transaction Icon (Money/Payment) -->
    <svg
      :class="(selected === 'Transactions') || (page === 'formElements' || page === 'formLayout' || page === 'proFormElements' || page === 'proFormLayout') ? 'menu-item-icon-active' :'menu-item-icon-inactive'"
      width="24"
      height="24"
      viewBox="0 0 24 24"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M2.75 7C2.75 5.20507 4.20507 3.75 6 3.75H18C19.7949 3.75 21.25 5.20507 21.25 7V17C21.25 18.7949 19.7949 20.25 18 20.25H6C4.20507 20.25 2.75 18.7949 2.75 17V7ZM6 5.25C5.0335 5.25 4.25 6.0335 4.25 7V17C4.25 17.9665 5.0335 18.75 6 18.75H18C18.9665 18.75 19.75 17.9665 19.75 17V7C19.75 6.0335 18.9665 5.25 18 5.25H6Z"
        fill=""
      />
      <path
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M14 12C14 10.8954 13.1046 10 12 10C10.8954 10 10 10.8954 10 12C10 13.1046 10.8954 14 12 14C13.1046 14 14 13.1046 14 12Z"
        fill=""
      />
      <path
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M16.5 12C16.5 9.51472 14.4853 7.5 12 7.5C9.51472 7.5 7.5 9.51472 7.5 12C7.5 14.4853 9.51472 16.5 12 16.5C14.4853 16.5 16.5 14.4853 16.5 12ZM9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12Z"
        fill=""
      />
    </svg>

    <span
      class="menu-item-text"
      :class="sidebarToggle ? 'lg:hidden' : ''"
    >
      Transaction
    </span>

    <svg
      class="menu-item-arrow absolute right-2.5 top-1/2 -translate-y-1/2 stroke-current"
      :class="[(selected === 'Transactions') ? 'menu-item-arrow-active' : 'menu-item-arrow-inactive', sidebarToggle ? 'lg:hidden' : '' ]"
      width="20"
      height="20"
      viewBox="0 0 20 20"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M4.79175 7.39584L10.0001 12.6042L15.2084 7.39585"
        stroke=""
        stroke-width="1.5"
        stroke-linecap="round"
        stroke-linejoin="round"
      />
    </svg>
  </a>

  <!-- Dropdown Menu Start -->
  <div
    class="overflow-hidden transform translate"
    :class="(selected === 'Transactions') ? 'block' :'hidden'"
  >
    <ul
      :class="sidebarToggle ? 'lg:hidden' : 'flex'"
      class="flex flex-col gap-1 mt-2 menu-dropdown pl-9"
    >
      <li>
        <a
          href="<?= $baseUrl ?>form-elements.html"
          class="menu-dropdown-item group"
          :class="page === 'formElements' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
        >
          Application Form
        </a>
        <a
          href="<?= $baseUrl ?>form-elements.html"
          class="menu-dropdown-item group"
          :class="page === 'formElements' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
        >
          Lesson
        </a>
      </li>
    </ul>
  </div>
  <!-- Dropdown Menu End -->
</li>
<!-- Menu Item Transactions -->

<!-- Menu Item Reports -->
<li>
  <a
    href="#"
    @click.prevent="selected = (selected === 'Reports' ? '':'Reports')"
    class="menu-item group"
    :class=" (selected === 'Reports') || (page === 'formElements' || page === 'formLayout' || page === 'proFormElements' || page === 'proFormLayout') ? 'menu-item-active' : 'menu-item-inactive'"
  >
    <!-- Reports Icon (Chart/Document) -->
    <svg
      :class="(selected === 'Reports') || (page === 'formElements' || page === 'formLayout' || page === 'proFormElements' || page === 'proFormLayout') ? 'menu-item-icon-active' :'menu-item-icon-inactive'"
      width="24"
      height="24"
      viewBox="0 0 24 24"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M3.25 4C3.25 3.58579 3.58579 3.25 4 3.25H20C20.4142 3.25 20.75 3.58579 20.75 4V20C20.75 20.4142 20.4142 20.75 20 20.75H4C3.58579 20.75 3.25 20.4142 3.25 20V4ZM4.75 4.75V19.25H19.25V4.75H4.75Z"
        fill=""
      />
      <path
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M7 14.75C7.41421 14.75 7.75 15.0858 7.75 15.5V17.5C7.75 17.9142 7.41421 18.25 7 18.25C6.58579 18.25 6.25 17.9142 6.25 17.5V15.5C6.25 15.0858 6.58579 14.75 7 14.75Z"
        fill=""
      />
      <path
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M12 11.75C12.4142 11.75 12.75 12.0858 12.75 12.5V17.5C12.75 17.9142 12.4142 18.25 12 18.25C11.5858 18.25 11.25 17.9142 11.25 17.5V12.5C11.25 12.0858 11.5858 11.75 12 11.75Z"
        fill=""
      />
      <path
        fill-rule="evenodd"
        clip-rule="evenodd"
        d="M17 5.75C17.4142 5.75 17.75 6.08579 17.75 6.5V17.5C17.75 17.9142 17.4142 18.25 17 18.25C16.5858 18.25 16.25 17.9142 16.25 17.5V6.5C16.25 6.08579 16.5858 5.75 17 5.75Z"
        fill=""
      />
    </svg>

    <span
      class="menu-item-text"
      :class="sidebarToggle ? 'lg:hidden' : ''"
    >
      Report
    </span>

<!-- Menu Item Reports (continued) -->
    <svg
      class="menu-item-arrow absolute right-2.5 top-1/2 -translate-y-1/2 stroke-current"
      :class="[(selected === 'Reports') ? 'menu-item-arrow-active' : 'menu-item-arrow-inactive', sidebarToggle ? 'lg:hidden' : '' ]"
      width="20"
      height="20"
      viewBox="0 0 20 20"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M4.79175 7.39584L10.0001 12.6042L15.2084 7.39585"
        stroke=""
        stroke-width="1.5"
        stroke-linecap="round"
        stroke-linejoin="round"
      />
    </svg>
  </a>

  <!-- Dropdown Menu Start -->
  <div
    class="overflow-hidden transform translate"
    :class="(selected === 'Reports') ? 'block' :'hidden'"
  >
    <ul
      :class="sidebarToggle ? 'lg:hidden' : 'flex'"
      class="flex flex-col gap-1 mt-2 menu-dropdown pl-9"
    >
      <li>
        <a
          href="<?= $baseUrl ?>form-elements.html"
          class="menu-dropdown-item group"
          :class="page === 'formElements' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
        >
          Member
        </a>
        <a
          href="<?= $baseUrl ?>form-elements.html"
          class="menu-dropdown-item group"
          :class="page === 'formElements' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
        >
          Lesson
        </a>
        <a
          href="<?= $baseUrl ?>form-elements.html"
          class="menu-dropdown-item group"
          :class="page === 'formElements' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
        >
          Application Form
        </a>
      </li>
    </ul>
  </div>
  <!-- Dropdown Menu End -->
</li>
<!-- Menu Item Reports -->

        </ul>
      </div>

    </nav>
    <!-- Sidebar Menu -->
    
  </div>
</aside>
