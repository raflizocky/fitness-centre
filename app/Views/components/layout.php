<?php 
$baseUrl = base_url('tailadmin/build/');
?>

<!doctype html>
<html lang="en">

<?= $this->include('components/header') ?>

  <body x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode')); $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{'dark bg-gray-900': darkMode === true}">

    <!-- ===== Preloader Start ===== -->
    <div x-show="loaded" x-init="window.addEventListener('DOMContentLoaded', () => {setTimeout(() => loaded = false, 500)})" class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black">
      <div class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-brand-500 border-t-transparent"></div>
    </div>

    <!-- ===== Preloader End ===== -->

    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-hidden">
      
      <!-- ===== Sidebar Start ===== -->
       <?= $this->include('components/sidebar') ?>
      <!-- ===== Sidebar End ===== -->

      <!-- ===== Content Area Start ===== -->
      <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
        <?= $this->include('components/topbar') ?>
        <?= $this->renderSection('content') ?>
      </div>
      <!-- ===== Content Area End ===== -->

    </div>
    <!-- ===== Page Wrapper End ===== -->
     
    <script defer src="<?= $baseUrl ?>bundle.js"></script>
  
  </body>

</html>
