<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>


<section id ="recent-events" class=" py-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
 
    {{-- Section header --}}
    <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 gap-4">
      <div>
        <p class="slabel text-xs font-bold uppercase tracking-widest text-blue-600 mb-3">Events</p>
        <h2 class="font-display text-4xl lg:text-5xl text-slate-900">Recent Events</h2>
      </div>
      <a href="#" class="text-sm font-semibold text-blue-600 hover:text-blue-700 flex items-center gap-1 transition-colors">
        View all events <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right-icon lucide-arrow-right"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
      </a>
    </div>
 
    {{-- ── Event cards ── --}}
    <div class="grid md:grid-cols-3 gap-5 mb-16">
 
        {{-- card1 --}}
      <div class="bg-white rounded-2xl p-6 card border border-slate-200 hover:-translate-y-1 hover:shadow-lg transition-all duration-300 hover:border-blue-200 hover:ring-1 hover:ring-blue-200">
        <div class="flex items-start justify-between mb-4">
          <span class="px-3 py-1 text-[10px] font-bold uppercase tracking-wider rounded-full bg-blue-100 text-blue-700">
            International
          </span>
          <span class="text-[10px] font-medium text-blue-600 bg-blue-50 px-2 py-1 rounded-full">Featured</span>
        </div>
        <h3 class="font-display text-xl text-slate-900 mb-3 leading-tight">
          ASEAN Congress of Anesthesiologists 2025
        </h3>
        <div class="space-y-2 text-xs text-slate-500 mb-4">
          <div class="flex items-center gap-2">
            <svg class="w-3.5 h-3.5 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
            </svg>
            October 23–25, 2025
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-3.5 h-3.5 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            Marriott Grand Ballroom, Pasay City
          </div>
        </div>
        <a href="#" class="text-sm font-semibold text-blue-600 hover:text-blue-700 flex items-center gap-1 transition-colors">
        Learn More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right-icon lucide-arrow-right"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
      </a>
      </div>
 
      {{-- card2 --}}
      <div class="bg-white rounded-2xl p-6 card border border-slate-200 hover:-translate-y-1 hover:shadow-lg transition-all duration-300 hover:border-blue-200 hover:ring-1 hover:ring-blue-200">
        <div class="flex items-start justify-between mb-4">
          <span class="px-3 py-1 text-[10px] font-bold uppercase tracking-wider rounded-full bg-slate-100 text-slate-600">
            National
          </span>
        </div>
        <h3 class="font-display text-xl text-slate-900 mb-3 leading-tight">
          PSARP Annual Convention
        </h3>
        <div class="space-y-2 text-xs text-slate-500 mb-4">
          <div class="flex items-center gap-2">
            <svg class="w-3.5 h-3.5 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
            </svg>
            2025
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-3.5 h-3.5 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            Philippines
          </div>
        </div>
       <a href="#" class="text-sm font-semibold text-blue-600 hover:text-blue-700 flex items-center gap-1 transition-colors">
        Learn More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right-icon lucide-arrow-right"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
      </a>
      </div>

      {{-- card3 --}}
      <div class="bg-white rounded-2xl p-6 card border border-slate-200 hover:-translate-y-1 hover:shadow-lg transition-all duration-300 hover:border-blue-200 hover:ring-1 hover:ring-blue-200">
        <div class="flex items-start justify-between mb-4">
          <span class="px-3 py-1 text-[10px] font-bold uppercase tracking-wider rounded-full bg-green-100 text-green-700">
            Upcoming
          </span>
        </div>
        <h3 class="font-display text-xl text-slate-900 mb-3 leading-tight">
          SIM Wars Trilogy
        </h3>
        <div class="space-y-2 text-xs text-slate-500 mb-4">
          <div class="flex items-center gap-2">
            <svg class="w-3.5 h-3.5 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
            </svg>
            2026
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-3.5 h-3.5 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            TBA
          </div>
        </div>
       <a href="#" class="text-sm font-semibold text-blue-600 hover:text-blue-700 flex items-center gap-1 transition-colors">
        Learn More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right-icon lucide-arrow-right"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
      </a>
      </div>
 
    </div>
 
    <div x-data="{ lightbox: false, activeSrc: '', activeAlt: '' }">
 
      <div class="flex items-center justify-between mb-6">
        <p class="slabel text-xs font-bold uppercase tracking-widest text-blue-600">ACA 2025 Gallery</p>
        <a href="#" class="text-sm font-semibold text-blue-600 hover:text-blue-700 flex items-center gap-1 transition-colors">
        View Full Gallery<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right-icon lucide-arrow-right"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
      </a>
      </div>
 
      {{-- Grid --}}
      <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
 
        {{-- Large tile --}}
        <div class="gal-item md:col-span-2 md:row-span-2 relative rounded-2xl overflow-hidden bg-slate-100 cursor-pointer transition-all duration-300 ease-out hover:-translate-y-2 hover:scale-[1.02] hover:shadow-2xl"style="aspect-ratio:16/9"
          @click="lightbox = true; activeSrc = 'https://psa-inc.org/images/gallery/aca_2025/day3/FPSA_CONFERNMENT/DMS_0080.jpg'; activeAlt = 'FPSA Conferment'">
          <img src="https://psa-inc.org/images/gallery/aca_2025/day3/FPSA_CONFERNMENT/DMS_0080.jpg"
               alt="FPSA Conferment" class="w-full h-full object-cover" loading="lazy">
          <div class="overlay absolute inset-0 bg-gradient-to-t from-slate-900/70 via-transparent flex items-end p-5">
            <p class="text-white font-semibold text-sm">FPSA Conferment</p>
          </div>
        </div>
 
        {{-- Small tile 1 --}}
        <div class="gal-item relative rounded-2xl overflow-hidden bg-slate-100 cursor-pointer transition-all duration-300 ease-out hover:-translate-y-2 hover:scale-[1.02] hover:shadow-2xl    "style="aspect-ratio:16/9"
          @click="lightbox = true; activeSrc = 'https://psa-inc.org/images/gallery/aca_2025/day3/PBLD_Session/DSC_2335.jpg'; activeAlt = 'PBLD Session'">
          <img src="https://psa-inc.org/images/gallery/aca_2025/day3/PBLD_Session/DSC_2335.jpg"
               alt="PBLD Session" class="w-full h-full object-cover" loading="lazy">
          <div class="overlay absolute inset-0 bg-gradient-to-t from-slate-900/70 via-transparent flex items-end p-4">
            <p class="text-white font-semibold text-xs">PBLD Session</p>
          </div>
        </div>
 
        {{-- Small tile 2 --}}
        <div class="gal-item relative rounded-2xl overflow-hidden bg-slate-100 cursor-pointer transition-all duration-300 ease-out hover:-translate-y-2 hover:scale-[1.02] hover:shadow-2xl"style="aspect-ratio:16/9"
          @click="lightbox = true; activeSrc = 'https://psa-inc.org/images/gallery/aca_2025/day1/asean_night/DSC_2181.jpg'; activeAlt = 'ASEAN Night'">
          <img src="https://psa-inc.org/images/gallery/aca_2025/day1/asean_night/DSC_2181.jpg"
               alt="ASEAN Night" class="w-full h-full object-cover" loading="lazy">
          <div class="overlay absolute inset-0 bg-gradient-to-t from-slate-900/70 via-transparent flex items-end p-4">
            <p class="text-white font-semibold text-xs">ASEAN Night</p>
          </div>
        </div>
 
        {{-- Small tile 3 --}}
        <div class="gal-item relative rounded-2xl overflow-hidden bg-slate-100 cursor-pointer transition-all duration-300 ease-out hover:-translate-y-2 hover:scale-[1.02] hover:shadow-2xl"style="aspect-ratio:16/9"
          @click="lightbox = true; activeSrc = 'https://psa-inc.org/images/gallery/aca_2025/day3/CLOSING_CEREMONIES_%26_RAFFLE/DSC_7342.jpg'; activeAlt = 'Closing Ceremonies'">
          <img src="https://psa-inc.org/images/gallery/aca_2025/day3/CLOSING_CEREMONIES_%26_RAFFLE/DSC_7342.jpg"
               alt="Closing Ceremonies" class="w-full h-full object-cover" loading="lazy">
          <div class="overlay absolute inset-0 bg-gradient-to-t from-slate-900/70 via-transparent flex items-end p-4">
            <p class="text-white font-semibold text-xs">Closing Ceremonies</p>
          </div>
        </div>
 
        {{-- Small tile 4 --}}
        <div class="gal-item relative rounded-2xl overflow-hidden bg-slate-100 cursor-pointer transition-all duration-300 ease-out hover:-translate-y-2 hover:scale-[1.02] hover:shadow-2xl" style="aspect-ratio:16/9"
          @click="lightbox = true; activeSrc = 'https://psa-inc.org/images/gallery/aca_2025/day3/TRADE_EXHIBITS/DSC_1984.jpg'; activeAlt = 'Trade Exhibits'">
          <img src="https://psa-inc.org/images/gallery/aca_2025/day3/TRADE_EXHIBITS/DSC_1984.jpg"
               alt="Trade Exhibits" class="w-full h-full object-cover" loading="lazy">
          <div class="overlay absolute inset-0 bg-gradient-to-t from-slate-900/70 via-transparent flex items-end p-4">
            <p class="text-white font-semibold text-xs">Trade Exhibits</p>
          </div>
        </div>
 
        {{-- Small tile 5 --}}
        <div class="gal-item relative rounded-2xl overflow-hidden bg-slate-100 cursor-pointer transition-all duration-300 ease-out hover:-translate-y-2 hover:scale-[1.02] hover:shadow-2xl" style="aspect-ratio:16/9"
          @click="lightbox = true; activeSrc = 'https://psa-inc.org/images/gallery/aca_2025/day3/PLENARY_LECTURES/_AX_1287.jpg'; activeAlt = 'Plenary Lectures'">
          <img src="https://psa-inc.org/images/gallery/aca_2025/day3/PLENARY_LECTURES/_AX_1287.jpg"
               alt="Plenary Lectures" class="w-full h-full object-cover" loading="lazy">
          <div class="overlay absolute inset-0 bg-gradient-to-t from-slate-900/70 via-transparent flex items-end p-4">
            <p class="text-white font-semibold text-xs">Plenary Lectures</p>
          </div>
        </div>
 
      </div>
 
      {{-- focus zoom  --}}
      <div
        x-show="lightbox"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 flex items-center justify-center bg-slate-900/90 backdrop-blur-sm p-4"
        @click.self="lightbox = false"
        @keydown.escape.window="lightbox = false"
        style="display: none;"
      >   
        <div class="relative max-w-5xl w-full">
          <button
            @click="lightbox = false"
            class="absolute -top-10 right-0 text-white/70 hover:text-white transition-colors flex items-center gap-1.5 text-sm font-medium"
          >
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
            Close
          </button>
          <img :src="activeSrc" :alt="activeAlt"
               class="w-full rounded-2xl shadow-2xl object-contain max-h-[80vh]">
          <p class="text-center text-white/70 text-sm mt-4" x-text="activeAlt"></p>
        </div>
      </div>
 
    </div>{{-- /end focus zoom --}}
 
  </div>
</section>