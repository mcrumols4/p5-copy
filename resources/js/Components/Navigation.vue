<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';
import { Link } from '@inertiajs/vue3';

const isOpen = ref(false);
const activeDropdown = ref(null);
const lastScrollPosition = ref(0);
const isNavbarVisible = ref(true);
const isScrolled = ref(false);

const menuItems = ref([
  {
    text: 'INICI',
    href: '/',
    active: false
  },
  {
    text: 'QÜESTIONARIS',
    active: false,
    submenu: [

      { text: 'Qüestionari Capil·lar', href: '/Questionari/hairQuestionnaire' },
      { text: 'Qüestionari de la Pell', href: '/Questionari/skinQuestionnaire' },
    ]
  },
  {
    text: 'RECOMANACIONS',
    active: false,
    submenu: [
      { text: 'Recomanacions Capil·lars', href: '/Advice/Capillary' },
      { text: 'Recomanacions de la Pell', href: '/Advice/Skin' },
      { text: 'Parasits', href: '/Page/Parasits' },
    ]
  },
  {
    text: 'VISITA UN ESPECIALISTA',
    href: '/Page/Visitspecialist',
    active: false
  }

]);

const menuAdmin = ref([
  {
    text: 'PERFIL',
    active: false,
    submenu: [
      { text: 'Dashboard', href: '/dashboard' },
      { text: 'Perfil', href: '/perfil' },
      { text: 'Tancar Sessió', href: '/logout' }
    ]
  }
])

const toggleDropdown = (index) => {
  activeDropdown.value = activeDropdown.value === index ? null : index;
};

const closeDropdowns = () => {
  activeDropdown.value = null;
};

const onScroll = () => {
  const currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;
  
  // Detect if you have scrolled for transparency
  isScrolled.value = currentScrollPosition > 20;

  // Auto-hide based on scroll direction
  if (currentScrollPosition < 0) {
    return;
  }

  // Show navbar when scrolling up
  if (currentScrollPosition < lastScrollPosition.value) {
    isNavbarVisible.value = true;
  } 
  // Hide navbar when scrolling down
  else if (currentScrollPosition > 100 && currentScrollPosition < lastScrollPosition.value) {
    isNavbarVisible.value = true;
  }
  else if (currentScrollPosition > 100 && currentScrollPosition > lastScrollPosition.value) {
    isNavbarVisible.value = false;
    closeDropdowns(); // Close dropdowns when scrolling down
  }

  lastScrollPosition.value = currentScrollPosition;
};

onMounted(() => {
  window.addEventListener('scroll', onScroll);
});

onBeforeUnmount(() => {
  window.removeEventListener('scroll', onScroll);
});
</script>

