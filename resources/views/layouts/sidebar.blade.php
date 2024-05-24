<aside id="sidebar" class="transition-all duration-500 sm:flex bg-primary w-56 h-screen sticky left-0 top-0 justify-center text-white font-open">
    <img src="" alt="">
    <ul class="">
        <li class="relative mb-14">
            <img src="{{ asset('assets/img/logo.png') }}" alt="" class="w-16 absolute pt-6 scale-0 transition duration-300 ease-in-out" id="logo-side">
            <a id="head" href="#home" class="transition-all duration-500 text-2xl font-semibold text-center pt-4 flex">Staff <br> Administrasi</a>
        </li>
        <ul class="" id="list">
            <li class="mb-4 flex menu">
                <div class="hover:text-black hover:cursor-pointer rounded-md hover:bg-secondary relative transition duration-200 ease-in-out">
                    <a href="{{ route('admin.home') }}" class="font-semibold p-1">
                        <i class="fa-solid fa-house w-5"></i> 
                        <span class="menu-text">Dashboard</span>
                    </a>
                </div>
            </li>
            <li class="mb-1 flex menu">
                <div class="hover:text-black hover:cursor-pointer rounded-md hover:bg-secondary relative transition duration-200 ease-in-out">
                    <a href="{{ route('user.kelola') }}" class="font-semibold p-1">
                        <i class="fa-solid fa-user w-5"></i>
                        <span class="menu-text">User</span>
                    </a>
                </div>
            </li>
            <li class="mb-1 flex menu">
                <div class="hover:text-black hover:cursor-pointer rounded-md hover:bg-secondary relative transition duration-200 ease-in-out">
                    <a href="{{ route('petugas.kelola') }}" class="font-semibold p-1">
                        <i class="fa-solid fa-user-pen w-5"></i>
                        <span class="menu-text">Petugas</span>
                    </a>
                </div>
            </li>
            <li class="mb-1 flex menu">
                <div class="hover:text-black hover:cursor-pointer rounded-md hover:bg-secondary relative transition duration-200 ease-in-out">
                    <a href="{{ route('guru.kelola') }}" class="font-semibold p-1">
                        <i class="fa-solid fa-chalkboard-user w-5"></i>
                        <span class="menu-text">Guru</span>
                    </a>
                </div>
            </li>
            <li class="mb-1 flex menu">
                <div class="hover:text-black hover:cursor-pointer rounded-md hover:bg-secondary relative transition duration-200 ease-in-out">
                    <a href="{{ route('siswa.kelola') }}" class="font-semibold p-1">
                        <i class="fa-solid fa-user-graduate w-5"></i>
                        <span class="menu-text">Siswa</span>
                    </a>
                </div>
            </li>
            <li>
                <button id="tombol-sidebar" >
                    <i class="fa-solid fa-grip-lines"></i>
                </button>
            </li>
            <li class="mt-4 hover:text-black flex">
                <a href="" class="font-semibold">
                    Akun
                </a>
            </li> 
            {{--
            <li class="mb-1 hover:text-black flex">
                <a href="" class="font-semibold">
                    <span class="menu-text">Log Ebook</span>
                </a>
            </li>
            <li class="mb-1 hover:text-black flex">
                <a href="" class="font-semibold">
                    <span class="menu-text">Log Buku</span>
                </a>
            </li>
            <li class="mb-1 hover:text-black flex">
                <a href="" class="font-semibold">
                    <span class="menu-text">Log Peminjaman</span>
                </a>
            </li> --}}
        </ul>
    </ul>
</aside>