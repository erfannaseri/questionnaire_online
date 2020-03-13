@ECHO OFF

doskey pas=php artisan serve

doskey pam=php artisan make:$*
doskey pa=php artisan$*
doskey cda=composer dump-autoload $*
doskey mmodel=php artisan make:model $*
doskey mcon=php artisan make:Controller $*
doskey mmigrate=php artisan make:migration $*
doskey caclear=php artisan cache:clear $*
doskey confclear=php artisan config:clear $*
doskey vclear=php artisan view:clear $*
doskey rlist=php artisan route:list $*

