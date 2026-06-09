# KHeV Web — Kameruner Heilbronn e.V. Website

A PHP-based web application for managing the **Kameruner Heilbronn e.V.** association. It handles members, events, finances, photos, videos, publications, and more.

---

## Architecture Overview (for Java/React Developers)

> **TL;DR** — This is a classic **server-rendered PHP + jQuery/Dojo** app. There is **no separation** between "frontend" and "backend" like you'd see with Spring Boot + React. PHP generates the HTML on the server; JavaScript (jQuery + Dojo Toolkit) handles client-side interactivity via AJAX calls back to PHP controllers.

### How it maps to a Modern Spring Boot + React architecture

| Spring Boot / React Concept    | KHeV PHP Equivalent                                         | Location                            |
| ------------------------------ | ----------------------------------------------------------- | ----------------------------------- |
| `@RestController`              | `Controllers/*.php`                                         | `Controllers/`                      |
| `@Entity` / JPA Model          | `Models/*.php` (POJO-like PHP classes)                      | `Models/`                           |
| `@Repository` / JPA            | `DataAccessObject/DaoSelect.php`, `DaoInsert.php`, etc.     | `DataAccessObject/`                 |
| React components (`.jsx`)      | PHP View files that echo HTML + Bootstrap                   | `Views/` subfolders                 |
| React Router                   | **None** — each `.php` file IS a route (file-based routing) | Direct file URLs                    |
| Redux / React state            | **PHP Sessions** (`$_SESSION`) + Dojo in-memory data stores | `Includes/Sessions.php`             |
| `application.yml` / `.env`     | `config.ini`                                                | Project root                        |
| Thymeleaf / JSP templates      | `Views/PageModel.php` (master layout engine)                | `Views/PageModel.php`               |
| `i18n` / `messages.properties` | `UIResources/*.res.php` (per-language resource files)       | `UIResources/`                      |
| CSS / SCSS                     | Bootstrap 3 + custom CSS files                              | `Resources/Styles/`                 |
| JavaScript / TypeScript        | Vanilla JS + jQuery 2.x + Dojo Toolkit 1.11                 | `Scripts/`                          |
| DB Migration / Flyway          | Raw SQL scripts                                             | `DataAccessObject/DatabaseScripts/` |
| `mvnw` / `gradlew`             | **None** — no build step, PHP is interpreted                | —                                   |

---

## Project Structure

