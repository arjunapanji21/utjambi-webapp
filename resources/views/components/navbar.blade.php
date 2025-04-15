<nav id="mainNav" class="fixed w-[95%] sm:w-full top-4 left-1/2 -translate-x-1/2 z-50 max-w-screen-xl mx-auto bg-white/70 backdrop-blur-lg rounded-2xl shadow-lg border border-white/20 transition-all duration-300">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-6 py-3">
        <a href="/" class="flex items-center space-x-3">
            <img src="{{asset('images/logo_utjambi.webp')}}" class="h-10" alt="Logo UT Jambi" />
        </a>
        <button data-collapse-toggle="navbar-solid-bg" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-solid-bg" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
            <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 md:flex-row md:mt-0 md:border-0 md:bg-transparent justify-center items-center">
                <!-- Home -->
                <li>
                    <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }} block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-700">
                        Beranda
                    </a>
                </li>

                <!-- Profil Dropdown -->
                <li>
                    <button id="profilDropdown" data-dropdown-toggle="profilDropdownMenu" class="nav-link flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-700 md:p-0 md:w-auto">
                        Profil
                        <svg class="w-4 h-4 ms-1.5 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div id="profilDropdownMenu" class="mega-menu hidden font-normal divide-gray-100 rounded-xl shadow-2xl w-[600px] mt-2 transition-all duration-300">
                        <div class="relative overflow-hidden backdrop-blur-xl bg-white/95 p-6 rounded-xl border border-white/20">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-50/50 to-transparent"></div>
                            <div class="relative grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <h3 class="text-lg font-semibold text-primary-700 mb-4 flex items-center gap-2">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                        </svg>
                                        Profil Universitas
                                    </h3>
                                    <ul class="space-y-2">
                                        <li>
                                            <a href="{{route('profil.direktur')}}" class="mega-menu-link {{request()->routeIs('profil.direktur') ? 'active' : ''}} flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 448 512">
                                                    <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                                                </svg>
                                                <span>Direktur</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('profil.staf')}}" class="mega-menu-link {{request()->routeIs('profil.staf') ? 'active' : ''}} flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 640 512">
                                                    <path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352h117.4c73.6 0 133.3 59.7 133.3 133.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/>
                                                </svg>
                                                <span>Pimpinan & Staf</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('profil.visi_misi')}}" class="mega-menu-link {{request()->routeIs('profil.visi_misi') ? 'active' : ''}} flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 576 512">
                                                    <path d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 214.92v233.08l138.06-46.02c10.51-4.2 21.94 3.54 21.94 14.86V245.66c0-11.32-7.59-21.46-21.94-24.5z"/>
                                                </svg>
                                                <span>Visi & Misi</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="space-y-4">
                                    <div class="bg-gradient-to-br from-primary-50 via-primary-100/50 to-primary-50 p-5 rounded-xl border border-primary-100">
                                        <div class="flex items-start gap-3">
                                            <span class="p-2 bg-primary-100 rounded-lg text-primary-700">
                                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                </svg>
                                            </span>
                                            <div>
                                                <h4 class="font-medium text-primary-900 mb-1">Sekilas UT Jambi</h4>
                                                <p class="text-sm text-gray-600 leading-relaxed">Universitas Terbuka (UT) Jambi merupakan perguruan tinggi negeri yang menyelenggarakan pendidikan jarak jauh di Provinsi Jambi.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/profil" class="group inline-flex items-center gap-1 text-sm font-medium text-primary-700 hover:text-primary-800 transition-colors duration-200">
                                        <span>Pelajari lebih lanjut</span>
                                        <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Mahasiswa Dropdown -->
                <li>
                    <button id="mahasiswaDropdown" data-dropdown-toggle="mahasiswaDropdownMenu" class="nav-link flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-700 md:p-0 md:w-auto">
                        Mahasiswa
                        <svg class="w-4 h-4 ms-1.5 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div id="mahasiswaDropdownMenu" class="mega-menu hidden font-normal divide-gray-100 rounded-xl shadow-2xl w-[600px] mt-2">
                        <div class="relative overflow-hidden backdrop-blur-xl bg-white/95 p-6 rounded-xl border border-white/20">
                            <div class="absolute inset-0 bg-gradient-to-br from-primary-50/50 to-transparent"></div>
                            <div class="relative grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <h3 class="text-lg font-semibold text-primary-700 mb-4 flex items-center gap-2">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                        </svg>
                                        Layanan Mahasiswa
                                    </h3>
                                    <ul class="space-y-2">
                                        <li><a href="{{route('mahasiswa.pembayaran_spp')}}" class="mega-menu-link {{request()->routeIs('mahasiswa.pembayaran_spp') ? 'active' : ''}}">Pembayaran SPP</a></li>
                                        <li><a href="{{route('mahasiswa.ujian')}}" class="mega-menu-link {{request()->routeIs('mahasiswa.ujian') ? 'active' : ''}}">Ujian</a></li>
                                        <li><a href="{{route('mahasiswa.numpang_utm')}}" class="mega-menu-link {{request()->routeIs('mahasiswa.numpang_utm') ? 'active' : ''}}">Numpang UTM</a></li>
                                    </ul>
                                </div>
                                <div class="space-y-4">
                                    <div class="bg-gradient-to-br from-primary-50 via-primary-100/50 to-primary-50 p-5 rounded-xl border border-primary-100">
                                        <div class="flex items-start gap-3">
                                            <span class="p-2 bg-primary-100 rounded-lg text-primary-700">
                                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                </svg>
                                            </span>
                                            <div>
                                                <h4 class="font-medium text-primary-900 mb-1">Info Mahasiswa</h4>
                                                <p class="text-sm text-gray-600 leading-relaxed">Akses layanan dan informasi akademik untuk mahasiswa UT Jambi.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Kegiatan Dropdown -->
                <li>
                    <button id="kegiatanDropdown" data-dropdown-toggle="kegiatanDropdownMenu" class="nav-link flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-700 md:p-0 md:w-auto">
                        Kegiatan
                        <svg class="w-4 h-4 ms-1.5 transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>
                    <div id="kegiatanDropdownMenu" class="mega-menu hidden font-normal divide-gray-100 rounded-xl shadow-2xl w-[600px] mt-2">
                        <div class="relative overflow-hidden backdrop-blur-xl bg-white/95 p-6 rounded-xl border border-white/20">
                            <div class="absolute inset-0 bg-gradient-to-br from-primary-50/50 to-transparent"></div>
                            <div class="relative grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <h3 class="text-lg font-semibold text-primary-700 mb-4 flex items-center gap-2">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                        Agenda Kegiatan
                                    </h3>
                                    <ul class="space-y-2">
                                        <li><a href="{{route('kegiatan.osmb')}}" class="mega-menu-link {{request()->routeIs('kegiatan.osmb') ? 'active' : ''}}">OSMB PKBJJ</a></li>
                                        <li><a href="{{route('kegiatan.wt_ku')}}" class="mega-menu-link {{request()->routeIs('kegiatan.wt_ku') ? 'active' : ''}}">WT-KU</a></li>
                                        <li><a href="{{route('kegiatan.jadwal_perkuliahan')}}" class="mega-menu-link {{request()->routeIs('kegiatan.jadwal_perkuliahan') ? 'active' : ''}}">Jadwal Perkuliahan</a></li>
                                        <li><a href="{{route('kegiatan.wisuda')}}" class="mega-menu-link {{request()->routeIs('kegiatan.wisuda') ? 'active' : ''}}">Wisuda</a></li>
                                    </ul>
                                </div>
                                <div class="space-y-4">
                                    <div class="bg-gradient-to-br from-primary-50 via-primary-100/50 to-primary-50 p-5 rounded-xl border border-primary-100">
                                        <div class="flex items-start gap-3">
                                            <span class="p-2 bg-primary-100 rounded-lg text-primary-700">
                                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                </svg>
                                            </span>
                                            <div>
                                                <h4 class="font-medium text-primary-900 mb-1">Kalender Akademik</h4>
                                                <p class="text-sm text-gray-600 leading-relaxed">Jadwal kegiatan akademik dan non-akademik UT Jambi.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Blog -->
                <li>
                    <a href="{{route('blog')}}" class="nav-link {{request()->routeIs('blog') ? 'active' : ''}} block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-primary-700">
                        Blog
                    </a>
                </li>

                <!-- Login SIA Button -->
                <li>
                    <a href="https://sia.ut.ac.id" class="nav-cta inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-center text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 shadow-lg hover:shadow-xl transition-all duration-300 btn-hover">
                        Login SIA
                        <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
