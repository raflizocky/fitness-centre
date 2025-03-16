<?php 
$baseUrl = base_url('tailadmin/build/');
?>

<?= $this->extend('components/layout') ?>

<?= $this->section('content') ?>

        <!-- ===== Main Content Start ===== -->
        <main>
          <div class="mx-auto max-w-(--breakpoint-2xl) p-4 md:p-6">
            <!-- Breadcrumb Start -->
            <div x-data="{ pageName: `Application Form Report`}">
              <div
                class="mb-6 flex flex-wrap items-center justify-between gap-3"
              >
                <h2
                  class="text-xl font-semibold text-gray-800 dark:text-white/90"
                  x-text="pageName"
                ></h2>

                <nav>
                  <ol class="flex items-center gap-1.5">
                    <li>
                      <a
                        class="inline-flex items-center gap-1.5 text-sm text-gray-500 dark:text-gray-400"
                        href="/"
                      >
                        Home
                        <svg
                          class="stroke-current"
                          width="17"
                          height="16"
                          viewBox="0 0 17 16"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366"
                            stroke=""
                            stroke-width="1.2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                      </a>
                    </li>
                    <li
                      class="text-sm text-gray-800 dark:text-white/90"
                      x-text="pageName"
                    ></li>
                  </ol>
                </nav>
              </div>
            </div>
            <!-- Breadcrumb End -->

<div class="container mx-auto p-4">
  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 border border-gray-200 dark:border-gray-700">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
      <div>
        <label for="start-date" class="text-md font-semibold text-gray-800 dark:text-white/90 block mb-2"">Start Date</label>
        <div class="relative">
          <input 
            type="date" 
            class="w-full border border-gray-300 dark:border-gray-600 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300 bg-white dark:bg-gray-700 text-gray-800 dark:text-white"
            onclick="this.showPicker()"
          />
          <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-gray-500 dark:text-gray-400">
              <path d="M6.66669 1.66666V4.16666" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M13.3333 1.66666V4.16666" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M2.91669 7.57501H17.0834" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M17.5 7.08334V14.1667C17.5 16.6667 16.25 18.3333 13.3333 18.3333H6.66667C3.75 18.3333 2.5 16.6667 2.5 14.1667V7.08334C2.5 4.58334 3.75 2.91667 6.66667 2.91667H13.3333C16.25 2.91667 17.5 4.58334 17.5 7.08334Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M13.0789 11.4167H13.0864" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M13.0789 13.9167H13.0864" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9.9959 11.4167H10.0034" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9.9959 13.9167H10.0034" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.91209 11.4167H6.91957" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.91209 13.9167H6.91957" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
      </div>
      
      <div>
        <label for="end-date" class="text-md font-semibold text-gray-800 dark:text-white/90 block mb-2">End Date</label>
        <div class="relative">
          <input 
            type="date" 
            class="w-full border border-gray-300 dark:border-gray-600 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300 bg-white dark:bg-gray-700 text-gray-800 dark:text-white"
            onclick="this.showPicker()"

          />
          <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-gray-500 dark:text-gray-400">
              <path d="M6.66669 1.66666V4.16666" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M13.3333 1.66666V4.16666" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M2.91669 7.57501H17.0834" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M17.5 7.08334V14.1667C17.5 16.6667 16.25 18.3333 13.3333 18.3333H6.66667C3.75 18.3333 2.5 16.6667 2.5 14.1667V7.08334C2.5 4.58334 3.75 2.91667 6.66667 2.91667H13.3333C16.25 2.91667 17.5 4.58334 17.5 7.08334Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M13.0789 11.4167H13.0864" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M13.0789 13.9167H13.0864" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9.9959 11.4167H10.0034" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9.9959 13.9167H10.0034" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.91209 11.4167H6.91957" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M6.91209 13.9167H6.91957" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
      </div>
    </div>
    
<div class="h-6"></div>
<div class="flex justify-end gap-2">
  <!-- PDF Button -->
  <button class="inline-flex items-center gap-2 px-4 py-3 text-sm font-medium text-white transition rounded-lg bg-gray-600 shadow-theme-xs hover:bg-gray-700 dark:bg-gray-700 dark:hover:bg-gray-800">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
      <polyline points="14 2 14 8 20 8"></polyline>
      <path d="M9 15h6"></path>
      <path d="M9 11h6"></path>
    </svg>
    PDF
  </button>
  <!-- Excel Button -->
  <button class="inline-flex items-center gap-2 px-4 py-3 text-sm font-medium text-white transition rounded-lg bg-gray-600 shadow-theme-xs hover:bg-gray-700 dark:bg-gray-700 dark:hover:bg-gray-800">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
      <polyline points="14 2 14 8 20 8"></polyline>
      <line x1="8" y1="12" x2="16" y2="12"></line>
      <line x1="8" y1="16" x2="16" y2="16"></line>
      <line x1="8" y1="8" x2="10" y2="8"></line>
    </svg>
    Excel
  </button>
</div>

  </div>
</div>
          </div>
        </main>
        <!-- ===== Main Content End ===== -->
<?= $this->endSection() ?>