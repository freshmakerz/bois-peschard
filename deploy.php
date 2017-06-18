<?php
namespace Deployer;

require 'recipe/laravel.php';

// Configuration

set('repository', 'https://github.com/freshmakerz/bois-peschard.git');
set('git_tty', true); // [Optional] Allocate tty for git on first deployment
add('shared_files', ['.env']);
add('shared_dirs', []);
add('writable_dirs', ['storage']);


// Hosts

host('163.172.151.178')
    ->user('root')
    ->port(22)
    ->stage('production')
    ->set('deploy_path', '/var/www/my_website/bois-peschard');


// Tasks
desc('Restart PHP-FPM service');
task('php7.0-fpm:restart', function () {
    // The user must have rights for restart service
    // /etc/sudoers: username ALL=NOPASSWD:/bin/systemctl restart php-fpm.service
    run('sudo systemctl restart php-fpm.service');
});
after('deploy:symlink', 'php-fpm:restart');

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');
