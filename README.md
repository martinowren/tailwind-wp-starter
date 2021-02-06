# TailwindWP starter

[Tailwind Docs](https://tailwindcss.com/docs)
[Tailwind Playground](https://play.tailwindcss.com/)
## Features
**Tailwind** | Tailwind is included and optimized for Wordpress  
**Babel** | Babel is setup to transpile your css  
**PostCSS** | PostCSS with Sass nesting, autoprefixer & browserfix  
**Prettier** | Prettier is setup with @wordpress/prettier rules and pre commit hooks  
**WordPress Markup** | Cleaner Wordpress Markup  
**JS Optimization** | Uglify and minimize JS  
**CSS Optimization** | Uglify and minimize CSS  
**ACF block-adding script** | A simple script to boilerplate the addition of blocks  

### Prerequisites

Node and NPM should be installed
Install roots/soil as a MU-plugin

---

### Installing

Run the following command to install the needed dependencies

```
npm install
```

---

## Adapting theme

### Wordpress specific

Please edit `style.css` to fit your WordPress theme needs
Here you can find config variables [Wordpress-Config](https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/)

### Project specific

#### Editor color palette

You can find the place to correct editor color palette in the functions.php file

#### Package.json

Change the following things:

-   `name`
-   `version`
-   `description`
-   `authorname`

#### Language domain

Do a search-replace inside all the themes files:
`'replace-me-lang'`

---

## Custom CSS

If you want to make custom classes that inherit Tailwind CSS classes properties, you can use the following syntax

```css
.newClassName {
	@apply tailwind-class bg-gray-50 overflow-hidden;
}
```
