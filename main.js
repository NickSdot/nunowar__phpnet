document.addEventListener('DOMContentLoaded', () => {
    const btn = document.querySelector('button[aria-label*="theme"]');
    const hero = document.querySelector('.js-hero');
    const icons = [btn?.querySelector('svg:nth-of-type(1)'), btn?.querySelector('svg:nth-of-type(2)'), btn?.querySelector('svg:nth-of-type(3)')];
    const themeOrder = ['light', 'dark', 'system'];
    const themeConfig = {
        light: { label: 'Switch to dark theme', video: 'bg-light.mp4', opacity: 'opacity-25' },
        dark: { label: 'Switch to system theme', video: 'bg-dark.mp4', opacity: 'opacity-35' },
        system: { label: 'Switch to light theme', video: null },
    };

    btn?.addEventListener('click', () => {
        const current = localStorage.theme || 'system';
        const nextIndex = (themeOrder.indexOf(current) + 1) % themeOrder.length;
        const newTheme = themeOrder[nextIndex];
        localStorage.theme = newTheme;
        applyTheme(newTheme);
    });

    function createVideo(src, opacity) {
        const video = document.createElement('video');
        Object.assign(video, { autoplay: true, muted: true, loop: true, playsInline: true, controls: false });
        video.classList.add('opacity-0');
        ['playsinline', 'disablePictureInPicture'].forEach(attr => video.setAttribute(attr, ''));
        video.setAttribute('controlsList', 'nodownload nofullscreen noremoteplayback');

        const source = document.createElement('source');
        source.src = src;
        source.type = 'video/mp4';
        video.appendChild(source);

        video.oncanplay = () => {
            video.classList.remove('opacity-0', opacity);
            video.classList.add(opacity);
        };

        return video;
    }

    function applyTheme(theme) {
        const prefersDark = matchMedia('(prefers-color-scheme: dark)').matches;
        const isDark = theme === 'dark' || (theme === 'system' && prefersDark);

        document.documentElement.classList.toggle('dark', isDark);
        btn?.setAttribute('aria-label', themeConfig[theme].label);

        icons.forEach((icon, i) => icon?.classList.toggle('hidden', themeOrder[i] !== theme));

        if (!hero) return;

        const existingVideo = hero.querySelector('video');
        if (existingVideo) existingVideo.remove();

        // Determine which video to use
        let videoSrc = null;
        let videoOpacity = null;

        if (theme === 'system') {
            // In system mode, follow system preference
            const systemTheme = prefersDark ? 'dark' : 'light';
            const config = themeConfig[systemTheme];
            videoSrc = config.video;
            videoOpacity = config.opacity;
        } else if (themeConfig[theme].video) {
            const config = themeConfig[theme];
            videoSrc = config.video;
            videoOpacity = config.opacity;
        }

        if (videoSrc) {
            const video = createVideo(videoSrc, videoOpacity);
            hero.insertBefore(video, hero.firstChild);
        }
    }

    const savedTheme = localStorage.theme || 'system';
    applyTheme(savedTheme);
    matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
        if (!localStorage.theme || localStorage.theme === 'system') applyTheme('system');
    });

    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const navMenu = document.getElementById('js-nav-menu');
    const [menuIcon, closeIcon] = ['menu-icon', 'close-icon'].map(id => document.getElementById(id));

    const toggleMenu = () => {
        const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
        navMenu.style.display = isExpanded ? 'none' : 'block';
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
        mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
    };

    mobileMenuButton?.addEventListener('click', toggleMenu);
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            navMenu.style.display = '';
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            mobileMenuButton.setAttribute('aria-expanded', 'false');
        }
    });

    function highlightCode(element) {
        const codeElement = element.querySelector('code') || element;
        const code = codeElement.textContent;
        const escapeHtml = str => str.replace(/[<>&"]/g, c => ({ '<': '&lt;', '>': '&gt;', '&': '&amp;', '"': '&quot;' })[c]);

        const KEYWORDS = new Set(['abstract', 'and', 'array', 'as', 'break', 'callable', 'case', 'catch', 'class', 'clone', 'const', 'continue', 'declare', 'default', 'die', 'do', 'echo', 'else', 'elseif', 'empty', 'enddeclare', 'endfor', 'endforeach', 'endif', 'endswitch', 'endwhile', 'eval', 'exit', 'extends', 'final', 'finally', 'fn', 'for', 'foreach', 'function', 'global', 'goto', 'if', 'implements', 'include', 'include_once', 'instanceof', 'insteadof', 'interface', 'isset', 'list', 'namespace', 'new', 'or', 'print', 'private', 'protected', 'public', 'readonly', 'require', 'require_once', 'return', 'static', 'switch', 'throw', 'trait', 'try', 'unset', 'use', 'var', 'while', 'xor', 'yield']);
        const LITERALS = new Set(['false', 'true', 'null']);
        const TYPES = new Set(['bool', 'boolean', 'int', 'integer', 'float', 'double', 'string', 'array', 'object', 'resource', 'mixed', 'void', 'iterable', 'self', 'parent', 'static']);
        const OPERATORS_3 = ['==='];
        const OPERATORS_2 = ['==', '!=', '<=', '>=', '=>', '++', '--', '&&', '||', '<<', '>>', '->'];
        const OPERATORS_1 = '=+-*/%<>!&|^~?:';

        function tokenize(text) {
            const tokens = [];
            let i = 0;

            while (i < text.length) {
                const char = text[i];
                const nextChar = text[i + 1];

                if ((char === '/' && nextChar === '/') || char === '#') {
                    const j = text.indexOf('\n', i) >= 0 ? text.indexOf('\n', i) : text.length;
                    tokens.push({ type: 'comment', value: text.slice(i, j) });
                    i = j;
                    continue;
                }

                if (char === '"' || char === "'") {
                    let j = i + 1;
                    while (j < text.length && !(text[j] === char && text[j - 1] !== '\\')) j++;
                    tokens.push({ type: 'string', value: text.slice(i, j + 1) });
                    i = j + 1;
                    continue;
                }

                if (char === '$') {
                    const match = text.slice(i).match(/^\$[a-zA-Z0-9_]*/);
                    if (match) {
                        tokens.push({ type: 'variable', value: match[0] });
                        i += match[0].length;
                        continue;
                    }
                }

                if (/\d/.test(char)) {
                    const match = text.slice(i).match(/^[0-9a-fA-Fbx.]+/);
                    if (match) {
                        tokens.push({ type: 'number', value: match[0] });
                        i += match[0].length;
                        continue;
                    }
                }

                if (/[a-zA-Z_]/.test(char)) {
                    const match = text.slice(i).match(/^[a-zA-Z0-9_\\]*/);
                    const word = match[0];
                    const lower = word.toLowerCase();
                    const isConstant = /^[A-Z_][A-Z0-9_]*$/.test(word) && word.length > 1;

                    let type = 'text';
                    if (KEYWORDS.has(lower)) type = 'keyword';
                    else if (LITERALS.has(lower)) type = 'literal';
                    else if (TYPES.has(lower)) type = 'type';
                    else if (isConstant) type = 'constant';
                    else if (word.includes('\\')) type = 'class';
                    else if (/\w\s*\(/.test(text.slice(i))) type = 'function';

                    tokens.push({ type, value: word });
                    i += word.length;
                    continue;
                }

                const threeChar = text.slice(i, i + 3);
                if (OPERATORS_3.includes(threeChar)) {
                    tokens.push({ type: 'operator', value: threeChar });
                    i += 3;
                    continue;
                }

                const twoChar = text.slice(i, i + 2);
                if (OPERATORS_2.includes(twoChar)) {
                    tokens.push({ type: 'operator', value: twoChar });
                    i += 2;
                    continue;
                }

                if (OPERATORS_1.includes(char)) {
                    tokens.push({ type: 'operator', value: char });
                    i++;
                    continue;
                }

                if (/\s/.test(char)) {
                    const match = text.slice(i).match(/^\s+/);
                    tokens.push({ type: 'space', value: match[0] });
                    i += match[0].length;
                    continue;
                }

                if (';,()[]{}. '.includes(char)) {
                    tokens.push({ type: 'punctuation', value: char });
                    i++;
                    continue;
                }

                tokens.push({ type: 'text', value: char });
                i++;
            }

            return tokens;
        }

        const spanMap = { comment: 'comment', string: 'string', keyword: 'keyword', literal: 'literal', type: 'type', variable: 'variable', number: 'number', function: 'function', operator: 'operator', punctuation: 'punctuation', property: 'property', class: 'class', constant: 'constant' };

        const highlighted = tokenize(code).map(token => {
            const escaped = escapeHtml(token.value);
            return spanMap[token.type] ? `<span class="${spanMap[token.type]}">${escaped}</span>` : escaped;
        }).join('');

        codeElement.innerHTML = highlighted;
    }

    // Copy button
    document.addEventListener('click', async (e) => {
        const btn = e.target.closest('.js-copy-code');
        if (!btn?.closest('.code-container')) return;

        const code = btn.closest('.code-container').querySelector('code').textContent;
        if (!navigator.clipboard) return console.error('Clipboard API not available');

        try {
            await navigator.clipboard.writeText(code);
            const originalHTML = btn.innerHTML;
            btn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"><path d="M5 14L8.5 17.5L19 6.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
            btn.disabled = true;
            await new Promise(r => setTimeout(r, 2000));
            btn.innerHTML = originalHTML;
            btn.disabled = false;
        } catch (err) {
            console.error('Copy failed:', err);
        }
    });

    document.querySelectorAll('.js-code').forEach(highlightCode);
});
