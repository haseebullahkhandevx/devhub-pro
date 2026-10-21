<!DOCTYPE html>
<html lang="en" id="html-root" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Primary SEO Meta Tags -->
    <title>DevTool Nest — Free Online Developer Tools & Utilities</title>
    <meta name="description" content="Free online browser-based tools for developers on DevTool Nest: JSON to SQL schema generator, Base64 encoder/decoder, SHA-256/512 hashes, JWT debugger, UUID v4 generator, URL slugify, JSON beautifier, and password generator. Fast, safe, and privacy-focused.">
    <meta name="google-site-verification" content="PlJEnrbsoG17FolRWV4ogPvJCxOeBcLdJQJ14kK1GmM" />
    <meta name="keywords" content="DevTool Nest, developer tools, json to sql, base64 encoder, sha256 hash generator, jwt debugger, uuid generator, url slugify, json beautifier, password generator, html entity escaper">
    <meta name="author" content="DevTool Nest">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://devtoolnest.vercel.app/">

    <!-- Favicon (Tab Bar Logo: White, Yellow, and Red Theme) -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' rx='20' fill='%23ef4444'/><path d='M30 35 L15 50 L30 65 M70 35 L85 50 L70 65 M55 30 L45 70' stroke='%23ffffff' stroke-width='8' stroke-linecap='round' stroke-linejoin='round' fill='none'/><circle cx='50' cy='50' r='6' fill='%23f59e0b'/></svg>">

    <!-- Open Graph / Facebook / WhatsApp SEO -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://devtoolnest.vercel.app/">
    <meta property="og:title" content="DevTool Nest — Free Online Developer Tools & Utilities">
    <meta property="og:description" content="Instant browser-based web developer tools on DevTool Nest: JSON to SQL, Base64, SHA Hashes, JWT Debugger, UUIDs, and more. 100% free and client-side safe.">
    <meta property="og:image" content="https://devtoolnest.vercel.app/og-image.png">

    <!-- Twitter / X SEO -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DevTool Nest — Developer Utilities in Your Browser">
    <meta name="twitter:description" content="Free online browser-based developer tools on DevTool Nest: JSON to SQL, Base64, SHA Hashing, JWT Debugging, UUID Generator.">
    <meta name="twitter:image" content="https://devtoolnest.vercel.app/og-image.png">

    <!-- Structured Data / Schema.org for Google Search Bots -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "DevTool Nest",
      "url": "https://devtoolnest.vercel.app/",
      "description": "Free browser-based developer utilities for JSON to SQL, Base64, SHA hashing, JWT decoding, UUIDs, URL slugs, and JSON formatting.",
      "applicationCategory": "DeveloperApplication",
      "operatingSystem": "All",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      }
    }
    </script>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        lightBg: '#f8fafc',
                        lightCard: '#ffffff',
                        lightBorder: '#e2e8f0',
                        darkBg: '#0f172a',
                        darkCard: '#1e293b',
                        darkBorder: '#334155',
                        amberMain: '#f59e0b',
                        amberHover: '#d97706',
                        redMain: '#ef4444',
                        redHover: '#dc2626'
                    }
                }
            }
        }
    </script>
    <style>
        :focus-visible { outline: 3px solid #f59e0b; outline-offset: 2px; }
        @media (prefers-reduced-motion: reduce) { *, *::before, *::after { scroll-behavior: auto !important; animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; transition-duration: 0.01ms !important; } }
        .sidebar-btn.active {
            background-color: #f59e0b;
            color: #ffffff;
            font-weight: 600;
        }
        .dark .sidebar-btn.active {
            background-color: #f59e0b;
            color: #0f172a;
        }
    </style>
</head>
<body class="bg-lightBg dark:bg-darkBg text-slate-800 dark:text-slate-100 font-sans min-h-screen flex flex-col transition-colors duration-200">

    <!-- Header -->
    <header class="border-b-4 border-redMain bg-lightCard dark:bg-darkCard shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-3.5 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <!-- Mobile Sidebar Toggle Button -->
                <button onclick="toggleMobileSidebar()" class="lg:hidden text-slate-700 dark:text-slate-200 focus:outline-none p-1.5 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800" aria-label="Toggle Navigation">
                    <i class="fa-solid fa-bars text-lg"></i>
                </button>
                <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-redMain text-white flex items-center justify-center font-bold shadow-md">
                    <i class="fa-solid fa-code text-base sm:text-lg" aria-hidden="true"></i>
                </div>
                <div>
                    <h1 class="font-bold text-base sm:text-lg text-slate-900 dark:text-white tracking-wide">
                        DevTool <span class="text-amberMain">Nest</span>
                    </h1>
                    <p class="text-[10px] sm:text-[11px] text-slate-500 dark:text-slate-400 font-medium hidden xs:block">Developer tools that run in your browser</p>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <span class="hidden md:inline-flex items-center gap-1.5 text-xs font-semibold px-3 py-1 rounded-full bg-red-500/10 text-redMain border border-red-500/20">
                    <span class="w-2 h-2 rounded-full bg-redMain animate-ping"></span> Runs in your browser
                </span>
                <button onclick="toggleTheme()" class="flex items-center gap-2 px-3 py-1.5 rounded-xl border border-slate-300 dark:border-darkBorder bg-slate-100 dark:bg-slate-800 text-xs font-semibold hover:border-amberMain transition" aria-label="Toggle Theme">
                    <i id="theme-icon" class="fa-solid fa-moon text-amberMain"></i>
                    <span id="theme-text" class="hidden sm:inline">Dark Mode</span>
                </button>
            </div>
        </div>
    </header>

    <!-- Top Ad Banner Space -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full mt-4">
        <div class="bg-slate-200 dark:bg-darkCard border border-dashed border-slate-400 dark:border-darkBorder rounded-xl p-3 text-center text-xs text-slate-500 dark:text-slate-400">
            <span>[ Advertisement Space - Top Leaderboard Banner ]</span>
        </div>
    </div>

    <!-- Main Container -->
    <div class="flex-1 max-w-7xl mx-auto px-4 sm:px-6 py-6 w-full grid grid-cols-1 lg:grid-cols-4 gap-6 sm:gap-8">
        
        <!-- Sidebar Navigation -->
        <aside id="sidebar-container" class="lg:col-span-1 space-y-4 hidden lg:block">
            <div>
                <label for="tool-search" class="block text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider mb-2">Search Tools</label>
                <input type="text" id="tool-search" onkeyup="filterTools()" placeholder="Search utilities..." class="w-full bg-lightCard dark:bg-darkCard border border-slate-300 dark:border-darkBorder rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-amberMain text-slate-800 dark:text-slate-100 shadow-sm">
            </div>

            <nav id="sidebar-nav" class="space-y-1.5" aria-label="Tools Navigation">
                <button onclick="switchTool('json-sql')" id="nav-json-sql" class="sidebar-btn active w-full flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-800">
                    <i class="fa-solid fa-database w-5 text-center text-redMain" aria-hidden="true"></i> JSON to SQL
                </button>
                <button onclick="switchTool('base64')" id="nav-base64" class="sidebar-btn w-full flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-800">
                    <i class="fa-solid fa-rotate w-5 text-center text-redMain" aria-hidden="true"></i> Base64 Converter
                </button>
                <button onclick="switchTool('hash')" id="nav-hash" class="sidebar-btn w-full flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-800">
                    <i class="fa-solid fa-shield-halved w-5 text-center text-redMain" aria-hidden="true"></i> Hash Generator
                </button>
                <button onclick="switchTool('jwt')" id="nav-jwt" class="sidebar-btn w-full flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-800">
                    <i class="fa-solid fa-key w-5 text-center text-redMain" aria-hidden="true"></i> JWT Debugger
                </button>
                <button onclick="switchTool('tailwind')" id="nav-tailwind" class="sidebar-btn w-full flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-800">
                    <i class="fa-solid fa-wand-magic-sparkles w-5 text-center text-redMain" aria-hidden="true"></i> Tailwind Glass
                </button>
                <button onclick="switchTool('uuid')" id="nav-uuid" class="sidebar-btn w-full flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-800">
                    <i class="fa-solid fa-fingerprint w-5 text-center text-redMain" aria-hidden="true"></i> UUID v4 Generator
                </button>
                <button onclick="switchTool('slug')" id="nav-slug" class="sidebar-btn w-full flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-800">
                    <i class="fa-solid fa-link w-5 text-center text-redMain" aria-hidden="true"></i> URL Slugify
                </button>
                <button onclick="switchTool('json-formatter')" id="nav-json-formatter" class="sidebar-btn w-full flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-800">
                    <i class="fa-solid fa-code w-5 text-center text-redMain" aria-hidden="true"></i> JSON Beautifier
                </button>
                <button onclick="switchTool('password')" id="nav-password" class="sidebar-btn w-full flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-800">
                    <i class="fa-solid fa-lock w-5 text-center text-redMain" aria-hidden="true"></i> Password Generator
                </button>
                <button onclick="switchTool('html-escape')" id="nav-html-escape" class="sidebar-btn w-full flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-800">
                    <i class="fa-solid fa-code-compare w-5 text-center text-redMain" aria-hidden="true"></i> HTML Entity Escaper
                </button>
            </nav>

            <!-- Sidebar Ad Slot -->
            <div class="bg-slate-200 dark:bg-darkCard border border-dashed border-slate-400 dark:border-darkBorder rounded-xl p-4 text-center text-xs text-slate-500 dark:text-slate-400 mt-6">
                <span>[ Sidebar Ad Space ]</span>
            </div>
        </aside>

        <!-- Single-page tool panels -->
        <main class="lg:col-span-3 space-y-6">

            <!-- Tool 1: JSON to SQL -->
            <section id="tool-json-sql" class="tool-panel bg-lightCard dark:bg-darkCard border border-slate-200 dark:border-darkBorder rounded-2xl p-4 sm:p-6 shadow-md space-y-6">
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-slate-900 dark:text-white mb-1 flex items-center gap-2">
                        <i class="fa-solid fa-database text-amberMain" aria-hidden="true"></i> JSON to MySQL Schema Converter
                    </h2>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Convert JSON objects or arrays into draft MySQL CREATE TABLE and INSERT statements.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="json-input" class="block text-xs font-bold mb-2 text-slate-600 dark:text-slate-300 uppercase">Input JSON Object or Array</label>
                        <textarea id="json-input" class="w-full h-56 bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-darkBorder rounded-xl p-4 font-mono text-xs focus:outline-none focus:border-amberMain" placeholder='[{"id": 1, "name": "Ali"}]'></textarea>
                        <button onclick="convertJsonToSql()" class="mt-4 w-full bg-amberMain hover:bg-amberHover text-slate-900 font-bold py-2.5 rounded-xl text-sm shadow-md transition">Convert to SQL</button>
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <label for="sql-output" class="text-xs font-bold text-slate-600 dark:text-slate-300 uppercase">Generated SQL</label>
                            <button onclick="copyElementText('sql-output')" class="text-xs text-amberMain hover:underline font-semibold"><i class="fa-solid fa-copy" aria-hidden="true"></i> Copy Output</button>
                        </div>
                        <textarea id="sql-output" readonly class="w-full h-56 bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-darkBorder rounded-xl p-4 font-mono text-xs text-emerald-600 dark:text-emerald-400"></textarea>
                    </div>
                </div>
                <!-- In-Content Ad Slot -->
                <div class="bg-slate-100 dark:bg-slate-900 border border-dashed border-slate-300 dark:border-darkBorder rounded-xl p-3 text-center text-xs text-slate-400">
                    <span>[ In-Content Ad Space ]</span>
                </div>
                <div class="border-t border-slate-200 dark:border-darkBorder pt-4 mt-4 space-y-3">
                    <h3 class="text-xs font-bold uppercase tracking-wider text-redMain">About JSON to SQL Schema Conversion</h3>
                    <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">
                        This free online utility maps JavaScript Object Notation (JSON) payloads directly to relational database schemas. It automatically detects keys, creates a basic MySQL-style table definition and INSERT statements. Review generated SQL and adjust data types before using it in production.
                    </p>
                </div>
            </section>

            <!-- Tool 2: Base64 -->
            <section id="tool-base64" class="tool-panel hidden bg-lightCard dark:bg-darkCard border border-slate-200 dark:border-darkBorder rounded-2xl p-4 sm:p-6 shadow-md space-y-6">
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-slate-900 dark:text-white mb-1 flex items-center gap-2">
                        <i class="fa-solid fa-rotate text-amberMain" aria-hidden="true"></i> Base64 Encoder / Decoder
                    </h2>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Encode plaintext strings into Base64 or decode Base64 back safely.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="base64-input" class="block text-xs font-bold mb-2 text-slate-600 dark:text-slate-300 uppercase">Input Text / Base64</label>
                        <textarea id="base64-input" class="w-full h-48 bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-darkBorder rounded-xl p-4 font-mono text-xs focus:outline-none focus:border-amberMain" placeholder="Type text here..."></textarea>
                        <div class="flex gap-3 mt-4">
                            <button onclick="encodeBase64()" class="flex-1 bg-amberMain hover:bg-amberHover text-slate-900 font-bold py-2 rounded-xl text-xs transition">Encode</button>
                            <button onclick="decodeBase64()" class="flex-1 bg-redMain hover:bg-redHover text-white font-bold py-2 rounded-xl text-xs transition">Decode</button>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <label for="base64-output" class="text-xs font-bold text-slate-600 dark:text-slate-300 uppercase">Output Result</label>
                            <button onclick="copyElementText('base64-output')" class="text-xs text-amberMain hover:underline font-semibold"><i class="fa-solid fa-copy" aria-hidden="true"></i> Copy Output</button>
                        </div>
                        <textarea id="base64-output" readonly class="w-full h-56 bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-darkBorder rounded-xl p-4 font-mono text-xs text-emerald-600 dark:text-emerald-400"></textarea>
                    </div>
                </div>
            </section>

            <!-- Tool 3: Hash Generator -->
            <section id="tool-hash" class="tool-panel hidden bg-lightCard dark:bg-darkCard border border-slate-200 dark:border-darkBorder rounded-2xl p-4 sm:p-6 shadow-md space-y-6">
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-slate-900 dark:text-white mb-1 flex items-center gap-2">
                        <i class="fa-solid fa-shield-halved text-amberMain" aria-hidden="true"></i> Cryptographic SHA Hashes
                    </h2>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Generate SHA-256 and SHA-512 digests using the browser Web Crypto API.</p>
                </div>
                <div class="space-y-4">
                    <div>
                        <label for="hash-input" class="block text-xs font-bold mb-2 text-slate-600 dark:text-slate-300 uppercase">Input String</label>
                        <input type="text" id="hash-input" oninput="generateHashes()" class="w-full bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-darkBorder rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-amberMain" placeholder="Enter string to hash...">
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-1">
                            <label for="sha256-out" class="text-xs font-bold text-slate-600 dark:text-slate-300 uppercase">SHA-256</label>
                            <button onclick="copyElementText('sha256-out')" class="text-xs text-amberMain hover:underline font-semibold"><i class="fa-solid fa-copy" aria-hidden="true"></i> Copy</button>
                        </div>
                        <input type="text" id="sha256-out" readonly class="w-full bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-darkBorder rounded-xl px-4 py-2.5 text-xs font-mono text-emerald-600 dark:text-emerald-400" placeholder="SHA-256 Hash">
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-1">
                            <label for="sha512-out" class="text-xs font-bold text-slate-600 dark:text-slate-300 uppercase">SHA-512</label>
                            <button onclick="copyElementText('sha512-out')" class="text-xs text-amberMain hover:underline font-semibold"><i class="fa-solid fa-copy" aria-hidden="true"></i> Copy</button>
                        </div>
                        <input type="text" id="sha512-out" readonly class="w-full bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-darkBorder rounded-xl px-4 py-2.5 text-xs font-mono text-emerald-600 dark:text-emerald-400" placeholder="SHA-512 Hash">
                    </div>
                </div>
            </section>

            <!-- Tool 4: JWT Debugger -->
            <section id="tool-jwt" class="tool-panel hidden bg-lightCard dark:bg-darkCard border border-slate-200 dark:border-darkBorder rounded-2xl p-4 sm:p-6 shadow-md space-y-6">
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-slate-900 dark:text-white mb-1 flex items-center gap-2">
                        <i class="fa-solid fa-key text-amberMain" aria-hidden="true"></i> JWT Token Debugger
                    </h2>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Decode a JWT header and payload locally. This does not verify the token signature.</p>
                </div>
                <div>
                    <label for="jwt-input" class="block text-xs font-bold mb-2 text-slate-600 dark:text-slate-300 uppercase">Encoded JWT Token</label>
                    <textarea id="jwt-input" oninput="decodeJWT()" class="w-full h-32 bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-darkBorder rounded-xl p-4 font-mono text-xs mb-4 focus:outline-none focus:border-amberMain" placeholder="Paste JWT token..."></textarea>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <div class="flex justify-between items-center mb-1">
                            <label for="jwt-header" class="text-xs font-bold text-slate-600 dark:text-slate-300 uppercase">Header</label>
                            <button onclick="copyElementText('jwt-header')" class="text-xs text-amberMain hover:underline font-semibold"><i class="fa-solid fa-copy" aria-hidden="true"></i> Copy</button>
                        </div>
                        <textarea id="jwt-header" readonly class="w-full h-36 bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-darkBorder rounded-xl p-3 font-mono text-xs text-redMain"></textarea>
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-1">
                            <label for="jwt-payload" class="text-xs font-bold text-slate-600 dark:text-slate-300 uppercase">Payload</label>
                            <button onclick="copyElementText('jwt-payload')" class="text-xs text-amberMain hover:underline font-semibold"><i class="fa-solid fa-copy" aria-hidden="true"></i> Copy</button>
                        </div>
                        <textarea id="jwt-payload" readonly class="w-full h-36 bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-darkBorder rounded-xl p-3 font-mono text-xs text-emerald-600 dark:text-emerald-400"></textarea>
                    </div>
                </div>
            </section>

            <!-- Tool 5: Tailwind Glass -->
            <section id="tool-tailwind" class="tool-panel hidden bg-lightCard dark:bg-darkCard border border-slate-200 dark:border-darkBorder rounded-2xl p-4 sm:p-6 shadow-md space-y-6">
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-slate-900 dark:text-white mb-1 flex items-center gap-2">
                        <i class="fa-solid fa-wand-magic-sparkles text-amberMain" aria-hidden="true"></i> Tailwind Glassmorphism
                    </h2>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Design frosted glass card components with live backdrop blur.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div class="space-y-4 bg-slate-50 dark:bg-slate-900 p-5 rounded-xl border border-slate-200 dark:border-darkBorder">
                        <div>
                            <label for="blur-slider" class="text-xs text-slate-600 dark:text-slate-300 block font-semibold">Blur: <span id="blur-val" class="text-amberMain">12</span>px</label>
                            <input type="range" id="blur-slider" min="0" max="30" value="12" oninput="updateGlass()" class="w-full accent-amberMain">
                        </div>
                        <div>
                            <label for="opacity-slider" class="text-xs text-slate-600 dark:text-slate-300 block font-semibold">Opacity: <span id="opacity-val" class="text-amberMain">0.2</span></label>
                            <input type="range" id="opacity-slider" min="0.05" max="0.8" step="0.05" value="0.2" oninput="updateGlass()" class="w-full accent-amberMain">
                        </div>
                    </div>
                    
                    <!-- High-Contrast Visual Background -->
                    <div class="relative h-48 rounded-xl flex items-center justify-center p-6 bg-[#0B0F19] shadow-inner overflow-hidden border border-slate-700">
                        <div class="absolute w-28 h-28 bg-red-500 rounded-full blur-xl -top-6 -left-6 opacity-90 pointer-events-none"></div>
                        <div class="absolute w-28 h-28 bg-amber-400 rounded-full blur-xl top-1/2 -right-6 opacity-90 pointer-events-none"></div>
                        <div class="absolute w-28 h-28 bg-emerald-400 rounded-full blur-xl -bottom-6 left-10 opacity-90 pointer-events-none"></div>

                        <!-- Live Glass Card -->
                        <div id="glass-preview" class="relative z-10 px-6 py-5 rounded-2xl text-center border border-white/50 text-white font-bold text-sm shadow-2xl" style="backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); background-color: rgba(255, 255, 255, 0.2);">
                            ✨ Glass Card Preview
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex justify-between items-center mb-1">
                        <label for="glass-css-output" class="text-xs font-bold text-slate-600 dark:text-slate-300 uppercase">Generated CSS / Tailwind Code</label>
                        <button onclick="copyElementText('glass-css-output')" class="text-xs text-amberMain hover:underline font-semibold"><i class="fa-solid fa-copy" aria-hidden="true"></i> Copy Code</button>
                    </div>
                    <input type="text" id="glass-css-output" readonly value="backdrop-filter: blur(12px); background-color: rgba(255, 255, 255, 0.2);" class="w-full bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-darkBorder rounded-xl px-4 py-2.5 text-xs font-mono text-emerald-600 dark:text-emerald-400">
                </div>
            </section>

            <!-- Tool 6: UUID -->
            <section id="tool-uuid" class="tool-panel hidden bg-lightCard dark:bg-darkCard border border-slate-200 dark:border-darkBorder rounded-2xl p-4 sm:p-6 shadow-md space-y-6">
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-slate-900 dark:text-white mb-1 flex items-center gap-2">
                        <i class="fa-solid fa-fingerprint text-amberMain" aria-hidden="true"></i> UUID v4 Generator
                    </h2>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Generate version 4 UUIDs using your browser’s secure random generator.</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-2">
                    <label for="uuid-output" class="sr-only">UUID Output</label>
                    <input type="text" id="uuid-output" readonly class="w-full bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-darkBorder rounded-xl px-4 py-3 font-mono text-xs sm:text-sm text-emerald-600 dark:text-emerald-400">
                    <div class="flex gap-2">
                        <button onclick="generateUUID()" class="flex-1 sm:flex-none px-6 bg-amberMain hover:bg-amberHover text-slate-900 rounded-xl text-xs font-bold py-3 sm:py-0 transition">Generate</button>
                        <button onclick="copyElementText('uuid-output')" class="px-4 bg-slate-200 dark:bg-slate-800 hover:bg-slate-300 text-slate-800 dark:text-slate-200 rounded-xl text-xs font-bold transition" aria-label="Copy UUID"><i class="fa-solid fa-copy" aria-hidden="true"></i></button>
                    </div>
                </div>
            </section>

            <!-- Tool 7: Slugify -->
            <section id="tool-slug" class="tool-panel hidden bg-lightCard dark:bg-darkCard border border-slate-200 dark:border-darkBorder rounded-2xl p-4 sm:p-6 shadow-md space-y-6">
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-slate-900 dark:text-white mb-1 flex items-center gap-2">
                        <i class="fa-solid fa-link text-amberMain" aria-hidden="true"></i> URL Slugify Generator
                    </h2>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Transform titles and strings into clean URL slugs.</p>
                </div>
                <div>
                    <label for="slug-input" class="block text-xs font-bold mb-2 text-slate-600 dark:text-slate-300 uppercase">Input Title</label>
                    <input type="text" id="slug-input" oninput="generateSlug()" class="w-full bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-darkBorder rounded-xl px-4 py-3 text-sm mb-4 focus:outline-none focus:border-amberMain" placeholder="Enter blog title...">
                </div>
                <div class="flex gap-2">
                    <label for="slug-output" class="sr-only">Slug Output</label>
                    <input type="text" id="slug-output" readonly class="w-full bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-darkBorder rounded-xl px-4 py-3 font-mono text-xs sm:text-sm text-emerald-600 dark:text-emerald-400">
                    <button onclick="copyElementText('slug-output')" class="px-4 bg-amberMain hover:bg-amberHover text-slate-900 rounded-xl text-xs font-bold transition"><i class="fa-solid fa-copy" aria-hidden="true"></i> Copy</button>
                </div>
            </section>

            <!-- Tool 8: JSON Beautifier -->
            <section id="tool-json-formatter" class="tool-panel hidden bg-lightCard dark:bg-darkCard border border-slate-200 dark:border-darkBorder rounded-2xl p-4 sm:p-6 shadow-md space-y-6">
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-slate-900 dark:text-white mb-1 flex items-center gap-2">
                        <i class="fa-solid fa-code text-amberMain" aria-hidden="true"></i> JSON Beautifier & Validator
                    </h2>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Format, prettify, or minify JSON objects and arrays safely.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="json-raw-input" class="block text-xs font-bold mb-2 text-slate-600 dark:text-slate-300 uppercase">Raw JSON Input</label>
                        <textarea id="json-raw-input" class="w-full h-48 bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-darkBorder rounded-xl p-4 font-mono text-xs mb-4 focus:outline-none focus:border-amberMain" placeholder='{"name":"Ali"}'></textarea>
                        <div class="flex gap-2">
                            <button onclick="formatJSON(true)" class="flex-1 bg-amberMain hover:bg-amberHover text-slate-900 font-bold py-2.5 rounded-xl text-xs transition">Beautify</button>
                            <button onclick="formatJSON(false)" class="flex-1 bg-redMain hover:bg-redHover text-white font-bold py-2.5 rounded-xl text-xs transition">Minify</button>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <label for="json-formatted-output" class="text-xs font-bold text-slate-600 dark:text-slate-300 uppercase">Formatted Result</label>
                            <button onclick="copyElementText('json-formatted-output')" class="text-xs text-amberMain hover:underline font-semibold"><i class="fa-solid fa-copy" aria-hidden="true"></i> Copy Output</button>
                        </div>
                        <textarea id="json-formatted-output" readonly class="w-full h-56 bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-darkBorder rounded-xl p-4 font-mono text-xs text-emerald-600 dark:text-emerald-400"></textarea>
                    </div>
                </div>
            </section>

            <!-- Tool 9: Password Generator -->
            <section id="tool-password" class="tool-panel hidden bg-lightCard dark:bg-darkCard border border-slate-200 dark:border-darkBorder rounded-2xl p-4 sm:p-6 shadow-md space-y-6">
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-slate-900 dark:text-white mb-1 flex items-center gap-2">
                        <i class="fa-solid fa-lock text-amberMain" aria-hidden="true"></i> Secure Password Generator
                    </h2>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Generate high-entropy cryptographic passwords instantly.</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-2">
                    <label for="pass-output" class="sr-only">Password Output</label>
                    <input type="text" id="pass-output" readonly class="w-full bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-darkBorder rounded-xl px-4 py-3 font-mono text-xs sm:text-sm text-amberMain font-bold">
                    <div class="flex gap-2">
                        <button onclick="generatePassword()" class="flex-1 sm:flex-none px-6 bg-redMain hover:bg-redHover text-white rounded-xl text-xs font-bold py-3 sm:py-0 transition">Generate</button>
                        <button onclick="copyElementText('pass-output')" class="px-4 bg-amberMain hover:bg-amberHover text-slate-900 rounded-xl text-xs font-bold transition" aria-label="Copy Password"><i class="fa-solid fa-copy" aria-hidden="true"></i></button>
                    </div>
                </div>
            </section>

            <!-- Tool 10: HTML Escaper -->
            <section id="tool-html-escape" class="tool-panel hidden bg-lightCard dark:bg-darkCard border border-slate-200 dark:border-darkBorder rounded-2xl p-4 sm:p-6 shadow-md space-y-6">
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-slate-900 dark:text-white mb-1 flex items-center gap-2">
                        <i class="fa-solid fa-code-compare text-amberMain" aria-hidden="true"></i> HTML Entity Escaper
                    </h2>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Escape and unescape HTML special characters in real-time.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="html-input" class="block text-xs font-bold mb-2 text-slate-600 dark:text-slate-300 uppercase">HTML String Input</label>
                        <textarea id="html-input" oninput="escapeHTML()" class="w-full h-48 bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-darkBorder rounded-xl p-4 font-mono text-xs focus:outline-none focus:border-amberMain" placeholder="Type HTML string..."></textarea>
                        <div class="flex gap-2 mt-4">
                            <button onclick="escapeHTML()" class="flex-1 bg-amberMain hover:bg-amberHover text-slate-900 font-bold py-2.5 rounded-xl text-xs transition">Escape</button>
                            <button onclick="unescapeHTML()" class="flex-1 bg-redMain hover:bg-redHover text-white font-bold py-2.5 rounded-xl text-xs transition">Unescape</button>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <label for="html-output" class="text-xs font-bold text-slate-600 dark:text-slate-300 uppercase">Escaped Result</label>
                            <button onclick="copyElementText('html-output')" class="text-xs text-amberMain hover:underline font-semibold"><i class="fa-solid fa-copy" aria-hidden="true"></i> Copy Output</button>
                        </div>
                        <textarea id="html-output" readonly class="w-full h-56 bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-darkBorder rounded-xl p-4 font-mono text-xs text-emerald-600 dark:text-emerald-400"></textarea>
                    </div>
                </div>
            </section>

        </main>
    </div>

    <!-- Footer Ad Banner Space -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full mb-6">
        <div class="bg-slate-200 dark:bg-darkCard border border-dashed border-slate-400 dark:border-darkBorder rounded-xl p-4 text-center text-xs text-slate-500 dark:text-slate-400">
            <span>[ Advertisement Space - Footer Banner / Ad Network Script Tag ]</span>
        </div>
    </div>

    <!-- Footer with Links -->
    <footer class="mt-auto border-t border-slate-200 dark:border-darkBorder bg-lightCard dark:bg-darkCard py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-slate-500 dark:text-slate-400">
                <p>&copy; 2026 DevTool Nest. All rights reserved. Built for developers.</p>
                <div class="flex flex-wrap justify-center gap-6 font-medium">
                    <button onclick="openModal('aboutModal')" class="hover:text-amberMain transition">About Us</button>
                    <button onclick="openModal('privacyModal')" class="hover:text-amberMain transition">Privacy Policy</button>
                    <button onclick="openModal('termsModal')" class="hover:text-amberMain transition">Terms & Conditions</button>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modals for Footer Pages -->
    <div id="aboutModal" class="fixed inset-0 bg-black/60 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-lightCard dark:bg-darkCard border border-slate-200 dark:border-darkBorder rounded-2xl max-w-lg w-full p-6 space-y-4 shadow-2xl">
            <h3 class="text-lg font-bold text-slate-900 dark:text-white">About DevTool Nest</h3>
            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                DevTool Nest is a collection of browser-based utilities for common developer tasks. Tool inputs are processed in your browser by this page; loading this page may still contact third-party CDN providers for its libraries and styles.
            </p>
            <button onclick="closeModal('aboutModal')" class="w-full bg-amberMain hover:bg-amberHover text-slate-900 font-bold py-2 rounded-xl text-xs transition">Close</button>
        </div>
    </div>

    <div id="privacyModal" class="fixed inset-0 bg-black/60 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-lightCard dark:bg-darkCard border border-slate-200 dark:border-darkBorder rounded-2xl max-w-lg w-full p-6 space-y-4 shadow-2xl">
            <h3 class="text-lg font-bold text-slate-900 dark:text-white">Privacy Policy</h3>
            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                The tools on this page process the values you enter in your browser and do not intentionally send those values to a DevTool Nest application server. This page loads styling and icons from third-party CDNs, which receive normal connection information. Hosting, analytics, ads, or other scripts added later may change this behavior; review the live site configuration before publishing a final privacy policy.
            </p>
            <button onclick="closeModal('privacyModal')" class="w-full bg-amberMain hover:bg-amberHover text-slate-900 font-bold py-2 rounded-xl text-xs transition">Close</button>
        </div>
    </div>

    <div id="termsModal" class="fixed inset-0 bg-black/60 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-lightCard dark:bg-darkCard border border-slate-200 dark:border-darkBorder rounded-2xl max-w-lg w-full p-6 space-y-4 shadow-2xl">
            <h3 class="text-lg font-bold text-slate-900 dark:text-white">Terms & Conditions</h3>
            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                These browser-based utilities are provided for convenience without a warranty. Check all generated output before using it in production. Do not paste secrets, access tokens, passwords, or other sensitive information into tools unless you understand the risks of the environment where this page is hosted.
            </p>
            <button onclick="closeModal('termsModal')" class="w-full bg-amberMain hover:bg-amberHover text-slate-900 font-bold py-2 rounded-xl text-xs transition">Close</button>
        </div>
    </div>

    <div id="app-status" class="fixed bottom-4 left-1/2 -translate-x-1/2 z-[100] hidden rounded-xl bg-slate-900 px-4 py-3 text-sm text-white shadow-xl" role="status" aria-live="polite"></div>

    <!-- Script Application Logic -->
    <script>
        function toggleTheme() {
            var html = document.getElementById('html-root');
            var icon = document.getElementById('theme-icon');
            var text = document.getElementById('theme-text');
            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
                html.classList.add('light');
                icon.className = "fa-solid fa-moon text-amberMain";
                text.innerText = "Dark Mode";
            } else {
                html.classList.remove('light');
                html.classList.add('dark');
                icon.className = "fa-solid fa-sun text-amberMain";
                text.innerText = "Light Mode";
            }
        }

        function toggleMobileSidebar() {
            var sidebar = document.getElementById('sidebar-container');
            if (sidebar.classList.contains('hidden')) {
                sidebar.classList.remove('hidden');
                sidebar.classList.add('block', 'mb-6');
            } else {
                sidebar.classList.remove('block', 'mb-6');
                sidebar.classList.add('hidden');
            }
        }

        function switchTool(toolId) {
            var panels = document.querySelectorAll('.tool-panel');
            for(var i=0; i<panels.length; i++) {
                panels[i].classList.add('hidden');
            }
            var buttons = document.querySelectorAll('.sidebar-btn');
            for(var j=0; j<buttons.length; j++) {
                buttons[j].className = "sidebar-btn w-full flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-800";
            }
            var targetPanel = document.getElementById('tool-' + toolId);
            if (targetPanel) {
                targetPanel.classList.remove('hidden');
            }
            var activeBtn = document.getElementById('nav-' + toolId);
            if (activeBtn) {
                activeBtn.className = "sidebar-btn active w-full flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition";
            }

            if (window.innerWidth < 1024) {
                var sidebar = document.getElementById('sidebar-container');
                if (sidebar) sidebar.classList.add('hidden');
            }
        }

        function filterTools() {
            var searchInput = document.getElementById('tool-search');
            if (!searchInput) return;
            var query = searchInput.value.toLowerCase();
            var buttons = document.querySelectorAll('#sidebar-nav button');
            for(var i=0; i<buttons.length; i++) {
                var text = buttons[i].innerText.toLowerCase();
                buttons[i].style.display = text.indexOf(query) !== -1 ? 'flex' : 'none';
            }
        }

        function openModal(modalId) {
            var modal = document.getElementById(modalId);
            if (modal) modal.classList.remove('hidden');
        }

        function closeModal(modalId) {
            var modal = document.getElementById(modalId);
            if (modal) modal.classList.add('hidden');
        }

        async function copyElementText(elementId) {
            var elem = document.getElementById(elementId);
            if (!elem) return;
            var textToCopy = ('value' in elem) ? elem.value : (elem.innerText || elem.textContent || '');
            if (!textToCopy) {
                showStatus('Nothing to copy.');
                return;
            }
            try {
                if (navigator.clipboard && window.isSecureContext) {
                    await navigator.clipboard.writeText(textToCopy);
                } else {
                    var helper = document.createElement('textarea');
                    helper.value = textToCopy;
                    helper.setAttribute('readonly', '');
                    helper.style.position = 'fixed';
                    helper.style.opacity = '0';
                    document.body.appendChild(helper);
                    helper.select();
                    var copied = document.execCommand('copy');
                    helper.remove();
                    if (!copied) throw new Error('Copy command was not available');
                }
                showStatus('Copied to clipboard.');
            } catch (error) {
                showStatus('Could not copy automatically. Select the output and copy it manually.');
            }
        }

        function showStatus(message) {
            var status = document.getElementById('app-status');
            if (!status) return;
            status.textContent = message;
            status.classList.remove('hidden');
            if (status._hideTimer) clearTimeout(status._hideTimer);
            status._hideTimer = setTimeout(function () { status.classList.add('hidden'); }, 2600);
        }

        function convertJsonToSql() {
            var output = document.getElementById('sql-output');
            var input = document.getElementById('json-input');
            if (!output || !input) return;
            try {
                var raw = input.value.trim();
                if (!raw) throw new Error('Please enter a JSON object or a non-empty array of objects.');
                var parsed = JSON.parse(raw);
                var rows = Array.isArray(parsed) ? parsed : [parsed];
                if (!rows.length) throw new Error('The JSON array is empty.');
                if (!rows.every(function (row) { return row !== null && typeof row === 'object' && !Array.isArray(row); })) {
                    throw new Error('Every array item must be a JSON object.');
                }
                var keys = [];
                rows.forEach(function (row) {
                    Object.keys(row).forEach(function (key) { if (!keys.includes(key)) keys.push(key); });
                });
                if (!keys.length) throw new Error('No object properties were found to create SQL columns.');
                function quoteIdentifier(value) { return '`' + String(value).replace(/`/g, '``') + '`'; }
                function sqlValue(value) {
                    if (value === null || value === undefined) return 'NULL';
                    if (typeof value === 'number') return Number.isFinite(value) ? String(value) : 'NULL';
                    if (typeof value === 'boolean') return value ? '1' : '0';
                    var textValue = (typeof value === 'object') ? JSON.stringify(value) : String(value);
                    return "'" + textValue.replace(/\\/g, '\\\\').replace(/'/g, "''").replace(/\u0000/g, '') + "'";
                }
                var columns = keys.map(function (key) { return '  ' + quoteIdentifier(key) + ' TEXT'; }).join(',\n');
                var sql = 'CREATE TABLE `items` (\n' + columns + '\n);\n\n';
                rows.forEach(function (row) {
                    var values = keys.map(function (key) { return sqlValue(Object.prototype.hasOwnProperty.call(row, key) ? row[key] : null); });
                    sql += 'INSERT INTO `items` (' + keys.map(quoteIdentifier).join(', ') + ') VALUES (' + values.join(', ') + ');\n';
                });
                output.value = sql;
            } catch (error) {
                output.value = 'Error: ' + error.message;
            }
        }

        function encodeBase64() {
            var input = document.getElementById('base64-input');
            var output = document.getElementById('base64-output');
            if (!input || !output) return;
            try {
                var bytes = new TextEncoder().encode(input.value);
                var binary = Array.from(bytes, function (byte) { return String.fromCharCode(byte); }).join('');
                output.value = btoa(binary);
            } catch (error) {
                output.value = 'Error: This browser could not encode the input as Base64.';
            }
        }

        function decodeBase64() {
            var input = document.getElementById('base64-input');
            var output = document.getElementById('base64-output');
            if (!input || !output) return;
            try {
                var normalized = input.value.replace(/\s+/g, '');
                var binary = atob(normalized);
                var bytes = Uint8Array.from(binary, function (char) { return char.charCodeAt(0); });
                output.value = new TextDecoder('utf-8', { fatal: true }).decode(bytes);
            } catch (error) {
                output.value = 'Error: Invalid Base64 or invalid UTF-8 input.';
            }
        }

        async function generateHashes() {
            var inputElem = document.getElementById('hash-input');
            var sha256 = document.getElementById('sha256-out');
            var sha512 = document.getElementById('sha512-out');
            if (!inputElem || !sha256 || !sha512) return;
            var value = inputElem.value;
            if (!value) { sha256.value = ''; sha512.value = ''; return; }
            if (!window.crypto || !crypto.subtle || !window.TextEncoder) {
                sha256.value = 'Web Crypto requires HTTPS or localhost in a supported browser.';
                sha512.value = 'Web Crypto requires HTTPS or localhost in a supported browser.';
                return;
            }
            try {
                var bytes = new TextEncoder().encode(value);
                var results = await Promise.all([
                    crypto.subtle.digest('SHA-256', bytes),
                    crypto.subtle.digest('SHA-512', bytes)
                ]);
                function toHex(buffer) { return Array.from(new Uint8Array(buffer)).map(function (b) { return b.toString(16).padStart(2, '0'); }).join(''); }
                if (inputElem.value === value) {
                    sha256.value = toHex(results[0]);
                    sha512.value = toHex(results[1]);
                }
            } catch (error) {
                sha256.value = 'Unable to generate hash in this browser.';
                sha512.value = 'Unable to generate hash in this browser.';
            }
        }

        function decodeJWT() {
            var input = document.getElementById('jwt-input');
            var header = document.getElementById('jwt-header');
            var payload = document.getElementById('jwt-payload');
            if (!input || !header || !payload) return;
            var token = input.value.trim();
            if (!token) { header.value = ''; payload.value = ''; return; }
            try {
                var parts = token.split('.');
                if (parts.length !== 3 || !parts[0] || !parts[1]) throw new Error('Expected a three-part JWT.');
                function decodePart(part) {
                    var base64 = part.replace(/-/g, '+').replace(/_/g, '/');
                    while (base64.length % 4) base64 += '=';
                    var binary = atob(base64);
                    var bytes = Uint8Array.from(binary, function (ch) { return ch.charCodeAt(0); });
                    var decoded = new TextDecoder('utf-8', { fatal: true }).decode(bytes);
                    return JSON.stringify(JSON.parse(decoded), null, 2);
                }
                header.value = decodePart(parts[0]);
                payload.value = decodePart(parts[1]);
            } catch (error) {
                header.value = 'Unable to decode JWT header.';
                payload.value = 'Unable to decode JWT payload: ' + error.message;
            }
        }

        function updateGlass() {
            var blur = document.getElementById('blur-slider').value;
            var opacity = document.getElementById('opacity-slider').value;
            document.getElementById('blur-val').innerText = blur;
            document.getElementById('opacity-val').innerText = opacity;
            
            var preview = document.getElementById('glass-preview');
            preview.style.backdropFilter = "blur(" + blur + "px)";
            preview.style.webkitBackdropFilter = "blur(" + blur + "px)";
            preview.style.backgroundColor = "rgba(255, 255, 255, " + opacity + ")";
            
            document.getElementById('glass-css-output').value = "backdrop-filter: blur(" + blur + "px); background-color: rgba(255, 255, 255, " + opacity + ");";
        }

        function generateUUID() {
            var output = document.getElementById('uuid-output');
            if (!output) return;
            if (window.crypto && typeof crypto.randomUUID === 'function') {
                output.value = crypto.randomUUID();
                return;
            }
            if (!window.crypto || typeof crypto.getRandomValues !== 'function') {
                output.value = 'Secure random generation is unavailable in this browser.';
                return;
            }
            var bytes = new Uint8Array(16);
            crypto.getRandomValues(bytes);
            bytes[6] = (bytes[6] & 0x0f) | 0x40;
            bytes[8] = (bytes[8] & 0x3f) | 0x80;
            var hex = Array.from(bytes, function (b) { return b.toString(16).padStart(2, '0'); }).join('');
            output.value = hex.slice(0, 8) + '-' + hex.slice(8, 12) + '-' + hex.slice(12, 16) + '-' + hex.slice(16, 20) + '-' + hex.slice(20);
        }
        generateUUID();

        function generateSlug() {
            var text = document.getElementById('slug-input').value;
            document.getElementById('slug-output').value = text.toLowerCase().normalize('NFKD').replace(/[\u0300-\u036f]/g, '').replace(/[^a-z0-9 -]/g, '').trim().replace(/\s+/g, '-').replace(/-+/g, '-');
        }

        function formatJSON(beautify) {
            try {
                var rawInput = document.getElementById('json-raw-input').value;
                if (!rawInput.trim()) return;
                var parsed = JSON.parse(rawInput);
                document.getElementById('json-formatted-output').value = JSON.stringify(parsed, null, beautify ? 2 : 0);
            } catch(e) { document.getElementById('json-formatted-output').value = "Invalid JSON: " + e.message; }
        }

        function generatePassword() {
            var output = document.getElementById('pass-output');
            if (!output) return;
            if (!window.crypto || typeof crypto.getRandomValues !== 'function') {
                output.value = 'Secure random generation requires a supported browser on HTTPS or localhost.';
                return;
            }
            var chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789@#$%^&*!';
            var pass = '';
            var bytes = new Uint8Array(16);
            var limit = Math.floor(256 / chars.length) * chars.length;
            while (pass.length < 16) {
                crypto.getRandomValues(bytes);
                for (var i = 0; i < bytes.length && pass.length < 16; i++) {
                    if (bytes[i] < limit) pass += chars[bytes[i] % chars.length];
                }
            }
            output.value = pass;
        }
        generatePassword();

        function escapeHTML() {
            var val = document.getElementById('html-input').value;
            document.getElementById('html-output').value = val.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#39;");
        }
        function unescapeHTML() {
            var val = document.getElementById('html-input').value;
            var doc = new DOMParser().parseFromString(val, "text/html");
            document.getElementById('html-output').value = doc.documentElement.textContent;
        }
    </script>
</body>
</html>
