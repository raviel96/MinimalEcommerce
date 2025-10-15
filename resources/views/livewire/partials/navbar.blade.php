<div x-data class="header-container">
    <div class="logo">
        <button class="menu-button open-menu-button" @click="$store.navbar.toggle()">
            <i class="fas fa-bars"></i>
        </button>
        <a href="/"  wire:navigate>Minimal E-Commerce</a>
    </div>
    {{-- transition with normal css --}}
    <nav class="main-nav" :class="{'show': $store.navbar.open}" :inert="$store.navbar.open ? false : true">
        <ul class="main-nav-list">
            <li>
                <button class="menu-button close-menu-button" @click="$store.navbar.toggle()">
                    <i class="fas fa-times"></i>
                </button>
            </li>
            <li><a href="/" wire:navigate wire:current.exact="current-link">Home</a></li>
            <li><a href="/categories" wire:navigate wire:current.exact="current-link">Categories</a></li>
            <li><a href="/products" wire:navigate wire:current.exact="current-link">Products</a></li>
            <li><a href="/cart" wire:navigate wire:current.exact="current-link">Cart</a></li>
            <li><a href="/login" class="accent-link" wire:navigate wire:current.exact="current-link"><i class="fas fa-user"></i> Login</a></li>
        </ul>
    </nav>
</div>

