# Clock-ClockProv
Collection of Google Maps API Web Services for Laravel

# Installation

`composer require clock/ClockProv:dev-master`

# Configuration

Register package service provider and facade in 'config/app.php'

providers

    'Clock\ClockProv\ClockProvider::class,'

'aliases'

    'Clock' => Clock\ClockProv\ClockFacdecs::class,

# publish

After then ` php artisan vendor:publish `

# Usage

# Clock

` Clock::clock(); `

# Map

` Clock::map(); `
