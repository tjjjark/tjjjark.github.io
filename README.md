# tjark j. schade — portfolio

Static website, no build step. Open `index.html` or serve the folder.

```
index.html     page (HTML, CSS and JS inline)
assets/        GIF, project covers and project pages as images
fonts/         Suisse fonts as .woff2 (only loaded on tjarkscha.de)
.nojekyll      tells GitHub Pages to serve files as they are
```

## Put it online with GitHub Pages

1. Create a new repository on GitHub (for a personal site: `<username>.github.io`).
2. Upload the contents of this folder, so `index.html` sits at the top level of the repository.
3. Repository → Settings → Pages → Source: "Deploy from a branch", branch `main`, folder `/ (root)`.
4. Custom domain `tjarkscha.de`: add it under Settings → Pages → Custom domain and set the DNS records GitHub lists there. The Suisse fonts only appear on this domain.

## Fonts (Suisse, Swiss Typefaces)

`fonts/` holds the seven Suisse cuts the page uses, as `.woff2` files converted from the licensed `.otf` files (the EULA, section C.1, allows converting to WOFF when it is not in the download package). If your download package already contains `.woff2` files, prefer those: copy them into `fonts/` and change `.woff` / `format("woff")` to `.woff2` / `format("woff2")` in the loader script at the top of `index.html`.

The EULA allows embedding only on a website whose domain you own. That is why the loader at the top of `index.html` only activates the Suisse fonts on `tjarkscha.de` (and locally for testing). On `<username>.github.io` the page shows the fallback fonts (Inter, JetBrains Mono, Newsreader). Do not add the `.otf` files to the repository.

To use another domain, add its name to the list in the loader.

## Where to change things

- Dots (count, speed, colours): the second `<script>` at the end of `index.html`.
- Lightbox colour: `--lb` in `:root`.
- Projects: the `<section class="proj">` blocks. Lightbox pages are listed in the `PAGES` object in the first script.
