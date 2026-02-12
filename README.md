# Inventory Management System

A straightforward inventory management app for tracking commercial kitchen equipment. Nothing fancy - I built this mainly to get hands-on experience with PHP, MVC architecture, and CRUD operations.

## Why I Built This

I have not coded in php regularly and wanted to refresh myself with a tutorial, and instead of just copying what I saw, I applied what I've learned. This taught me so much, I could've jumped straight into Laravel, but I wanted to understand how PHP apps actually work under the hood first.

The 'Core' folder contains a custom MVC router, Database tools, and more helpful functions that I've learned is just given in Laravel, but I know how they work, and will make learning Larvel that easier.
## What It Does

- **Create** new products with details like SKU, category, type, and quantity
- **View** all products in a clean grid layout
- **Edit** existing product information
- **Delete** products (with confirmation, because accidents happen)
- Basic form validation to keep data clean
- Responsive design that works on desktop and mobile

## Tech Stack

**Backend:**
- PHP 8.4
- MySQL 8
- Custom MVC framework (built from scratch)
- PDO for database operations

**Frontend:**
- Plain HTML/CSS (no frameworks)
- Minimal JavaScript

**DevOps:**
- Docker & Docker Compose
- Apache server

## What I Learned

- How MVC architecture actually works (not just the theory)
- Writing custom routing logic
- Handling HTTP methods properly (GET, POST, PUT, DELETE)
- SQL injection prevention with prepared statements
- Form validation and error handling
- Environment-based configuration (dev vs production)
- Docker containerization

## Setup Instructions

### Local Development

**Requirements:**
- PHP 8.4+
- MySQL/MariaDB
- Composer

**Steps:**

1. Clone the repo:
```bash
git clone https://github.com/yourusername/inventory-management.git
cd inventory-management
```

2. Install dependencies:
```bash
composer install
```

3. Create your `.env` file:
```bash
cp .env.example .env
```

4. Update `.env` with your database credentials:
```env
APP_ENV=dev
```

5. Import the database:
```bash
mysql -u root -p garland < database/init.sql
```

6. Start the PHP dev server:
```bash
cd public
php -S localhost:8888
```

7. Visit `http://localhost:8888`

### Docker (Easier Way)

**Requirements:**
- Docker Desktop

**Steps:**

1. Clone and navigate to the repo:
```bash
git clone https://github.com/yourusername/inventory-management.git
cd inventory-management
```

2. Start the containers:
```bash
docker compose up --build
```

3. Visit `http://localhost:9000`

The database and tables are created automatically.

## Project Structure
```
├── controllers/        # Request handlers
├── Core/              # Custom framework code (Router, Database, etc.)
├── Models/            # Data layer
├── views/             # HTML templates
├── public/            # Web root (index.php, assets)
├── database/          # SQL initialization scripts
└── config.php         # Environment-based configuration
```

## Features I'm Proud Of

- **Custom Router**: Built from scratch with support for GET, POST, PUT, DELETE
- **Environment Config**: Switches between local and Docker seamlessly
- **Validation Layer**: Reusable validation logic for forms
- **Clean Separation**: MVC pattern keeps things organized

## Things I will add 

- Add user authentication (currently anyone can edit anything)
- Add sessions
- Implement pagination for large product lists
- Add image upload instead of just URLs
- Add unit tests
- Implment PDF and Excel exporter... Theres a page there for it but no real implmentation
  

## Screenshots

   ![Dashboard](https://i.imgur.com/oPv5jYZ.png)
