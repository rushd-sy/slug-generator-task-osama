# Task #1 - Slug Generator

## Description

This project implements a simple helper function to generate SEO-friendly slugs from titles using Laravel conventions.

## Solution Details

- **Route:** Added a GET route in `api.php` at `/api/generate-slug`.
- **Controller:** Created `SlugController` to handle the logic.
- **Logic:** Used Laravel's built-in `Str::slug` helper for robust transformation.
- **Testing:** Added a Unit Test `SlugTest` to verify the slug generation logic.

## How to Run

1. Clone the repository.
2. Run `composer install`.
3. Run `php artisan serve`.
4. Test the API: `http://127.0.0.1:8000/api/generate-slug?title=Your Title Here`

## How to Test

Run the following command to execute the Unit Tests:

```bash
php artisan test --filter SlugTest
---
Thank you, By Osama Hanano, Rushd
```
