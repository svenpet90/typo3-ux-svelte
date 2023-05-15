[![Latest Stable Version](http://poser.pugx.org/svenpetersen/typo3-ux-svelte/v)](https://packagist.org/packages/svenpetersen/typo3-ux-svelte)
[![Total Downloads](http://poser.pugx.org/svenpetersen/typo3-ux-svelte/downloads)](https://packagist.org/packages/svenpetersen/typo3-ux-svelte)
[![Monthly Downloads](http://poser.pugx.org/svenpetersen/typo3-ux-svelte/d/monthly)](https://packagist.org/packages/svenpetersen/typo3-ux-svelte)
[![Latest Unstable Version](http://poser.pugx.org/svenpetersen/typo3-ux-svelte/v/unstable)](https://packagist.org/packages/svenpetersen/typo3-ux-svelte)
[![License](http://poser.pugx.org/svenpetersen/typo3-ux-svelte/license)](https://packagist.org/packages/svenpetersen/typo3-ux-svelte)
[![PHP Version Require](http://poser.pugx.org/svenpetersen/typo3-ux-svelte/require/php)](https://packagist.org/packages/svenpetersen/typo3-ux-svelte)

TYPO3 Extension "typo3-ux-svelte"
=================================

## What does it do?
Render Svelte components directly in Fluid template

This Extensions enables you to render Svelte Components directly in Fluid templates.
It acts as an integration for [symfony/ux-svelte](https://symfony.com/bundles/ux-svelte/current/index.html) into TYPO3.

## Installation
The recommended way to install the extension is by
using [Composer](https://getcomposer.org/). In your Composer based TYPO3 project
root, just run:
<pre>composer require svenpetersen/typo3-ux-svelte</pre>

## Setup
Before you start, make sure you have [EXT:typo3_encore](https://github.com/sabbelasichon/typo3_encore).
This extensions integrates [Webpack Encore](https://symfony.com/doc/current/frontend.html) into TYPO3.

Follow the [Symfony UX Vue official documentation](https://symfony.com/bundles/ux-vue/current/index.html).

Additionally:

    # Add this line to your package.json dependencies:
    "@symfony/ux-svelte": "file:vendor/symfony/ux-svelte/assets"

    # Add these two lines to your app.js:
    import { registerSvelteControllerComponents } from '@symfony/ux-svelte';
    registerSvelteControllerComponents(require.context('./svelte/controllers', true, /\.svelte$/));

    # Install Svelte
    $ npm install svelte svelte-loader --save-dev

    # or
    $ yarn add svelte svelte-loader --dev

    # Enable it in your webpack.config.js file:
    Encore
        // ...
        .enableSvelte()
    ;

    # Add these lines to your controllers.json:
    "@symfony/ux-svelte": {
        "vue": {
            "enabled": true,
            "fetch": "eager"
        }
    }

    # run
    $ npm install --force
    $ npm run watch

    # or
    $ yarn install --force
    $ yarn watch

## Usage
In any fluid template: Just register the Namespace and use the provided ViewHelper to render your component:

    <html xmlns:ux="http://typo3.org/ns/SvenPetersen/UX/Svelte/ViewHelpers">
        <div {ux:svelteComponent(name:'MyComponent',props:"{'name':'John Doe'}")}></div>
    </html>

## Contributing
Please refer to the [contributing](CONTRIBUTING.md) document included in this
repository.
