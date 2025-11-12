<!doctype html>
<html>
    <head>
        <title>PHP is Awesome 🔥</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="./style.css" rel="stylesheet" />
        <script>
            const savedTheme = localStorage.theme || 'system';
            const prefersDark = matchMedia('(prefers-color-scheme: dark)').matches;
            const isDark = savedTheme === 'dark' || (savedTheme === 'system' && prefersDark);
            if (isDark) document.documentElement.classList.add('dark');
        </script>
    </head>
    <body>
        <!-- header -->
        <header>
            <nav>
                <a href="/" class="header-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -1 100 50" fill="currentColor">
                        <path d="m7.579 10.123 14.204 0c4.169 0.035 7.19 1.237 9.063 3.604 1.873 2.367 2.491 5.6 1.855 9.699-0.247 1.873-0.795 3.71-1.643 5.512-0.813 1.802-1.943 3.427-3.392 4.876-1.767 1.837-3.657 3.003-5.671 3.498-2.014 0.495-4.099 0.742-6.254 0.742l-6.36 0-2.014 10.07-7.367 0 7.579-38.001 0 0m6.201 6.042-3.18 15.9c0.212 0.035 0.424 0.053 0.636 0.053 0.247 0 0.495 0 0.742 0 3.392 0.035 6.219-0.3 8.48-1.007 2.261-0.742 3.781-3.321 4.558-7.738 0.636-3.71 0-5.848-1.908-6.413-1.873-0.565-4.222-0.83-7.049-0.795-0.424 0.035-0.83 0.053-1.219 0.053-0.353 0-0.724 0-1.113 0l0.053-0.053" />
                        <path d="m41.093 0 7.314 0-2.067 10.123 6.572 0c3.604 0.071 6.289 0.813 8.056 2.226 1.802 1.413 2.332 4.099 1.59 8.056l-3.551 17.649-7.42 0 3.392-16.854c0.353-1.767 0.247-3.021-0.318-3.763-0.565-0.742-1.784-1.113-3.657-1.113l-5.883-0.053-4.346 21.783-7.314 0 7.632-38.054 0 0" />
                        <path d="m70.412 10.123 14.204 0c4.169 0.035 7.19 1.237 9.063 3.604 1.873 2.367 2.491 5.6 1.855 9.699-0.247 1.873-0.795 3.71-1.643 5.512-0.813 1.802-1.943 3.427-3.392 4.876-1.767 1.837-3.657 3.003-5.671 3.498-2.014 0.495-4.099 0.742-6.254 0.742l-6.36 0-2.014 10.07-7.367 0 7.579-38.001 0 0m6.201 6.042-3.18 15.9c0.212 0.035 0.424 0.053 0.636 0.053 0.247 0 0.495 0 0.742 0 3.392 0.035 6.219-0.3 8.48-1.007 2.261-0.742 3.781-3.321 4.558-7.738 0.636-3.71 0-5.848-1.908-6.413-1.873-0.565-4.222-0.83-7.049-0.795-0.424 0.035-0.83 0.053-1.219 0.053-0.353 0-0.724 0-1.113 0l0.053-0.053" />
                    </svg>
                </a>

                <div id="js-nav-menu" class="header-menu-container">
                    <div class="header-menu">
                        <a href="#">Downloads</a>
                        <a href="documentation.php">Documentation</a>
                        <a href="#">Get Involved</a>
                        <a href="#">Help</a>

                        <div class="select">
                            <select>
                                <option>8.5</option>
                                <option>8.4</option>
                            </select>
                            <svg viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                                <path d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                        </div>
                    </div>

                    <div class="header-actions">
                        <button type="button" class="header-button-search">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                            Search documentation...
                            <kbd><kbd>⌘</kbd><kbd>K</kbd></kbd>
                        </button>

                        <div class="select header-languages">
                            <!-- language select for desktop -->
                            <select>
                                <option>EN</option>
                                <option>PT</option>
                            </select>

                            <!-- language select for mobile -->
                            <select>
                                <option>English</option>
                                <option>Português</option>
                            </select>
                            <svg viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                                <path d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                        </div>

                        <button type="button" aria-label="Switch to light theme" class="header-light-dark-mode-button">
                            <!-- Sun icon - hidden by default -->
                            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" class="hidden">
                                <path fill="currentColor" d="M9.52734 16.7852h1.24996v2.5195H9.52734v-2.5195Zm-3.62304-1.501-1.78125 1.7812-.88477-.8838.44238-.4414.89746-.8984.44239-.4414.88379.8838Zm9.8223-.4424 1.3388 1.3398-.8838.8838-1.7812-1.7812.8838-.8838.4424.4414ZM6.61621 6.61621c1.95259-1.95249 5.11869-1.9524 7.07129 0 1.9526 1.95264 1.9526 5.11869 0 7.07129-1.9526 1.9527-5.11863 1.9527-7.07129 0-1.95241-1.9526-1.95253-5.11871 0-7.07129ZM12.8037 7.5C11.3393 6.03577 8.96445 6.03565 7.5 7.5c-1.46441 1.46444-1.46424 3.8393 0 5.3037 1.46451 1.4645 3.8393 1.4645 5.3037 0 1.4645-1.4644 1.4645-3.8392 0-5.3037ZM3.51953 9.52734v1.24996H1V9.52734h2.51953Zm15.78517 0v1.24996h-2.5195V9.52734h2.5195ZM5.9043 5.02051l-.88379.88379-1.78223-1.78223.88379-.88379L5.9043 5.02051Zm11.1611-.89746L15.2842 5.9043l-.8838-.88379.4414-.44239.8984-.89746.4414-.44238.8838.88477ZM9.52734 1h1.24996v2.51953H9.52734V1Z" />
                            </svg>
                            <!-- System icon - visible by default -->
                            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path fill="currentColor" fill-rule="evenodd" d="M16.541 9.86c0 3.6898-2.9912 6.681-6.681 6.681V3.179c3.6898 0 6.681 2.99119 6.681 6.681ZM9.86 17.72c4.3409 0 7.86-3.5191 7.86-7.86C17.72 5.51904 14.2009 2 9.86 2 5.51904 2 2 5.51904 2 9.86c0 4.3409 3.51904 7.86 7.86 7.86Z" clip-rule="evenodd" />
                            </svg>
                            <!-- Moon icon - hidden by default -->
                            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" class="hidden">
                                <path fill="currentColor" fill-rule="evenodd" d="M16.3206 11.5837c-.5616.1539-1.1526.2361-1.7622.2361-3.6772 0-6.65822-2.98106-6.65822-6.6583 0-.60954.08215-1.20052.23597-1.76214-2.85657.76023-4.96116 3.36465-4.96116 6.4606 0 3.69204 2.99298 6.68504 6.68499 6.68504 3.09602 0 5.70042-2.1046 6.46062-4.9613Zm.2115-1.3049c-.6124.2364-1.2779.366-1.9737.366-3.0283 0-5.48323-2.45498-5.48323-5.4833 0-.69574.12956-1.36121.36589-1.9736.11523-.29842.25567-.58423.41892-.8548.06807-.11277.14002-.22291.21582-.33019C10.004 2.00097 9.93212 2 9.85998 2c-.41211 0-.81677.03172-1.21172.09283C4.88261 2.67555 2 5.93113 2 9.85996 2 14.2009 5.51904 17.72 9.85998 17.72c3.92892 0 7.18452-2.8826 7.76722-6.6483.0611-.395.0928-.7996.0928-1.21174 0-.07214-.001-.14413-.003-.2158-.1073.07575-.2174.14773-.3302.2158-.2706.16324-.5563.30374-.8547.41884Z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="header-mobile-menu-button-container">
                    <!-- Mobile menu button -->
                    <button id="mobile-menu-button" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Hamburger Icon -->
                        <svg id="menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <!-- Close Icon - hidden by default -->
                        <svg id="close-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" class="hidden">
                            <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
            </nav>
        </header>

        <!-- hero -->
        <section class="js-hero hero">
            <!-- hero background pattern -->
            <svg aria-hidden="true" class="hero-pattern">
                <defs>
                    <pattern id="hero-pattern" width="32" height="64" patternUnits="userSpaceOnUse" x="-1" y="-1">
                        <path d="M0,28 L20,28 L20,16 L16,16 L16,24 L4,24 L4,4 L32,4 L32,32 L28,32 L28,8 L8,8 L8,20 L12,20 L12,12 L24,12 L24,32 L0,32 L0,28 Z M12,36 L32,36 L32,40 L16,40 L16,64 L0,64 L0,60 L12,60 L12,36 Z M28,48 L24,48 L24,60 L32,60 L32,64 L20,64 L20,44 L32,44 L32,56 L28,56 L28,48 Z M0,36 L8,36 L8,56 L0,56 L0,52 L4,52 L4,40 L0,40 L0,36 Z" fill="none" stroke-dasharray="0"></path>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" stroke-width="0" fill="url(#hero-pattern)"></rect>
            </svg>

            <div class="hero-content">
                <div class="hero-badge">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg>
                    Released Nov 20, 2025
                </div>
                <svg class="hero-php-logo" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 467 133">
                    <path fill="currentColor" fill-rule="evenodd" d="M21.8 125.8H.8l18.7-96.1h40.3c12.1 0 21 3.2 26.5 9.5 5.6 6.4 7.2 15.2 5 26.7-.9 4.7-2.5 9-4.6 12.9-2.2 3.9-5 7.5-8.5 10.7-4.2 3.9-8.8 6.7-13.9 8.4-5.1 1.7-11.6 2.5-19.6 2.5h-18l-4.9 25.4Zm45.9-76.6c-2.7-2.9-8-4.4-15.9-4.4H37.5l-7.8 40.3h12.7c8.4 0 14.7-1.6 18.9-4.8 4.1-3.2 6.9-8.5 8.4-15.9 1.3-7.2.6-12.2-2-15.2Z" clip-rule="evenodd" />
                    <path fill="currentColor" d="M106.6 4.1h20.8l-5 25.6h18.5c11.7 0 19.7 2 24.1 6.1 4.4 4.1 5.8 10.7 4 19.8l-8.7 44.8h-21.1l8.3-42.6c.9-4.8.6-8.1-1-9.9-1.6-1.8-5.1-2.6-10.4-2.6h-16.6l-10.7 55.1H87.9l18.7-96.3Z" />
                    <path fill="currentColor" fill-rule="evenodd" d="M185.2 125.8h-21l18.7-96.1h40.4c12.1 0 21 3.2 26.5 9.5 5.6 6.4 7.2 15.2 5 26.7-.9 4.7-2.5 9-4.6 12.9-2.2 3.9-5 7.5-8.5 10.7-4.2 3.9-8.8 6.7-13.9 8.4-5.1 1.7-11.6 2.5-19.6 2.5h-18l-5 25.4Zm46-76.6c-2.7-2.9-8-4.4-15.9-4.4h-14.4l-7.8 40.3h12.7c8.4 0 14.7-1.6 18.9-4.8 4.1-3.2 6.9-8.5 8.4-15.9 1.3-7.2.7-12.2-1.9-15.2Z" clip-rule="evenodd" />
                    <path fill="currentColor" d="M317.5 48.5c-5.7-13.6-10.5-25.4-5.8-33.6 1.8-2.5 3.8-3.8 6-3.8 4.5 0 8.6 4.9 8.6 4.9l5.7 6.9-3.6-8.2c-.2-.3-6.3-14.2-17.2-14.2-3.8 0-7.8 1.7-11.7 5.1l-.1.1c-9.5 11-.2 31.8 8.1 50.1l6.1 14.2c2.8 7.3 5.6 16 3.9 22.4-2.6 10-11.5 16.8-11.6 16.9l-5.7 4.4 6.9-2.2c.7-.2 16-5.2 19.7-18.5 2.3-10.9-.6-21.8-3.5-30.2.4-.3-.4.3 0 0L318 49.1" />
                    <path fill="#6b58ff" d="m334.4 9.9-7.1-7.8 5.1 9.3c.1.1 6.3 11.7-1.6 25.2-2.9 4.2-7.4 8.4-13.1 12.6l-10.3 6.7c-.1-.1-.1-.2 0 0l-.4.3c-11.5 6.6-22.2 10.6-22.4 10.7-15.9 7.1-25.9 18.1-27.3 30.3-1.1 9.2 3.2 18.2 11.6 24.5l.1.1c5.3 3.2 11 4.8 17 4.8 15.7 0 28-10.9 28.5-11.4l7.7-6.9-9.1 4.8c-.1 0-7.7 4-15.6 4-7.1 0-12.1-3.1-15.1-9.4-3.8-13.4 9.5-22.6 24.8-33.2 2-1.4 4.1-2.9 6.2-4.3l.1-.1 9.1-6.8c.1-.2.4-.4.4-.4 7.5-6.2 17.4-15.9 19.7-29.5 1.8-12.3-7.9-23-8.3-23.5Z" />
                    <path fill="currentColor" d="M345.4 83h19.5l-3.5 17.7h-19.5l3.5-17.7Z" />
                    <path fill="currentColor" d="M375.68 86.24h41.76c1.84.08 3.6-.04 5.28-.36 1.68-.4 3.24-.96 4.68-1.68 1.36-.72 2.56-1.8 3.6-3.24a16 16 0 0 0 2.4-5.4c.64-2.16.8-3.96.48-5.4a4.85 4.85 0 0 0-1.8-3.24 10.46 10.46 0 0 0-3.84-1.56c-1.44-.4-3.12-.6-5.04-.6l-41.64-.12 13.32-49.8h71.64l-3.96 14.76H410l-5.4 20.28h30.84c4 .08 7.44.68 10.32 1.8a16.46 16.46 0 0 1 6.96 4.92 14.73 14.73 0 0 1 3.12 8.04c.32 3.12-.08 6.76-1.2 10.92a37.48 37.48 0 0 1-5.52 12.24 25.56 25.56 0 0 1-8.4 7.68 45.2 45.2 0 0 1-10.8 4.2 54.68 54.68 0 0 1-12.24 1.32h-45.84l3.84-14.76Z" />
                </svg>

                <h1>Smarter, Faster, Built for Tomorrow.</h1>
                <p><strong>PHP 8.5 is a major update of the PHP language.</strong> It contains <strong>many new features</strong>, such as the new <strong>URI extension</strong>, support for <strong>modifying properties while cloning</strong>, the <strong>Pipe operator</strong>, performance improvements, bug fixes, and general cleanup.</p>

                <div class="hero-actions">
                    <a href="#" class="button-primary">What's new in 8.5</a>
                    <a href="#" class="button-secondary">Upgrade to 8.5 now</a>
                </div>
            </div>
        </section>

        <!-- new features -->
        <section class="features">
            <svg aria-hidden="true" width="100%" height="100%" class="features-pattern">
                <defs>
                    <pattern id="features-pattern" width="13" height="13" patternUnits="userSpaceOnUse">
                        <rect x="5.5" y="5.5" width="1" height="1" fill="currentColor"></rect>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#features-pattern)"></rect>
            </svg>

            <div class="features-title">
                <h2>Key Features in PHP 8.5</h2>
                <p>PHP 8.5 is here, <strong>faster</strong>, <strong>cleaner</strong>, and <strong>built for developers</strong>.</p>
            </div>

            <div class="features-grid-container">
                <div class="features-grid">
                    <div class="features-col features-first-col">
                        <div class="features-col-container">
                            <div class="features-col-spacing">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0 3.7 3.7 48.656 48.656 0 0 0 7.324 0 4.006 4.006 0 0 0 3.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3-3 3" />
                                </svg>

                                <a href="#the-pipe-operator"><span></span>The Pipe Operator</a>
                                <p>PHP 8.5 introduces the <code>|></code> operator to chain callables left-to-right, passing values smoothly through multiple functions natively.</p>
                            </div>
                        </div>
                    </div>

                    <div class="features-col">
                        <div class="features-col-container">
                            <div class="features-col-spacing">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                                </svg>

                                <a href="#array-first-and-last-functions"><span></span>Array First & Last Functions</a>
                                <p>Retrieve the first or last value of any array effortlessly, without changing internal pointers or writing extra helper code.</p>
                            </div>
                        </div>
                    </div>

                    <div class="features-col features-third-col">
                        <div class="features-col-container">
                            <div class="features-col-spacing">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
                                </svg>

                                <a href="#clone-with"><span></span>Clone with</a>
                                <p>Clone objects and update properties with the new <code>clone()</code> syntax, making the "with-er" pattern simple for <code>readonly</code> classes.</p>
                            </div>
                        </div>
                    </div>

                    <div class="features-col features-fourth-col">
                        <div class="features-col-container">
                            <div class="features-col-spacing">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                                </svg>

                                <a href="#new-uri-extension"><span></span>New URI Extension</a>
                                <p>PHP 8.5 adds a built-in URI extension to parse, normalize, and handle URLs following <code>RFC 3986</code> and <code>WHATWG</code> standards.</p>
                            </div>
                        </div>
                    </div>

                    <div class="features-col">
                        <div class="features-col-container">
                            <div class="features-col-spacing">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                </svg>

                                <a href="#no-discard-attribute"><span></span>#[\NoDiscard] Attribute</a>
                                <p>The <code>#[\NoDiscard]</code> attribute warns when a return value isn’t used, helping prevent mistakes and improving overall API safety.</p>
                            </div>
                        </div>
                    </div>

                    <div class="features-col features-sixth-col">
                        <div class="features-col-container">
                            <div class="features-col-spacing">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 13.5V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 9.75V10.5" />
                                </svg>

                                <a href="#persistent-curl-share-handles"><span></span>Persistent cURL Share Handles</a>
                                <p>New <code>CurlSharePersistentHandle</code> class, <code>curl_multi_get_handles()</code>, <code>curl_share_init_persistent()</code> functions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- the-pipe-operator -->
        <section id="the-pipe-operator" class="before-and-after-container">
            <div class="before-and-after-title-and-description">
                <h2>The Pipe Operator</h2>
                <p>PHP 8.5 adds a new operator, the pipe operator <code>|></code> to chain multiple callables from left to right, taking the return value of the left callable and passing it to the right.</p>
            </div>

            <div class="before-and-after-code-container">
                <div class="before-and-after-code">
                    <div class="code-container">
                        <div class="header">
                            <div>
                                <span>PHP 8.4 and older</span>
                            </div>
                            <button class="js-copy-code">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                    <path d="M9 15C9 12.1716 9 10.7574 9.87868 9.87868C10.7574 9 12.1716 9 15 9L16 9C18.8284 9 20.2426 9 21.1213 9.87868C22 10.7574 22 12.1716 22 15V16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H15C12.1716 22 10.7574 22 9.87868 21.1213C9 20.2426 9 18.8284 9 16L9 15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.9999 9C16.9975 6.04291 16.9528 4.51121 16.092 3.46243C15.9258 3.25989 15.7401 3.07418 15.5376 2.90796C14.4312 2 12.7875 2 9.5 2C6.21252 2 4.56878 2 3.46243 2.90796C3.25989 3.07417 3.07418 3.25989 2.90796 3.46243C2 4.56878 2 6.21252 2 9.5C2 12.7875 2 14.4312 2.90796 15.5376C3.07417 15.7401 3.25989 15.9258 3.46243 16.092C4.51121 16.9528 6.04291 16.9975 9 16.9999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <pre class="js-code"><code>$input = ' Some kind of string. ';

$output = strtolower(
    str_replace(['.', '/', '…'], '',
        str_replace(' ', '-',
            trim($input)
        )
    )
);

var_dump($output);
// string(19) "some-kind-of-string"</code></pre>
                    </div>

                    <div class="code-container">
                        <div class="header">
                            <div>
                                <span>PHP 8.5</span>
                                <span class="badge-green">NEW</span>
                                <a target="_blank" href="https://wiki.php.net/rfc/pipe-operator-v3">RFC <span>↗</span></a>
                            </div>
                            <button class="js-copy-code">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                    <path d="M9 15C9 12.1716 9 10.7574 9.87868 9.87868C10.7574 9 12.1716 9 15 9L16 9C18.8284 9 20.2426 9 21.1213 9.87868C22 10.7574 22 12.1716 22 15V16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H15C12.1716 22 10.7574 22 9.87868 21.1213C9 20.2426 9 18.8284 9 16L9 15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.9999 9C16.9975 6.04291 16.9528 4.51121 16.092 3.46243C15.9258 3.25989 15.7401 3.07418 15.5376 2.90796C14.4312 2 12.7875 2 9.5 2C6.21252 2 4.56878 2 3.46243 2.90796C3.25989 3.07417 3.07418 3.25989 2.90796 3.46243C2 4.56878 2 6.21252 2 9.5C2 12.7875 2 14.4312 2.90796 15.5376C3.07417 15.7401 3.25989 15.9258 3.46243 16.092C4.51121 16.9528 6.04291 16.9975 9 16.9999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <pre class="js-code"><code>$input = ' Some kind of string. ';

$output = $input
    |> trim(...)
    |> (fn($str) => str_replace(' ', '-', $str))
    |> (fn($str) => str_replace(['.', '/', '…'], '', $str))
    |> strtolower(...);

var_dump($output);
// string(19) "some-kind-of-string"</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- array-first-and-last-functions -->
        <section id="array-first-and-last-functions" class="before-and-after-container">
            <div class="before-and-after-title-and-description">
                <h2>Array First & Last Functions</h2>
                <p>PHP 8.5 adds two new functions for retrieving the first and last values of an array. These functions complement the <code>array_key_first</code> and <code>array_key_last</code> functions.</p>
            </div>

            <div class="before-and-after-code-container">
                <div class="before-and-after-code">
                    <div class="code-container">
                        <div class="header">
                            <div>
                                <span>PHP 8.4 and older</span>
                            </div>
                            <button class="js-copy-code">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                    <path d="M9 15C9 12.1716 9 10.7574 9.87868 9.87868C10.7574 9 12.1716 9 15 9L16 9C18.8284 9 20.2426 9 21.1213 9.87868C22 10.7574 22 12.1716 22 15V16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H15C12.1716 22 10.7574 22 9.87868 21.1213C9 20.2426 9 18.8284 9 16L9 15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.9999 9C16.9975 6.04291 16.9528 4.51121 16.092 3.46243C15.9258 3.25989 15.7401 3.07418 15.5376 2.90796C14.4312 2 12.7875 2 9.5 2C6.21252 2 4.56878 2 3.46243 2.90796C3.25989 3.07417 3.07418 3.25989 2.90796 3.46243C2 4.56878 2 6.21252 2 9.5C2 12.7875 2 14.4312 2.90796 15.5376C3.07417 15.7401 3.25989 15.9258 3.46243 16.092C4.51121 16.9528 6.04291 16.9975 9 16.9999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <pre class="js-code"><code>$php = [
    'php-82' => ['state' => 'security', 'branch' => 'PHP-8.2'],
    'php-83' => ['state' => 'active', 'branch' => 'PHP-8.3'],
    'php-84' => ['state' => 'active', 'branch' => 'PHP-8.4'],
    'php-85' => ['state' => 'upcoming', 'branch' => 'PHP-8.5'],
];

