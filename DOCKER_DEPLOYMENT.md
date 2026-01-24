# Docker & Render Deployment Guide

## Local Development with Docker

### Prerequisites

- [Docker](https://www.docker.com/products/docker-desktop) installed on your machine

### Running Locally

1. **Build and run the Docker container:**

   ```bash
   docker-compose up --build
   ```

2. **Access the application:**
   Open your browser and navigate to `http://localhost:8080`

3. **View logs:**

   ```bash
   docker-compose logs -f
   ```

4. **Stop the container:**
   ```bash
   docker-compose down
   ```

## Deploying to Render

### Prerequisites

- A [Render](https://render.com) account
- Your project pushed to GitHub, GitLab, or Bitbucket

### Deployment Steps

1. **Push your code to Git:**

   ```bash
   git add .
   git commit -m "Add Docker configuration"
   git push
   ```

2. **Connect to Render:**
   - Go to [dashboard.render.com](https://dashboard.render.com)
   - Click "New +" and select "Web Service"
   - Connect your Git repository
   - Render will automatically detect the `render.yaml` file

3. **Configuration:**
   - **Name:** `new-world-guide-website` (or your preferred name)
   - **Runtime:** Docker
   - **Region:** Oregon (or your preferred region)
   - **Plan:** Free (or paid for production)
   - Leave other settings as default

4. **Deploy:**
   - Click "Create Web Service"
   - Render will build and deploy automatically
   - Your site will be live at: `https://your-service-name.onrender.com`

### Environment Variables (if needed)

In the Render dashboard, go to your service's Settings and add environment variables under "Environment":

Example:

- `ENVIRONMENT=production`
- `PHP_DISPLAY_ERRORS=Off` (for production)

### Updating Your Deployment

The deployment is set to auto-deploy on every push to your repository. Simply commit and push your changes:

```bash
git add .
git commit -m "Your changes"
git push
```

Render will automatically rebuild and redeploy your application.

## Dockerfile Details

- **Base Image:** PHP 8.1 with Apache
- **Port:** 8080 (Render's dynamic port)
- **Apache Modules:** `mod_rewrite` enabled
- **Document Root:** `/var/www/html`

## Troubleshooting

### Container won't start

- Check logs: `docker-compose logs web`
- Verify Dockerfile syntax: `docker build .`

### Port already in use

- Change the port in `docker-compose.yml`: `8081:8080`

### File permissions issues

- The Dockerfile automatically sets proper permissions
- Ensure your files are readable

### Render deployment fails

- Check the build logs in Render dashboard
- Verify `render.yaml` is in the root directory
- Ensure all PHP files are included in the repository

## Additional Notes

- The `render.yaml` file is automatically read by Render for configuration
- The `.dockerignore` file prevents unnecessary files from being added to the Docker image
- PHP extensions can be added in the Dockerfile using `docker-php-ext-install`
- For production, consider setting `PHP_DISPLAY_ERRORS=Off`
