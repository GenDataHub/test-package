# Publishing and Usage Guide

This guide details how to publish your PHP package to Packagist.org and how to test it locally.

## 1. Local Development (Testing without Publishing)

To test this package in another local project **before** publishing it to the world, you can use the "path" repository type.

1. Create a `test-consumer` project folder somewhere else on your machine.
2. Create a `composer.json` in that folder with the following content:
   ```json
   {
       "repositories": [
           {
               "type": "path",
               "url": "d:/tamil/Projects/test-package"
           }
       ],
       "require": {
           "tamil/test-package": "*"
       },
       "minimum-stability": "dev",
       "prefer-stable": true
   }
   ```
3. Run `composer install`. Composer will symlink your local package into the `vendor` directory.

## 2. Publishing to the World

To make your package installable via `composer require tamil/test-package` by anyone, follow these steps:

### Step A: Push to GitHub
1. Initialize git (if not already done):
   ```bash
   git init
   git add .
   git commit -m "Initial commit"
   ```
2. Create a new repository on [GitHub](https://github.com/new).
3. Link your local repo and push:
   ```bash
   git remote add origin https://github.com/<YOUR-USERNAME>/test-package.git
   git push -u origin main
   ```

### Step B: Submit to Packagist
1. Log in to [Packagist.org](https://packagist.org/).
2. Click **Submit** in the top menu.
3. Paste your GitHub repository URL (e.g., `https://github.com/<YOUR-USERNAME>/test-package`).
4. Click **Check** and then **Submit**.

### Step C: Set Up Auto-Updates
To ensure Packagist updates whenever you push code:
1. Go to your GitHub repository **Settings** > **Webhooks**.
2. Add a new webhook with Payload URL: `https://packagist.org/api/github`.
3. Content type: `application/json`.
4. Secret: (Your Packagist API Token).
5. Just the `push` event is enough.

*Alternatively, Packagist often offers an automatic GitHub integration button.*

## 3. Installing (After Publishing)

Once published, anyone can install your package:

```bash
composer require tamil/test-package
```

## 4. Versioning

To release stable versions:
1. Tag a release in git:
   ```bash
   git tag v1.0.0
   git push origin v1.0.0
   ```
2. Packagist will automatically detect the new version (v1.0.0).