```
KHeVWeb/
├── index.php                    # Entry point / homepage (dashboard)
├── config.ini                   # DB connection & app config (⚠️ contains credentials)
├── config_prod.ini              # Production DB config
├── .htaccess                    # Apache error document config
│
├── Controllers/                 # "Backend" — handles AJAX requests (like REST controllers)
│   ├── BaseController.php       #   Base class with common logic
│   ├── EventController.php      #   CRUD for Events
│   ├── MemberController.php     #   CRUD for Members
│   ├── ExpenseController.php    #   CRUD for Expenses
│   └── ...                      #   One controller per entity
│
├── Models/                      # Data model classes (like JPA Entities, without ORM)
│   ├── BaseEntity.php           #   Base entity
│   ├── Event.php                #   Event model — delegates to DAO layer
│   ├── Member.php               #   Member model
│   └── ...                      #   One model per DB table
│
├── DataAccessObject/            # Database access layer (like Spring Data repositories)
│   ├── DaoBase.php              #   PDO connection management (MySQL, PostgreSQL, MSSQL)
│   ├── DaoSelect.php            #   All SELECT queries / stored procedure calls
│   ├── DaoInsert.php            #   All INSERT queries
│   ├── DaoUpdate.php            #   All UPDATE queries
│   ├── DaoDelete.php            #   All DELETE queries
│   └── DatabaseScripts/         #   SQL schema & stored procedures
│       ├── KHevDbScript.sql     #     Table creation script
│       └── khev.sql             #     Stored procedures + data
│
├── Views/                       # "Frontend" — PHP files that output HTML
│   ├── PageModel.php            #   ★ Master layout (header, sidebar, footer, JS/CSS includes)
│   ├── Dashboard.php            #   Dashboard view
│   ├── Administration/          #   Admin CRUD pages (ManageEvents.php, ManageMembers.php, ...)
│   ├── Members/                 #   Public member views
│   ├── Events/                  #   Event-related views
│   ├── Finances/                #   Financial reports
│   ├── Association/             #   Association info pages
│   └── ...                      #   Other feature areas
│
├── Scripts/                     # JavaScript files
│   ├── commonScript.js          #   Shared utility functions (AJAX, date formatting, etc.)
│   ├── eventsScript.js          #   Events page logic (Dojo DataGrid + jQuery AJAX)
│   ├── membersScript.js         #   Members page logic
│   ├── jquery-2.2.4.js          #   jQuery library
│   ├── bootstrap-3.3.7.js       #   Bootstrap JS
│   └── ...                      #   Per-page scripts + third-party libs
│
├── Resources/                   # Static assets
│   ├── Styles/                  #   CSS files (Bootstrap 3, custom styles)
│   ├── Images/                  #   Images and logos
│   └── Fonts/                   #   Font files
│
├── UIResources/                 # i18n — UI label translations (FR, EN, DE)
│   ├── events.fr.res.php        #   French labels for Events page
│   ├── events.en.res.php        #   English labels for Events page
│   ├── events.de.res.php        #   German labels for Events page
│   └── ...                      #   Per-module, per-language resource files
│
├── Includes/                    # Shared PHP utilities & middleware
│   ├── Common.php               #   Common includes + constants (SUCCESS/FAIL messages)
│   ├── Utils.php                #   Utility class (sessions, JSON formatting, mail, etc.)
│   ├── Sessions.php             #   Session startup & timeout handling
│   ├── ExceptionLogger.php      #   Exception logging
│   └── ...
│
├── Lib/                         # Third-party libraries
│   └── dojo-release-1.11.2/     #   Dojo Toolkit (for DataGrid widgets)
│
├── UserLogin.php                # Login page (currently redirects to home)
├── UserRegistration.php         # User registration page
├── UserLogout.php               # Logout handler
├── Impressum.php                # Legal page (Impressum)
├── ContactUs.php                # Contact page
└── Sitemap.php                  # Sitemap
```

---

## How Things Work

### 🔄 Request Flow (equivalent to a REST call)

```
Browser                    Server (Apache + PHP)
  │                              │
  │  1. User loads page          │
  │ ───────────────────────────> │  Views/Administration/ManageEvents.php
  │                              │  → includes PageModel.php (renders full HTML page)
  │  <─── Full HTML page ─────  │
  │                              │
  │  2. JS (Dojo) fires AJAX    │
  │      POST to controller     │
  │ ───────────────────────────> │  Controllers/EventController.php
  │      { userAction: "getAllItems" }
  │                              │  → EventController reads $_POST['userAction']
  │                              │  → Calls Event model → Calls DaoSelect
  │                              │  → DaoSelect runs SQL via PDO
  │                              │  → Returns JSON string
  │  <─── JSON response ──────  │
  │                              │
  │  3. JS parses JSON,         │
  │     renders Dojo DataGrid   │
```

### 🌐 Routing

There is **no router**. Each `.php` file IS its own URL:

- `http://localhost/KHeVWeb/` → `index.php` (home/dashboard)
- `http://localhost/KHeVWeb/Views/Administration/ManageEvents.php` → Events admin page
- `http://localhost/KHeVWeb/Controllers/EventController.php` → AJAX endpoint (POST only)

### 🎨 UI Rendering

1. Every page creates a `PageModel` object and calls `displayPage()`
2. `PageModel` echoes: **Header** (CSS/JS includes) → **Sidebar menu** → **Page content** → **Footer**
3. The page content is a PHP string variable `$content` containing raw HTML (using Bootstrap 3 grid)
4. JavaScript (Dojo + jQuery) handles data grids, form validation, and AJAX calls

### 🗃️ State Management

