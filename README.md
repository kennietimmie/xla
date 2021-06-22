<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## App Documentation

For creating jobs POST(api/job/store)(title,unique_id,decription,category,level)

Fetch all jobs GET(api/jobs)(returns an array of json of all jobs)

Fetch a single job GET(api/job/{unique_id})T(job unique_id, returns a json of the specific resource)

Fetch job candidates GET(api/job/{unique_id}/candidate)(returns an array of json of all candidate)

Fetch job candidates GET(api/job/{unique_id}/candidate)(returns an array of json of all candidate)

Apply for a job POST(api/job/{unique_id}/apply)(email, firstname, lastname, resume_url, address)
