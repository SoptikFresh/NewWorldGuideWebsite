# Langi Page

This project is a collection of PHP scripts and resources for New World game guides, builds, and calculators. It provides various pages and tools to help players with different aspects of the game.

## Project Structure

- **index.php**: Main landing page.
- **dropdown_config.php**: Configuration for dropdown menus.
- **dropdowns.json**: JSON data for dropdowns.
- **new-world-\*.php**: Individual guide/build pages for New World topics (builds, gold making, guides, raid guides, etc.).
- **requires/**: Shared PHP includes for headers, meta tags, and styling.

## Features

- Game guides and tutorials
- Build calculators
- Dropdown menu configuration
- Modular PHP includes for easy maintenance

## Getting Started

1. Clone or download the repository.
2. Place the files on a PHP-enabled web server.
3. Access `index.php` in your browser to view the main page.

### Running Locally with PHP's Built-in Server

#### Installing PHP

**Windows:**

1. Download PHP from [php.net](https://www.php.net/downloads)
2. Extract to a folder (e.g., `C:\php`)
3. Add PHP to your system PATH:
   - Open Environment Variables (Win+X → System → Advanced system settings)
   - Click "Environment Variables"
   - Under "System variables", select "Path" and click "Edit"
   - Click "New" and add your PHP folder path (e.g., `C:\php`)
   - Click OK and restart your terminal
4. Verify installation: Open Command Prompt and run `php --version`

**macOS:**

```bash
# Using Homebrew (install Homebrew first from https://brew.sh)
brew install php
```

**Linux (Ubuntu/Debian):**

```bash
sudo apt-get update
sudo apt-get install php-cli
```

#### Starting the Local Server

1. Open Command Prompt/Terminal
2. Navigate to the project directory:
   ```bash
   cd `C:\folder\NewWorldGuideWebsite`
   ```
3. Start the built-in PHP server (replace `8000` with your preferred port):
   ```bash
   php -S localhost:8000
   ```
4. Open your browser and go to: `http://localhost:8000`

**Example with different ports:**

- `php -S localhost:8080`
- `php -S localhost:3000`
- `php -S localhost:9000`

The server will run until you press `Ctrl+C` in the terminal.

## Requirements

- PHP 7.0 or higher
- Web server (Apache, Nginx, etc.) or PHP's built-in development server

## Customization

- Edit `dropdown_config.php` and `dropdowns.json` to update dropdown menus.
- Add or modify guide pages as needed.
- Update shared includes in the `requires/` folder for site-wide changes.

## License

This project is provided as-is for personal or educational use. Please contact the author for commercial use or redistribution.
