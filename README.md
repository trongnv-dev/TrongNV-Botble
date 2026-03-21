# TrongNV CMS

A personal CMS project built with **Botble CMS** on top of **Laravel**.

This project is used to:
- Publish personal news/updates
- Write guides/tutorials
- Manage and publish courses

## Tech Stack

- PHP 8.2+ / 8.3
- Laravel 12
- Botble CMS (modular core/packages/plugins/themes)
- MySQL (or compatible database)
- Node.js + Laravel Mix for frontend assets

## Project Structure

```text
platform/
├── core/      # Botble core modules
├── packages/  # Shared packages
├── plugins/   # Feature plugins (blog, ecommerce, etc.)
└── themes/    # Frontend themes
```

Other important folders:
- `app/` - Laravel application code
- `config/` - Laravel and Botble configuration
- `database/` - migrations, factories, seeders
- `resources/` - frontend resources
- `routes/` - route definitions

## Local Setup

### 1) Install dependencies

```bash
composer install
npm install
```

### 2) Environment setup

```bash
cp .env.example .env
php artisan key:generate
```

Update database settings in `.env`, then run:

```bash
php artisan migrate --force
```

### 3) Build assets

```bash
npm run dev
# or production build
npm run prod
```

### 4) Start development server

```bash
php artisan serve
```

Open: `http://127.0.0.1:8000`

## Useful Commands

```bash
# Laravel/Botble
php artisan test
php artisan cms:plugin:list
php artisan cms:plugin:activate {plugin}
php artisan cms:theme:activate {theme}
php artisan cms:publish:assets

# Frontend assets
npm run dev
npm run watch
npm run prod

# Code quality
./vendor/bin/pint
./vendor/bin/phpstan analyse
```

## Content Workflow

- Use Botble admin panel to create and manage:
  - News posts
  - Guides/tutorials
  - Course content
- Organize content with categories/tags/slugs
- Manage SEO via Botble SEO tools

## Notes

- This is a personal project and may evolve frequently.
- Botble modules/plugins/themes can be extended under `platform/`.

## License

This project is for personal use.