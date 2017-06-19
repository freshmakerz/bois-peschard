<?php
namespace Deployer;

require 'recipe/laravel.php';

// Configuration

set('repository', 'https://github.com/freshmakerz/bois-peschard.git');
set('git_tty', true); // [Optional] Allocate tty for git on first deployment
add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);


// Hosts

host('188.165.232.191')
    ->user('root')
    ->port(22)
    ->stage('production')
    ->set('deploy_path', '/var/www/bois-peschard');


// Tasks


// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');
