<nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
    <ul class="my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="/blog"
                class="nav-menu__item hover:text-orange-700 {{ $page->isActive('/blog') ? 'active text-orange-700' : '' }}"
            >Blog</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} About"
                href="/about"
                class="nav-menu__item hover:text-orange-700 {{ $page->isActive('/about') ? 'active text-orange-700' : '' }}"
            >About</a>
        </li>
    </ul>
</nav>
