<h1>E-commerce Platform</h1>
This E-commerce platform features two views: a Dashboard for administrators and a Website for customers. The Dashboard allows for managing products and orders through CRUD operations. Customers can explore products, add items to their cart, and proceed with the checkout process. The platform supports multi-role authentication to control access to the website and the dashboard.

<h2>Features</h2>
<h4>Dashboard (Admin View):</h4>
- Create, Read, Update, Delete (CRUD) operations for managing products, categories and orders.
- Admin-specific functionalities secured with role-based authentication.
<h4>Website (Customer View):</h4>
- Browse products.
- Add products to the shopping cart.
- Checkout process to place orders.
Admin-specific functionalities secured with role-based authentication.
<h4>Multi-role Authentication:</h4>
Separate roles for admin and customer.
Access control to ensure only authorized users can access specific parts of the application.

<h2>Technologies Used</h2>
<h4>Backend:</h4> Laravel
<h4>Database:</h4> MySQL
<h4>Frontend:</h4> Blade templates
<h4>Authentication:</h4> Laravel ui built-in authentication with roles

## Installation
<h4>Clone the repository:</h4>
git clone https://github.com/yourusername/e-commerce-platform.git
cd e-commerce-platform

<h4>Install dependencies:</h4>
composer install
npm install

<h4>Set up environment variables (.env)</h4>

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce
DB_USERNAME=root
DB_PASSWORD=your_password

<h4>Run migrations:</h4>
php artisan migrate

<h4>Run the development server:</h4>
php artisan serve

## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
