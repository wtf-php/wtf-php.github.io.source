<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 text-orange-500 hover:text-orange-700 {{ $page->isActive('/blog') ? 'active text-orange-700' : '' }}">
        Blog
    </a>

    <a title="{{ $page->siteName }} About" href="/about"
        class="ml-6 text-orange-500 hover:text-orange-700 {{ $page->isActive('/about') ? 'active text-orange-700' : '' }}">
        About
    </a>
</nav>
