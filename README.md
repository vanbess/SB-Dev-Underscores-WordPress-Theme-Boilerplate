Silverback Dev Underscores WordPress Theme Starter/Boilerplate
===

Hi. I'm a fork of the starter theme called _s (aka Underscores). I'm a template theme meant to be the next, most awesome, WordPress theme out there. That's what I'm here for. Simply click on the green 'Use this template' button to create your own new repo with this one as template.

Installation
---------------

### Requirements

`_s` requires the following dependencies:

- [Node.js](https://nodejs.org/)

### Quick Start

#### Docker DEV Environment (optional)

Naaah, don't use Docker, seriously... It's way too heavy/bloated for this kind of work.

#### Theme

Change the theme's name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a seven-step find and replace on the name in all the templates.

1. Search for `'_s'` (inside single quotations) to capture the text domain and replace with: `'megatherium-is-awesome'`.
2. Search for `_s_` to capture all the functions names and replace with: `megatherium_is_awesome_`.
3. Search for `Text Domain: _s` in `css/style.scss` and replace with: `Text Domain: megatherium-is-awesome`.
4. Search for `_s.pot` and replace with: `megatherium-is-awesome.pot`.
5. Search for <code>&nbsp;_s</code> (with a space before it) to capture DocBlocks and replace with: <code>&nbsp;Megatherium_is_Awesome</code>.
6. Search for `_s-` to capture prefixed handles and replace with: `megatherium-is-awesome-`.
7. Search for `_S_` (in uppercase) to capture constants and replace with: `MEGATHERIUM_IS_AWESOME_`.

Then, update the stylesheet header in `css/style.scss` and rename `_s.pot` from `languages` folder to use the theme's slug.

### Setup

To start using all the tools that come with `_s`  you need to install the necessary Node.js dependencies :

```sh
$ npm install
```

### Available CLI commands

`_s` comes packed with CLI commands tailored for WordPress theme development :

- `npm run watch` : watches _all_ SASS and JS files and recompiles them when they change.
- `npm run build` : compiles _all_ SASS and JS files for production use.

#### Icon font

You can easily create your own icon font. Put all your svg icons in `/media/fonts/Icont/icons`
and run `npm run icont:generate`.

List all your icons (alphabetical order) in `/css/_variables.scss` to create a map
to convenient access the content declaration of the icons: e.g. `map-get($Icont, NAME)`;

---

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Happy coding and good luck!
