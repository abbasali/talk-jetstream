## Introduction

This repository contains the code used in the talk **Bootstrap Laravel at the speed of Jet**. The talk introduces Laravel Jetstream and shows how to do some common customizations.

The commits on `master` branch represents each step covered in the talk.

### Meetups/Talks
This talk was presented in the following meetups.

| Date | Meetup | Venue | Presentation |
| ---- | ------ | ----- | ------------ |
| Fri, 29th Jan 2021 | Laravel Nagpur - Jan 2021 | Online - https://bit.ly/laravel-ngp-jan-2021 | [Presentation](/resources/docs/laravel-ngp-jan-2021-presentation.pdf) |

### Installation

- `composer install`
- `cp .env.example .env`
- Populate `.env` with proper database credentials
- `php artisan migrate`
- `npm install`
- `npm run dev`

For more information please read [Laravel](https://laravel.com/docs) and [Jetstream](https://jetstream.laravel.com/) documentation.