$upcomingRelease = null;
foreach ($php as $key => $version) {
    if ($version['state'] === 'upcoming') {
        $upcomingRelease = $version;
        break;
    }
}

var_dump($upcomingRelease);</code></pre>
                    </div>

                    <div class="code-container">
                        <div class="header">
                            <div>
                                <span>PHP 8.5</span>
                                <span class="badge-green">NEW</span>
                                <a target="_blank" href="https://wiki.php.net/rfc/pipe-operator-v3">RFC <span>↗</span></a>
                            </div>
                            <button class="js-copy-code">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                    <path d="M9 15C9 12.1716 9 10.7574 9.87868 9.87868C10.7574 9 12.1716 9 15 9L16 9C18.8284 9 20.2426 9 21.1213 9.87868C22 10.7574 22 12.1716 22 15V16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H15C12.1716 22 10.7574 22 9.87868 21.1213C9 20.2426 9 18.8284 9 16L9 15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.9999 9C16.9975 6.04291 16.9528 4.51121 16.092 3.46243C15.9258 3.25989 15.7401 3.07418 15.5376 2.90796C14.4312 2 12.7875 2 9.5 2C6.21252 2 4.56878 2 3.46243 2.90796C3.25989 3.07417 3.07418 3.25989 2.90796 3.46243C2 4.56878 2 6.21252 2 9.5C2 12.7875 2 14.4312 2.90796 15.5376C3.07417 15.7401 3.25989 15.9258 3.46243 16.092C4.51121 16.9528 6.04291 16.9975 9 16.9999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <pre class="js-code"><code>$php = [
    'php-82' => ['state' => 'security', 'branch' => 'PHP-8.2'],
    'php-83' => ['state' => 'active', 'branch' => 'PHP-8.3'],
    'php-84' => ['state' => 'active', 'branch' => 'PHP-8.4'],
    'php-85' => ['state' => 'upcoming', 'branch' => 'PHP-8.5'],
];

