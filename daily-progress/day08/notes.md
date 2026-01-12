Learn:
- Table creation
- Columns
- Rollback

## What is a Migration?
A migration is like a version-controlled SQL file.

## Think of migration as:
“Git for database structure”

## Command to create migration
``` php artisan make:migration create_categories_table ```

## Run Migrations (up all new migrations - not added in migration table)
php artisan migrate

## Roll back last batch (down previous/last ran migrations)
php artisan migrate:rollback

## Refresh (drop + recreate whole DB tables - all migrations)
php artisan migrate:refresh

## Reset all migrations (down all migrations)
php artisan migrate:reset

# Important Rules (MEMORIZE)
- Never edit old migrations in production
- Use new migration for changes
- Always rollback before modifying migration in dev
- Ordering column doesn't matter and not recommended in large scale apps
