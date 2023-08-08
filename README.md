## Requirements
 - php (> 8.0)
 - composer (local or global)
 - node

## Setup

This project is ready for use with sail. Steps for running over local are:
 - `composer install`
 - `cp .env.examle .env`
 - `./vendor/bin/sail up`
 - `./vendor/bin/sail shell` and execute `php artisan storage:link` and `php artisan migrate:fresh --seed`
 -  `./vendor/bin/sail shell` and execute `npm install` and `npm run dev`. This is the method to autorefresh all CSS/....

 You should see over localhost domain the project.

## Sections

- Homepage (Linking to 4 listing pages)
- Authors: Listing authors list and if you click over view you can manage gallery image for specific author.
- Cars: Listing cars list and if you click over view you can manage gallery image for specific cars.
- Posts: Listing posts list and if you click over view you can manage gallery image for specific post.
- Locations: Listing locations.

## Models
Listing models inside application.

### Author
Model with fields (name, age) and relation multiple to image model.
Has a seed to generate 5 random authors.

### Car
Model with fields (brand, model) and relation multiple to image model.
Has a seed to generate 20 random cars.

### Image
Model with fields (name, alt, filepath, favorite) and one polymorphy relation with Author, Car, Post. Easy extensible to another models.

### Location
Model with fields (name).
Has a seed to generate 2 random locations.

### Post
Model with fields (slug, title) and relation multiple to image model.
Has a seed to generate 50 random posts.

## Livewire

For gallery we have a custom livewire component. image-gallery. The method to call this component is:
`<livewire:image-gallery :instance="$object">`
The component needs to have next fields and methods:
- Relation to image model (multiple) with name images.
- Method (name, type, plural). 
If the model doesn't have these information the plugin won't work.

 In this case we can use with author, car and post models.

## NOTES

We have a custom patch for modal module. The patch is over patches module and applied via composer to allow remove white background and add some custom tailwind code to modal template.