$upcomingRelease = array_first(
    array_filter(
        $php,
        static fn($version) => $version['state'] === 'upcoming'
    )
);

var_dump($upcomingRelease);</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- clone-with -->
        <section id="clone-with" class="before-and-after-container">
            <div class="before-and-after-title-and-description">
                <h2>Clone With</h2>
                <p>It is now possible to update properties during object cloning by passing an associative array with the updated to the <code>clone()</code> function. This enables straight-forward support of the "with-er" pattern for <code>readonly</code> classes.</p>
            </div>

            <div class="before-and-after-code-container">
                <div class="before-and-after-code">
                    <div class="code-container">
                        <div class="header">
                            <div>
                                <span>PHP 8.4 and older</span>
                            </div>
                            <button class="js-copy-code">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                    <path d="M9 15C9 12.1716 9 10.7574 9.87868 9.87868C10.7574 9 12.1716 9 15 9L16 9C18.8284 9 20.2426 9 21.1213 9.87868C22 10.7574 22 12.1716 22 15V16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H15C12.1716 22 10.7574 22 9.87868 21.1213C9 20.2426 9 18.8284 9 16L9 15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.9999 9C16.9975 6.04291 16.9528 4.51121 16.092 3.46243C15.9258 3.25989 15.7401 3.07418 15.5376 2.90796C14.4312 2 12.7875 2 9.5 2C6.21252 2 4.56878 2 3.46243 2.90796C3.25989 3.07417 3.07418 3.25989 2.90796 3.46243C2 4.56878 2 6.21252 2 9.5C2 12.7875 2 14.4312 2.90796 15.5376C3.07417 15.7401 3.25989 15.9258 3.46243 16.092C4.51121 16.9528 6.04291 16.9975 9 16.9999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <pre class="js-code"><code>final readonly class PhpVersion
{
    public function __construct(
        public string $version = 'PHP 8.4',
    ) {}

    public function withVersion(string $version): self
    {
        $newObject = clone $this;
        $newObject->version = $version;

        return $newObject;
    }
}

