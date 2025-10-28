<div x-data class="header-container" x-resize="$width <= 768 ? $store.navbar.isMobile = true : $store.navbar.isMobile = false">
    <div class="logo">
        <button class="menu-button open-menu-button" @click="$store.navbar.toggleMenu()">
            <i class="fas fa-bars"></i>
        </button>
        <a href="/"  wire:navigate>Minimal E-Commerce</a>
    </div>
    <nav class="main-nav" :class="{'show': $store.navbar.open}" :inert="$store.navbar.changeMenuInert()">
        <ul class="main-nav-list">
            <li>
                <button class="menu-button close-menu-button" @click="$store.navbar.toggleMenu()">
                    <i class="fas fa-times"></i>
                </button>
            </li>
            <li><a href="/" wire:navigate wire:current.exact="current-link">Home</a></li>
            <li><a href="/categories" wire:navigate wire:current.exact="current-link">Categories</a></li>
            <li><a href="/products" wire:navigate wire:current.exact="current-link">Products</a></li>
            <li><a href="/cart" wire:navigate wire:current.exact="current-link"><i class="fas fa-shopping-cart"></i> Cart</a></li>
            <li><a href="/login" class="accent-link" wire:navigate wire:current.exact="current-link"><i class="fas fa-user"></i> Login</a></li>
        </ul>
    </nav>
</div>

