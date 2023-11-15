# Paintball Website - Price Management System

This is a paintball website with a CRUD (Create, Read, Update, Delete) system for managing and updating prices. The system is implemented using PHP and MySQL, with Bootstrap 4 for the front-end.

## Table of Contents
- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Database](#database)
- [Contributing](#contributing)
- [License](#license)

## Introduction

This website provides a platform for managing and updating prices for paintball-related products. It offers a user-friendly interface for administrators to perform CRUD operations on the pricing information.

## Features

- **CRUD Operations:** Allows the creation, retrieval, updating, and deletion of paintball product prices.
- **Bootstrap 4:** Utilizes Bootstrap 4 for a responsive and visually appealing user interface.

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/yourusername/paintball-website.git
    ```

2. Configure the database connection:

    - Navigate to the `config` directory.
    - Edit the `database.php` file to provide your MySQL database credentials.

3. Import the database:

    - Use the provided SQL script (`paintball_database.sql`) to create the necessary database and tables.

4. Open the website in your browser:

    - Start a local server or upload the files to your web server.
    - Access the website through your browser.

## Usage

1. **Login:**
    - Use the provided login page to enter your credentials.

2. **Dashboard:**
    - After logging in, you will be redirected to the dashboard.
    - The dashboard provides options for managing and updating paintball product prices.

3. **CRUD Operations:**
    - Add, edit, and delete pricing information for paintball products.

## Database

The website uses a MySQL database to store pricing information for paintball products. The `paintball_database.sql` script provides the necessary database schema and sample data.

## Contributing

Contributions are welcome! If you have improvements or feature suggestions, please submit a pull request.

## License

This project is open-source and available under the [MIT License](LICENSE).
