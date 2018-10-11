
[![Latest Version on Packagist](https://img.shields.io/packagist/v/sectheater/laravel-jarvis.svg?style=flat-square)](https://packagist.org/packages/sectheater/laravel-jarvis)

<!-- [![Total Downloads](https://img.shields.io/packagist/dt/sectheater/laravel-jarvis.svg?style=flat-square)](https://packagist.org/packages/sectheater/laravel-jarvis) -->

> the marketplace CheatSheet will be availble soon 


<hr>

## marketplace provides you the following :
### 1. Product & Product Variation System
Create simple products, and complex ones using variation system by attaching the product to a specific type.
### 2. Coupon System
  Generate , Validate , and purchase them while checkout easily.
### 3. Wishlist / Cart System
  - CRUD the wishlist/cart easily 
  - get the total/subtotal of the whole cart/wishlist and optionally after sale/coupons applied.
  - stock handling behind the scenes .
### 4. Category System
  - Attach product, type of products to a category.
  
### 5. Sale System
  - Setup sale for category, specific product, type of products.
  
### 6. Authorizing Users & Managing Roles.

## Installation Steps

### 1. Require the Package

After creating your new Laravel application you can include the marketplace package with the following command: 

```bash
composer require sectheater/marketplace:dev-master
```

### 2. Add the DB Credentials & APP_URL

Next make sure to create a new database and add your database credentials to your .env file:

```
DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

You will also want to update your website URL inside of the `APP_URL` variable inside the .env file:

```
APP_URL=http://localhost:8000
```

### 3. Getting Your Environment Ready.

#### Just Run The following command.


```bash

 php artisan sectheater-market:install     
 
 ```

##### Command Interpretation
- The command just publishes the marketplace's config, migrations,helpers and seeder.

Notice : You may need to run the autoload composer command to reload the changes.

```
 composer dump-autoload -o 
```
Another Notice : Don't forget to delete the default users table migration, as marketplace ships with a default one as well.


### 4. Sample Usage
##### 4.1 Creating a Product with Variation.

```php
Product::generate([
  'user_id' => auth()->id(),
  'name' => 'laptop',
  'description' => 'Fancy laptop',
  'price' => 15000,
  'category' => 'electronics',
  'type' => ['name' => 'MacBook Pro', 'stock' => 20],
  'details' => ['color' => 'Silver', 'dummy-feature' => 'dummy-text']
);

```
##### 4.2 Filter products by criteria.

```php

Product::fetchByVariations(['locations' => 'U.K', 'variations' => ['size' => 'XL', 'color' => 'red'], 'categories' => 'clothes']);

```
- Add custom Criterion and use it while searching.

##### 4.3 get Cart total/subtotal.

Out of the blue, you may use a couple of methods to retrieve the total/subtotal
```php
Cart::subtotal();
Cart::total(); // returns total after applying tax.
Cart::total($coupons); // Collection of coupons passed, returns total after applying tax and coupons.
Cart::subtotalAfterCoupon($coupons);

```
Suprisingly every single method you can use for a cart, you can use for a wishlist ( since we can consider it as a virtual cart ) 

##### 4.4 get Cart item .

```php

Cart::item(1); // get the item with id of 1

Cart::item(1,  ['color' => 'blue', 'size' => 'L']); // get the item with the id of 1 and should have these attributes.
```

##### 4.4 Generate Coupons.


##### 4.5 Deactivate Coupons.

##### 4.6 Purchased Coupons.

For more, you can view the docs.
