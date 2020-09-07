<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('home') }}">{{ config('app.name') }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('home') }}">{{ str_limit(config('app.name'), 2, '') }}</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="nav-item {{ Request::segment(1) === 'home' ? 'active' : '' }}">
            <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Daftar Menu</li>
        <li class="nav-item {{ Request::segment(1) === 'produk' ? 'active' : '' }}">
            <a href="{{ route('produk.index') }}" class="nav-link"><i class="fas fa-sitemap"></i> <span>Produk</span></a>
        </li>
        <li class="nav-item {{ Request::segment(1) === 'kategori' ? 'active' : '' }}">
            <a href="{{ route('kategori.index') }}" class="nav-link"><i class="fas fa-list"></i> <span>Kategori</span></a>
        </li>
</aside>