$version = new PhpVersion();

var_dump($version->version);
// string(7) "PHP 8.4"

var_dump($version->withVersion('PHP 8.5')->version);
// Fatal error: Uncaught Error: Cannot modify readonly property PhpVersion::$version</code></pre>
                    </div>

                    <div class="code-container">
                        <div class="header">
                            <div>
                                <span>PHP 8.5</span>
                                <span class="badge-green">NEW</span>
                                <a target="_blank" href="https://wiki.php.net/rfc/pipe-operator-v3">RFC <span>↗</span></a>
                            </div>
                            <button class="js-copy-code">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                    <path d="M9 15C9 12.1716 9 10.7574 9.87868 9.87868C10.7574 9 12.1716 9 15 9L16 9C18.8284 9 20.2426 9 21.1213 9.87868C22 10.7574 22 12.1716 22 15V16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H15C12.1716 22 10.7574 22 9.87868 21.1213C9 20.2426 9 18.8284 9 16L9 15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.9999 9C16.9975 6.04291 16.9528 4.51121 16.092 3.46243C15.9258 3.25989 15.7401 3.07418 15.5376 2.90796C14.4312 2 12.7875 2 9.5 2C6.21252 2 4.56878 2 3.46243 2.90796C3.25989 3.07417 3.07418 3.25989 2.90796 3.46243C2 4.56878 2 6.21252 2 9.5C2 12.7875 2 14.4312 2.90796 15.5376C3.07417 15.7401 3.25989 15.9258 3.46243 16.092C4.51121 16.9528 6.04291 16.9975 9 16.9999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <pre class="js-code"><code>final readonly class PhpVersion
{
    public function __construct(
        public string $version = 'PHP 8.4',
    ) {}

    public function withVersion(string $version): self
    {
        return clone($this, [
            'version' => $version,
        ]);
    }
}

