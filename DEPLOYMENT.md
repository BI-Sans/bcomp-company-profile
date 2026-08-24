# B-COMP: GitHub & Vercel Deployment

## 1. Test locally

From the project root:

```bash
composer install
```

Create `.env`:

Windows CMD:

```cmd
copy .env.example .env
```

PowerShell:

```powershell
Copy-Item .env.example .env
```

Then:

```bash
php artisan key:generate
npm install
npm run build
php artisan serve
```

Open `http://127.0.0.1:8000`.

The production test should work without `npm run dev` because assets are loaded from `public/build`.

## 2. Prepare GitHub

Do not upload `.env`, `vendor`, or `node_modules`.

```bash
git init
git add .
git status
git commit -m "Initial B-COMP Laravel website"
git branch -M main
git remote add origin https://github.com/YOUR-USERNAME/YOUR-REPOSITORY.git
git push -u origin main
```

## 3. Import to Vercel

1. Open Vercel Dashboard.
2. Select **Add New > Project**.
3. Import your GitHub repository.
4. Keep **Root Directory** at the repository root.
5. The included `Dockerfile.vercel` is used for the Laravel/PHP container deployment.

## 4. Vercel environment variables

Generate a production application key locally:

```bash
php artisan key:generate --show
```

Add these values in **Vercel > Project > Settings > Environment Variables**:

```env
APP_NAME=B-COMP
APP_ENV=production
APP_DEBUG=false
APP_URL=https://YOUR-PROJECT.vercel.app
APP_KEY=base64:PASTE-YOUR-KEY-HERE
LOG_CHANNEL=stderr
LOG_LEVEL=error
SESSION_DRIVER=array
CACHE_STORE=array
```

No database is required by this version. Contact form submissions are sent to WhatsApp.

After the first deployment gives you the actual Vercel URL, update `APP_URL` and redeploy.

## 5. Future updates

For every website change:

```bash
git add .
git commit -m "Update B-COMP website"
git push
```

Vercel will automatically create a new deployment from the GitHub push.
