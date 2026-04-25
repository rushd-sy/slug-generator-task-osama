# Slug Generator Task

## Goal

The goal of this task is to build a custom engine that converts any title into a URL-friendly slug, ensuring that special characters and extra spaces are handled correctly without using built-in framework helpers.

## Steps Followed

To complete the task manually, I followed these steps:

1. **Lowercase Conversion**: Converted all characters to lowercase for consistency.
2. **Character Filtering**: Used Regex (Regular Expressions) to remove special symbols and characters, keeping only letters and numbers.
3. **Space Management**: Replaced all spaces (single or multiple) with a single hyphen `-`.
4. **Final Trimming**: Removed any extra hyphens from the beginning or the end of the slug.
5. **Testing**: Created a Unit Test to verify that the logic works perfectly across different edge cases.

## How to Test

You can verify the implementation by running the following command:

```bash
php artisan test --filter SlugTest
By Osama Hanano

```