$version = new PhpVersion();

var_dump($version->version);
// string(7) "PHP 8.4"

var_dump($version->withVersion('PHP 8.5')->version);
// string(7) "PHP 8.5"

var_dump($version->version);
// string(7) "PHP 8.4"</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- new-uri-extension -->
        <section id="new-uri-extension" class="before-and-after-container">
            <div class="before-and-after-title-and-description">
                <h2>New URI Extension</h2>
                <p>PHP 8.5 adds a built-in URI extension to parse, normalize, and handle URLs following <code>RFC 3986</code> and <code>WHATWG</code> standards.</p>
            </div>

            <div class="before-and-after-code-container">
                <div class="before-and-after-code">
                    <div class="code-container">
                        <div class="header">
                            <div>
                                <span>PHP 8.4 and older</span>
                            </div>
                            <button class="js-copy-code">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                    <path d="M9 15C9 12.1716 9 10.7574 9.87868 9.87868C10.7574 9 12.1716 9 15 9L16 9C18.8284 9 20.2426 9 21.1213 9.87868C22 10.7574 22 12.1716 22 15V16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H15C12.1716 22 10.7574 22 9.87868 21.1213C9 20.2426 9 18.8284 9 16L9 15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.9999 9C16.9975 6.04291 16.9528 4.51121 16.092 3.46243C15.9258 3.25989 15.7401 3.07418 15.5376 2.90796C14.4312 2 12.7875 2 9.5 2C6.21252 2 4.56878 2 3.46243 2.90796C3.25989 3.07417 3.07418 3.25989 2.90796 3.46243C2 4.56878 2 6.21252 2 9.5C2 12.7875 2 14.4312 2.90796 15.5376C3.07417 15.7401 3.25989 15.9258 3.46243 16.092C4.51121 16.9528 6.04291 16.9975 9 16.9999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <pre class="js-code"><code>$components = parse_url("https://php.net/releases/8.5/en.php");

var_dump($components['host']);
// string(7) "php.net"</code></pre>
                    </div>

                    <div class="code-container">
                        <div class="header">
                            <div>
                                <span>PHP 8.5</span>
                                <span class="badge-green">NEW</span>
                                <a target="_blank" href="https://wiki.php.net/rfc/pipe-operator-v3">RFC <span>↗</span></a>
                            </div>
                            <button class="js-copy-code">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                    <path d="M9 15C9 12.1716 9 10.7574 9.87868 9.87868C10.7574 9 12.1716 9 15 9L16 9C18.8284 9 20.2426 9 21.1213 9.87868C22 10.7574 22 12.1716 22 15V16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H15C12.1716 22 10.7574 22 9.87868 21.1213C9 20.2426 9 18.8284 9 16L9 15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.9999 9C16.9975 6.04291 16.9528 4.51121 16.092 3.46243C15.9258 3.25989 15.7401 3.07418 15.5376 2.90796C14.4312 2 12.7875 2 9.5 2C6.21252 2 4.56878 2 3.46243 2.90796C3.25989 3.07417 3.07418 3.25989 2.90796 3.46243C2 4.56878 2 6.21252 2 9.5C2 12.7875 2 14.4312 2.90796 15.5376C3.07417 15.7401 3.25989 15.9258 3.46243 16.092C4.51121 16.9528 6.04291 16.9975 9 16.9999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <pre class="js-code"><code>use Uri\Rfc3986\Uri;

$uri = new Uri("https://php.net/releases/8.5/en.php");

var_dump($uri->getHost());
// string(7) "php.net"</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- no-discard-attribute -->
        <section id="no-discard-attribute" class="before-and-after-container">
            <div class="before-and-after-title-and-description">
                <h2>#[\NoDiscard] Attribute</h2>
                <p>Adding the <code>#[\NoDiscard]</code> attribute makes PHP warn if a function’s return value isn’t used, improving API safety. Use the (void) cast to mark values intentionally unused.</p>
            </div>

            <div class="before-and-after-code-container">
                <div class="before-and-after-code">
                    <div class="code-container">
                        <div class="header">
                            <div>
                                <span>PHP 8.4 and older</span>
                            </div>
                            <button class="js-copy-code">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                    <path d="M9 15C9 12.1716 9 10.7574 9.87868 9.87868C10.7574 9 12.1716 9 15 9L16 9C18.8284 9 20.2426 9 21.1213 9.87868C22 10.7574 22 12.1716 22 15V16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H15C12.1716 22 10.7574 22 9.87868 21.1213C9 20.2426 9 18.8284 9 16L9 15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.9999 9C16.9975 6.04291 16.9528 4.51121 16.092 3.46243C15.9258 3.25989 15.7401 3.07418 15.5376 2.90796C14.4312 2 12.7875 2 9.5 2C6.21252 2 4.56878 2 3.46243 2.90796C3.25989 3.07417 3.07418 3.25989 2.90796 3.46243C2 4.56878 2 6.21252 2 9.5C2 12.7875 2 14.4312 2.90796 15.5376C3.07417 15.7401 3.25989 15.9258 3.46243 16.092C4.51121 16.9528 6.04291 16.9975 9 16.9999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <pre class="js-code"><code>function getPhpVersion(): string
{
    return 'PHP 8.4';
}

