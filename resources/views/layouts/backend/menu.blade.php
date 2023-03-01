<style>
    .page-sidebar{
        background-color: #404B69!important;
    }
</style>
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="{{ asset('Assets/Backend/img/admin-avatar.png') }}" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">{{ Auth()->user()->name }}</div><small>{{ Auth()->user()->role }}</small></div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="{{ (request()->is('home')) ? 'active' : '' }}" href="/home"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            {{-- Menu for admin --}}
            @if (Auth::user()->role == 'Admin')
                
            <li class="heading">USERS</li>
            <li>
                <a class="{{ (request()->is('backend-pengguna-pengajar')) ? 'active' : '' }}" href="{{ url('backend-pengguna-pengajar') }}"><i class="sidebar-item-icon bi bi-people"></i>
                    <span class="nav-label">Pengajar</span>
                </a>
            </li>
            <li>
                <a class="{{ (request()->is('backend-pengguna-staf')) ? 'active' : '' }}" href="{{ url('backend-pengguna-staf') }}"><i class="sidebar-item-icon bi bi-person-badge-fill"></i>
                    <span class="nav-label">Staff</span>
                </a>
            </li>
            <li>
                <a class="{{ (request()->is('backend-pengguna-murid')) ? 'active' : '' }}" href="{{ url('backend-pengguna-murid') }}"><i class="sidebar-item-icon bi bi-mortarboard-fill"></i>
                    <span class="nav-label">Siswa</span>
                </a>
            </li>
            <li>
                <a class="{{ (request()->is('backend-pengguna-perpus')) ? 'active' : '' }}" href="{{route('backend-pengguna-perpus.index')}}"><i class="sidebar-item-icon bi bi-bank"></i>
                    <span class="nav-label">Perpustakaan</span>
                </a>
            </li>
            <li>
                <a class="{{ (request()->is('backend-pengguna-bendahara')) ? 'active' : '' }}" href="{{route('backend-pengguna-bendahara.index')}}"><i class="sidebar-item-icon bi bi-cash"></i>
                    <span class="nav-label">Bendahara</span>
                </a>
            </li>
            <li class="heading">PREFERENSI</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon bi bi-sliders"></i>
                    <span class="nav-label">Web Settings</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{ route('program-studi.index') }}">Program Studi</a>
                    </li>
                    <li>
                        <a href="{{route('backend-kegiatan.index')}}">Kegiatan</a>
                    </li>
                    <li>
                        <a href="{{route('backend-imageslider.index')}}">Gambar Slider</a>
                    </li>
                    <li>
                        <a href="{{route('backend-about.index')}}">About</a>
                    </li>
                    <li>
                        <a href="{{route('backend-video.index')}}">Video</a>
                    </li>
                    <li>
                        <a href="{{route('backend-kategori-berita.index')}}">Kategori Berita</a>
                    </li>
                    <li>
                        <a href="{{route('backend-berita.index')}}">Berita</a>
                    </li>
                    <li>
                        <a href="{{route('backend-event.index')}}">Event</a>
                    </li>
                    <li>
                        <a href="{{route('backend-footer.index')}}">Footer</a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="nav-label">Tentang</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('backend-profile-sekolah.index')}}">Profile Sekolah</a>
                            </li>
                            <li>
                                <a href="{{route('backend-visimisi.index')}}">Visi Misi</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            {{-- Menu for Teacher --}}
            @elseif (Auth::user()->role == 'Guru')
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon bi bi-mortarboard-fill"></i>
                    <span class="nav-label">Data Siswa</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="invoice.html">Kelas X</a>
                    </li>
                    <li>
                        <a href="profile.html">Kelas XI</a>
                    </li>
                    <li>
                        <a href="login.html">Kelas XII</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon bi bi-pencil-square"></i>
                    <span class="nav-label">Penilaian</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="invoice.html">e-Raport</a>
                    </li>
                </ul>
            </li>
            {{-- Menu for student or Guest --}}
            @elseif (Auth::user()->role == 'Guest' || Auth::user()->role == 'Siswa')
            <li>
                <a class="{{ (request()->is('ppdb/form-pendaftaran')) ? 'active' : '' }}" href="{{route('ppdb.form-pendaftaran')}}"><i class="sidebar-item-icon bi bi-person-plus-fill"></i>
                    <span class="nav-label">Pendaftaran</span>
                </a>
            </li>
            <li>
                <a class="" href="/home"><i class="sidebar-item-icon bi bi-info-circle-fill"></i>
                    <span class="nav-label">Informasi</span>
                </a>
            </li>

            {{-- Menu for PPDB --}}
            @elseif (Auth::user()->role == 'PPDB')
            <li>
                <a class="{{ (request()->is('ppdb/data-murid')) ? 'active' : '' }}" href="{{route('data-murid.index')}}"><i class="sidebar-item-icon bi bi-mortarboard-fill"></i>
                    <span class="nav-label">Data Calon Siswa</span>
                </a>
            </li>

            {{-- Menu for Perpustakaan --}}
            @elseif (Auth::user()->role == 'Perpustakaan')
            <li>
                <a class="{{ (request()->is('perpus/books')) ? 'active' : '' }}" href="{{route('books.index')}}"><i class="sidebar-item-icon bi bi-book"></i>
                    <span class="nav-label">Books</span>
                </a>
            </li>
            <li>
                <a class="{{ (request()->is('perpus/kategori')) ? 'active' : '' }}" href="{{ route('kategori.index') }}"><i class="sidebar-item-icon bi bi-bookmark-fill"></i>
                    <span class="nav-label">Category</span>
                </a>
            </li>
            <li>
                <a class="{{ (request()->is('perpus/member')) ? 'active' : '' }}" href="{{ route('member.index') }}"><i class="sidebar-item-icon bi bi-people-fill"></i>
                    <span class="nav-label">Members</span>
                </a>
            </li> 
            <li>
                <a class="{{ (request()->is('perpus/publisher')) ? 'active' : '' }}" href="{{ route('publisher.index') }}"><i class="sidebar-item-icon bi bi-journal-bookmark"></i>
                    <span class="nav-label">Publisher</span>
                </a>
            </li>
            <li>
                <a class="{{ (request()->is('books/author')) ? 'active' : '' }}" href="{{route('author.index')}}"><i class="sidebar-item-icon bi bi-person-heart"></i>
                    <span class="nav-label">Authors</span>
                </a>
            </li>
            <li>
                <a class="{{ (request()->is('perpus/peminjam')) ? 'active' : '' }}" href="{{ route('peminjam.index') }}"><i class="sidebar-item-icon bi bi-person-fill"></i>
                    <span class="nav-label">Peminjam</span>
                </a>
            </li>

            {{-- Menu for Murid --}}
            @elseif (Auth::user()->role == 'Murid')
            <li>
                <a class="{{ (request()->is('murid/perpustakaan')) ? 'active' : '' }}" href="{{ route('perpustakaan.index') }}"><i class="sidebar-item-icon bi bi-bank"></i>
                    <span class="nav-label">Perpustakaan</span>
                </a>
            </li>
            <li>
                <a class="{{ (request()->is('murid/pembayaran')) ? 'active' : '' }}" href="{{ route('pembayaran.index') }}"><i class="sidebar-item-icon bi bi-cash"></i>
                    <span class="nav-label">Pembayaran</span>
                </a>
            </li>

            {{-- Menu for Bendahara --}}
            @elseif (Auth::user()->role == 'Bendahara')
            <li>
                <a class="{{ (request()->is('spp/murid')) ? 'active' : '' }}" href="{{ route('spp.murid.index') }}"><i class="sidebar-item-icon bi bi-cash"></i>
                    <span class="nav-label">Pembayaran</span>
                </a>
            </li>
            @endif
        </ul>
    </div>
</nav>