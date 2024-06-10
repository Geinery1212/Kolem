# School Project Blog

This blog was created as a school project with the aim of allowing people to share their knowledge in their mother tongues, helping to preserve these languages.

## Project Details

- **Platform:** WordPress
- **WordPress Version:** 6.5.4
- **Theme Development:** HTML, CSS, SASS
- **Icons:** FontAwesome

## Plugins Used

- **Ajax Search Lite** - Version 4.12
- **Disqus for WordPress** - Version 3.1.1
- **MetaSlide** - Version 3.80.0
- **Modula** - Version 2.8.8
- **Ninja Forms** - Version 3.8.3
- **WP-PageNavi** - Version 2.94.1

## Easy Setup

1. **Install a Local Server:**
   - Use Wampp, Xampp, Mamp, or any other local server that supports WordPress.

2. **Clone the Project:**
   - Clone the project into the root folder of your local server. For Wampp, this is the `www` folder.

3. **Create a Database:**
   - Set up a new database for your project.

4. **Import Database Data:**
   - Import the data from the script located inside the `db` folder.

5. **Configure WordPress:**
   - Open the `wp-config.php` file and update the database configuration settings to match your setup.

## Accessing the Website

- Access the website by navigating to `http://localhost/{name_of_your_project}`.

### Admin Access

- To access the admin side, add `/wp-admin/` to your base URL.
  - **Admin URL:** `http://localhost/{name_of_your_project}/wp-admin/`
  - **Admin User:** `admin@admin.com`
  - **Password:** `1234`

## Note

For some reason, when you upload the project to a server, the redirection to a `single.php` file does not seem to work well. To solve this, you need to change the permalink format in **Settings**.