getPhpVersion(); // No Errors</code></pre>
                    </div>

                    <div class="code-container">
                        <div class="header">
                            <div>
                                <span>PHP 8.5</span>
                                <span class="badge-green">NEW</span>
                                <a target="_blank" href="https://wiki.php.net/rfc/pipe-operator-v3">RFC <span>↗</span></a>
                            </div>
                            <button class="js-copy-code">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                    <path d="M9 15C9 12.1716 9 10.7574 9.87868 9.87868C10.7574 9 12.1716 9 15 9L16 9C18.8284 9 20.2426 9 21.1213 9.87868C22 10.7574 22 12.1716 22 15V16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H15C12.1716 22 10.7574 22 9.87868 21.1213C9 20.2426 9 18.8284 9 16L9 15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.9999 9C16.9975 6.04291 16.9528 4.51121 16.092 3.46243C15.9258 3.25989 15.7401 3.07418 15.5376 2.90796C14.4312 2 12.7875 2 9.5 2C6.21252 2 4.56878 2 3.46243 2.90796C3.25989 3.07417 3.07418 3.25989 2.90796 3.46243C2 4.56878 2 6.21252 2 9.5C2 12.7875 2 14.4312 2.90796 15.5376C3.07417 15.7401 3.25989 15.9258 3.46243 16.092C4.51121 16.9528 6.04291 16.9975 9 16.9999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <pre class="js-code"><code>#[\NoDiscard]
function getPhpVersion(): string
{
    return 'PHP 8.5';
}

getPhpVersion();
// Warning: The return value of function getPhpVersion() should either be used or intentionally ignored by casting it as (void)</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- persistent-curl-share-handles -->
        <section id="persistent-curl-share-handles" class="before-and-after-container last">
            <div class="before-and-after-title-and-description">
                <h2>Persistent cURL Share Handles</h2>
                <p>The Curl extension in PHP 8.5 adds a new function named <code>curl_multi_get_handles</code> that returns an array of <code>CurlHandle</code> objects from a <code>CurlMultiHandle</code> object.</p>
            </div>

            <div class="before-and-after-code-container">
                <div class="before-and-after-code">
                    <div class="code-container">
                        <div class="header">
                            <div>
                                <span>PHP 8.4 and older</span>
                            </div>
                            <button class="js-copy-code">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                    <path d="M9 15C9 12.1716 9 10.7574 9.87868 9.87868C10.7574 9 12.1716 9 15 9L16 9C18.8284 9 20.2426 9 21.1213 9.87868C22 10.7574 22 12.1716 22 15V16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H15C12.1716 22 10.7574 22 9.87868 21.1213C9 20.2426 9 18.8284 9 16L9 15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.9999 9C16.9975 6.04291 16.9528 4.51121 16.092 3.46243C15.9258 3.25989 15.7401 3.07418 15.5376 2.90796C14.4312 2 12.7875 2 9.5 2C6.21252 2 4.56878 2 3.46243 2.90796C3.25989 3.07417 3.07418 3.25989 2.90796 3.46243C2 4.56878 2 6.21252 2 9.5C2 12.7875 2 14.4312 2.90796 15.5376C3.07417 15.7401 3.25989 15.9258 3.46243 16.092C4.51121 16.9528 6.04291 16.9975 9 16.9999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <pre class="js-code"><code>$sh = curl_share_init();
curl_share_setopt($sh, CURLSHOPT_SHARE, CURL_LOCK_DATA_DNS);
curl_share_setopt($sh, CURLSHOPT_SHARE, CURL_LOCK_DATA_CONNECT);

$ch1 = curl_init('https://php.net/');
curl_setopt($ch1, CURLOPT_SHARE, $sh);
curl_exec($ch1);

$ch2 = curl_init('https://thephp.foundation/');
curl_setopt($ch2, CURLOPT_SHARE, $sh);
curl_exec($ch2);</code></pre>
                    </div>

                    <div class="code-container">
                        <div class="header">
                            <div>
                                <span>PHP 8.5</span>
                                <span class="badge-green">NEW</span>
                                <a target="_blank" href="https://wiki.php.net/rfc/pipe-operator-v3">RFC <span>↗</span></a>
                            </div>
                            <button class="js-copy-code">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                    <path d="M9 15C9 12.1716 9 10.7574 9.87868 9.87868C10.7574 9 12.1716 9 15 9L16 9C18.8284 9 20.2426 9 21.1213 9.87868C22 10.7574 22 12.1716 22 15V16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H15C12.1716 22 10.7574 22 9.87868 21.1213C9 20.2426 9 18.8284 9 16L9 15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.9999 9C16.9975 6.04291 16.9528 4.51121 16.092 3.46243C15.9258 3.25989 15.7401 3.07418 15.5376 2.90796C14.4312 2 12.7875 2 9.5 2C6.21252 2 4.56878 2 3.46243 2.90796C3.25989 3.07417 3.07418 3.25989 2.90796 3.46243C2 4.56878 2 6.21252 2 9.5C2 12.7875 2 14.4312 2.90796 15.5376C3.07417 15.7401 3.25989 15.9258 3.46243 16.092C4.51121 16.9528 6.04291 16.9975 9 16.9999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <pre class="js-code"><code>$sh = curl_share_init_persistent([
    CURL_LOCK_DATA_DNS,
    CURL_LOCK_DATA_CONNECT
]);

$ch1 = curl_init('https://php.net/');
curl_setopt($ch1, CURLOPT_SHARE, $sh);
curl_exec($ch1);

