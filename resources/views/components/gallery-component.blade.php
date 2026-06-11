<?php

use Illuminate\Support\Js;
use Livewire\Component;

new class extends Component
{
    public array $allImages = [];
    public array $days = [];

    public function mount(): void
    {
        $gallery = [
            'Day 1' => ['asean_night', 'chapter_delegates', 'lectures', 'opening_ceremony', 'registration'],
            'Day 2' => ['_plenary_lectures', 'airway_workshop', 'casa_presidents_forum', 'exhibits', 'gala_night', 'pbld', 'registration', 'research_poster'],
            'Day 3' => ['CLOSING_CEREMONIES_&_RAFFLE', 'FPSA_CONFERNMENT', 'PBLD_Session', 'PLENARY_LECTURES', 'POCUS_WORKSHOP', 'POSTER_PRESENTATION', 'REGISTRATION', 'TRADE_EXHIBITS'],
        ];

        $dayFolders = ['Day 1' => 'day1', 'Day 2' => 'day2', 'Day 3' => 'day3'];
        $basePath   = 'Images/gallery/aca_2025';

        foreach ($gallery as $day => $subs) {
            foreach ($subs as $sub) {
                $folderPath = public_path("{$basePath}/{$dayFolders[$day]}/{$sub}");
                $files = glob("{$folderPath}/*.{jpg,jpeg,png,webp,JPG,JPEG,PNG}", GLOB_BRACE) ?: [];
                foreach ($files as $file) {
                    $this->allImages[] = [
                        'src' => asset("{$basePath}/{$dayFolders[$day]}/{$sub}/" . basename($file)),
                        'day' => $day,
                        'sub' => $sub,
                    ];
                }
            }
        }

        $this->days = array_keys($gallery);
    }
};
?>

    <div class="max-w-5xl mx-auto px-4 py-10 mt-15"
        x-data="{
            images: {{ Js::from($allImages) }},
            days: {{ Js::from($days) }},
            activeDay: 'All',
            activeSub: 'All',
            perPage: 15,
            currentPage: 1,
            windowStart: 1,
            windowSize: 6,

            // Lightbox state
            lightbox: false,
            lightboxIndex: 0,
            get lightboxImg() { return this.filtered[this.lightboxIndex] ?? null; },
            openLightbox(index) {
                this.lightboxIndex = index;
                this.lightbox = true;
            },
            closeLightbox() { this.lightbox = false; },
            prevImage() {
                this.lightboxIndex = (this.lightboxIndex - 1 + this.filtered.length) % this.filtered.length;
            },
            nextImage() {
                this.lightboxIndex = (this.lightboxIndex + 1) % this.filtered.length;
            },

            get filtered() {
                return this.images.filter(img => {
                    const dayMatch = this.activeDay === 'All' || img.day === this.activeDay;
                    const subMatch = this.activeSub === 'All' || img.sub === this.activeSub;
                    return dayMatch && subMatch;
                });
            },
            get paginated() {
                const start = (this.currentPage - 1) * this.perPage;
                return this.filtered.slice(start, start + this.perPage);
            },
            get paginatedStartIndex() {
                return (this.currentPage - 1) * this.perPage;
            },
            get totalPages() {
                return Math.ceil(this.filtered.length / this.perPage);
            },
            get subsForDay() {
                if (this.activeDay === 'All') return [];
                return [...new Set(this.images.filter(img => img.day === this.activeDay).map(img => img.sub))];
            },
            get pageWindow() {
                const end = Math.min(this.windowStart + this.windowSize - 1, this.totalPages);
                return Array.from({ length: end - this.windowStart + 1 }, (_, i) => this.windowStart + i);
            },
            get hasNextWindow() { return this.windowStart + this.windowSize - 1 < this.totalPages; },
            get hasPrevWindow() { return this.windowStart > 1; },
            setDay(day) {
                this.activeDay = day;
                this.activeSub = 'All';
                this.currentPage = 1;
                this.windowStart = 1;
            },
            setSub(sub) {
                this.activeSub = sub;
                this.currentPage = 1;
                this.windowStart = 1;
            },
            goToPage(page) {
                if (page < 1 || page > this.totalPages) return;
                this.currentPage = page;
                if (page < this.windowStart) {
                    this.windowStart = page;
                } else if (page > this.windowStart + this.windowSize - 1) {
                    this.windowStart = page - this.windowSize + 1;
                }
            },
            nextWindow() {
                this.windowStart = Math.min(this.windowStart + this.windowSize, this.totalPages - this.windowSize + 1);
            },
            prevWindow() {
                this.windowStart = Math.max(1, this.windowStart - this.windowSize);
            }
        }"
        
        @keydown.escape.window="closeLightbox()"
        @keydown.arrow-left.window="lightbox && prevImage()"
        @keydown.arrow-right.window="lightbox && nextImage()"
        class="space-y-6"
    >

        {{-- LIGHTBOX OVERLAY --}}
        <div
            x-show="lightbox"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @click.self="closeLightbox()"
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/85 backdrop-blur-sm"
            style="display: none;"
        >
            {{-- Close button --}}
            <button
                @click="closeLightbox()"
                class="absolute top-4 right-4 text-white/70 hover:text-white transition-colors z-10"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            {{-- Prev button --}}
            <button
                @click="prevImage()"
                class="absolute left-3 sm:left-6 text-white/70 hover:text-white transition-colors z-10 p-2"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </button>

            {{-- Image --}}
            <div class="max-w-4xl max-h-[85vh] w-full mx-16 flex flex-col items-center gap-3">
                <img
                    :src="lightboxImg?.src"
                    :alt="lightboxImg?.sub"
                    class="max-h-[78vh] max-w-full object-contain rounded-lg shadow-2xl"
                />
                <p class="text-white/60 text-xs capitalize" x-text="lightboxImg?.sub.replace(/_/g, ' ').toLowerCase()"></p>
                <p class="text-white/40 text-xs" x-text="(lightboxIndex + 1) + ' / ' + filtered.length"></p>
            </div>

            {{-- Next button --}}
            <button
                @click="nextImage()"
                class="absolute right-3 sm:right-6 text-white/70 hover:text-white transition-colors z-10 p-2"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>

        {{-- DAY FILTER --}}
        <div class="flex flex-wrap justify-center gap-2">
            <button
                x-on:click="setDay('All')"
                x-bind:class="activeDay === 'All' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-blue-50'"
                class="px-5 py-1.5 rounded-full text-sm font-medium transition-colors"
            >All Days</button>

            <template x-for="day in days" :key="day">
                <button
                    x-on:click="setDay(day)"
                    x-bind:class="activeDay === day ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-blue-50'"
                    class="px-5 py-1.5 rounded-full text-sm font-medium transition-colors"
                    x-text="day"
                ></button>
            </template>
        </div>

        {{-- SUB FILTER --}}
        <div x-show="activeDay !== 'All'" x-transition class="flex flex-wrap justify-center gap-2">
            <button
                x-on:click="setSub('All')"
                x-bind:class="activeSub === 'All' ? 'bg-gray-700 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                class="px-4 py-1 rounded-full text-xs font-medium transition-colors"
            >All</button>

            <template x-for="sub in subsForDay" :key="sub">
                <button
                    x-on:click="setSub(sub)"
                    x-bind:class="activeSub === sub ? 'bg-gray-700 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                    class="px-4 py-1 rounded-full text-xs font-medium transition-colors capitalize"
                    x-text="sub.replace(/_/g, ' ').toLowerCase()"
                ></button>
            </template>
        </div>

    

        {{-- GRID --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-3">
            <template x-for="(img, i) in paginated" :key="img.src">
                <div
                    @click="openLightbox(paginatedStartIndex + i)"
                    class="overflow-hidden rounded-xl bg-gray-100 aspect-square shadow-sm cursor-pointer group relative"
                >
                    <img
                        :src="img.src"
                        loading="lazy"
                        decoding="async"
                        class="w-full h-full object-cover opacity-0 transition-all duration-500 group-hover:scale-105"
                        onload="this.classList.remove('opacity-0')"
                        :alt="img.sub"
                    />
                    {{-- Hover overlay --}}
                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 drop-shadow-lg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607zM10.5 7.5v6m3-3h-6" />
                        </svg>
                    </div>
                </div>
            </template>
        </div>

        {{-- EMPTY STATE --}}
        <div x-show="filtered.length === 0" class="text-center py-20 text-gray-400 text-sm">
            No photos found.
        </div>


            {{-- COUNT --}}
        <p class="text-center text-xs text-gray-400">
            Showing <span x-text="Math.min(currentPage * perPage, filtered.length)"></span>
            of <span x-text="filtered.length"></span> photos
        </p>

        {{-- PAGINATION --}}
        <div x-show="totalPages > 1" class="flex items-center justify-center gap-1 pt-6">
            <button
                x-on:click="goToPage(currentPage - 1)"
                x-bind:disabled="currentPage === 1"
                x-bind:class="currentPage === 1 ? 'opacity-30 cursor-not-allowed' : 'hover:bg-blue-50 hover:border-blue-300'"
                class="px-3 py-1.5 rounded-lg border border-gray-200 text-sm text-gray-500 transition-colors"
            >←</button>

            <button
                x-show="hasPrevWindow"
                x-on:click="prevWindow()"
                class="px-2 py-1.5 rounded-lg border border-gray-200 text-sm text-gray-400 hover:bg-blue-50 transition-colors tracking-widest"
            >...</button>

            <template x-for="page in pageWindow" :key="page">
                <button
                    x-on:click="goToPage(page)"
                    x-bind:class="currentPage === page ? 'bg-blue-600 text-white border-blue-600' : 'text-gray-500 border-gray-200 hover:bg-blue-50'"
                    class="w-8 h-8 rounded-lg border text-sm font-medium transition-colors"
                    x-text="page"
                ></button>
            </template>

            <button
                x-show="hasNextWindow"
                x-on:click="nextWindow()"
                class="px-2 py-1.5 rounded-lg border border-gray-200 text-sm text-gray-400 hover:bg-blue-50 transition-colors tracking-widest"
            >...</button>

            <button
                x-on:click="goToPage(currentPage + 1)"
                x-bind:disabled="currentPage === totalPages"
                x-bind:class="currentPage === totalPages ? 'opacity-30 cursor-not-allowed' : 'hover:bg-blue-50 hover:border-blue-300'"
                class="px-3 py-1.5 rounded-lg border border-gray-200 text-sm text-gray-500 transition-colors"
            >→</button>
        </div>

    </div>
