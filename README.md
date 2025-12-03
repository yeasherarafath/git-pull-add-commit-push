# Git Pull Add Commit Push

A Laravel Artisan command that automates git operations by executing pull, add, commit, and push in a single command.

## Description

This package provides a convenient Laravel Artisan command (`gp`) that streamlines your git workflow by automatically executing the following operations in sequence:

1. `git pull` - Pull the latest changes from the remote repository
2. `git add .` - Stage all changes
3. `git commit` - Commit with your custom message
4. `git push` - Push changes to the remote repository

## Features

- ✅ Automated git workflow with a single command
- ✅ Custom commit messages
- ✅ Default commit message if none provided
- ✅ Error handling for each git operation
- ✅ Clear success/failure feedback

## Requirements

- PHP 8.0 or higher
- Laravel 10.x or higher
- Git installed and configured

## Installation

1. Copy the `gp.php` file from this repository to your Laravel application's `app/Console/Commands/` directory:

```bash
cp gp.php /path/to/your/laravel/app/Console/Commands/
```

2. The command will be automatically registered by Laravel's command discovery.

## Usage

### Basic Usage

Execute the command with the default commit message:

```bash
php artisan gp
```

This will use "auto commit" as the default commit message.

### Custom Commit Message

Provide a custom commit message:

```bash
php artisan gp "your commit message here"
```

### Examples

```bash
# With default message
php artisan gp

# With custom message
php artisan gp "Fixed bug in user authentication"

# With detailed message
php artisan gp "Added new feature: user profile editing"
```

## How It Works

The command executes the following git operations in order:

1. **Git Pull**: Fetches and merges changes from the remote repository
2. **Git Add**: Stages all modified, new, and deleted files
3. **Git Commit**: Creates a commit with your message
4. **Git Push**: Pushes your commit to the remote repository

If any operation fails, the command will stop and display an error message, preventing potentially problematic operations from proceeding.

## Error Handling

Each git operation is validated. If any step fails:
- The command stops execution
- An error message is displayed
- The command returns a failure exit code (1)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Author

Yasir Arafat

## Contributing

Contributions are welcome! Feel free to submit issues or pull requests.

## Disclaimer

**Important**: This command will automatically push all staged changes. Make sure you review your changes before running this command, especially in production environments.