$ch2 = curl_init('https://thephp.foundation/');
curl_setopt($ch2, CURLOPT_SHARE, $sh);
curl_exec($ch2);</code></pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- release-notes -->
        <section class="release-notes">
            <div class="release-notes-grid-container">
                <div class="release-notes-grid">
                    <div>
                        <h2>New Classes, Interfaces, and Functions</h2>
                        <ul class="new">
                            <li>Property Promotion is now available for <code>final</code></li>
                            <li>Attributes are now available for constants</li>
                            <li>
                                Attribute <a href="/manual/en/class.override.php"><code>#[\Override]</code></a> now works on properties
                            </li>
                            <li>
                                Attribute <a href="/manual/en/class.deprecated.php"><code>#[\Deprecated]</code></a> available for traits
                            </li>
                            <li>Asymmetric Visibility for Static Properties</li>
                            <li>New <code>#[\DelayedTargetValidation]</code> attribute is available</li>
                            <li>
                                New <a href="/manual/en/function.get-error-handler.php"><code>get_error_handler()</code></a
                                >, <a href="/manual/en/function.get-exception-handler.php"><code>get_exception_handler()</code></a> functions are available.
                            </li>
                            <li>New <code>Closure::getCurrent</code> method is available.</li>
                            <li>New <code>Dom\Element::getElementsByClassName()</code> and <code>Dom\Element::insertAdjacentHTML()</code> methods are available.</li>
                            <li>New <code>enchant_dict_remove_from_session()</code> and <code>enchant_dict_remove()</code> functions are available.</li>
                            <li>New <code>grapheme_levenshtein()</code> function is available.</li>
                            <li>New <code>opcache_is_script_cached_in_file_cache()</code> function is available.</li>
                            <li>New <code>ReflectionConstant::getFileName()</code>, <code>ReflectionConstant::getExtension()</code>, <code>ReflectionConstant::getExtensionName()</code>, <code>ReflectionConstant::getAttributes()</code>, and <code>ReflectionProperty::getMangledName()</code> methods are available.</li>
                        </ul>
                    </div>
                    <div>
                        <h2>Deprecations & BC breaks</h2>
                        <ul class="old">
                            <li>All <code>MHASH_*</code> constants deprecated</li>
                            <li>Non-canonical scalar type casts (boolean|double|integer|binary) deprecated</li>
                            <li>Returning non-string values from a user output handler is deprecated</li>
                            <li>Emitting output from custom output buffer handlers is deprecated</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- pre footer -->
        <section class="cta-footer">
            <svg aria-hidden="true">
                <defs>
                    <pattern id="cta-pattern" width="12" height="12" patternUnits="userSpaceOnUse" x="-1" y="-1"><path d="M.5 12V.5H12" fill="none" stroke-dasharray="0"></path></pattern>
                </defs>
                <rect width="100%" height="100%" stroke-width="0" fill="url(#cta-pattern)"></rect>
            </svg>

            <div class="cta-footer-content">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16"><path fill="currentColor" d="M0 12.2v-.7a.5.5 0 0 1 1 0v.8c0 .2.1.3.3.5l.7.2.8-.2.2-.6V5c0-2 1.7-4 4.1-4 2.4 0 4 1.4 4.4 3 1 .1 2 .4 3 1.1l1 1.4c.3.5.5 1 .5 1.5v5.5c0 .3-.2.5-.5.5h-8a.5.5 0 0 1-.5-.5v-4c0-.2.1-.4.3-.5a6 6 0 0 0 2.4-1.5c.5-.7.9-1.6.8-3 0-1-1.2-2.5-3.3-2.5A3.1 3.1 0 0 0 4 5v7.2c0 .6-.2 1-.6 1.3-.3.4-.8.5-1.4.5-.5 0-1-.2-1.3-.4-.4-.3-.6-.7-.7-1.2v-.2ZM11.5 5a5 5 0 0 1-1 3.1C9.8 9 8.9 9.4 8 9.8V13h3v-2.5a.5.5 0 0 1 1 0V13h3V8c0-.2 0-.6-.3-1-.2-.4-.5-.8-.9-1.1a5 5 0 0 0-2.3-.9ZM7 5a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z" /></svg>

                <h2>Better performance, better syntax, improved type safety.</h2>

                <div class="cta-footer-button-container">
                    <a href="#" class="button-primary">Upgrade to 8.5 Now</a>
                </div>

                <p class="first-paragraph">For source downloads of PHP 8.5 please visit the <a href="https://web-php-pr-1454.preview.thephp.foundation/downloads" target="_blank">downloads</a> page. Windows binaries can be found on the <a href="https://windows.php.net/download" target="_blank">PHP for Windows</a> site. The list of changes is recorded in the <a href="https://web-php-pr-1454.preview.thephp.foundation/ChangeLog-8.php#PHP_8_5" target="_blank">ChangeLog</a>.</p>
                <p>The <a href="#" target="_blank">migration guide</a> is available in the PHP Manual. Please consult it for a detailed list of new features and backward-incompatible changes.</p>
            </div>
        </section>

        <footer>
            <div class="footer-container">
                <div class="footer-grid">
                    <div>
                        <a href="/" class="footer-logo">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -1 100 50" fill="currentColor">
                                <path d="m7.579 10.123 14.204 0c4.169 0.035 7.19 1.237 9.063 3.604 1.873 2.367 2.491 5.6 1.855 9.699-0.247 1.873-0.795 3.71-1.643 5.512-0.813 1.802-1.943 3.427-3.392 4.876-1.767 1.837-3.657 3.003-5.671 3.498-2.014 0.495-4.099 0.742-6.254 0.742l-6.36 0-2.014 10.07-7.367 0 7.579-38.001 0 0m6.201 6.042-3.18 15.9c0.212 0.035 0.424 0.053 0.636 0.053 0.247 0 0.495 0 0.742 0 3.392 0.035 6.219-0.3 8.48-1.007 2.261-0.742 3.781-3.321 4.558-7.738 0.636-3.71 0-5.848-1.908-6.413-1.873-0.565-4.222-0.83-7.049-0.795-0.424 0.035-0.83 0.053-1.219 0.053-0.353 0-0.724 0-1.113 0l0.053-0.053" />
                                <path d="m41.093 0 7.314 0-2.067 10.123 6.572 0c3.604 0.071 6.289 0.813 8.056 2.226 1.802 1.413 2.332 4.099 1.59 8.056l-3.551 17.649-7.42 0 3.392-16.854c0.353-1.767 0.247-3.021-0.318-3.763-0.565-0.742-1.784-1.113-3.657-1.113l-5.883-0.053-4.346 21.783-7.314 0 7.632-38.054 0 0" />
                                <path d="m70.412 10.123 14.204 0c4.169 0.035 7.19 1.237 9.063 3.604 1.873 2.367 2.491 5.6 1.855 9.699-0.247 1.873-0.795 3.71-1.643 5.512-0.813 1.802-1.943 3.427-3.392 4.876-1.767 1.837-3.657 3.003-5.671 3.498-2.014 0.495-4.099 0.742-6.254 0.742l-6.36 0-2.014 10.07-7.367 0 7.579-38.001 0 0m6.201 6.042-3.18 15.9c0.212 0.035 0.424 0.053 0.636 0.053 0.247 0 0.495 0 0.742 0 3.392 0.035 6.219-0.3 8.48-1.007 2.261-0.742 3.781-3.321 4.558-7.738 0.636-3.71 0-5.848-1.908-6.413-1.873-0.565-4.222-0.83-7.049-0.795-0.424 0.035-0.83 0.053-1.219 0.053-0.353 0-0.724 0-1.113 0l0.053-0.053" />
                            </svg>
                        </a>

                        <p>The PHP Foundation is a collective of people and organizations, united in the mission to ensure the long-term prosperity of the PHP language.</p>

                        <div class="social-icons">
                            <a href="https://x.com/official_php" target="_blank" rel="noopener noreferrer">
                                <span class="sr-only">X</span>
                                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/company/phpnet/" target="_blank" rel="noopener noreferrer">
                                <span class="sr-only">Linkedin</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9428 1.75H12.0572C14.2479 1.74999 15.9686 1.74998 17.312 1.93059C18.6886 2.11568 19.7809 2.50271 20.6391 3.36091C21.4973 4.21911 21.8843 5.31137 22.0694 6.68802C22.25 8.03144 22.25 9.75214 22.25 11.9428V12.0572C22.25 14.2479 22.25 15.9686 22.0694 17.312C21.8843 18.6886 21.4973 19.7809 20.6391 20.6391C19.7809 21.4973 18.6886 21.8843 17.312 22.0694C15.9686 22.25 14.2479 22.25 12.0572 22.25H11.9428C9.7521 22.25 8.03144 22.25 6.68802 22.0694C5.31137 21.8843 4.21911 21.4973 3.36091 20.6391C2.50272 19.7809 2.11568 18.6886 1.93059 17.312C1.74998 15.9686 1.74999 14.2479 1.75 12.0572V12.0572V11.9428V11.9428C1.74999 9.75211 1.74998 8.03144 1.93059 6.68802C2.11568 5.31137 2.50272 4.21911 3.36091 3.36091C4.21911 2.50271 5.31137 2.11568 6.68802 1.93059C8.03143 1.74998 9.75214 1.74999 11.9428 1.75ZM8.00195 10.5C8.00195 9.94771 7.55424 9.5 7.00195 9.5C6.44967 9.5 6.00195 9.94771 6.00195 10.5L6.00195 17C6.00195 17.5523 6.44967 18 7.00195 18C7.55424 18 8.00195 17.5523 8.00195 17L8.00195 10.5ZM11.002 9C11.4073 9 11.7564 9.2412 11.9134 9.58791C12.5213 9.215 13.2365 9 14.002 9C16.2111 9 18.002 10.7909 18.002 13V17C18.002 17.5523 17.5542 18 17.002 18C16.4497 18 16.002 17.5523 16.002 17V13C16.002 11.8954 15.1065 11 14.002 11C12.8974 11 12.002 11.8954 12.002 13L12.002 17C12.002 17.5523 11.5542 18 11.002 18C10.4497 18 10.002 17.5523 10.002 17L10.002 10C10.002 9.44771 10.4497 9 11.002 9ZM8.25977 7C8.25977 7.69036 7.70012 8.25 7.00977 8.25H7.00078C6.31043 8.25 5.75078 7.69036 5.75078 7C5.75078 6.30964 6.31043 5.75 7.00078 5.75H7.00977C7.70012 5.75 8.25977 6.30964 8.25977 7Z" fill="currentColor" />
                                </svg>
                            </a>
                            <a href="https://fosstodon.org/@php" target="_blank" rel="noopener noreferrer">
                                <span class="sr-only">@php@fosstodon.org</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path fill="currentColor" d="M21.5 6.5c-.3-2.2-2.3-3.9-4.6-4.2-.4 0-1.9-.3-5.3-.3s-4.2.2-4.6.3c-2.2.3-4.3 1.9-4.8 4C2 7.6 2 8.8 2 9.9a38.5 38.5 0 0 0 .8 7.9c.4 2 2.4 3.5 4.2 4.2a11.6 11.6 0 0 0 7 .1l1.5-.6v-1.6a19 19 0 0 1-4.1.4c-2.3 0-3-1-3.2-1.5a4.7 4.7 0 0 1-.2-1.3c1.3.3 2.7.5 4 .5h1c1.3 0 2.7-.1 4-.4h.2a5 5 0 0 0 4.3-4.8V6.5Zm-3.3 7.9H16V9c0-1.1-.4-1.7-1.4-1.7-1 0-1.6.7-1.6 2v3h-2.2v-3c0-1.3-.5-2-1.6-2-1 0-1.4.6-1.4 1.7v5.3H5.6V8.9c0-1.1.3-2 .9-2.6a3 3 0 0 1 2.3-1c1.2 0 2 .4 2.6 1.2l.5 1 .6-1c.5-.8 1.4-1.2 2.5-1.2 1 0 1.8.3 2.4 1 .6.6.8 1.5.8 2.6v5.5Z" /></svg>
                            </a>
                            <a href="https://github.com/php/?q=doc" target="_blank" rel="noopener noreferrer">
                                <span class="sr-only">GitHub</span>
                                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" fill-rule="evenodd" />
                                </svg>
                            </a>
                        </div>

                        <a href="https://thephp.foundation/sponsor/" class="button-primary">Donate</a>
                    </div>
                    <div class="footer-links-container">
                        <div class="footer-links-grid">
                            <div>
                                <h3>Contribute</h3>
                                <ul role="list">
                                    <li>
                                        <a href="#">Get Involved</a>
                                    </li>
                                    <li>
                                        <a href="#">Developer's Guide</a>
                                    </li>
                                    <li>
                                        <a href="#">Issue Tracker</a>
                                    </li>
                                    <li>
                                        <a href="#">Brand Guidelines</a>
                                    </li>
                                    <li>
                                        <a href="#">Code of Conduct</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3>Learn</h3>
                                <ul role="list">
                                    <li>
                                        <a href="#">Documentation</a>
                                    </li>
                                    <li>
                                        <a href="#">Beginner's Guide</a>
                                    </li>
                                    <li>
                                        <a href="#">Tutorials & Examples</a>
                                    </li>
                                    <li>
                                        <a href="#">Audio/Visual Talks</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-links-grid">
                            <div>
                                <h3>The PHP Foundation</h3>
                                <ul role="list">
                                    <li>
                                        <a href="#">About the Foundation</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog PHP</a>
                                    </li>
                                    <li>
                                        <a href="#">PHP Jobs</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3>Legal</h3>
                                <ul role="list">
                                    <li>
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Cookie Preferences</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-credits">
                    <p>Copyright © 2001-2025 The PHP Group.</p>
                </div>
            </div>
        </footer>

        <!-- noise -->
        <svg class="noise" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" preserveAspectRatio="none">
            <defs>
                <filter id="noise-filter">
                    <feTurbulence type="turbulence" baseFrequency="1" numOctaves="1" stitchTiles="stitch" result="noise"></feTurbulence>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0" result="coloredNoise"></feColorMatrix>
                </filter>
            </defs>
            <rect width="100%" height="100%" filter="url(#noise-filter)"></rect>
        </svg>

        <script src="./main.js"></script>
    </body>
</html>
