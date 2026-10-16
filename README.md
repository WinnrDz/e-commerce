# SHOP.CO — Clothing E-Commerce

A modern clothing e-commerce demo built with **Laravel**, **Livewire**, and **Tailwind CSS**. The project is inspired by contemporary fashion storefronts and focuses on product discovery, variant selection, shopping-cart interactions, and an admin area.

> **Demo notice:** This is a demonstration project, not a live production store. Demo data or changes may be temporary depending on the deployment configuration. Do not enter real payment details or sensitive personal information.

## Features

- **Product catalogue** — browse clothing products by category.
- **Product variants** — products can have color and size options, with optional variant price adjustments.
- **Product imagery** — support for multiple product images.
- **Filtering** — narrow products using price ranges, colors, and tags.
- **Shopping cart** — add product variants and manage cart quantities.
- **Reviews and ratings** — product reviews and rating information.
- **Admin area** — administrative product and store-management screens.
- **Responsive interface** — designed for a modern shopping experience across screen sizes.
- **Seeded demo content** — populate the application with example categories, colors, sizes, tags, and products.

*The exact availability of features may depend on the current branch and deployment configuration.*

## Tech Stack

- **Backend:** PHP, Laravel 12
- **Interactive UI:** Livewire 4
- **Frontend styling:** Tailwind CSS 4
- **Database:** MySQL for the standard local setup
- **ORM:** Laravel Eloquent
- **Local development:** Laragon (Windows) or another compatible PHP environment

## Getting Started

### Requirements

Install the following before setting up the project:

- PHP version supported by the Laravel version in this repository
- Composer
- Node.js and npm
- MySQL or another database configured for the application
- Git

### 1. Clone the repository

```bash
git clone https://github.com/WinnrDz/e-commerce.git
cd e-commerce
```

### 2. Install dependencies

```bash
composer install
npm install
```

### 3. Configure the environment

Create your local environment file:

```bash
cp .env.example .env
```

On Windows Command Prompt, you can use:

```bat
copy .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

### 4. Configure the database

Create a database for the project, then update the database settings in `.env`:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce
DB_USERNAME=root
DB_PASSWORD=
```

Adjust the database name, username, and password to match your local environment.

### 5. Run migrations and seed demo data

```bash
php artisan migrate --seed
```

This runs the database migrations and the configured database seeder. If the seeder expects product mockup images, make sure the required image folders and files are present in the project before running it.

### 6. Build frontend assets

For development:

```bash
npm run dev
```

Or build production assets:

```bash
npm run build
```

### 7. Start the Laravel server

In a separate terminal:

```bash
php artisan serve
```

Open the local URL printed by Artisan, usually `http://127.0.0.1:8000`.

If the application uses Laravel's public storage disk for uploaded or seeded images, create the storage link when needed:

```bash
php artisan storage:link
```

## Project Structure

Common Laravel directories used by the application:

```text
app/
  Livewire/       # Livewire components
  Models/         # Eloquent models
database/
  migrations/     # Database schema
  seeders/        # Demo data
resources/
  views/          # Blade templates and layouts
  css/            # Stylesheets
  js/             # JavaScript
public/
  images/         # Public image assets and mockups
routes/
  web.php         # Web routes
storage/
  app/public/     # Publicly stored files
```

The exact file organization may vary as the project evolves.

## Product Images

The database seeder may load product mockups from folders under:

```text
public/images/Mockups/
```

Ensure the folder names and image filenames match the paths expected by `database/seeders/DatabaseSeeder.php`. If seeding fails with a “Product image folder not found” error, check that the required mockup folders are included in your local or deployed copy of the project.

## Demo / Deployment Notes

This repository is intended as a portfolio and demonstration project. Shared-hosting environments can differ from local development, particularly in PHP extensions, writable directories, database support, and asset paths.

Before deploying:

1. Set the correct production environment variables.
2. Install Composer dependencies for the target environment.
3. Build frontend assets with `npm run build`.
4. Run migrations using the deployment's intended database.
5. Confirm that the web server's document root points to Laravel's `public` directory.
6. Verify storage permissions, image paths, and the storage symlink.
7. Keep `APP_DEBUG=false` in production and never commit real credentials.

If using the temporary per-visitor SQLite demo setup, follow the configuration implemented in the relevant branch; it differs from the standard MySQL setup above and requires SQLite support and writable storage.

## Screenshots

Add screenshots of the storefront, product details, cart, and admin area here to help visitors quickly understand the application.

For example:

```markdown
![Storefront](docs/screenshots/storefront.png)
![Product details](docs/screenshots/product-details.png)
```

## Future Improvements

Possible areas for further development include:

- Payment-gateway integration
- Automated tests for cart and checkout flows
- Improved accessibility and user feedback
- Production-ready authentication and authorization review
- Order-management and delivery workflow improvements

## Author

**WinnrDz**

- GitHub: [@WinnrDz](https://github.com/WinnrDz)

## License

No license has been specified yet. Unless a license is added to this repository, reuse and redistribution are not automatically granted.