/* Navigation link hover effect */
.nav-link {
    position: relative;
    font-weight: 500;
}

.nav-link::after {
    content: '';
    position: absolute;
    width: 100%;
    transform: scaleX(0);
    height: 2px;
    bottom: -2px;
    left: 0;
    background: linear-gradient(to right, #2F77F1, #1d4ed8);
    transform-origin: bottom right;
    transition: transform 0.3s ease-out;
}

.nav-link:hover::after {
    transform: scaleX(1);
    transform-origin: bottom left;
}

.nav-link.active::after {
    transform: scaleX(1);
}

/* Dropdown link styling */
.nav-dropdown-link {
    position: relative;
    transition: all 0.2s ease;
    padding-left: 1rem;
}

.nav-dropdown-link::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 4px;
    height: 0;
    background: linear-gradient(to bottom, #2F77F1, #1d4ed8);
    transition: height 0.2s ease;
}

.nav-dropdown-link:hover::before {
    height: 60%;
}

.nav-dropdown-link.active::before {
    height: 60%;
}

/* CTA button animation */
.nav-cta {
    background-size: 200% auto;
    background-image: linear-gradient(to right, #2F77F1 0%, #1d4ed8 50%, #2F77F1 100%);
    transition: 0.5s;
}

.nav-cta:hover {
    background-position: right center;
}

/* Enhanced Mega Menu Styles */
/* Add relative positioning to parent menu items */
.nav-link[data-dropdown-toggle] {
    position: relative;
}

.mega-menu {
    position: absolute;
    top: 100%;
    left: 50%;
    width: min(600px, 95vw);
    opacity: 0;
    visibility: hidden;
    transform-origin: top center;
    transform: translateX(-50%) translateY(10px) scale(0.98);
    transition: all 0.2s cubic-bezier(0.165, 0.84, 0.44, 1);
    z-index: 50;
}

.mega-menu:not(.hidden) {
    opacity: 1;
    visibility: visible;
    transform: translateX(-50%) translateY(0) scale(1);
}

/* Remove fixed positioning for mobile */
@media (max-width: 768px) {
    .mega-menu {
        position: absolute;
        width: calc(100vw - 2rem);
        left: 50%;
        transform: translateX(-50%) translateY(10px);
    }
    
    .mega-menu:not(.hidden) {
        transform: translateX(-50%) translateY(0);
    }
}

/* Menu Item Hover Animation */
.mega-menu-link span {
    position: relative;
    z-index: 1;
}

.mega-menu-link:hover span {
    transform: translateX(2px);
    transition: transform 0.2s ease;
}

/* Update button styles for dropdowns */
[data-dropdown-toggle] svg {
    transform: rotate(0deg);
    transition: transform 0.3s ease;
}

[aria-expanded="true"] svg {
    transform: rotate(180deg);
}

/* Mobile Mega Menu Adjustments */
@media (max-width: 768px) {
    .mega-menu {
        width: calc(100vw - 2rem);
        max-width: none;
        position: fixed;
        left: 50%;
        transform: translateX(-50%) translateY(15px);
        margin: 0.5rem auto;
    }

    .mega-menu.show {
        transform: translateX(-50%) translateY(0);
    }

    .mega-menu .grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
}

/* Floating navbar styles */
#mainNav {
    transform: translate(-50%, 0);
    opacity: 1;
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

#mainNav.nav-scrolled {
    @apply bg-white/95 shadow-xl;
    top: 1rem;
}

#mainNav.nav-hidden {
    transform: translate(-50%, -100%);
    opacity: 0;
}

