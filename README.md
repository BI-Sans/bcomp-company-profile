# B-COMP — Bekasi Computer

Corporate company profile website for **Bekasi Computer (B-COMP)** built with Laravel, Blade, Vite and Tailwind CSS.

## Features

- Responsive corporate landing page
- Automatic 3-slide hero carousel
- About B-COMP
- Services
- Anonymous corporate client testimonials
- Portfolio / projects
- Technology stack
- Google Maps embed
- WhatsApp contact integration
- Responsive mobile navigation
- Production Vite build without source maps
- Vercel container configuration

## Requirements for Local Development

- PHP 8.2+
- Composer 2+
- Node.js 20+
- npm

## Local Installation

```bash
composer install
```

Copy the environment file.

Windows CMD:

```cmd
copy .env.example .env
```

PowerShell:

```powershell
Copy-Item .env.example .env
```

macOS/Linux:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Install frontend dependencies:

```bash
npm install
```

Run Vite:

```bash
npm run dev
```

Open another terminal and run Laravel:

```bash
php artisan serve
```

Open:

```text
http://127.0.0.1:8000
```

## Production Test

Build frontend assets:

```bash
npm run build
```

Then stop Vite and run:

```bash
php artisan serve
```

The website should still display correctly at `http://127.0.0.1:8000`.

## Contact Form

This GitHub/Vercel-ready version does **not require a database**. The contact form creates a formatted WhatsApp message and opens B-COMP WhatsApp directly.

WhatsApp:

```text
+62 857 8101 0372
```

## GitHub

Do not commit:

- `.env`
- `vendor/`
- `node_modules/`

The provided `.gitignore` already excludes them.

Basic upload:

```bash
git init
git add .
git commit -m "Initial B-COMP Laravel website"
git branch -M main
git remote add origin https://github.com/YOUR-USERNAME/YOUR-REPOSITORY.git
git push -u origin main
```

## Vercel

This project contains `Dockerfile.vercel` for a Laravel container deployment.

Add these environment variables in Vercel:

```env
APP_NAME=B-COMP
APP_ENV=production
APP_DEBUG=false
APP_URL=https://YOUR-PROJECT.vercel.app
APP_KEY=base64:YOUR_GENERATED_KEY
LOG_CHANNEL=stderr
SESSION_DRIVER=array
CACHE_STORE=array
```

Generate `APP_KEY` locally with:

```bash
php artisan key:generate --show
```

Do not add your real `.env` file to GitHub.

## Important Note

HTML/CSS/JavaScript delivered to a browser can still be inspected with View Source or DevTools. Laravel keeps server-side PHP, controllers, environment variables and application logic on the server. The Vite production build minifies frontend assets and disables source maps.

## B-COMP Contact

- Email: bekasi.computer22@gmail.com
- WhatsApp: +62 857 8101 0372
- Office: Bekasi, Indonesia

© 2026 Bekasi Computer (B-COMP).
