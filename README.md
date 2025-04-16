# Laravel CRUD & Model Relations Generator

A Laravel package that provides powerful artisan commands to generate CRUD operations and manage model relationships.

## Installation

You can install the package via composer:

```bash
composer require anas/packge-test
```

## Features

- **CRUD Generation**: Generate models, controllers, repositories, and form requests with a single command
- **Model Relations**: Easily add relationships to existing models
- **Database Sync**: Scan database structure to automatically detect and add model relationships

## Usage

### Generate CRUD 

```bash
# Basic usage
php artisan make:crud Post

# With API controller
php artisan make:crud Post --api

# With routes and predefined relationships
php artisan make:crud Post --routes --relations="user:belongsTo,comment:hasMany"
```

### Add Relationships to Models

```bash
php artisan make:model-relation Post --relations="user:belongsTo,tag:belongsToMany,comment:hasMany"
```

### Sync Database Relationships

```bash
# For a specific model
php artisan model:sync-relations Post

# For all models
php artisan model:sync-relations --all

# For polymorphic relationships
php artisan model:sync-relations Post --morph-targets="User,Comment"
```

## Configuration

You can publish the configuration file with:

```bash
php artisan vendor:publish --tag=packge-test-config
```

This will publish a `packge-test.php` file in your config directory where you can customize the default behavior.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.