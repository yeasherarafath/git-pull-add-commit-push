# Git Pull Add Commit Push

A simple Laravel Artisan command that automates common Git operations: pull, add, commit, and push.

## Description

This package provides a Laravel Artisan command (`gp`) that streamlines your Git workflow by executing multiple Git operations in sequence:
1. `git pull` - Fetch and merge changes from the remote repository
2. `git add .` - Stage all changes
3. `git commit` - Commit staged changes with a custom or default message
4. `git push` - Push commits to the remote repository

## Installation

1. Copy the `gp.php` file to your Laravel project's `app/Console/Commands` directory:
   ```
   cp gp.php /path/to/your/laravel/app/Console/Commands/
   ```

2. The command will be automatically registered by Laravel's command discovery.

## Usage

Run the command with a custom commit message:
```bash
php artisan gp "Your commit message"
```

Or use the default commit message ("auto commit"):
```bash
php artisan gp
```

## Requirements

- Laravel Framework (uses `Illuminate\Console\Command` and `Illuminate\Support\Facades\Process`)
- Git installed and configured on your system
- A Git repository initialized in your project

## Error Handling

The command will halt and display an error message if any Git operation fails, including:
- Pull conflicts
- Commit failures (e.g., nothing to commit)
- Push failures (e.g., authentication issues)

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Author

Yasir Arafat

## Contributing

Contributions are welcome! Feel free to submit issues or pull requests.