/* Enhanced dropdown positioning for floating nav */
.mega-menu {
    margin-top: 1rem;
    border: 1px solid rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
}

/* Add mobile nav adjustments */
@media (max-width: 768px) {
    #mainNav {
        width: 95%;
        left: 50%;
        transform: translateX(-50%);
        margin: 0 auto;
    }
    
    #navbar-solid-bg {
        margin-top: 0.5rem;
        width: 100%;
        background: white;
        border-radius: 1rem;
        padding: 1rem;
    }

    #navbar-solid-bg ul {
        background: transparent;
    }

    .mega-menu {
        width: 90vw;
        max-width: 600px;
        left: 50%;
        transform: translateX(-50%);
        margin-left: 0;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize dropdown positions
    function initializeDropdowns() {
        const dropdownToggles = document.querySelectorAll('[data-dropdown-toggle]');
        
        dropdownToggles.forEach(toggle => {
            const menuId = toggle.getAttribute('data-dropdown-toggle');
            const menu = document.getElementById(menuId);
            
            if (!menu) return;
            
            // Ensure proper initial state
            menu.style.opacity = '0';
            menu.style.visibility = 'hidden';
            menu.classList.add('hidden');
        });
    }

    // Handle mega menu visibility with improved positioning
    const dropdownToggles = document.querySelectorAll('[data-dropdown-toggle]');
    
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            e.stopPropagation();
            const menuId = toggle.getAttribute('data-dropdown-toggle');
            const menu = document.getElementById(menuId);
            
            if (!menu) return;
            
            // Close all other menus first
            dropdownToggles.forEach(otherToggle => {
                if (otherToggle !== toggle) {
                    const otherId = otherToggle.getAttribute('data-dropdown-toggle');
                    const otherMenu = document.getElementById(otherId);
                    if (otherMenu) {
                        hideMenu(otherMenu);
                        otherToggle.setAttribute('aria-expanded', 'false');
                    }
                }
            });

            // Toggle current menu
            const isHidden = menu.classList.contains('hidden');
            toggle.setAttribute('aria-expanded', isHidden);
            
            if (isHidden) {
                showMenu(menu);
            } else {
                hideMenu(menu);
            }
        });
    });

    function showMenu(menu) {
        menu.classList.remove('hidden');
        // Force a reflow to ensure transitions work
        menu.offsetHeight;
        menu.style.visibility = 'visible';
        menu.style.opacity = '1';
        menu.style.transform = 'translateX(-50%) translateY(0) scale(1)';
    }

    function hideMenu(menu) {
        menu.style.opacity = '0';
        menu.style.visibility = 'hidden';
        menu.style.transform = 'translateX(-50%) translateY(10px) scale(0.98)';
        setTimeout(() => menu.classList.add('hidden'), 200);
    }

    // Close menus when clicking outside
    document.addEventListener('click', (e) => {
        if (!e.target.closest('[data-dropdown-toggle]') && !e.target.closest('.mega-menu')) {
            dropdownToggles.forEach(toggle => {
                const menuId = toggle.getAttribute('data-dropdown-toggle');
                const menu = document.getElementById(menuId);
                if (menu) {
                    hideMenu(menu);
                    toggle.setAttribute('aria-expanded', 'false');
                }
            });
        }
    });

    // Initialize dropdowns on load
    initializeDropdowns();

    // Prevent clicks inside mega menu from closing it
    document.querySelectorAll('.mega-menu').forEach(menu => {
        menu.addEventListener('click', (e) => e.stopPropagation());
    });
});
</script>