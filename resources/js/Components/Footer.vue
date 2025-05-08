<script setup>
import { computed } from 'vue';

const currentYear = computed(() => new Date().getFullYear());
</script>

<template>
  <footer class="bg-[#D4CCC8] p-6 shadow-md mt-auto">
    <div class="max-w-7xl mx-auto">
      <!-- Main Footer Content -->
      <div class="flex flex-col md:flex-row items-center md:items-start justify-between gap-8">
        <!-- Logo and School Info -->
        <div class="flex flex-col items-center md:items-start space-y-4">
          <div class="flex items-center gap-3">
            <img src="/images/logo.png" alt="Logo" class="h-20 w-20 rounded-full shadow-md transition-transform hover:scale-105" />
            <div class="text-center md:text-left">
              <h3 class="font-semibold text-xl text-[#4D4242]">INS NARCÍS MONTURIOL</h3>
              <p class="text-[#4D4242]/80 text-sm">Centre d'Excel·lència Professional</p>
            </div>
          </div>
        </div>

        <!-- Contact Information -->
        <div class="flex flex-col items-center md:items-start space-y-4">
          <h3 class="font-bold text-lg flex items-center gap-2 text-[#4D4242]">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            CONTACTE
          </h3>
          <div class="space-y-2">
            <a href="mailto:iesmonturiol@xtec.cat" class="flex items-center gap-2 text-[#4D4242]/80 hover:text-[#4D4242] transition-colors duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              iesmonturiol@xtec.cat
            </a>
            <a href="tel:972671604" class="flex items-center gap-2 text-[#4D4242]/80 hover:text-[#4D4242] transition-colors duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
              </svg>
              972 67 16 04
            </a>
            <a href="https://agora.xtec.cat/iesmonturiol/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 text-[#4D4242]/80 hover:text-[#4D4242] transition-colors duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
              </svg>
              Web oficial
            </a>
          </div>
        </div>

        <!-- Social Media -->
        <div class="flex flex-col items-center md:items-start space-y-4">
          <h3 class="font-bold text-lg flex items-center gap-2 text-[#4D4242]">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
            </svg>
            XARXES SOCIALS
          </h3>
          <div class="flex space-x-4">
            <a href="https://www.instagram.com/ipnarcismonturiol/" target="_blank" rel="noopener noreferrer" class="social-link group" aria-label="Síguenos en Instagram">
              <div class="p-2 rounded-full bg-[#4D4242]/10 hover:bg-[#4D4242]/20 transition-colors duration-300">
                <svg class="h-6 w-6 text-[#4D4242]" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
              </div>
              <span class="sr-only">Instagram</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Copyright -->
      <div class="mt-8 pt-8 border-t border-[#4D4242]/20">
        <p class="text-center text-sm text-[#4D4242]/60">
          © {{ currentYear }} INS Narcís Monturiol. Tots els drets reservats.
        </p>
      </div>
    </div>
  </footer>
</template>

<style scoped>
.social-link {
  position: relative;
  display: inline-block;
}

/* Hover effects */
a {
  transition: all 0.3s ease;
}

a:hover {
  transform: translateY(-2px);
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .social-link {
    margin: 0 0.5rem;
  }
}
</style>