<template>
  <nav :class="[
    'fixed top-0 left-0 right-0 z-50 transition-all duration-300',
    {
      'bg-[#D4CCC8]/95 backdrop-blur-sm shadow-md': isScrolled,
      'bg-[#D4CCC8]': !isScrolled,
      '-translate-y-full': !isNavbarVisible
    }
  ]" class="p-4">
    <div class="max-w-7xl mx-auto">
      <div class="flex justify-between items-center">
            <!-- Logo and Title -->
            <div class="flex items-center gap-3">
          <img src="/images/logo.png" alt="Logo" class="h-16 w-16 md:h-20 md:w-20 rounded-full object-cover shadow-sm transition-transform hover:scale-105" />
                <div>
            <h1 class="text-lg font-bold text-[#4D4242]">Imatge Personal</h1>
            <p class="text-sm italic text-[#4D4242]/80">Estètica i Perruqueria</p>
                </div>
            </div>

        <!-- Mobile menu button -->
        <div aria-label="Open Modal" class="md:hidden flex items-center">
          <button aria-label="Modal" @click="isOpen = !isOpen"
            class="text-[#4D4242] hover:text-[#4D4242]/80 focus:outline-none">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path v-if="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16" />
              <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
          </button>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex m-3 items-center space-x-8 text-[#4D4242] font-medium">
          <ul class="flex space-x-8">
            <li v-for="(item, index) in menuItems" :key="index" class="relative">
              <template v-if="item.submenu">
                <button @click="toggleDropdown(index)"
                  class="flex items-center group transition-all duration-300 hover:border-b-2 hover:border-[#4D4242] pb-1"
                  :class="{ 'border-b-2 border-[#4D4242]': item.active }">
                  <span class="group-hover:text-[#4D4242]/80 transition-colors duration-300">{{ item.text }}</span>
                  <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                </button>
                <!-- Dropdown menu -->
                <div v-show="activeDropdown === index"
                  class="absolute left-0 mt-2 w-64 bg-white rounded-lg shadow-lg py-2 z-50">
                  <a v-for="(subitem, subIndex) in item.submenu" :key="subIndex" :href="subitem.href"
                    class="block px-4 py-2 text-[#4D4242] hover:bg-[#D4CCC8] transition-colors duration-300">
                    {{ subitem.text }}
                  </a>
                </div>
              </template>
              <a v-else :href="item.href"
                class="flex items-center group transition-all duration-300 hover:border-b-2 hover:border-[#4D4242] pb-1"
                :class="{ 'border-b-2 border-[#4D4242]': item.active }">
                <span class="group-hover:text-[#4D4242]/80 transition-colors duration-300">{{ item.text }}</span>
              </a>
            </li>
            <li>
              <template v-if="$page.props.auth.user && $page.props.auth.user.role <= 2" class="">
                <button @click="toggleDropdown(index)"
                  class="inline-flex items-center rounded-md border border-transparent bg-gray-800 mx-1 px-2 py-1 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900">Administrar
                  <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                  </svg></button>
                <div v-show="activeDropdown === index" class="absolute mt-2 w-64 bg-gray-800 rounded-lg shadow-lg py-2 z-50">
                  <div v-if="$page.props.auth.user && $page.props.auth.user.role == 0" class="">
                    <a href="/dashboard"
                      class="block bg-gray-800 hover:bg-gray-700 px-2 py-1 text-xs font-semibold uppercase tracking-widest text-white">
                      Panell de Control
                    </a>
                  </div>
                  <div v-if="$page.props.auth.user && $page.props.auth.user.role == 1" class="">
                    <a href="/dashboard/pages"
                      class="block bg-gray-800 hover:bg-gray-700 px-2 py-1 text-xs font-semibold uppercase tracking-widest text-white">
                      Panell de Control
                    </a>
                  </div>
                  <a href="/logout"
                    class="block bg-gray-800 hover:bg-gray-700 px-2 py-1 text-xs font-semibold uppercase tracking-widest text-white">
                    Tancar Sessió
                  </a>
                </div>
              </template>
            </li>
          </ul>
        </div>
      </div>

      <!-- Mobile Navigation -->
      <div :class="isOpen ? 'block' : 'hidden'" class="md:hidden mt-4">
        <ul class="flex flex-col space-y-4">
          <li v-for="(item, index) in menuItems" :key="index">
            <template v-if="item.submenu">
              <button @click="toggleDropdown(index)"
                class="flex items-center justify-between w-full py-2 px-4 rounded-lg text-[#4D4242] hover:bg-[#4D4242]/10"
                :class="{ 'bg-[#4D4242]/5': activeDropdown === index }">
                <span>{{ item.text }}</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
              </button>
              <!-- Mobile dropdown -->
              <div v-show="activeDropdown === index" class="pl-4 mt-2 space-y-2">
                <a v-for="(subitem, subIndex) in item.submenu" :key="subIndex" :href="subitem.href"
                  class="block py-2 px-4 rounded-lg text-[#4D4242] hover:bg-[#4D4242]/10">
                  {{ subitem.text }}
                </a>
              </div>
            </template>
            <a v-else :href="item.href"
              class="flex items-center group transition-all duration-300 py-2 px-4 rounded-lg text-[#4D4242] hover:bg-[#4D4242]/10"
              :class="{ 'bg-[#4D4242]/5': item.active }">
              <span class="group-hover:text-[#4D4242]/80">{{ item.text }}</span>
            </a>
          </li>
        </ul>
        <template v-if="$page.props.auth.user && $page.props.auth.user.role <= 1" class="flex-col mt-2">
          <div v-if="$page.props.auth.user && $page.props.auth.user.role <= 0">
            <a href="/dashboard"
              class="inline-flex items-center rounded-md border border-transparent bg-gray-800 mx-1 px-2 py-1 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900">
              Panell de Control
            </a>
          </div>
          <div>
            <a href="/logout"
              class="inline-flex items-center rounded-md border border-transparent bg-gray-800 px-2 py-1 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900">
              Tancar Sessió
            </a>
          </div>
        </template>
      </div>
        </div>
    </nav>
</template>

<style scoped>
/* Smooth transitions for the navbar */
nav {
  transition: all 0.3s ease-in-out;
}

.router-link-active {
  border-bottom: 2px solid #4D4242;
}

@media (max-width: 768px) {
  .router-link-active {
    background-color: rgba(77, 66, 66, 0.1);
  }
}

/* Smooth transitions */
.nav-enter-active,
.nav-leave-active {
  transition: all 0.3s ease-out;
}

.nav-enter-from,
.nav-leave-to {
  transform: translateY(-20px);
  opacity: 0;
}

/* Logo hover effect */
img:hover {
  filter: brightness(1.1);
}
</style>