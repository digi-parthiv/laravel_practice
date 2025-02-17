<?php

use App\Models\User;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use Spatie\Permission\Models\Role;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('dashboard'));
});

// Home > Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Dashboard', route('dashboard'));
});

// Home > Dashboard > User Management
Breadcrumbs::for('user-management.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('User Management', route('user-management.users.index'));
});

// Home > Dashboard > User Management > Users
Breadcrumbs::for('user-management.users.index', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.index');
    $trail->push('Users', route('user-management.users.index'));
});

// Home > Dashboard > User Management > Users > [User]
Breadcrumbs::for('user-management.users.show', function (BreadcrumbTrail $trail, User $user) {
    $trail->parent('user-management.users.index');
    $trail->push(ucwords($user->name), route('user-management.users.show', $user));
});

// Home > Dashboard > User Management > Roles
Breadcrumbs::for('user-management.roles.index', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.index');
    $trail->push('Roles', route('user-management.roles.index'));
});

// Home > Dashboard > User Management > Roles > [Role]
Breadcrumbs::for('user-management.roles.show', function (BreadcrumbTrail $trail, Role $role) {
    $trail->parent('user-management.roles.index');
    $trail->push(ucwords($role->name), route('user-management.roles.show', $role));
});

// Home > Dashboard > User Management > Permission
Breadcrumbs::for('user-management.permissions.index', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.index');
    $trail->push('Permissions', route('user-management.permissions.index'));
});

// Home > Dashboard > E-Commerce
Breadcrumbs::for('e-commerce.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('E-Commerce', route('e-commerce.orders.index'));
});

// Home > Dashboard > E-Commerce > Orders
Breadcrumbs::for('e-commerce.orders.index', function (BreadcrumbTrail $trail) {
    $trail->parent('e-commerce.index');
    $trail->push('Orders', route('e-commerce.orders.index'));
});

// Home > Dashboard > E-Commerce > Invoices
Breadcrumbs::for('e-commerce.invoices.index', function (BreadcrumbTrail $trail) {
    $trail->parent('e-commerce.index');
    $trail->push('Invoices', route('e-commerce.invoices.index'));
});
// Home > Dashboard > E-Commerce > order-returns
Breadcrumbs::for('e-commerce.order-returns.index', function (BreadcrumbTrail $trail) {
    $trail->parent('e-commerce.index');
    $trail->push('Order Returns', route('e-commerce.order-returns.index'));
});

// Home > Dashboard > E-Commerce > Products
Breadcrumbs::for('e-commerce.products.index', function (BreadcrumbTrail $trail) {
    $trail->parent('e-commerce.index');
    $trail->push('Products', route('e-commerce.products.index'));
});

// Home > Dashboard > E-Commerce > Products Categories
Breadcrumbs::for('e-commerce.product-categories.index', function (BreadcrumbTrail $trail) {
    $trail->parent('e-commerce.index');
    $trail->push('Product Categories', route('e-commerce.product-categories.index'));
});
// Home > Dashboard > E-Commerce > Products Attributes
Breadcrumbs::for('e-commerce.product-attributes.index', function (BreadcrumbTrail $trail) {
    $trail->parent('e-commerce.index');
    $trail->push('Product Attributes', route('e-commerce.product-attributes.index'));
});

// Home > Dashboard > E-Commerce > Reviews
Breadcrumbs::for('e-commerce.reviews.index', function (BreadcrumbTrail $trail) {
    $trail->parent('e-commerce.index');
    $trail->push('Reviews', route('e-commerce.reviews.index'));
});

// Home > Dashboard > E-Commerce > Shipment
Breadcrumbs::for('e-commerce.shipment.index', function (BreadcrumbTrail $trail) {
    $trail->parent('e-commerce.index');
    $trail->push('Shipment', route('e-commerce.shipment.index'));
});

// Home > Dashboard > E-Commerce > Discount
Breadcrumbs::for('e-commerce.discount.index', function (BreadcrumbTrail $trail) {
    $trail->parent('e-commerce.index');
    $trail->push('Discount', route('e-commerce.discount.index'));
});
// Home > Dashboard > E-Commerce > Discount
Breadcrumbs::for('e-commerce.customers.index', function (BreadcrumbTrail $trail) {
    $trail->parent('e-commerce.index');
    $trail->push('Customers', route('e-commerce.customers.index'));
});

// Home > Dashboard > Blog
Breadcrumbs::for('blog.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Blog', route('blog.posts.index'));
});

// Home > Dashboard > E-Commerce > Posts
Breadcrumbs::for('blog.posts.index', function (BreadcrumbTrail $trail) {
    $trail->parent('blog.index');
    $trail->push('Posts', route('blog.posts.index'));
});

// Home > Dashboard > E-Commerce > Posts > Create
Breadcrumbs::for('blog.posts.create', function (BreadcrumbTrail $trail) {
    $trail->parent('blog.posts.index');
    $trail->push('Create', route('blog.posts.create'));
});

// Home > Dashboard > Blog > categories > Create
Breadcrumbs::for('blog.categories.index', function (BreadcrumbTrail $trail) {
    $trail->parent('blog.index');
    $trail->push('Categories', route('blog.categories.index'));
});


// Home > Dashboard > Payments
Breadcrumbs::for('payments.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Payments', route('payments.transactions.index'));
});

// Home > Dashboard > Payments > Transactions
Breadcrumbs::for('payments.transactions.index', function (BreadcrumbTrail $trail) {
    $trail->parent('payments.index');
    $trail->push('Transactions', route('payments.transactions.index'));
});

// Home > Dashboard > Payments > Transactions > Details
Breadcrumbs::for('payments.transactions.show', function (BreadcrumbTrail $trail) {
    $trail->parent('payments.transactions.index');
    $trail->push('Create', route('payments.transactions.show'));
});

// Home > Dashboard > Payments > methods
Breadcrumbs::for('payments.methods.index', function (BreadcrumbTrail $trail) {
    $trail->parent('payments.index');
    $trail->push('Payment Methods', route('payments.methods.index'));
});


// Home > Dashboard > Payments
Breadcrumbs::for('newsletters', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Newsletters', route('newsletters'));
});

// Home > Dashboard > Appearance
Breadcrumbs::for('appearance.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Appearance', route('appearance.theme-options.index'));
});

// Home > Dashboard > Appearance > Theme Options
Breadcrumbs::for('appearance.theme-options.index', function (BreadcrumbTrail $trail) {
    $trail->parent('appearance.index');
    $trail->push('Theme Options', route('appearance.theme-options.index'));
});