- **Server-side**: PHP `$_SESSION` — stores `userName`, `userLang`, `sessionId`, `encryptedData`
- **Client-side**: Dojo `ItemFileWriteStore` (in-memory data store for grids) + plain JS global variables
- **No Redux, no Vuex, no React Context** — just globals and session

### 🌍 Internationalization (i18n)

- Supports **French** (default), **English**, **German**
- Language is stored in `$_SESSION['userLang']` (e.g., `fr-FR`, `en-US`, `de-DE`)
- Each page loads the appropriate `UIResources/[module].[lang].res.php` file
- Resource files define static methods that return translated strings

### 🔐 Authentication

- Login page exists (`UserLogin.php`) but **currently redirects straight to home** (login is disabled)
- Session check in `Utils::checkUserSession()` is also commented out
- Role-based access control exists via `khev_Role` and `khev_RoleAccessRight` tables

---

## Local Development Setup

### Prerequisites

| Tool                            | Version | Notes                                   |
| ------------------------------- | ------- | --------------------------------------- |
| **PHP**                         | 8.2+    | Must have `pdo_mysql` extension enabled |
| **MySQL**                       | 5.5+    | MariaDB also works                      |
| **Apache** (or XAMPP/WAMP/MAMP) | Any     | Needs `mod_rewrite` enabled             |

### Recommended: Use XAMPP (simplest for Windows)

1. **Install XAMPP** from [apachefriends.org](https://www.apachefriends.org/)

2. **Clone the project** into the XAMPP htdocs folder:

   ```bash
   cd C:\xampp\htdocs
   git clone <repo-url> KHeVWeb
   ```

   Or create a symlink / copy the project folder there.

3. **Create the database**:
   - Start MySQL from XAMPP Control Panel
   - Open phpMyAdmin at `http://localhost/phpmyadmin`
   - Create a new database called `khev`
   - Import the table schema:
     ```
     DataAccessObject/DatabaseScripts/KHevDbScript.sql
     ```
   - Import stored procedures:
     ```
     DataAccessObject/DatabaseScripts/khev_local_storedProc_latest.sql
     ```
   - (Optional) Import sample data:
     ```
     DataAccessObject/DatabaseScripts/khev_data.sql
     ```

4. **Configure database credentials** in `config.ini`:

   ```ini
   [database_settings]
   dbHost = "localhost"
   dbUser = "root"
   dbUserPassword = ""        ; default XAMPP has no password
   dbName = "khev"
   ```

5. **Start Apache** from XAMPP Control Panel

6. **Open the app** at: `http://localhost/KHeVWeb/`

### Alternative: PHP Built-in Server

```bash
cd path/to/KHeVWeb
php -S localhost:8080
```

Then open `http://localhost:8080/` — note that some path-level detection code may not work perfectly outside Apache.

---

## Key Technologies

- **PHP 8.2+** — Server-side language (no framework, pure PHP)
- **MySQL 5.5+** — Database with stored procedures
- **PDO** — Database abstraction layer
- **Bootstrap 3.3.7** — CSS framework for responsive layout
- **jQuery 2.2.4** — DOM manipulation & AJAX
- **Dojo Toolkit 1.11** — DataGrid widgets (for admin CRUD tables)
- **Font Awesome** — Icon library
- **Apache** — Web server (with `.htaccess` support)

## Deployment

- Production server: hosted on `one.com` (FTP-based deployment)
- FTP connection details in `config.ini` `[ftp_connection]` section
- Production DB config in `config_prod.ini`
- ssh to the server by using this shell cmd: ssh ccq9128cw_ssh@ssh.ccq9128cw.service.one

---

## Common Gotchas

1. **No package manager** — All JS/CSS libraries are committed directly in `Scripts/` and `Resources/Styles/`
2. **No build step** — Edit PHP/JS/CSS files directly; changes are live immediately
3. **Directory level matters** — `PageModel->setDirectoryLevel(2)` controls relative paths for CSS/JS includes based on how deep the View file is in the folder tree
4. **Stored procedures** — Most DB operations use MySQL stored procedures, not inline SQL
5. **Session auto-login** — `Utils::checkAndStartSession()` currently hardcodes `userName = "Administrator"` for development; real login is disabled

-
