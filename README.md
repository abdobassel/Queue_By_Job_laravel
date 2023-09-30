# Queue_By_Job_laravel
#for big data without stoping server 
update database by queue
#configraion for using queue 

1 - in file env edit  to  QUEUE_CONNECTION=database
2 - php artisan queue:table
3 - php artisan migrate

#creating Job
  =>php artisan make:job JobName

#after creating Job and emplimntation

to work => writ this command 
php artisan queue:work

