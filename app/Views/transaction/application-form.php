<?php 
$baseUrl = base_url('tailadmin/build/');
?>

<?= $this->extend('components/layout') ?>

<?= $this->section('content') ?>

        <!-- ===== Main Content Start ===== -->
        <main>
          <div class="mx-auto max-w-(--breakpoint-2xl) p-4 md:p-6">
            <!-- Breadcrumb Start -->
            <div x-data="{ pageName: `Application Form`}">
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

            <div class="space-y-5 sm:space-y-6">
              <div
                class="rounded-2xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]"
              >
                <div class="px-5 py-4 sm:px-6 sm:py-5">
                  <h3
                    class="text-base font-medium text-gray-800 dark:text-white/90"
                  >
                    Application Form List
                  </h3>
                </div>
                <div
                  class="border-t border-gray-100 p-5 sm:p-6 dark:border-gray-800"
                >
                  <!-- ====== Table Six Start -->
                  <div
                    class="overflow-hidden rounded-xl border border-gray-200 bg-white dark:border-gray-800 dark:bg-white/[0.03]"
                  >
                    <div class="max-w-full overflow-x-auto">
                      <table class="min-w-full">
                        <!-- table header start -->
                        <thead>
                          <tr
                            class="border-b border-gray-100 dark:border-gray-800"
                          >
                            <th class="px-5 py-3 sm:px-6">
                              <div class="flex items-center">
                                <p
                                  class="text-theme-xs font-medium text-gray-500 dark:text-gray-400"
                                >
                                  Transaction Number
                                </p>
                              </div>
                            </th>
                             <th class="px-5 py-3 sm:px-6">
                              <div class="flex items-center">
                                <p
                                  class="text-theme-xs font-medium text-gray-500 dark:text-gray-400"
                                >
                                  Date
                                </p>
                              </div>
                            </th>
                                                        </th>
                             <th class="px-5 py-3 sm:px-6">
                              <div class="flex items-center">
                                <p
                                  class="text-theme-xs font-medium text-gray-500 dark:text-gray-400"
                                >
                                  Package Code
                                </p>
                              </div>
                            </th>
                            <th class="px-5 py-3 sm:px-6">
                              <div class="flex items-center">
                                <p
                                  class="text-theme-xs font-medium text-gray-500 dark:text-gray-400"
                                >
                                  Member ID
                                </p>
                              </div>
                            </th>
                            <th class="px-5 py-3 sm:px-6">
                              <div class="flex items-center">
                                <p
                                  class="text-theme-xs font-medium text-gray-500 dark:text-gray-400"
                                >
                                  From
                                </p>
                              </div>
                            </th>
                            <th class="px-5 py-3 sm:px-6">
                              <div class="flex items-center">
                                <p
                                  class="text-theme-xs font-medium text-gray-500 dark:text-gray-400"
                                >
                                  To
                                </p>
                              </div>
                            </th>
                            <th class="px-5 py-3 sm:px-6">
                              <div class="flex items-center">
                                <p
                                  class="text-theme-xs font-medium text-gray-500 dark:text-gray-400"
                                >
                                  Price
                                </p>
                              </div>
                            </th>
                          </tr>
                        </thead>
                        <!-- table header end -->
                        <!-- table body start -->
                        <tbody
                          class="divide-y divide-gray-100 dark:divide-gray-800"
                        >
                          <tr>
                            <td class="px-5 py-4 sm:px-6">
                              <div class="flex items-center">
                                <p
                                  class="text-theme-sm text-gray-500 dark:text-gray-400"
                                >
                                  Agency Website
                                </p>
                              </div>
                            </td>
                            <td class="px-5 py-4 sm:px-6">
                              <div class="flex items-center">
                                <p
                                  class="text-theme-sm text-gray-500 dark:text-gray-400"
                                >
                                  Agency Website
                                </p>
                              </div>
                            </td>
                            <td class="px-5 py-4 sm:px-6">
                              <div class="flex items-center">
                                <p
                                  class="text-theme-sm text-gray-500 dark:text-gray-400"
                                >
                                  Agency Website
                                </p>
                              </div>
                            </td>
                            <td class="px-5 py-4 sm:px-6">
                              <div class="flex items-center">
                                <p
                                  class="text-theme-sm text-gray-500 dark:text-gray-400"
                                >
                                  Agency Website
                                </p>
                              </div>
                            </td>
                            <td class="px-5 py-4 sm:px-6">
                              <div class="flex items-center">
                                <p
                                  class="text-theme-sm text-gray-500 dark:text-gray-400"
                                >
                                  3.9K
                                </p>
                              </div>
                            </td>
                            <td class="px-5 py-4 sm:px-6">
                              <div class="flex items-center">
                                <p
                                  class="text-theme-sm text-gray-500 dark:text-gray-400"
                                >
                                  3.9K
                                </p>
                              </div>
                            </td>
                                                        <td class="px-5 py-4 sm:px-6">
                              <div class="flex items-center">
                                <p
                                  class="text-theme-sm text-gray-500 dark:text-gray-400"
                                >
                                  3.9K
                                </p>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <!-- ====== Table Six End -->
                </div>
              </div>
            </div>
          </div>
        </main>
        <!-- ===== Main Content End ===== -->
<?= $this->endSection() ?>
